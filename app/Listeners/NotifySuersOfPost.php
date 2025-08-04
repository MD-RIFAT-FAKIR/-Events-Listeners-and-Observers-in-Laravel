<?php

namespace App\Listeners;

use App\Events\PostPublished;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use Mail;

class NotifySuersOfPost
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PostPublished $event): void
    {
        //notify users
        $users = User::all();

        foreach($users as $user){
        Mail::raw("Hey '{$user->name}' check out our new post:-'{$event->post->title}'", function($message) use ($user) {
            $message->to($user->email)
            ->subject("New blog post");
        });
        }
    }
}
