<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index() {
        return view('blogs',[
            'blogs'=>Blog::with('category','author')
                            ->latest()
                            ->filter(request(['search','category','user']))
                            ->paginate(6)//paginate can make 15 view cards
                            // ->simplePaginate(6) User for Only Show next and Previous Button
                            ->withQueryString()//relation with category and pagination
        ]);
    }

    public function show(Blog $blog) {
         return view('blog',[
            'blog'=> $blog->load('category','author'),
            'randomBlogs' => Blog::inRandomOrder()->take(3)->get()
        ]);
    }
}
