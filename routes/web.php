<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/newsletter/subscribe', function (Request $request) {
    $request->validate(['email' => 'required|email|max:254']);

    // Newsletter subscribe logic (e.g., create/update subscriber)

    return $request->expectsJson()
        ? response()->json(['message' => 'Subscribed successfully!'])
        : back()->with('newsletter_status', 'Subscribed successfully!');
})->name('newsletter.subscribe');

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
