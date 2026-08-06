<section class="py-8 sm:py-10 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-6 gap-10 lg:gap-16">

      <div x-intersect="animate-fade-in-up" class="opacity-0 lg:col-span-4">
        <span class="text-secondary uppercase tracking-[0.25em] text-xs font-bold">OUR PROCESS</span>
        <h2 class="text-2xl font-bold text-heading mt-1">From Idea To Impact</h2>

        <div class="relative mt-10">
          <div class="absolute top-8 left-0 right-0 border-t-2 border-dashed border-border hidden lg:block"></div>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 lg:gap-4 relative z-10">
            @foreach([
              ['icon' => 'lightbulb', 'title' => 'Consultation', 'desc' => 'Understanding business goals, users and project vision.', 'color' => 'bg-primary'],
              ['icon' => 'pen-ruler', 'title' => 'Design', 'desc' => 'UI/UX wireframes, branding and interactive experiences.', 'color' => 'bg-secondary'],
              ['icon' => 'code', 'title' => 'Development', 'desc' => 'Modern technologies, scalable architecture and clean code.', 'color' => 'bg-primary'],
              ['icon' => 'vial', 'title' => 'Testing', 'desc' => 'Every feature tested for quality, performance and security.', 'color' => 'bg-secondary'],
              ['icon' => 'rocket', 'title' => 'Deployment', 'desc' => 'Deploy, monitor, optimize and support your growth.', 'color' => 'bg-primary'],
            ] as $step)
            <div class="text-center group">
              <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full {{ $step['color'] }} text-white shadow-lg transition-transform group-hover:scale-110 duration-300">
                <x-svg.index :icon="$step['icon']" class="w-6 h-6" />
              </div>
              <h3 class="mt-4 font-bold text-heading">{{ $step['title'] }}</h3>
              <p class="mt-2 text-sm leading-6 text-muted">{{ $step['desc'] }}</p>
            </div>
            @endforeach
          </div>
        </div>
      </div>

      <div x-intersect="animate-fade-in-up" class="opacity-0 lg:col-span-2 relative">
        <span class="text-secondary uppercase tracking-[0.25em] text-xs font-bold">WHY SHREEZA</span>
        <h2 class="text-2xl font-bold text-heading mt-1">We Build More Than Just Software</h2>

        <div class="mt-6 space-y-4">
          @foreach([
            'Rapid Development & Transparent Process',
            'Dedicated Support & Maintenance',
            'Scalable & Future Ready Solutions',
            'On-Time Delivery, Every Time',
          ] as $feature)
          <div class="flex items-center gap-3">
            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary">
              <x-svg.index icon="check" class="w-4 h-4" />
            </div>
            <span class="text-sm text-muted">{{ $feature }}</span>
          </div>
          @endforeach
        </div>

        <div class="mt-8">
          <a href="{{ route('contact') }}" wire:navigate
            class="inline-flex items-center gap-3 rounded-full bg-primary px-7 py-3.5 font-semibold text-white hover:bg-primary-hover active:scale-95 transition-all text-sm">
            Let's Build Together
            <x-svg.index icon="arrow-right" class="w-4 h-4" />
          </a>
        </div>

      
      </div>

    </div>
  </div>
</section>
