<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterWelcomeMail;
use App\Models\Subscriber;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class NewsletterController extends Controller
{
    public function subscribe(Request $request): JsonResponse|RedirectResponse
    {
        $data = $request->validate([
            'email' => 'required|email|max:254',
        ]);

        $subscriber = Subscriber::where('email', $data['email'])->first();

        if ($subscriber && $subscriber->isActive()) {
            return $this->respond(
                'You are already subscribed to our newsletter.',
                $request,
                true
            );
        }

        if ($subscriber) {
            $subscriber->update([
                'status' => 'active',
                'unsubscribed_at' => null,
                'subscribed_at' => now(),
            ]);
        } else {
            $subscriber = Subscriber::create([
                'email' => $data['email'],
                'status' => 'active',
                'unsubscribe_token' => Str::uuid()->toString(),
                'subscribed_at' => now(),
            ]);
        }

        try {
            Mail::to($subscriber->email)
                ->send(new NewsletterWelcomeMail($subscriber));
        } catch (\Throwable $e) {
            report($e);
        }

        return $this->respond(
            'Thank you for subscribing! Please check your inbox for confirmation.',
            $request,
            true
        );
    }

    public function unsubscribe(string $token): \Illuminate\Http\Response
    {
        $subscriber = Subscriber::where('unsubscribe_token', $token)->first();

        if ($subscriber && $subscriber->isActive()) {
            $subscriber->update([
                'status' => 'unsubscribed',
                'unsubscribed_at' => now(),
            ]);
        }

        $message = $subscriber
            ? 'You have been unsubscribed from the Shreeza newsletter.'
            : 'This unsubscribe link is invalid or has already been used.';

        return response(
            $this->unsubscribePage($message),
            200,
            ['Content-Type' => 'text/html']
        );
    }

    private function respond(string $message, Request $request, bool $success): JsonResponse|RedirectResponse
    {
        if ($request->expectsJson()) {
            return response()->json(['message' => $message], $success ? 200 : 422);
        }

        return back()->with(
            'newsletter_status',
            $success ? 'success' : 'error'
        )->with('newsletter_message', $message);
    }

    private function unsubscribePage(string $message): string
    {
        $home = route('home');

        return <<<HTML
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Newsletter Unsubscribe</title>
            <style>
                body { margin:0; padding:40px 20px; background:#f6f7f9; font-family:Arial, Helvetica, sans-serif; }
                .card { max-width:520px; margin:0 auto; background:#ffffff; border:1px solid #e2e6ea; padding:48px 40px; text-align:center; }
                h1 { margin:0 0 14px; font-size:24px; color:#1b2a3d; }
                p { margin:0 0 28px; font-size:14px; color:#3e4a59; line-height:1.8; }
                a { display:inline-block; padding:13px 36px; border:1px solid #1b2a3d; background:#1b2a3d; color:#ffffff; text-decoration:none; font-size:13px; letter-spacing:1px; }
            </style>
        </head>
        <body>
            <div class="card">
                <h1>Shreeza Newsletter</h1>
                <p>{$message}</p>
                <a href="{$home}">Back to Shreeza</a>
            </div>
        </body>
        </html>
        HTML;
    }
}
