<?php

use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
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

//SHow Blogs
Route::get('/', [BlogController::class,'index']);
Route::get('/blog/{blog:slug}', [BlogController::class,'show']);

//creaet Comment
Route::post('/blog/{blog:slug}/comments', [CommentController::class,'store']);

//User Register Login Logout
Route::get('/register', [AuthController::class,'create'])->middleware('guest');
Route::post('/register', [AuthController::class,'store'])->middleware('guest');
Route::post('/logout', [AuthController::class,'logout'])->middleware('auth');
Route::get('/login', [AuthController::class,'login'])->middleware('guest');
Route::post('/login', [AuthController::class,'post_login'])->middleware('guest');

//Subscribe
Route::post('/blog/{blog:slug}/subscription', [BlogController::class,'subscriptionHandler']);

//admin

Route::middleware('can:admin')->group(function () {
    Route::get('/admin/blogs', [AdminBlogController::class,'index']);
    Route::get('/admin/blog/create', [AdminBlogController::class,'create']);
    Route::post('/admin/blog/store', [AdminBlogController::class,'store']);
    Route::delete('/admin/{blog:slug}/delete', [AdminBlogController::class,'destroy']);
    Route::get('/admin/blog/{blog:slug}/edit', [AdminBlogController::class,'edit']);
    Route::patch('/admin/blog/{blog:slug}/update', [AdminBlogController::class,'update']);
});

//Laravel-controller-and-view-naming-conventions
//For Blogs Project
//all -> index -> blogs.index
//single -> show -> blogs.show
//form -> create -> blogs.create
//server store -> store -> ---backend
//edit form -> edit -> blogs.edit
//server update -> update -> ---backend
//server delete -> destroy -> ---backend

//Login and Logout
/*

1. login => auth()->login($user);
2. logout => auth()->logout() and return();
3. check => auth()->check();
4. show => auth() ->user()->name / username / whateverYouLike
5. @auth => login in Exits
6. @guest => Register show

*/
