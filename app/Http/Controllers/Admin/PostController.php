<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use App\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Recupero dal database con metodo all i posts
        $posts = Post::with(['category', 'tags', 'user'])->get();

        // Recupero l'elenco di tags dal db
        $tags = Tag::orderBy('name', 'ASC')->get();

        // Ritorno la view admin posts index
        return view('admin.posts.index', compact('posts', 'tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Recupero l'elenco di categorie dal database 
        $categories = Category::orderBy('name', 'ASC')->get();

        // Recupero l'elenco di tag dal database 
        $tags = Tag::orderBy('name', 'ASC')->get();

        // Recupero l'elenco di users dal db
        $users = User::orderBy('name', 'ASC')->get();

        // Return view admin.posts.create
        return view('admin.posts.create', compact('categories', 'tags', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Salvo la richiesta nella variabile data
        $data = $request->all();

        // Validazione dati
        $request->validate([
            'title' => 'required|min:5|max:200',
            'description' => 'nullable',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'exists:tags,id',
            'image' => 'required|url',
            'publication_date' => 'nullable|date|before_or_equal:today',
            'user_id' => 'required|exists:users,id'
        ]);

        // Slug post title
        $slug = Str::slug($data['title']);

        // Slug base
        $slug_base = $slug;

        // Counter slug
        $counter = 1;

        // Post present
        $post_present = Post::where('slug', $slug)->first();

        // While post present
        while ($post_present) {
            $slug = $slug_base . '-' . $counter;
            $counter++;
            $post_present = Post::where('slug', $slug)->first();
        }

        // Creo un nuovo post
        $post = new Post();

        // Recupero i dati con il metodo fill
        $post->fill($data);

        // Imposto lo sluga post
        $post->slug = $slug;

        // Salvo i dati
        $post->save();

        // Controllo se esiste il tags lo aggiorno altrimenti sync vuoto
        if (array_key_exists('tags', $data)) {
            // Sync
            $post->tags()->sync($data['tags']);
        } else {
            $post->tags()->sync([]);
        }

        // Redirect route admin.posts.index
        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // Recupero l'elenco di categorie
        $categories = Category::orderBy('name', 'ASC')->get();

        // Recupero l'elenco di tags
        $tags = Tag::orderBy('name', 'ASC')->get();

        // Recupero l'elenco di users dal db
        $users = User::orderBy('name', 'ASC')->get();

        // Return view admin.posts.edit
        return view('admin.posts.edit', compact('post', 'categories', 'tags', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // Salvo la richiesta nella variabile data
        $data = $request->all();

        // Validazione dati
        $request->validate([
            'title' => 'required|min:5|max:200',
            'description' => 'nullable',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'exists:tags,id',
            'image' => 'required|url',
            'publication_date' => 'nullable|date|before_or_equal:today',
            'user_id' => 'required|exists:users,id'
        ]);

        // Slug post title
        $slug = Str::slug($data['title']);

        // Slug base
        $slug_base = $slug;

        // Counter slug
        $counter = 1;

        // Post present
        $post_present = Post::where('slug', $slug)->first();

        // While post present
        while($post_present) {
            $slug = $slug_base . '-' . $counter;
            $counter++;
            $post_present = Post::where('slug', $slug)->first();
        }

        // Imposto lo sluga post
        $post->slug = $slug;

        // Controllo se esiste il tags lo aggiorno altrimenti sync vuoto
        if(array_key_exists('tags', $data)) {
            // Sync
            $post->tags()->sync($data['tags']);
        } else {
            $post->tags()->sync([]);
        }

        // Modifico i dati
        $post->update($data);

        // Redirect route admin.posts.index
        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // Elimino il post
        $post->delete();

        // Redirect route admin.posts.index
        return redirect()->route('admin.posts.index');
    }
}
