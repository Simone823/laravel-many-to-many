<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.logged_in');
    }

    // Funzione my db homepage if logged
    public function homepage() {

        // Recupero dal db la tabella users
        $users = User::all();

        // Recupero dal db la tabella posts
        $posts = Post::all();

        // Recupero dal db la tabella categories
        $categories = Category::all();

        // Recupero l'elenco di tags dal db
        $tags = Tag::all();

        // Ritorno la vista admin homepage
        return view('admin.homepage', compact('users' ,'posts', 'categories', 'tags'));
    }
}
