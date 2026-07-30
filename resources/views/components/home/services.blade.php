<section class="py-8 sm:py-10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div x-intersect="animate-fade-in-up" class="opacity-0">
      <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between mb-8">
        <div>
          <span class="text-secondary uppercase tracking-[0.25em] text-xs font-bold">WHAT WE DO</span>
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-heading mt-1">Services We Provide</h2>
        </div>
        <a wire:navigate href="{{ route('services') }}" class="hidden md:flex items-center gap-2 text-primary font-medium transition-all hover:gap-4 text-sm">
          View All Services
          <x-svg.index icon="arrow-right" class="w-3.5 h-3.5" />
        </a>
      </div>

      <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6">
        @foreach($services as $service)
        <a href="{{ route('service', $service['route']) }}" wire:navigate
          class="group relative overflow-hidden rounded-2xl border border-border bg-card/60 backdrop-blur-xl p-5 transition-all duration-500 hover:-translate-y-2 hover:border-primary/40 hover:shadow-[0_8px_30px_rgba(37,99,235,0.12)]">
          <div class="absolute inset-0 bg-gradient-to-b from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
          <div class="relative flex flex-col items-center text-center z-10">
            <div class="flex h-14 w-14 items-center justify-center rounded-full {{ $service['color'] == 'primary' ? 'bg-primary/10 text-primary' : 'bg-secondary/10 text-secondary' }}">
              <x-svg.index :icon="$service['icon']" class="w-6 h-6" />
            </div>
            <h3 class="mt-4 text-base font-bold text-heading">{{ $service['title'] }}</h3>
            <p class="mt-2 text-sm leading-6 text-muted flex-1">{{ $service['description'] }}</p>
            <div class="mt-3 inline-flex items-center gap-1.5 text-xs font-medium {{ $service['color'] == 'primary' ? 'text-primary' : 'text-secondary' }} group-hover:gap-2.5 transition-all">
              Learn More
              <x-svg.index icon="arrow-right" class="w-3 h-3" />
            </div>
          </div>
        </a>
        @endforeach
      </div>
    </div>
  </div>
</section>
