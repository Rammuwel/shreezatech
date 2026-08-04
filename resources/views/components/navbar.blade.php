@php
$navItems = [
  ['title' => 'Home', 'route' => 'home', 'dropdown' => false],
  ['title' => 'Services', 'route' => 'services', 'dropdown' => true, 'left' => [
    'badge' => 'FULL-SERVICE AGENCY',
    'heading' => 'From idea to launch, we engineer it all.',
    'description' => 'Custom software, AI, cloud — we build scalable digital products that drive real business outcomes.',
    'cta_text' => 'Get Free Quote',
    'cta_route' => 'contact',
  ], 'right' => [
    'heading' => 'Trusted by startups & enterprises',
    'stats' => [
      ['value' => '150+', 'label' => 'Projects Delivered'],
      ['value' => '98%', 'label' => 'Client Satisfaction'],
    ],
    'points' => [
      ['icon' => '⚡', 'text' => 'Ship faster with agile sprints'],
      ['icon' => '🛡️', 'text' => 'Enterprise-grade security'],
      ['icon' => '📈', 'text' => 'Scalable from MVP to millions'],
    ],
    'cta_heading' => 'Start your project',
    'cta_text' => 'Free consultation — no commitment.',
    'cta_button' => 'Book a Call',
    'cta_route' => 'contact',
  ], 'items' => [
    ['title' => 'Web Development', 'route' => 'web-development', 'description' => 'Laravel, Livewire, React & modern stacks', 'icon' => 'desktop'],
    ['title' => 'Mobile Development', 'route' => 'mobile-app-development', 'description' => 'Flutter, React Native & native apps', 'icon' => 'mobile'],
    ['title' => 'UI/UX Design', 'route' => 'ui-ux-design', 'description' => 'User-centric design & prototyping', 'icon' => 'palette'],
    ['title' => 'Cloud Solutions', 'route' => 'cloud-solutions', 'description' => 'AWS, Azure & scalable infrastructure', 'icon' => 'cloud'],
    ['title' => 'AI & Automation', 'route' => 'ai-automation', 'description' => 'LLMs, RAG pipelines & workflow AI', 'icon' => 'robot'],
    ['title' => 'IoT Development', 'route' => 'iot-development', 'description' => 'Embedded systems & connected devices', 'icon' => 'chip'],
  ]],
  ['title' => 'Solutions', 'route' => 'solutions', 'dropdown' => true, 'left' => [
    'badge' => 'INDUSTRY PROVEN',
    'heading' => 'Built for the industries that move the world.',
    'description' => 'Deep-domain software for healthcare, finance, education, real estate, manufacturing, and retail.',
    'cta_text' => 'Explore All Solutions',
    'cta_route' => 'solutions',
  ], 'right' => [
    'heading' => 'Real results, real industries',
    'stats' => [
      ['value' => '12+', 'label' => 'Years of Experience'],
      ['value' => '6', 'label' => 'Industries Served'],
    ],
    'points' => [
      ['icon' => '🏆', 'text' => 'Domain-specific expertise'],
      ['icon' => '🔒', 'text' => 'HIPAA, GDPR & SOC 2 ready'],
      ['icon' => '🚀', 'text' => 'Proven 3x faster time-to-market'],
    ],
    'cta_heading' => 'See your industry',
    'cta_text' => 'Get a tailored demo for your vertical.',
    'cta_button' => 'Request Demo',
    'cta_route' => 'contact',
  ], 'items' => [
    ['title' => 'Healthcare', 'route' => 'healthcare', 'description' => 'HIPAA-compliant health platforms', 'icon' => 'heart'],
    ['title' => 'Finance', 'route' => 'finance', 'description' => 'Fintech, banking & payment systems', 'icon' => 'bank'],
    ['title' => 'Education', 'route' => 'education', 'description' => 'LMS, EdTech & virtual classrooms', 'icon' => 'graduation'],
    ['title' => 'Real Estate', 'route' => 'real-estate', 'description' => 'PropTech, CRM & listing platforms', 'icon' => 'building'],
    ['title' => 'Manufacturing', 'route' => 'manufacturing', 'description' => 'IIoT, MES & supply chain', 'icon' => 'industry'],
    ['title' => 'Retail & E-commerce', 'route' => 'retail', 'description' => 'Custom e-commerce & marketplace solutions', 'icon' => 'cart'],
  ]],
  ['title' => 'Technologies', 'route' => 'technologies', 'dropdown' => false, 'left' => [
    'badge' => 'MODERN STACK',
    'heading' => 'We engineer with cutting-edge technologies.',
    'description' => 'From frontend to cloud, we leverage the best tools and frameworks to build scalable, future-proof software.',
    'cta_text' => 'View Full Stack',
    'cta_route' => 'technologies',
  ], 'right' => [
    'heading' => 'Why our tech matters',
    'stats' => [
      ['value' => '20+', 'label' => 'Technologies Mastered'],
      ['value' => '5', 'label' => 'Tech Domains'],
    ],
    'points' => [
      ['icon' => '🧩', 'text' => 'Best tools for every problem'],
      ['icon' => '🔄', 'text' => 'Seamless integration expertise'],
      ['icon' => '📊', 'text' => 'Performance-optimized stacks'],
    ],
    'cta_heading' => 'Not sure which tech?',
    'cta_text' => 'We\'ll recommend the perfect stack for your project.',
    'cta_button' => 'Get Tech Advice',
    'cta_route' => 'contact',
  ], 'items' => [
    ['title' => 'Frontend', 'route' => 'frontend', 'description' => 'React, Vue, Next.js & modern JS', 'icon' => 'code'],
    ['title' => 'Backend', 'route' => 'backend', 'description' => 'Laravel, Node.js, Python & Java', 'icon' => 'cubes'],
    ['title' => 'Mobile', 'route' => 'mobile', 'description' => 'Flutter, React Native & native', 'icon' => 'mobile'],
    ['title' => 'Database', 'route' => 'database', 'description' => 'MySQL, PostgreSQL & MongoDB', 'icon' => 'cloud'],
    ['title' => 'Cloud & DevOps', 'route' => 'cloud-devops', 'description' => 'AWS, Azure, Docker & K8s', 'icon' => 'chip'],
  ]],
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
  <div
    class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative"
    x-data="{
      activeDropdown: null,
      closeTimeout: null,
      openDropdown(id) {
        clearTimeout(this.closeTimeout);
        this.activeDropdown = id;
      },
      closeDropdown() {
        this.closeTimeout = setTimeout(() => { this.activeDropdown = null; }, 120);
      },
      cancelClose() {
        clearTimeout(this.closeTimeout);
      }
    }">

    <div class="flex items-center justify-between h-16 lg:h-20">

      <a href="{{ route('home') }}" wire:navigate class="flex items-center gap-2 shrink-0">
        <img src="{{ asset('logo.png') }}" class="w-10 lg:w-12" alt="Shreeza">
        <div>
          <h2 class="text-xl lg:text-2xl font-bold text-heading leading-tight">
            Shreeza
          </h2>
          <p class="text-[10px] lg:text-xs text-muted leading-tight -mt-0.5">
            Tech Consulting & Software Solutions
          </p>
        </div>
      </a>

      <div class="hidden lg:flex items-center gap-1">
        @foreach($navItems as $item)
          @if($item['dropdown'])
          <div
            @mouseenter="openDropdown('{{ $item['route'] }}')"
            @mouseleave="closeDropdown()">
            <a
              wire:navigate
              href="{{ route($item['route']) }}"
              class="group relative flex items-center gap-1 px-3 py-1.5 text-sm font-medium rounded-lg transition-all duration-200"
              :class="activeDropdown === '{{ $item['route'] }}' ? 'text-heading' : 'text-text hover:text-heading'">
              {{ $item['title'] }}
              <svg class="w-3.5 h-3.5 transition-transform duration-200" :class="{ 'rotate-180': activeDropdown === '{{ $item['route'] }}' }" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
              <span
                class="absolute left-3 right-3 -bottom-0.5 h-0.5 rounded-full bg-primary origin-left transition-transform duration-300"
                :class="(activeDropdown === '{{ $item['route'] }}' || {{ request()->routeIs($item['route']) || collect($item['items'] ?? [])->contains(fn($sub) => request()->routeIs($sub['route'])) ? 'true' : 'false' }}) ? 'scale-x-100' : 'scale-x-0'"></span>
            </a>
          </div>
          @else
          <a
            wire:navigate
            href="{{ route($item['route']) }}"
            class="group relative px-3 py-1.5 text-sm font-medium rounded-lg transition-all duration-200 {{ request()->routeIs($item['route']) ? 'text-heading' : 'text-text hover:text-heading' }}">
            {{ $item['title'] }}
            <span
              class="absolute left-3 right-3 -bottom-0.5 h-0.5 rounded-full bg-primary origin-left transition-transform duration-300 {{ request()->routeIs($item['route']) ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}"></span>
          </a>
          @endif
        @endforeach
      </div>

      <div
        x-show="activeDropdown"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 translate-y-3 scale-[0.98]"
        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
        x-transition:leave-end="opacity-0 translate-y-3 scale-[0.98]"
        @mouseenter="cancelClose()"
        @mouseleave="closeDropdown()"
        class="absolute left-0 right-0 top-full z-50 mt-2 rounded-2xl border border-border bg-card shadow-2xl overflow-hidden">
        @foreach($navItems as $item)
          @if($item['dropdown'])
          <div x-show="activeDropdown === '{{ $item['route'] }}'" x-cloak>
            <div class="grid grid-cols-12">
              <div class="relative col-span-4 overflow-hidden bg-gradient-to-br from-primary/10 via-background to-secondary/10 p-7">
                <div class="absolute inset-0 opacity-[0.03]"
                  style="background-image: radial-gradient(circle at 1px 1px, currentColor 1px, transparent 0); background-size: 20px 20px;">
                </div>
                <div class="relative">
                  <span class="inline-flex items-center gap-1.5 rounded-full border border-border bg-secondary/10 px-3 py-1 text-[11px] font-semibold tracking-wider text-secondary uppercase">
                    {{ $item['left']['badge'] }}
                  </span>
                  <h3 class="mt-4 text-2xl font-bold text-heading leading-[1.2]">
                    {{ $item['left']['heading'] }}
                  </h3>
                  <p class="mt-2 text-sm leading-relaxed text-muted">
                    {{ $item['left']['description'] }}
                  </p>
                  <a href="{{ route($item['left']['cta_route']) }}" wire:navigate
                    class="mt-6 inline-flex items-center gap-2 rounded-full bg-primary px-6 py-2.5 text-sm font-semibold text-white hover:bg-primary-hover transition-all active:scale-95 shadow-sm">
                    {{ $item['left']['cta_text'] }}
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                  </a>
                </div>
              </div>
              <div class="col-span-5 p-7">
                <h4 class="mb-4 text-xs font-semibold tracking-wider text-muted uppercase">
                  {{ $item['title'] }}
                </h4>
                <div class="grid grid-cols-2 gap-2">
                  @foreach($item['items'] as $subItem)
                  <a wire:navigate href="{{ route($item['route']) }}/{{ $subItem['route'] }}"
                    class="group relative rounded-xl border border-transparent p-3 hover:border-primary/15 hover:bg-background transition-all duration-200">
                    <div class="flex gap-3">
                      <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white group-hover:shadow-sm transition-all duration-200">
                        <x-dynamic-component :component="'svg.'.$subItem['icon']" class="w-5 h-5" />
                      </div>
                      <div>
                        <h5 class="text-sm font-semibold text-heading group-hover:text-primary transition-colors">
                          {{ $subItem['title'] }}
                        </h5>
                        <p class="mt-0.5 text-[11px] text-muted leading-relaxed">
                          {{ $subItem['description'] }}
                        </p>
                      </div>
                    </div>
                  </a>
                  @endforeach
                </div>
              </div>
              <div class="col-span-3 border-l border-border bg-background/50 p-7">
                <h4 class="text-xs font-semibold tracking-wider text-muted uppercase">
                  {{ $item['right']['heading'] }}
                </h4>
                <div class="mt-5 grid grid-cols-2 gap-3">
                  @foreach($item['right']['stats'] as $stat)
                  <div class="rounded-xl bg-card border border-border p-3 text-center">
                    <span class="block text-lg font-bold text-heading">{{ $stat['value'] }}</span>
                    <span class="block text-[10px] text-muted mt-0.5">{{ $stat['label'] }}</span>
                  </div>
                  @endforeach
                </div>
                <div class="mt-5 space-y-2.5">
                  @foreach($item['right']['points'] as $point)
                  <div class="flex items-start gap-2.5 text-xs text-muted">
                    <span class="mt-0.5 shrink-0">{{ $point['icon'] }}</span>
                    <span>{{ $point['text'] }}</span>
                  </div>
                  @endforeach
                </div>
                <div class="mt-6 rounded-xl bg-gradient-to-br from-primary/10 to-primary/5 border border-primary/10 p-4">
                  <h5 class="text-sm font-semibold text-heading">
                    {{ $item['right']['cta_heading'] }}
                  </h5>
                  <p class="mt-1 text-[11px] text-muted">
                    {{ $item['right']['cta_text'] }}
                  </p>
                  <a href="{{ route($item['right']['cta_route']) }}" wire:navigate
                    class="mt-4 inline-flex items-center gap-1.5 rounded-full bg-secondary px-5 py-2 text-xs font-semibold text-white hover:bg-secondary-hover transition-all active:scale-95 shadow-sm">
                    {{ $item['right']['cta_button'] }}
                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
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
