<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Recupero i tags dal db
        $tags = Tag::all();

        // Return view admin tags index
        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return view admin tags 
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Recupero la richiesta
        $data = $request->all();

        // Validazione dati request
        $request->validate([
            'name' => 'required|max:150'
        ]);

        // Slug tags name
        $slug = Str::slug($data['name']);

        // Slug base
        $slug_base = $slug;

        // Counter slug
        $counter = 1;

        // Tags present
        $tags_present = Tag::where('slug', $slug)->first();

        // While Tags present
        while ($tags_present) {
            $slug = $slug_base . '-' . $counter;
            $counter++;
            $tags_present = Tag::where('slug', $slug)->first();
        }

        // Creo un nuovo tag
        $tag = new Tag();

        // Recupero i dati con il metodo fill
        $tag->fill($data);

        // Imposto lo slug
        $tag->slug = $slug;

        // Salvo i dati
        $tag->save();

        // return redirect admin tags index
        return redirect()->route('admin.tags.index');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        // Elimino il tag
        $tag->delete();

        // return redirect route admin tags index
        return redirect()->route('admin.tags.index');
    }
}
