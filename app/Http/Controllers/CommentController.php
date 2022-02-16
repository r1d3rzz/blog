<?php

namespace App\Http\Controllers;

use App\Mail\SubscriberMail;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{
    public function store(Blog $blog)
    {
        request()->validate([
            'comments' => ['required','min:5']
        ]);

        /*
        //Long Check Subscriber
        // dd($blog->subscribers->filter(function ($subscriber) {
        //     return $subscriber->id !== auth()->id();
        // }));

        //ShortHand Check Subscriber
        // dd($blog->subscribers->filter(fn ($subscriber) =>$subscriber->id !== auth()->id()));
        */

        //comments store
        $blog->comments()->create([
            'body' => request('comments'),
            'user_id' => auth()->id(),
        ]);

        //Mail Feature
        //Use mailtrap.io (website)
        $subscribers = $blog->subscribers->filter(fn ($subscriber) =>$subscriber->id !== auth()->id());

        //Foreach Loop ShortHand
        $subscribers->each(function ($subscriber) use ($blog) {
            //make Mail Controller Comment
            //php artisan make:mail SubscriberMail

            //use send() (slow Website)
            // Mail::to($subscriber->email)->send(new SubscriberMail($blog));

            //use Queue Worker (for faster)
            /*
                user queque database first Create php artisan queue:table and change QUEUE_CONNECTION=database in .env
                and run this queue worker run in terminal php artisan queue:work
            */
            Mail::to($subscriber->email)->queue(new SubscriberMail($blog));
        });

        return redirect("/blog/$blog->slug");
    }
}
