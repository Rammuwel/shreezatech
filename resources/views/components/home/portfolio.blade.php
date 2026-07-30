<section class="py-8 sm:py-10"  x-data="carousel({items: {{ Js::from($projects) }}, delay: 5000, sm: 1, md: 2, lg: 3})">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div x-intersect="animate-fade-in-up" class="opacity-0">
      <div class="flex items-end justify-between mb-6">
        <div>
          <span class="text-secondary uppercase tracking-[0.25em] text-xs font-bold">OUR WORK</span>
          <h2 class="text-2xl font-bold text-heading mt-1">Featured Projects</h2>
        </div>
        <a href="{{ route('portfolio') }}" wire:navigate class="hidden md:flex items-center gap-2 text-primary hover:gap-4 transition-all text-sm">
          View All Projects
          <x-svg.index icon="arrow-right" class="w-3.5 h-3.5" />
        </a>
      </div>

      <div class="relative">
        <button @click="prevGroup()" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-3 lg:-translate-x-6 z-20 h-10 w-10 rounded-full border border-border bg-card flex items-center justify-center hover:border-primary transition-colors">
          <x-svg.index icon="arrow-left" class="w-4 h-4 text-text" />
        </button>

        <div class="overflow-hidden">
          <div class="flex transition-transform duration-500 ease-out" :style="'transform: translateX(-' + (current * (100/perView)) + '%)'">
            <template x-for="(project, i) in items" :key="i">
              <div class="min-w-[100%] md:min-w-[50%] lg:min-w-[33.33%] shrink-0 px-2">
                <a :href="'/portfolio/' + project.route" wire:navigate
                  class="group block rounded-2xl border border-border bg-card/70 p-3 transition-all duration-500 hover:-translate-y-2 hover:border-primary/40 hover:shadow-[0_15px_40px_rgba(37,99,235,0.15)]">
                  <div class="relative overflow-hidden rounded-xl">
                    <img :src="'{{ asset('') }}' + project.image" :alt="project.title"
                      class="h-48 w-full rounded-xl object-cover transition duration-700 group-hover:scale-105">
                    <span class="absolute bottom-3 left-3 rounded-full px-3 py-1 text-[11px] font-semibold"
                      :class="project.color === 'primary' ? 'bg-primary text-white' : 'bg-secondary text-background'"
                      x-text="project.category"></span>
                  </div>
                  <div class="mt-4">
                    <h3 class="text-lg font-bold text-heading" x-text="project.title"></h3>
                    <div class="mt-2 flex items-center gap-2 text-sm text-muted">
                      <span x-text="project.type"></span>
                      <x-svg.index icon="arrow-right" class="w-3 h-3 text-primary transition-transform group-hover:translate-x-1" />
                    </div>
                  </div>
                </a>
              </div>
            </template>
          </div>
        </div>

        <button @click="nextGroup()" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-3 lg:translate-x-6 z-20 h-10 w-10 rounded-full border border-border bg-card flex items-center justify-center hover:border-primary transition-colors">
          <x-svg.index icon="arrow-right" class="w-4 h-4 text-text" />
        </button>
      </div>

      <div class="flex justify-center gap-2 mt-6">
        <template x-for="i in groups" :key="i">
          <button @click="goToGroup(i - 1)" class="h-2 rounded-full transition-all duration-300"
            :class="(i - 1) === group ? 'w-8 bg-primary' : 'w-2 bg-border hover:bg-muted'"></button>
        </template>
      </div>
    </div>
  </div>
</section>
