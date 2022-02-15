<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogs.index', [
            'blogs'=>Blog::with('category', 'author')
                            ->latest()
                            ->filter(request(['search','category','user']))
                            ->paginate(6)
                            ->withQueryString()
        ]);
    }

    public function show(Blog $blog)
    {
        return view('blogs.show', [
            'blog'=> $blog->load('category', 'author'),
            'randomBlogs' => Blog::inRandomOrder()->take(3)->get()
        ]);
    }

    public function subscriptionHandler(Blog $blog)
    {
        if (User::find(auth()->id())->isSubscribe($blog)) {
            $blog->unSubscribe();
        } else {
            $blog->subscribe();
        }

        return back();
    }
}
