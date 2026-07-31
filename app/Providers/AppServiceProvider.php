<?php

namespace App\Providers;

use App\Events\ContactSubmitted;
use App\Listeners\SendContactEmails;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Force HTTPS in production environments
        if (config('app.env') === 'production') {
            Url::forceScheme('https');
        }
    }
}
