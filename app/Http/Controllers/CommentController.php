<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Blog $blog)
    {
        request()->validate([
            'comments' => ['required','min:5']
        ]);

        //comments store
        $blog->comments()->create([
            'body' => request('comments'),
            'user_id' => auth()->id(),
        ]);

        return back();
    }
}
