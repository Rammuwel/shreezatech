<section class="relative pb-20 overflow-hidden">

    <!-- Decorative Glow -->
    <div class="absolute top-1/3 -left-24 h-72 w-72 rounded-full bg-primary/5 blur-[120px]"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Heading -->
        <div class="text-center mb-12">

            <span x-intersect="animate-fade-in-up" class="opacity-0 inline-flex rounded-full bg-secondary/10 px-4 py-2 text-xs font-semibold tracking-[0.3em] uppercase text-secondary">
                FAQ
            </span>

            <h2 x-intersect="animate-fade-in-up" class="opacity-0 mt-6 text-4xl sm:text-5xl font-bold text-heading">
                Frequently Asked
                <span class="bg-linear-to-r from-primary via-blue-400 to-secondary bg-clip-text text-transparent">
                    Questions
                </span>
            </h2>

            <p x-intersect="animate-fade-in-up" class="opacity-0 mt-6 mx-auto max-w-2xl leading-8 text-muted">
                Everything you need to know before starting your next digital project with Shreeza.
            </p>

        </div>

        <!-- FAQ -->
        <div class="grid gap-4 md:grid-cols-2">

            @foreach(collect($faqs)->chunk(ceil(count($faqs) / 2)) as $columnFaqs)

                <div class="space-y-4" x-data="{ open: null }">

                    @foreach($columnFaqs as $index => $faq)

                        <div x-intersect="animate-fade-in-up" style="animation-delay: {{ $loop->index * 80 }}ms" class="opacity-0 rounded-2xl border border-border bg-card transition-all duration-300 hover:border-primary/40">

                            <button
                                @click="open = open === {{ $index }} ? null : {{ $index }}"
                                :aria-expanded="open === {{ $index }}"
                                class="flex w-full items-center justify-between gap-4 p-6 text-left font-semibold text-heading transition-colors duration-300 hover:text-primary cursor-pointer">

                                <span>{{ $faq['question'] }}</span>

                                <i
                                    class="fa-solid shrink-0 text-primary transition-transform duration-300"
                                    :class="open === {{ $index }} ? 'fa-minus rotate-180' : 'fa-plus'">
                                </i>

                            </button>

                            <div
                                x-show="open === {{ $index }}"
                                x-collapse
                                class="px-6 pb-6 leading-7 text-muted">

                                {{ $faq['answer'] }}

                            </div>

                        </div>

                    @endforeach

                </div>

            @endforeach

        </div>

    </div>

</section>
