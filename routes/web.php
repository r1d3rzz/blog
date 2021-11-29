<?php

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

Route::get('/blog/{blog}', function ($filename) {
    $path = __DIR__."/../resources/blogs/$filename.html";
    if(!file_exists($path)){
        abort(404);
    }
    $blog = file_get_contents($path);
    return view('blog',[
        'blog'=>$blog
    ]);
});
