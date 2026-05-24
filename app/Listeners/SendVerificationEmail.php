<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailVerification;

class SendVerificationEmail implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function  handle(UserRegistered $event)
    {
        $Subject = "Email Verification Task Manager";

        $msg = "This is Your Code "
            . $event->user->verification_code;

        Mail::to($event->user->email)->send(new EmailVerification($Subject, $msg));
    }

    /**
     * Handle the event.
     */
    
}
