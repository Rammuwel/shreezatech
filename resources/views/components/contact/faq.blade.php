<section class="mb-20">

    <div class="max-w-7xl mx-auto px-6">

        <!-- Heading -->

        <div class="text-center mb-10">

            <span
                class="text-secondary
                uppercase
                tracking-[0.3em]
                text-xs
                font-bold">

                FAQ

            </span>

            <h2
                class="mt-2
                text-5xl
                font-bold
                text-text">

                Frequently Asked Questions

            </h2>

            <p
                class="mt-2
                text-muted
                max-w-2xl
                mx-auto
                leading-8">

                Everything you need to know before
                starting your next digital project with
                Shreeza.

            </p>

        </div>

        <!-- FAQ -->

        <div class="grid gap-4 md:grid-cols-2">

            @foreach(collect($faqs)->chunk(ceil(count($faqs) / 2)) as $columnFaqs)

                <div class="space-y-4" x-data="{ open: null }">

                    @foreach($columnFaqs as $index => $faq)

                        <div class="rounded-2xl border border-border bg-card">

                            <button
                                @click="open = open === {{ $index }} ? null : {{ $index }}"
                                class="flex w-full items-center justify-between p-6 text-text">

                                <span>{{ $faq['question'] }}</span>

                                <i
                                    class="fa-solid"
                                    :class="open === {{ $index }} ? 'fa-minus' : 'fa-plus'">
                                </i>

                            </button>

                            <div
                                x-show="open === {{ $index }}"
                                x-collapse
                                class="px-6 pb-6 text-muted">

                                {{ $faq['answer'] }}

                            </div>

                        </div>

                    @endforeach

                </div>

            @endforeach

        </div>

    </div>

</section>