<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\PostPublished;
use App\Models\Post;


class PostController extends Controller
{
    public function Create(Request $request) {
        $post = Post::create([
            "title"=> $request->title,
            "content"=> $request->content,
        ]);

        PostPublished::dispatch($post);

        return back();
    }

}
