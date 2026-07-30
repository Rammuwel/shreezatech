<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="theme" :class="{ 'dark': dark }">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="{{ $metaDescription ?? 'Shreeza - Tech Consulting & Software Solutions. We build modern software, AI solutions and scalable cloud applications.' }}">
  <meta name="keywords" content="software development, web development, mobile apps, AI solutions, cloud computing, Laravel, Livewire">

  <meta property="og:title" content="{{ $title ?? config('app.name') }}">
  <meta property="og:description" content="{{ $metaDescription ?? 'Shreeza - Tech Consulting & Software Solutions' }}">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('og-image.png') }}">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="{{ $title ?? config('app.name') }}">
  <meta name="twitter:description" content="{{ $metaDescription ?? 'Shreeza - Tech Consulting & Software Solutions' }}">

  <link rel="canonical" href="{{ url()->current() }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('logo.png') }}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

  <title>{{ $title ?? config('app.name') }}</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @livewireStyles
</head>
<body class="bg-surface text-text font-sans antialiased page-transition" x-data="smoothScroll">

  <div wire:loading class="fixed top-4 right-4 z-[9999]">
    <div class="flex items-center gap-2 rounded-full bg-card border border-border px-4 py-2 shadow-lg">
      <div class="h-4 w-4 rounded-full border-2 border-primary border-t-transparent animate-spin"></div>
      <span class="text-xs text-muted">Loading...</span>
    </div>
  </div>

  <x-navbar />

  <main class="min-h-screen">
    {{ $slot }}
  </main>

  <x-footer />

  @livewireScripts
</body>
</html>
