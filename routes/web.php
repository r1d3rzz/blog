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
    return view('blogs',[
        'blogs'=>Blog::all()
    ]);
});

/*
    retractoring blog Route

    like That Blog::find($slug);
              Blog::all();
*/

Route::get('/blog/{blog}', function ($id) {

    return view('blog',[
        'blog'=> Blog::findOrFail($id)
    ]);
})->where('blog','[A-z\d\-_]+');
