@php
$navItems = [
  ['title' => 'Home', 'route' => 'home', 'dropdown' => false],
  ['title' => 'Services', 'route' => 'services', 'dropdown' => true, 'items' => [
    ['title' => 'Web Development', 'route' => 'web-development', 'description' => 'Modern & Reactive web development', 'icon' => 'desktop'],
    ['title' => 'Mobile Development', 'route' => 'mobile-app-development', 'description' => 'Android & Flutter Apps', 'icon' => 'mobile'],
    ['title' => 'UI/UX Design', 'route' => 'ui-ux-design', 'description' => 'Modern User Experience', 'icon' => 'palette'],
    ['title' => 'Cloud Solutions', 'route' => 'cloud-solutions', 'description' => 'AWS & Azure', 'icon' => 'cloud'],
    ['title' => 'AI Solutions', 'route' => 'ai-automation', 'description' => 'OpenAI & Automation', 'icon' => 'robot'],
    ['title' => 'IoT Development', 'route' => 'iot-development', 'description' => 'Connecting Devices', 'icon' => 'chip'],
  ]],
  ['title' => 'Solutions', 'route' => 'solutions', 'dropdown' => true, 'items' => [
    ['title' => 'Healthcare', 'route' => 'healthcare', 'description' => 'Healthcare Software Solutions', 'icon' => 'heart'],
    ['title' => 'Finance', 'route' => 'finance', 'description' => 'Financial Software Solutions', 'icon' => 'bank'],
    ['title' => 'Education', 'route' => 'education', 'description' => 'Education Software Solutions', 'icon' => 'graduation'],
    ['title' => 'Real Estate', 'route' => 'real-estate', 'description' => 'Real Estate Software', 'icon' => 'building'],
    ['title' => 'Manufacturing', 'route' => 'manufacturing', 'description' => 'Manufacturing Software', 'icon' => 'industry'],
    ['title' => 'Retail', 'route' => 'retail', 'description' => 'Retail Software Solutions', 'icon' => 'cart'],
  ]],
  ['title' => 'Technologies', 'route' => 'technologies', 'dropdown' => false],
  ['title' => 'Portfolio', 'route' => 'portfolio', 'dropdown' => false],
  ['title' => 'About', 'route' => 'about', 'dropdown' => false],
  ['title' => 'Contact', 'route' => 'contact', 'dropdown' => false],
];
@endphp

