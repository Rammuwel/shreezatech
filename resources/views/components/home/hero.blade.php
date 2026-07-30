<section class="overflow-hidden bg-background">
  <div class="relative mt-20 lg:mt-20 flex items-center">
    <div class="absolute inset-0">
      <div class="absolute inset-0 opacity-[0.07] dark:opacity-[0.12] bg-[linear-gradient(to_right,#1f2937_1px,transparent_1px),linear-gradient(to_bottom,#1f2937_1px,transparent_1px)] bg-[length:80px_80px]"></div>
      <div class="absolute top-20 left-0 w-96 h-96 bg-primary/20 rounded-full blur-[140px]"></div>
      <div class="absolute bottom-0 right-0 w-125 h-125 bg-secondary/20 rounded-full blur-[180px]"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div x-data="mouseParallax()" @mousemove="move" @mouseleave="leave" class="grid lg:grid-cols-5 gap-6 lg:gap-20 items-center">

        <div class="col-span-3 lg:relative lg:z-10">
          <div x-intersect="animate-fade-in-up" class="opacity-0">
            <div class="inline-flex items-center gap-3 rounded-full border border-secondary/30 bg-secondary/10 px-3 py-1 mt-3">
              <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
              <small class="text-secondary text-xs font-medium">Welcome To Shreeza</small>
            </div>

            <h1 class="mt-2 text-3xl sm:text-4xl lg:text-5xl font-semibold leading-tight text-heading">
              Engineering the Future of
              <br>
              <span class="bg-gradient-to-r from-primary via-blue-400 to-secondary bg-clip-text text-transparent">
                Digital Innovation
              </span>
            </h1>

            <p class="mt-2 max-w-xl text-base lg:text-lg leading-8 text-text">
              We build enterprise software, AI-powered platforms, cloud infrastructure, mobile applications, and digital products that transform businesses worldwide.
            </p>

            <div class="mt-3 flex flex-wrap gap-3">
              <a wire:navigate href="{{ route('contact') }}"
                class="rounded-full bg-primary px-8 py-3.5 font-semibold text-white hover:bg-primary-hover active:scale-95 transition-all">
                Start Your Project
              </a>
              <a wire:navigate href="{{ route('portfolio') }}"
                class="rounded-full border border-border px-8 py-3.5 font-semibold text-heading hover:border-primary transition-all">
                Explore Work
              </a>
            </div>

            <div class="mt-3 grid grid-cols-2 md:grid-cols-4 gap-3">
              @foreach([
                ['count' => 50, 'suffix' => '+', 'label' => 'Projects', 'icon' => 'code'],
                ['count' => 30, 'suffix' => '+', 'label' => 'Clients', 'icon' => 'handshake'],
                ['count' => 5, 'suffix' => '+', 'label' => 'Years', 'icon' => 'award'],
                ['count' => 50, 'suffix' => '+', 'label' => 'Satisfaction', 'icon' => 'smile'],
              ] as $stat)
              <div class="text-center">
                <div class="flex justify-center items-center gap-2">
                  <div class="text-primary">
                    <x-svg.index :icon="$stat['icon']" class="w-6 h-6 sm:w-7 sm:h-7" />
                  </div>
                  <h2 x-data="counter" data-count="{{ $stat['count'] }}" data-suffix="{{ $stat['suffix'] }}" x-text="count + suffix" class="text-2xl sm:text-3xl font-bold text-heading">0{{ $stat['suffix'] }}</h2>
                </div>
                <p class="text-sm text-muted mt-1">{{ $stat['label'] }}</p>
              </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="relative flex justify-center col-span-2 min-h-[20rem] lg:min-h-[32rem]">
          <div class="absolute w-[18rem] h-[18rem] lg:w-[30rem] lg:h-[30rem] rounded-full border border-primary/20 animate-spin-slow opacity-90"></div>
          <div class="absolute w-[14rem] h-[14rem] lg:w-[22rem] lg:h-[22rem] rounded-full border border-secondary/20 animate-spin-slow-reverse opacity-60"></div>
          <div class="absolute w-[16rem] h-[16rem] lg:w-[26rem] lg:h-[26rem] rounded-full bg-primary/20 blur-[120px] opacity-90"></div>

          <div class="relative z-0 mt-8 lg:mt-16 will-change-transform"
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

  <div class="my-4 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="rounded-2xl border border-border bg-card/50 backdrop-blur-xl p-6">
      <div class="flex flex-col lg:flex-row lg:items-center gap-6">
        <div class="lg:w-1/4">
          <p class="text-xs tracking-[0.25em] uppercase text-secondary font-semibold">Industries We Serve</p>
          <p class="mt-2 text-sm text-muted">Delivering scalable software solutions across multiple business sectors.</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3 flex-1">
          @foreach([
            ['icon' => 'heart', 'label' => 'Healthcare', 'color' => 'text-red-400'],
            ['icon' => 'graduation', 'label' => 'Education', 'color' => 'text-blue-400'],
            ['icon' => 'bank', 'label' => 'Finance', 'color' => 'text-yellow-400'],
            ['icon' => 'cart', 'label' => 'Retail', 'color' => 'text-green-400'],
            ['icon' => 'industry', 'label' => 'Manufacturing', 'color' => 'text-orange-400'],
            ['icon' => 'chart', 'label' => 'Startups', 'color' => 'text-purple-400'],
          ] as $industry)
          <div class="group flex flex-col items-center justify-center rounded-xl border border-border bg-background/50 p-4 hover:border-primary hover:bg-primary/10 transition-all duration-300 cursor-pointer">
            <x-svg.index :icon="$industry['icon']" :class="'w-7 h-7 '.$industry['color'].' group-hover:scale-110 transition-transform'" />
            <span class="mt-2 text-sm font-semibold text-heading">{{ $industry['label'] }}</span>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
