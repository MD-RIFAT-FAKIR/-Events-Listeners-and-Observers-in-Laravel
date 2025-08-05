<?php

namespace App\Listeners;

use App\Events\PostPublished;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;


class NotifyAdminOfPost implements ShouldQueue
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
        //notify admin
        Mail::raw("A new post '{$event->post->title}' has been published", function($message){
            $message->to("admin@email.com")->subject("New post published");
        });
    
    
    }
}