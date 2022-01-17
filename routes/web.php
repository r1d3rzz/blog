<?php

use App\Http\Controllers\BlogController;
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

Route::get('/', [BlogController::class,'index']);

Route::get('/blog/{blog:slug}', [BlogController::class,'show']);



//Laravel-controller-and-view-naming-conventions
//For Blogs Project
//all -> index -> blogs.index
//single -> show -> blogs.show
//form -> create -> blogs.create
//server store -> store -> ---backend
//edit form -> edit -> blogs.edit
//server update -> update -> ---backend
//server delete -> destroy -> ---backend
