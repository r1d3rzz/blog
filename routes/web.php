<?php

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
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
    $blogs = Blog::with('category','author')->latest();
    if(request('search')){
        $blogs = $blogs->where('title','LIKE','%'.request('search').'%');
    }
    return view('blogs',[
        'blogs'=>$blogs->get(), //with pr yin eager load // lazy loading
        'categories'=>Category::all()
    ]);
});

Route::get('/blog/{blog:slug}', function (Blog $blog) {

    return view('blog',[
        'blog'=> $blog->load('category','author'),
        'randomBlogs' => Blog::inRandomOrder()->take(3)->get()
    ]);
})->where('blog','[A-z\d\-_]+');

Route::get('categories/{category:slug}',function(Category $category){
    return view('blogs',[
        'blogs'=>$category->blogs->load('category','author'),
        'categories'=>Category::all(),
        'currentCategory'=>$category
    ]);
});

Route::get('/users/{user:username}',function(User $user){
    return view('blogs',[
        'blogs'=>$user->blogs->load('author','category'),
        'categories'=>Category::all()
    ]);
});
