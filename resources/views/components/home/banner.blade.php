<!-- Reduced vertical padding from py-24 to py-12 for a much shorter banner height -->
<div class="relative w-full overflow-hidden bg-background  py-5 px-6" x-data="exactMeshWave()">
    <div class="absolute inset-0">

        <!-- Grid -->

        <div
            class="absolute inset-0 opacity-10
            bg-[linear-gradient(to_right,#1f2937_1px,transparent_1px),linear-gradient(to_bottom,#1f2937_1px,transparent_1px)]
            bg-size-[80px_80px]">
        </div>

        <!-- Blue Glow -->

        <div
            class="absolute top-20 left-0 w-96 h-96 bg-primary/80 rounded-full blur-[150px]">
        </div>

        <!-- Gold Glow -->

        <div
            class="absolute bottom-0 right-0 w-125 h-125 bg-secondary/20 rounded-full blur-[180px]">
        </div>

    </div>
    <!-- Exact Canvas Background Layer -->
    <div class="absolute inset-0 z-0">
        <canvas x-ref="meshCanvas" class="h-full w-full opacity-70"></canvas>
    </div>

    <!-- Content Centerpiece -->
    <div class="relative z-10 mx-auto max-w-3xl text-center font-sans">
        <!-- Reduced text size to text-xl / md:text-2xl / lg:text-3xl -->
        <h2 class="text-lg font-bold tracking-wide text-heading md:text-xl lg:text-2xl">
            Ready to Build Something Extraordinary?
        </h2>

        <!-- Scaled down description text sizes -->
        <p class="mt-2 text-sm tracking-wide text-muted sm:text-xs">
            Let's turn your ideas into powerful digital solutions.
        </p>

        <!-- Button with Clean Rounded Corners and Custom Deep Gradient -->
        <div class="mt-6 flex justify-center">
            <a  wire:navigate href="{{ route('contact') }}"
                class="inline-flex items-center gap-x-2 rounded-md bg-linear-to-r from-secondary to-primary px-5 py-2 text-lg font-semibold text-white shadow-xl shadow-indigo-950/40 transition-all duration-300 hover:brightness-110">
                <span>Schedule Free Consultation</span>
                <svg class="h-2.5 w-2.5" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>
    </div>
</div>