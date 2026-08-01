<?php

namespace App\Listeners;

use App\Events\ContactSubmitted;
use App\Mail\ContactNotificationMail;
use App\Mail\ContactSuccessMail;
use App\Models\Contact;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendContactEmails implements ShouldQueue
{
    public $tries = 3;

    /**
     * Handle the event.
     */
    public function handle(ContactSubmitted $event): void
    {
        $contact = new Contact($event->contact);
        $contact->created_at = $event->contact['created_at'] ?? now();

        Mail::to('shrirammuwel02017@gmail.com')
            ->send(new ContactNotificationMail($contact));

        Mail::to($contact->email)
            ->send(new ContactSuccessMail($contact));
    }
}
