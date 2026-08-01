<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow">
  <title>Admin | @yield('title', 'Dashboard')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-surface text-text font-sans antialiased">
  <div class="min-h-screen">
    <header class="border-b border-border bg-card">
      <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
        <a href="{{ route('admin.careers.index') }}" class="text-lg font-bold text-heading">Shreeza Admin</a>
        <nav class="flex items-center gap-4 text-sm">
          <a href="{{ route('admin.careers.index') }}" class="text-muted hover:text-heading transition-colors">Career Applications</a>
          <a href="{{ route('home') }}" target="_blank" class="text-muted hover:text-heading transition-colors">View Site</a>
        </nav>
      </div>
    </header>

    @if(session('success'))
    <div class="max-w-6xl mx-auto px-4 pt-4">
      <div class="rounded-lg border border-success/30 bg-success/10 px-4 py-3 text-sm text-success">{{ session('success') }}</div>
    </div>
    @endif

    @if(session('error'))
    <div class="max-w-6xl mx-auto px-4 pt-4">
      <div class="rounded-lg border border-danger/30 bg-danger/10 px-4 py-3 text-sm text-danger">{{ session('error') }}</div>
    </div>
    @endif

    <main class="max-w-6xl mx-auto px-4 py-8">
      @yield('content')
    </main>
  </div>
</body>
</html>
