<?php

use App\Data\Services;
use App\Data\Solutions;
use App\Data\TechnologyCategories;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

Route::get('/sitemap.xml', function () {
    $base = rtrim(config('app.url'), '/');

    $urls = [
        ['loc' => $base . '/', 'changefreq' => 'weekly', 'priority' => '1.0'],
        ['loc' => $base . '/services', 'changefreq' => 'weekly', 'priority' => '0.9'],
        ['loc' => $base . '/solutions', 'changefreq' => 'weekly', 'priority' => '0.9'],
        ['loc' => $base . '/portfolio', 'changefreq' => 'weekly', 'priority' => '0.8'],
        ['loc' => $base . '/about', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['loc' => $base . '/technologies', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['loc' => $base . '/careers', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['loc' => $base . '/blog', 'changefreq' => 'weekly', 'priority' => '0.7'],
        ['loc' => $base . '/contact', 'changefreq' => 'monthly', 'priority' => '0.7'],
    ];

    foreach (Services::all() as $service) {
        $urls[] = ['loc' => $base . '/services/' . $service['slug'], 'changefreq' => 'monthly', 'priority' => '0.7'];
    }

    foreach (Solutions::all() as $solution) {
        $urls[] = ['loc' => $base . '/solutions/' . $solution['slug'], 'changefreq' => 'monthly', 'priority' => '0.7'];
    }

    foreach (TechnologyCategories::all() as $category) {
        $urls[] = ['loc' => $base . '/technologies/' . $category['slug'], 'changefreq' => 'monthly', 'priority' => '0.7'];
    }

    return response()
        ->view('sitemap', ['urls' => $urls])
        ->header('Content-Type', 'application/xml');
});

Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
Route::get('/newsletter/unsubscribe/{token}', [NewsletterController::class, 'unsubscribe'])->name('newsletter.unsubscribe');

Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/login', 'pages::home')->name('login');
Route::livewire('/register', 'pages::home')->name('register');
Route::livewire('/services', 'pages::services')->name('services');
Route::livewire('/solutions', 'pages::solutions')->name('solutions');
Route::livewire('/portfolio', 'pages::portfolio')->name('portfolio');
Route::livewire('/about', 'pages::about')->name('about');
Route::livewire('/blog', 'pages::blog')->name('blog');
Route::livewire('/blog/category/{category}', 'pages::blog-category')->name('blog.category');
Route::livewire('/web-development', 'pages::home')->name('web-development');
Route::livewire('/mobile-development', 'pages::home')->name('mobile-development');
Route::livewire('/ui-ux', 'pages::home')->name('ui-ux');
Route::livewire('/cloud', 'pages::home')->name('cloud');
Route::livewire('/erp', 'pages::home')->name('erp');
Route::livewire('/crm', 'pages::home')->name('crm');
Route::livewire('/lms', 'pages::home')->name('lms');
Route::livewire('/ai', 'pages::home')->name('ai');
Route::livewire('/ai-automation', 'pages::home')->name('ai-automation');
Route::livewire('/cyber-security', 'pages::home')->name('cyber-security');

Route::livewire('/services/{slug}', 'pages::service-details')->name('service');
Route::livewire('/solutions/{slug}', 'pages::solution-details')->name('solution');
Route::livewire('/technologies/{slug}', 'pages::technology-detail')->name('technology');
Route::livewire('/portfolio/{slug}', 'pages::home')->name('portfolio.show');
Route::livewire('/reviews', 'pages::home')->name('reviews');
Route::livewire('/technologies', 'pages::technology')->name('technologies');
Route::livewire('/about/team', 'pages::home')->name('team');
Route::livewire('/careers', 'pages::careers')->name('careers');
// Route::livewire('/services/cloud', 'pages::home')->name('services.cloud');
// Route::livewire('/services/security', 'pages::home')->name('services.security');
// Route::livewire('/services/consulting', 'pages::home')->name('services.consulting');
// Route::livewire('/services/custom-software', 'pages::home')->name('services.custom-software');
// Route::livewire('/services/consulting', 'pages::home')->name('services.enterprise');

Route::livewire('/contact', 'pages::contact')->name('contact');
