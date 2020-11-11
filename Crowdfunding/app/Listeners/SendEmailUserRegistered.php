<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\RegisterUserEvent;
use App\Mail\RegisterOtpMail;
use Mail;

class SendEmailUserRegistered implements ShouldQueue
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
     * @param  UserRegisteredEvent  $event
     * @return void
     */
    public function handle(RegisterUserEvent $event)
    {
        Mail::to($event->user)->send(new RegisterOtpMail($event->user));
    }
}
