<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="theme" :class="{ 'dark': dark }">
<head>
  <meta charset="utf-8">
  <script>
    (function() {
      document.documentElement.classList.toggle('dark', localStorage.getItem('theme') !== 'light');
    })();
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="canonical" href="{{ url()->current() }}">
  <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('favicon-48x48.png') }}">
  <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon-192x192.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
  <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap">
  <link rel="preconnect" href="https://cdnjs.cloudflare.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" media="print" onload="this.media='all'">
  <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"></noscript>

  <title>@stack('seo-title')</title>
  @stack('seo-meta')

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

  <button
    type="button"
    @click="window.open('https://wa.me/918770699454', '_blank', 'noopener,noreferrer')"
    aria-label="Chat with Shreeza on WhatsApp"
    class="group fixed bottom-6 left-6 z-50 flex h-11 w-11 cursor-pointer items-center justify-center rounded-full bg-[#25D366] text-white shadow-lg shadow-[#25D366]/30 transition-all duration-300 hover:scale-105 hover:shadow-xl">
    <i class="fab fa-whatsapp text-lg"></i>
  </button>

  @livewireScripts
</body>
</html>
