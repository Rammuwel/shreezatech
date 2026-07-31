@props(['category'])

<section class="relative py-5 overflow-hidden">
    <div class="container relative mx-auto">
        <div class="mx-auto mb-10 max-w-3xl text-center">
            <span class="inline-flex items-center gap-2 rounded-full border border-secondary/20 bg-secondary/10 px-4 py-2 text-sm font-medium text-secondary">
                <i class="fa-solid fa-diagram-project"></i>
                Our Process
            </span>
            <h2 class="mt-5 text-4xl font-bold text-heading lg:text-5xl">
                How We Work
            </h2>
            <p class="mt-5 text-lg leading-8 text-muted">
                A structured, transparent process that ensures quality and timely delivery for every {{ $category['name'] }} project.
            </p>
        </div>
        <div class="relative">
            <div class="absolute left-6 top-0 hidden h-full w-px bg-gradient-to-b from-primary via-border to-secondary lg:block"></div>
            <div class="space-y-10">
                @foreach ($category['process'] as $index => $step)
                <div class="relative flex gap-8">
                    <div class="relative z-10 flex h-14 w-14 shrink-0 items-center justify-center rounded-full border border-primary/20 bg-card text-lg font-bold text-primary">
                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                    </div>
                    <div class="flex-1 rounded-3xl border border-border bg-card p-8 transition duration-300 hover:border-primary/30 hover:-translate-y-1">
                        <h3 class="text-2xl font-semibold text-heading">{{ $step }}</h3>
                        <p class="mt-4 leading-7 text-muted">
                            We carefully execute the <strong>{{ $step }}</strong> phase to ensure high-quality results, clear communication, and complete alignment with your business objectives.
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
