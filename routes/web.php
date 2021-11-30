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

Route::get('/blog/{blog}', function ($slug) {
    $path = __DIR__."/../resources/blogs/$slug.html";
    if(!file_exists($path)){
        return redirect('/');
    }
    /*

    use time function
    now()->addMinute() or addMinutes(2)
    cache()->remember();
    remember(1,2,3);
    1 -> "posts.$name"
    2 -> time
    3 -> function (return)

    */
    $blog=cache()->remember("posts.$slug",now()->addMinutes(3),function() use($path) {
        // var_dump("hello"); testing cache()
        return file_get_contents($path);//file get content()
    });
    return view('blog',[
        'blog'=>$blog
    ]);
})->where('blog','[A-z\d\-_]+');
