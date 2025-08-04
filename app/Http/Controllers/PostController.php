<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
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
        $users = User::all();

        foreach($users as $user){
        Mail::raw("Hey '{$user->name}' check out our new post:-'{$post->title}'", function($message) use ($user) {
            $message->to($user->email)
            ->subject("New blog post");
        });
        }

        return back();
    }

}
