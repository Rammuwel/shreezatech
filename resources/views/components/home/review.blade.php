<section x-data="testimonialsCarousel()" class="py-8 sm:py-10">
  <script>window.__testimonials = {{ Js::from($testimonials) }};</script>

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
        <button @click="prevGroup()" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-3 lg:-translate-x-6 z-20 h-10 w-10 rounded-full border border-border bg-card flex items-center justify-center hover:border-primary transition-colors">
          <x-svg.index icon="arrow-left" class="w-4 h-4 text-text" />
        </button>

        <div class="overflow-hidden">
          <div class="flex transition-transform duration-500 ease-out" :style="'transform: translateX(-' + (current * (100/perView)) + '%)'">
            <template x-for="(item, i) in items" :key="i">
              <div class="min-w-[100%] md:min-w-[50%] lg:min-w-[33.33%] xl:min-w-[25%] shrink-0 px-2">
                <div class="group rounded-2xl border border-border bg-card/70 p-5 transition-all duration-500 hover:-translate-y-2 hover:border-primary/40 hover:shadow-[0_15px_40px_rgba(37,99,235,0.15)] h-full">
                  <div class="flex items-center gap-3 mb-4">
                    <img :src="item.image" :alt="item.name" class="w-11 h-11 rounded-full object-cover">
                    <div>
                      <h4 class="font-semibold text-heading text-sm" x-text="item.name"></h4>
                      <p class="text-xs text-muted" x-text="item.designation"></p>
                    </div>
                  </div>
                  <p class="text-sm leading-7 text-muted line-clamp-4" x-text="item.review"></p>
                  <div class="flex gap-0.5 mt-4 text-secondary">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                  </div>
                </div>
              </div>
            </template>
          </div>
        </div>

        <button @click="nextGroup()" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-3 lg:translate-x-6 z-20 h-10 w-10 rounded-full border border-border bg-card flex items-center justify-center hover:border-primary transition-colors">
          <x-svg.index icon="arrow-right" class="w-4 h-4 text-text" />
        </button>
      </div>

      <div class="flex justify-center gap-2 mt-6">
        <template x-for="(dot, di) in dots" :key="di">
          <button @click="goToGroup(di)" class="h-2 rounded-full transition-all duration-300"
            :class="di === group ? 'w-8 bg-primary' : 'w-2 bg-border hover:bg-muted'"></button>
        </template>
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('alpine:init', () => {
    Alpine.data('testimonialsCarousel', () => ({
      current: 0,
      items: [],
      perView: 1,
      autoplayTimer: null,
      _originalItems: [],

      init() {
        const base = "{{ asset('') }}";
        this._originalItems = (window.__testimonials || []).map(i => ({ ...i, image: base + i.image }));
        this.items = [...this._originalItems];
        this.updatePerView();
        this._resizeHandler = () => this.updatePerView();
        window.addEventListener('resize', this._resizeHandler, { passive: true });
        this.startAutoplay();
      },

      padItems() {
        this.items = [...this._originalItems];
        const r = this.items.length % this.perView;
        if (r > 0) {
          const n = this.perView - r;
          for (let i = 0; i < n; i++) this.items.push(this._originalItems[i % this._originalItems.length]);
        }
      },

      updatePerView() {
        const w = window.innerWidth + 16;
        if (w >= 1280) this.perView = 4;
        else if (w >= 1024) this.perView = 3;
        else if (w >= 768) this.perView = 2;
        else this.perView = 1;
        this.padItems();
        if (this.current > this.maxIndex) this.current = this.maxIndex;
      },

      get total() { return this.items.length; },
      get maxIndex() { return Math.max(0, this.total - this.perView); },
      get groups() { return Math.ceil(this.total / this.perView); },
      get group() { return Math.floor(this.current / this.perView); },
      get dots() { return Array.from({ length: this.groups }, (_, i) => i); },

      goToGroup(index) { this.current = Math.min(index * this.perView, this.maxIndex); this.resetAutoplay(); },
      nextGroup() { const g = this.group + 1; this.current = g >= this.groups ? 0 : g * this.perView; this.resetAutoplay(); },
      prevGroup() { const g = this.group - 1; this.current = g < 0 ? this.maxIndex : g * this.perView; this.resetAutoplay(); },
      startAutoplay() { this.autoplayTimer = setInterval(() => { this.nextGroup(); }, 4000); },
      resetAutoplay() { clearInterval(this.autoplayTimer); this.startAutoplay(); },
      destroy() { clearInterval(this.autoplayTimer); window.removeEventListener('resize', this._resizeHandler); }
    }));
  });
</script>
