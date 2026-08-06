<section x-data="testimonials({{ Js::from($testimonials) }})" class="py-8 sm:py-10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div x-intersect="animate-fade-in-up" class="opacity-0">
      <div class="flex items-end justify-between mb-6">
        <div>
          <span class="text-secondary uppercase tracking-[0.25em] text-xs font-bold">WHAT OUR CLIENTS SAY</span>
          <h2 class="text-2xl font-bold text-heading mt-1">Trusted by Businesses Worldwide</h2>
        </div>
        <a href="{{ route('reviews') }}" wire:navigate class="hidden md:flex items-center gap-2 text-primary hover:gap-4 transition-all text-sm">
          View All Reviews
          <x-svg.index icon="arrow-right" class="w-3.5 h-3.5" />
        </a>
      </div>

      <div class="relative">
        <button @click="prevGroup()" aria-label="Previous testimonials" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-3 lg:-translate-x-6 z-20 h-10 w-10 rounded-full border border-border bg-card flex items-center justify-center hover:border-primary transition-colors">
          <x-svg.index icon="arrow-left" class="w-4 h-4 text-text" />
        </button>

        <div class="overflow-hidden">
          <div class="flex transition-transform duration-500 ease-out" :style="'transform: translateX(-' + (current * (100/perView)) + '%)'">
            <template x-for="(item, i) in items" :key="i">
              <div class="min-w-[100%] md:min-w-[50%] lg:min-w-[33.33%] px-2">
                <div class="rounded-2xl border border-border bg-card/70 p-4 h-full">
                  <div class="flex items-center gap-3 mb-3">
                    <img :src="'{{ asset('') }}' + item.image" :alt="item.name" loading="lazy" class="w-11 h-11 rounded-full object-cover">
                    <div>
                      <p class="font-semibold text-heading text-sm" x-text="item.name"></p>
                      <p class="text-xs text-muted" x-text="item.designation"></p>
                    </div>
                  </div>
                  <p class="text-sm leading-6 text-muted line-clamp-3" x-text="item.review"></p>
                  <div class="flex gap-0.5 mt-3 text-secondary">
                    <template x-for="s in 5" :key="s">
                      <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </template>
                  </div>
                </div>
              </div>
            </template>
          </div>
        </div>

        <button @click="nextGroup()" aria-label="Next testimonials" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-3 lg:translate-x-6 z-20 h-10 w-10 rounded-full border border-border bg-card flex items-center justify-center hover:border-primary transition-colors">
          <x-svg.index icon="arrow-right" class="w-4 h-4 text-text" />
        </button>
      </div>

      <div class="flex justify-center gap-2 mt-6">
        <template x-for="i in groups" :key="i">
          <button @click="goToGroup(i - 1)" :aria-label="'Go to testimonial group ' + i" :aria-current="(i - 1) === group ? 'true' : 'false'" class="h-2 rounded-full transition-all duration-300"
            :class="(i - 1) === group ? 'w-8 bg-primary' : 'w-2 bg-border hover:bg-muted'"></button>
        </template>
      </div>
    </div>
  </div>
</section>
