<?php

use App\Models\Blog;
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
    return view('blogs');
});

/*
    retractoring blog Route

    like That Blog::find($slug);
*/

Route::get('/blog/{blog}', function ($slug) {

    // $blog = Blog::find($slug); note That
    return view('blog',[
        'blog'=> Blog::find($slug)
    ]);
})->where('blog','[A-z\d\-_]+');
