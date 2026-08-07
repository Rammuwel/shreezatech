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
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap"></noscript>
  <link rel="preconnect" href="https://cdnjs.cloudflare.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" media="print" onload="this.media='all'">
  <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"></noscript>

  <title>@stack('seo-title')</title>
  @stack('seo-meta')

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @livewireStyles
</head>
<body class="bg-surface text-text font-sans antialiased page-transition" x-data="smoothScroll">

  <div x-data="navigationProgress" class="fixed top-0 left-0 right-0 z-[10000] h-1" aria-hidden="true">
    <div x-show="visible" x-cloak class="h-full bg-primary shadow-[0_0_10px_rgba(37,99,235,0.6)] transition-[width] duration-200 ease-out" :style="'width: ' + progress + '%'"></div>
  </div>

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
    x-data="{ show: false }"
    @scroll.window="show = window.scrollY > 400"
    x-show="show"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 translate-y-4"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 translate-y-4"
    x-cloak
    type="button"
    @click="window.scrollTo({top: 0, behavior: 'smooth'})"
    aria-label="Back to top"
    class="group fixed bottom-6 right-6 z-50 flex h-11 w-11 cursor-pointer items-center justify-center rounded-full bg-primary text-white shadow-lg shadow-primary/30 transition-all duration-300 hover:scale-105 hover:shadow-xl">
    <svg class="w-4 h-4 group-hover:-translate-y-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18"/></svg>
  </button>

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
