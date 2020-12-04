<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\WelcomeMail; 
use Mail;

class SendWelcomeEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserCreated  $event
     * @return void
     */
    public function handle($event)
    {
        if(empty($event->user)){
            return;
        }
        $user = $event->user;
        $email = (new WelcomeMail($user))->onQueue('emails');
        Mail::to($user)->send($email);
    }
}
