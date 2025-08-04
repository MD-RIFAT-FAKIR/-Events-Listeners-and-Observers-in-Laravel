<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Mail;

class PostController extends Controller
{
    public function Create(Request $request) {
        $post = Post::create([
            "title"=> $request->title,
            "content"=> $request->content,
        ]);

        //notify admin
        Mail::raw("A new post '{$post->title}' has been published", function($message){
            $message->to("admin@email.com")->subject("New post published");
        });


        //notify users

        return back();
    }
}