<nav
  x-data="{ 
    open: false, 
    scrolled: false, 
    hidden: false,
    lastScroll: 0,
    progress: 0,
    init() {
      window.addEventListener('scroll', () => {
        const y = window.scrollY;
        this.scrolled = y > 50;
        this.hidden = y > 300 && y > this.lastScroll;
        this.lastScroll = y;
        this.progress = Math.min((y / (document.documentElement.scrollHeight - window.innerHeight)) * 100, 100);
      }, { passive: true });
    }
  }"
  class="fixed top-0 w-full z-50 border-b transition-all duration-300"
  :class="{
    'border-border bg-background/95 backdrop-blur-xl shadow-lg': scrolled,
    'border-transparent bg-transparent': !scrolled,
    '-translate-y-full': hidden,
    'translate-y-0': !hidden
  }">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="flex items-center justify-between h-16 lg:h-20">

      <a href="{{ route('home') }}" wire:navigate class="flex items-center gap-2 shrink-0">
        <img src="{{ asset('logo.png') }}" class="w-10 lg:w-12" alt="ShreezaTech">
        <div>
          <h2 class="text-xl lg:text-2xl font-bold text-heading leading-tight">
            Shreeza<span class="text-secondary">Tech</span>
          </h2>
          <p class="text-[10px] lg:text-xs text-muted leading-tight -mt-0.5">
            Consulting & Software Solutions
          </p>
        </div>
      </a>

      <div class="hidden lg:flex items-center gap-4">
        @foreach($navItems as $item)
          @if($item['dropdown'])
          <div
            x-data="{ subOpen: false }"
            @mouseenter="subOpen = true"
            @mouseleave="subOpen = false"
            class="relative">
            <a
              wire:navigate
              href="{{ route($item['route']) }}"
              class="relative flex items-center gap-1 py-1 text-sm font-medium transition-colors duration-200 group {{ request()->routeIs($item['route']) ? 'text-heading' : 'text-text hover:text-heading' }}">
              {{ $item['title'] }}
              <svg class="w-3.5 h-3.5 transition-transform duration-200" :class="{ 'rotate-180': subOpen }" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
              <span class="absolute -bottom-1 left-0 right-0 h-0.5 bg-secondary rounded-full transition-transform duration-300 {{ request()->routeIs($item['route']) ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}"></span>
            </a>
            <div
              x-show="subOpen"
              x-cloak
              x-transition:enter="transition ease-out duration-200"
              x-transition:enter-start="opacity-0 translate-y-2"
              x-transition:enter-end="opacity-100 translate-y-0"
              x-transition:leave="transition ease-in duration-150"
              x-transition:leave-start="opacity-100 translate-y-0"
              x-transition:leave-end="opacity-0 translate-y-2"
              @mouseenter="subOpen = true"
              @mouseleave="subOpen = false"
              class="absolute left-0 top-full mt-1 w-72 rounded-2xl border border-border bg-card shadow-2xl overflow-hidden">
              <div class="p-3 space-y-1">
                @foreach($item['items'] as $subItem)
                <a
                  wire:navigate
                  href="{{ route($item['route']) }}/{{ $subItem['route'] }}"
                  class="flex items-center gap-3 p-2.5 rounded-xl hover:bg-background transition-colors group">
                  <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-primary/10 text-primary shrink-0 group-hover:bg-primary group-hover:text-white transition-colors">
                    <x-dynamic-component :component="'svg.'.$subItem['icon']" class="w-4 h-4" />
                  </div>
                  <div>
                    <p class="text-sm font-medium text-heading">{{ $subItem['title'] }}</p>
                    <p class="text-xs text-muted">{{ $subItem['description'] }}</p>
                  </div>
                </a>
                @endforeach
              </div>
            </div>
          </div>
          @else
          <a
            wire:navigate
            href="{{ route($item['route']) }}"
            class="relative py-1 text-sm font-medium transition-colors duration-200 group {{ request()->routeIs($item['route']) ? 'text-heading' : 'text-text hover:text-heading' }}">
            {{ $item['title'] }}
            <span class="absolute -bottom-1 left-0 right-0 h-0.5 bg-secondary rounded-full transition-transform duration-300 {{ request()->routeIs($item['route']) ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}"></span>
          </a>
          @endif
        @endforeach
      </div>

      <div class="hidden lg:flex items-center gap-3">
        <button
          @click="toggle()"
          class="flex h-9 w-9 items-center justify-center rounded-lg border border-border text-muted hover:text-heading hover:border-primary transition-all"
          aria-label="Toggle theme">
          <svg x-show="!dark" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/></svg>
          <svg x-show="dark" x-cloak class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
        </button>
        <a
          wire:navigate
          href="{{ route('contact') }}"
          class="rounded-full bg-primary px-5 py-2.5 text-sm font-semibold text-white hover:bg-primary-hover transition-all active:scale-95">
          Get Started
        </a>
      </div>

      <button
        @click="open = !open"
        class="lg:hidden p-2 rounded-lg text-heading hover:bg-card transition-colors"
        aria-label="Toggle menu">
        <svg x-show="!open" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
        <svg x-show="open" x-cloak class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
      </button>

    </div>
  </div>

  <div
    x-show="open"
    x-cloak
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 -translate-y-4"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 -translate-y-4"
    class="lg:hidden border-t border-border bg-background shadow-xl max-h-[80vh] overflow-y-auto"
    @click.outside="open = false">
    <div class="p-4 space-y-1">
      @foreach($navItems as $item)
        @if($item['dropdown'])
        <div x-data="{ subOpen: false }">
          <button @click="subOpen = !subOpen" class="flex w-full items-center justify-between p-2.5 rounded-lg text-text hover:text-heading hover:bg-card transition-colors text-sm font-medium">
            {{ $item['title'] }}
            <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': subOpen }" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </button>
          <div x-show="subOpen" x-collapse class="ml-3 mt-1 space-y-1 border-l border-border pl-3">
            @foreach($item['items'] as $subItem)
            <a wire:navigate href="{{ route($item['route']) }}/{{ $subItem['route'] }}" class="flex items-center gap-2 p-2.5 rounded-lg text-muted hover:text-heading hover:bg-card transition-colors text-sm" @click="open = false">
              <div class="flex h-7 w-7 items-center justify-center rounded-lg bg-primary/10 text-primary">
                <x-dynamic-component :component="'svg.'.$subItem['icon']" class="w-3.5 h-3.5" />
              </div>
              {{ $subItem['title'] }}
            </a>
            @endforeach
          </div>
        </div>
        @else
        <a wire:navigate href="{{ route($item['route']) }}" class="flex p-2.5 rounded-lg text-text hover:text-heading hover:bg-card transition-colors text-sm font-medium" @click="open = false">
          {{ $item['title'] }}
        </a>
        @endif
      @endforeach

      <div class="flex items-center gap-3 pt-4 mt-2 border-t border-border">
        <button
          @click="toggle()"
          class="flex h-9 w-9 items-center justify-center rounded-lg border border-border text-muted hover:text-heading transition-colors"
          aria-label="Toggle theme">
          <svg x-show="!dark" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/></svg>
          <svg x-show="dark" x-cloak class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
        </button>
        <a wire:navigate href="{{ route('contact') }}" class="flex-1 text-center rounded-full bg-primary px-5 py-2.5 text-sm font-semibold text-white hover:bg-primary-hover transition-all" @click="open = false">
          Get Started
        </a>
      </div>
    </div>
  </div>
  <div class="h-0.5 bg-border/50">
    <div class="h-full bg-primary transition-all duration-150" :style="'width: ' + progress + '%'"></div>
  </div>
</nav>
