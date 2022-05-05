<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Recupero le categorie dal db
        $categories = Category::all();

        // Ritorno la view admin categories index
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Recupero l'elenco di categorie dal db
        $categories = Category::all();
        
        // Ritnorno la view admin categories create passando la variabile categories
        return view('admin.categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // recupero la richiesta
        $data = $request->all();

        // Validazione 
        $request->validate([
            'name' => 'required|max:150|unique:categories,name',
        ]);

        // Slug
        $slug = Str::slug($data['name']);

        // Creo una nuova categoria
        $category = new Category();

        // Recupero i dati con fill
        $category->fill($data);

        // Assegno lo slug alla nuova categoria
        $category->slug = $slug;

        // Salvo i dati
        $category->save();

        // Redirect route admin categories index
        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        // Elimino la categoria
        $category->delete();

        // Redirect route admin categories index
        return redirect()->route('admin.categories.index');
    }
}
