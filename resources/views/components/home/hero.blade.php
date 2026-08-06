<section class="mt-20  overflow-hidden bg-background">
  <div class="relative flex items-center">

       <div class="absolute inset-0">

            <!-- Grid -->

            <div
                class="absolute inset-0 opacity-10
            bg-[linear-gradient(to_right,#1f2937_1px,transparent_1px),linear-gradient(to_bottom,#1f2937_1px,transparent_1px)]
            bg-size-[80px_80px]">
            </div>

            <!-- Blue Glow -->
            <div
                class="absolute top-20 left-0 w-96 h-96  bg-linear-to-r from-primary/10 to-transparent  rounded-full blur-[140px]">
            </div>

            <!-- Gold Glow -->

            <div
                class="absolute bottom-0 right-0 w-125 h-125  bg-linear-to-r to-transparent from-background  to-b rounded-full blur-[680px]">
            </div>
           

        </div>

    <div class="relative py-5 z-10 max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid md:grid-cols-6 gap-6 md:gap-12 lg:gap-20 items-center">

        <div class="col-span-3 md:relative md:z-10">
          <div x-intersect="animate-fade-in-up" class="opacity-0">
            <div class="inline-flex items-center gap-3 rounded-full border border-secondary/30 bg-secondary/10 px-3 py-1 mt-3">
              <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
              <small class="text-secondary text-xs font-medium">Welcome To Shreeza</small>
            </div>

            <h1 class="mt-3 text-4xl sm:text-4xl lg:text-5xl font-bold leading-tight text-heading">
               Engineering the Future of
              <br>
              <span class="bg-linear-to-r from-primary via-blue-400 to-secondary bg-clip-text text-transparent">
                Digital Innovation
              </span>
            </h1>

            <p class="mt-4 max-w-xl text-lg lg:text-lg leading-8 text-text">
              We build enterprise software, AI-powered platforms, cloud infrastructure, mobile applications, and digital products that transform businesses worldwide.
            </p>

            <div class="mt-5 flex flex-wrap gap-3 md:gap-3">
              <a wire:navigate href="{{ route('contact') }}"
                class="rounded-full bg-primary px-6 md:px-8 py-3 md:py-3.5 text-sm md:font-semibold text-white hover:bg-primary-hover active:scale-95 transition-all">
                Start Your Project
              </a>
              <a wire:navigate href="{{ route('portfolio') }}"
                class="rounded-full border border-border px-6 md:px-8 py-3 md:py-3.5 text-sm md:font-semibold text-heading hover:border-primary transition-all">
                Explore Work
              </a>
            </div>
          </div>
        </div>

        <div class="relative flex justify-center col-span-3 md:col-span-3">
          <img
            src="{{ asset('/images/home/home-hero.webp') }}"
            width="1024" height="683" fetchpriority="high"
            class="portfolio-image relative z-0 w-full h-auto md:max-w-[34rem] lg:max-w-[38rem] xl:max-w-[42rem] mx-auto object-cover opacity-70"
            alt="Shreeza Tech digital innovation hero banner">
        </div>

      </div>
    </div>


  </div>
  <div class="relative py-3 z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-10 lg:mt-14">
    <div class="relative overflow-hidden rounded-3xl border border-border bg-card shadow-2xl">
      <div class="grid grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8 lg:gap-0 lg:divide-x lg:divide-border px-6 py-8 lg:py-10">
        @foreach($stats as $stat)
        <div class="flex flex-col items-center text-center gap-1.5 lg:px-6">
          <div class="flex items-center gap-2 text-primary">
            <i class="{{ $stat['icon'] }} text-sm"></i>
            <p
              x-data="counter"
              data-count="{{ $stat['count'] }}"
              data-suffix="{{ $stat['suffix'] }}"
              x-text="count + suffix"
              class="text-2xl sm:text-3xl font-bold bg-gradient-to-r from-primary via-blue-400 to-secondary bg-clip-text text-transparent tabular-nums leading-none">
              0{{ $stat['suffix'] }}
            </p>
          </div>
          <p class="text-xs sm:text-sm font-medium text-muted">{{ $stat['label'] }}</p>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>