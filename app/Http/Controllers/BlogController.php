<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        return view('blogs',[
            'blogs'=>Blog::with('category','author')->latest()->filter(request(['search','category']))->get(),
            'categories'=>Category::all(),
        ]);
    }

    public function show(Blog $blog) {
         return view('blog',[
            'blog'=> $blog->load('category','author'),
            'randomBlogs' => Blog::inRandomOrder()->take(3)->get()
        ]);
    }
}
