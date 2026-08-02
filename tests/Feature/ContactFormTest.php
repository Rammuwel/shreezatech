<?php

namespace Tests\Feature;

use App\Mail\ContactNotificationMail;
use App\Mail\ContactSuccessMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Livewire;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    public function test_contact_submit_shows_success(): void
    {
        Mail::fake();

        $component = Livewire::test('pages::contact')
            ->set('name', 'John Doe')
            ->set('email', 'john@example.com')
            ->set('phone', '1234567890')
            ->set('service', 'Web Development')
            ->set('message', 'Hello, I want a website built.')
            ->call('submit')
            ->assertHasNoErrors();

        $this->assertStringContainsString('sent successfully', $component->html());
        $component->assertSet('name', '');

        Mail::assertSent(ContactNotificationMail::class, fn (ContactNotificationMail $mail) => $mail->hasTo('info@shreezatech.com') && $mail->contact->created_at !== null);
        Mail::assertSent(ContactSuccessMail::class, fn ($mail) => $mail->hasTo('john@example.com'));
    }

    public function test_contact_validation_blocks_empty_submit(): void
    {
        Livewire::test('pages::contact')
            ->call('submit')
            ->assertHasErrors(['name', 'email', 'phone', 'service', 'message']);
    }
}
