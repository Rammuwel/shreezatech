<section class="mt-20  overflow-hidden bg-background">
  <div class="relative flex items-center">

    <div class="absolute inset-0">
      <div class="absolute inset-0 opacity-[0.07] dark:opacity-[0.12] bg-[linear-gradient(to_right,#1f2937_1px,transparent_1px),linear-gradient(to_bottom,#1f2937_1px,transparent_1px)] bg-[length:80px_80px]"></div>
      <div class="absolute top-20 left-0 w-96 h-96 bg-primary/20 rounded-full blur-[140px]"></div>
      <div class="absolute bottom-0 right-0 w-125 h-125 bg-secondary/20 rounded-full blur-[180px]"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8">
      <div x-data="mouseParallax()" @mousemove="move" @mouseleave="leave" class="grid md:grid-cols-5 gap-6 md:gap-12 lg:gap-20 items-center">

        <div class="col-span-3 md:relative md:z-10">
          <div x-intersect="animate-fade-in-up" class="opacity-0">
            <div class="inline-flex items-center gap-3 rounded-full border border-secondary/30 bg-secondary/10 px-3 py-1 mt-3">
              <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
              <small class="text-secondary text-xs font-medium">Welcome To Shreeza</small>
            </div>

            <h1 class="mt-2 text-3xl sm:text-4xl lg:text-5xl font-semibold leading-tight text-heading">
              <span class="text-primary">Shreeza Tech</span> — Engineering the Future of
              <br>
              <span class="bg-gradient-to-r from-primary via-blue-400 to-secondary bg-clip-text text-transparent">
                Digital Innovation
              </span>
            </h1>

            <p class="mt-2 max-w-xl text-base lg:text-lg leading-8 text-text">
              We build enterprise software, AI-powered platforms, cloud infrastructure, mobile applications, and digital products that transform businesses worldwide.
            </p>

            <div class="mt-3 flex flex-wrap gap-2 md:gap-3">
              <a wire:navigate href="{{ route('contact') }}"
                class="rounded-full bg-primary px-5 md:px-8 py-2.5 md:py-3.5 text-sm md:font-semibold text-white hover:bg-primary-hover active:scale-95 transition-all">
                Start Your Project
              </a>
              <a wire:navigate href="{{ route('portfolio') }}"
                class="rounded-full border border-border px-5 md:px-8 py-2.5 md:py-3.5 text-sm md:font-semibold text-heading hover:border-primary transition-all">
                Explore Work
              </a>
            </div>
          </div>
        </div>

        <div class="relative flex justify-center col-span-3 md:col-span-2 min-h-[14rem] md:min-h-[22rem] lg:min-h-[26rem]">
          <div class="absolute w-[16rem] h-[16rem] md:w-[24rem] md:h-[24rem] lg:w-[30rem] lg:h-[30rem] rounded-full border border-primary/20 animate-spin-slow opacity-90"></div>
          <div class="absolute w-[12rem] h-[12rem] md:w-[18rem] md:h-[18rem] lg:w-[22rem] lg:h-[22rem] rounded-full border border-secondary/20 animate-spin-slow-reverse opacity-60"></div>
          <div class="absolute w-[14rem] h-[14rem] md:w-[22rem] md:h-[22rem] lg:w-[26rem] lg:h-[26rem] rounded-full bg-primary/20 blur-[120px] opacity-90"></div>

          <div class="relative z-0 mt-6 lg:mt-10 will-change-transform"
            :style="'transform:translate(' + (x * 6) + 'px,' + (y * 6) + 'px)'">
            <img src="{{ asset('logo.png') }}" class="w-64 lg:w-80 opacity-50" alt="Shreeza">
          </div>

          @foreach([
          ['icon' => 'brain', 'title' => 'AI Powered', 'desc' => 'Automation', 'class' => '-left-4 lg:-left-16 top-8 lg:top-16', 'parallax' => -8],
          ['icon' => 'desktop', 'title' => 'RAD', 'desc' => 'Rapid Application Development', 'class' => '-left-4 lg:-left-16 top-56 lg:top-80', 'parallax' => -15],
          ['icon' => 'cloud', 'title' => 'Cloud', 'desc' => 'AWS & Azure', 'class' => '-right-4 lg:-right-16 top-24 lg:top-32', 'parallax' => 10],
          ['icon' => 'shield', 'title' => 'Secure', 'desc' => 'Enterprise Grade', 'class' => '-right-4 lg:-right-8 bottom-12 lg:bottom-20', 'parallax' => 12],
          ] as $card)
          <div :style="'transform:translate(' + (x * {{ $card['parallax'] }}) + 'px,' + (y * {{ $card['parallax'] }}) + 'px)'" class="absolute z-20 {{ $card['class'] }} will-change-transform">
            <div class="rounded-2xl bg-card/90 border border-border p-3 lg:p-4 backdrop-blur-xl shadow-lg" style="animation:float {{ 12 + $loop->index * 2 }}s ease-in-out {{ $loop->index * 0.8 }}s infinite">
              <div class="flex items-center gap-2 lg:gap-3">
                <div class="text-primary"><x-svg.index :icon="$card['icon']" class="w-5 h-5" /></div>
                <div>
                  <h4 class="font-semibold text-heading text-sm">{{ $card['title'] }}</h4>
                  <p class="text-xs text-muted">{{ $card['desc'] }}</p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
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
            <h3
              x-data="counter"
              data-count="{{ $stat['count'] }}"
              data-suffix="{{ $stat['suffix'] }}"
              x-text="count + suffix"
              class="text-2xl sm:text-3xl font-bold bg-gradient-to-r from-primary via-blue-400 to-secondary bg-clip-text text-transparent tabular-nums leading-none">
              0{{ $stat['suffix'] }}
            </h3>
          </div>
          <p class="text-xs sm:text-sm font-medium text-muted">{{ $stat['label'] }}</p>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>