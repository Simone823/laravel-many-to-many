<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

    // Rotta logged in
    Route::get('/', 'HomeController@index')->name('logged_in');

    // Rotta homepage
    Route::get('/homepage', 'HomeController@homepage')->name('homepage');

    // Rotta posts
    Route::resource('/posts', 'PostController');

    // Rotta categories
    Route::resource('/categories', 'CategoryController');

    // Rotta users
    Route::resource('users', 'UserController');

    // Rotta user posts
    Route::get('/users/{user}/posts', 'UserPostController@index')->name('user.posts');

    // Rotta tags
    Route::resource('/tags', 'TagController');
});

