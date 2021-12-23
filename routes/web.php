<?php

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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
        'blogs'=>Blog::with('category','author')->get() //with pr yin eager load // lazy loading
    ]);
});

Route::get('/blog/{blog:slug}', function (Blog $blog) {

    return view('blog',[
        'blog'=> $blog->load('category','author')
    ]);
})->where('blog','[A-z\d\-_]+');

Route::get('categories/{category:slug}',function(Category $category){
    return view('blogs',[
        'blogs'=>$category->blogs->load('category','author')
    ]);
});

Route::get('/users/{user}',function(User $user){
    return view('blogs',[
        'blogs'=>$user->blogs->load('author','category')
    ]);
});
