<?php

namespace Tests\Feature;

use App\Mail\NewsletterWelcomeMail;
use App\Models\Subscriber;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class NewsletterTest extends TestCase
{
    use RefreshDatabase;

    public function test_subscribe_creates_active_subscriber_and_sends_welcome_mail(): void
    {
        Mail::fake();

        $this->postJson(route('newsletter.subscribe'), ['email' => 'john@example.com'])
            ->assertOk()
            ->assertJson(['message' => 'Thank you for subscribing! Please check your inbox for confirmation.']);

        $subscriber = Subscriber::where('email', 'john@example.com')->first();

        $this->assertNotNull($subscriber);
        $this->assertTrue($subscriber->isActive());
        $this->assertNotNull($subscriber->unsubscribe_token);

        Mail::assertSent(NewsletterWelcomeMail::class, fn ($mail) => $mail->hasTo('john@example.com'));
    }

    public function test_subscribe_ignores_duplicate_active_email(): void
    {
        Mail::fake();

        Subscriber::create([
            'email' => 'john@example.com',
            'status' => 'active',
            'unsubscribe_token' => 'token-123',
            'subscribed_at' => now(),
        ]);

        $this->postJson(route('newsletter.subscribe'), ['email' => 'john@example.com'])
            ->assertOk()
            ->assertJson(['message' => 'You are already subscribed to our newsletter.']);

        $this->assertDatabaseCount('subscribers', 1);

        Mail::assertNothingSent();
    }

    public function test_subscribe_reactivates_unsubscribed_email(): void
    {
        Mail::fake();

        Subscriber::create([
            'email' => 'john@example.com',
            'status' => 'unsubscribed',
            'unsubscribe_token' => 'token-123',
            'unsubscribed_at' => now(),
        ]);

        $this->postJson(route('newsletter.subscribe'), ['email' => 'john@example.com'])
            ->assertOk();

        $subscriber = Subscriber::where('email', 'john@example.com')->first();

        $this->assertTrue($subscriber->isActive());
        $this->assertNull($subscriber->unsubscribed_at);

        Mail::assertSent(NewsletterWelcomeMail::class);
    }

    public function test_subscribe_validation_blocks_invalid_email(): void
    {
        $this->postJson(route('newsletter.subscribe'), ['email' => 'not-an-email'])
            ->assertUnprocessable()
            ->assertJsonValidationErrors(['email']);

        $this->assertDatabaseCount('subscribers', 0);
    }

    public function test_unsubscribe_marks_subscriber_inactive(): void
    {
        $subscriber = Subscriber::create([
            'email' => 'john@example.com',
            'status' => 'active',
            'unsubscribe_token' => 'token-123',
            'subscribed_at' => now(),
        ]);

        $this->get(route('newsletter.unsubscribe', 'token-123'))
            ->assertOk()
            ->assertSee('You have been unsubscribed');

        $this->assertFalse($subscriber->fresh()->isActive());
        $this->assertNotNull($subscriber->fresh()->unsubscribed_at);
    }

    public function test_unsubscribe_with_invalid_token_shows_message(): void
    {
        $this->get(route('newsletter.unsubscribe', 'does-not-exist'))
            ->assertOk()
            ->assertSee('invalid');
    }
}
