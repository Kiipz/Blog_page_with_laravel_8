<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Http\Request;

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
Auth::routes();

Route::get('/', function(){
    $posts = Post::orderBy('created_at', 'desc')->get();
    return view('home')->with('posts', $posts);
});

Route::get('/read/{id}', function ($id) {
    $post = Post::find($id);
    return view('read')->with('post', $post);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

Route::resource('posts', 'App\Http\Controllers\PostController');

// Email route
Route::get('/sendMail', 'App\Http\Controllers\sendMailController@sendMail')->name('sendMail');