<div class="relative w-full overflow-hidden bg-background py-10 sm:py-12 px-4 sm:px-6">
  <div class="absolute inset-0">
    <div class="absolute inset-0 opacity-[0.07] dark:opacity-[0.12] bg-[linear-gradient(to_right,#1f2937_1px,transparent_1px),linear-gradient(to_bottom,#1f2937_1px,transparent_1px)] bg-[length:80px_80px]"></div>
    <div class="absolute top-1/2 left-1/4 w-96 h-96 bg-primary/30 rounded-full blur-[150px] animate-pulse-ring"></div>
    <div class="absolute bottom-0 right-1/4 w-80 h-80 bg-secondary/20 rounded-full blur-[120px]"></div>
  </div>

  <div class="relative z-10 mx-auto max-w-3xl text-center">
    <h2 x-intersect="animate-fade-in-up" class="opacity-0 text-xl sm:text-2xl lg:text-3xl font-bold tracking-wide text-heading">
      Ready to Build Something Extraordinary?
    </h2>
    <p x-intersect="animate-fade-in-up" class="opacity-0 mt-3 text-sm sm:text-base text-muted">
      Let's turn your ideas into powerful digital solutions.
    </p>
    <div x-intersect="animate-fade-in-up" class="opacity-0 mt-6 flex justify-center">
      <a wire:navigate href="{{ route('contact') }}"
        class="inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-secondary to-primary px-6 py-3 text-sm sm:text-base font-semibold text-white shadow-lg hover:brightness-110 active:scale-95 transition-all duration-300">
        Schedule Free Consultation
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
        </svg>
      </a>
    </div>
  </div>
</div>
