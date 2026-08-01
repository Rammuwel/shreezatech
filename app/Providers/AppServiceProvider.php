<?php

namespace App\Providers;

use App\Contracts\ResumeUploader;
use App\Services\ResumeUploadService;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ResumeUploader::class, ResumeUploadService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Force HTTPS in production environments
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }
    }
}
