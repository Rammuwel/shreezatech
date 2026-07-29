@props([
    'faqs',
])

<section class="py-10">

    <div class="container m-auto">

        {{-- Heading --}}
        <div class="mx-auto max-w-3xl text-center">

            <span
                class="inline-flex items-center gap-2 rounded-full border  border-secondary/20 bg-secondary/10 px-4 py-2 text-sm font-medium text-secondary">

                <i class="fa-solid fa-circle-question"></i>

                Frequently Asked Questions

            </span>

            <h2 class="mt-5 text-4xl font-bold text-heading">

                Got Questions? We've Got Answers.

            </h2>

            <p class="mt-5 leading-8 text-muted">

                Here are answers to the questions we hear most often from our clients.

            </p>

        </div>

        {{-- FAQ Items --}}
        <div class="mx-auto my-10 max-w-7xl space-y-4">

            @foreach($faqs as $faq)

                <details class="group rounded-2xl border border-border bg-card p-6">

                    <summary class="flex cursor-pointer list-none items-center justify-between">

                        <h3 class="text-lg font-semibold text-heading">

                            {{ $faq['question'] }}

                        </h3>

                        <i class="fa-solid fa-plus text-primary transition duration-300 group-open:rotate-45"></i>

                    </summary>

                    <p class="mt-5 leading-7 text-muted">

                        {{ $faq['answer'] }}

                    </p>

                </details>

            @endforeach

        </div>

    </div>

</section>