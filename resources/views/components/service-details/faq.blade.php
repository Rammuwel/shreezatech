@props(['service'])

<section class="relative py-10 overflow-hidden">

    <div class="container relative mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Heading -->

        <div class="mx-auto mb-10 max-w-3xl text-center">

            <span
                class="inline-flex items-center gap-2 rounded-full border border-secondary/20 bg-secondary/10 px-4 py-2 text-sm font-medium text-secondary">

                <i class="fa-solid fa-circle-question"></i>

                Frequently Asked Questions

            </span>

            <h2 class="mt-5 text-4xl font-bold text-heading lg:text-5xl">

                Have Questions? We've Got Answers

            </h2>

            <p class="mt-5 text-lg leading-8 text-muted">

                Here are answers to the most common questions about our
                {{ $service['name'] }} service.

            </p>

        </div>

        <!-- FAQ -->

        <div class="mx-auto w-full space-y-6">

            @foreach ($service['faqs'] as $faq)

                <div
                    x-data="{ open: false }"
                    class="rounded-3xl border border-border bg-card overflow-hidden">

                    <button
                        @click="open = !open"
                        class="flex w-full items-center justify-between p-6 text-left">

                        <h3 class="text-lg font-semibold text-heading">

                            {{ $faq['question'] }}

                        </h3>

                        <i
                            class="fa-solid fa-plus text-primary transition duration-300"
                            :class="{ 'rotate-45': open }">
                        </i>

                    </button>

                    <div
                        x-show="open"
                        x-collapse>

                        <div class="border-t border-border px-6 py-5">

                            <p class="leading-8 text-muted">

                                {{ $faq['answer'] }}

                            </p>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>