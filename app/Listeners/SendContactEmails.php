<?php

namespace App\Listeners;

use App\Events\ContactSubmitted;
use App\Mail\ContactNotificationMail;
use App\Mail\ContactSuccessMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendContactEmails implements ShouldQueue
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
    public function handle(ContactSubmitted $event): void
    {
         logger('Listener executed');
        Mail::to('shrirammuwel02017@gmail.com')
            ->send(new ContactNotificationMail($event->contact));

        // Send thank-you email to client
        Mail::to($event->contact->email)
            ->send(new ContactSuccessMail($event->contact));
    }
}
