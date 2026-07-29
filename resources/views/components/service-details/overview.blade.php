@props(['service'])

<section id="overview" class="relative py-10 overflow-hidden">

    <!-- Background Glow -->
    <!--  <div class="absolute -left-32 top-20 h-72 w-72 rounded-full bg-primary/10 blur-[120px]"></div>
    <div class="absolute -right-32 bottom-0 h-72 w-72 rounded-full bg-secondary/10 blur-[120px]"></div>
     -->
    <div class="container relative max-w-7xl m-auto">

        <div class="grid items-center gap-16 lg:grid-cols-2">

            <!-- Left Content -->
            <div>

                <span
                    class="inline-flex items-center gap-2 rounded-full border border-secondary/20 bg-secondary/10 px-4 py-2 text-sm font-medium text-secondary">

                    <i class="fa-solid fa-circle-info"></i>

                    About This Service

                </span>

                <h2 class="mt-5 text-4xl font-bold text-white lg:text-5xl">

                    {{ $service['overview']['title'] }}

                </h2>

                <p class="mt-5 text-lg leading-8 text-muted">

                    {{ $service['overview']['description'] }}

                </p>

                <!-- Benefits -->

                <div class="mt-5 grid gap-5 sm:grid-cols-2">

                    @foreach ($service['benefits'] as $benefit)

                        <div
                            class="group flex items-center gap-4 rounded-2xl border border-border bg-card p-4 transition hover:border-primary/30 hover:bg-primary/5">

                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary">

                                <i class="fa-solid fa-check"></i>

                            </div>

                            <span class="font-medium text-white">

                                {{ $benefit }}

                            </span>

                        </div>

                    @endforeach

                </div>

            </div>

            <!-- Right Side -->

            <div class="grid grid-cols-2 gap-6">

                <div
                    class="rounded-3xl border border-border bg-card p-8 text-center transition hover:-translate-y-2 hover:border-primary/30">

                    <div class="text-5xl font-bold text-primary">

                        150+

                    </div>

                    <p class="mt-3 text-muted">

                        Projects Delivered

                    </p>

                </div>

                <div
                    class="rounded-3xl border border-border bg-card p-8 text-center transition hover:-translate-y-2 hover:border-secondary/30">

                    <div class="text-5xl font-bold text-secondary">

                        99%

                    </div>

                    <p class="mt-3 text-muted">

                        Client Satisfaction

                    </p>

                </div>

                <div
                    class="rounded-3xl border border-border bg-card p-8 text-center transition hover:-translate-y-2 hover:border-primary/30">

                    <div class="text-5xl font-bold text-primary">

                        8+

                    </div>

                    <p class="mt-3 text-muted">

                        Years Experience

                    </p>

                </div>

                <div
                    class="rounded-3xl border border-border bg-card p-8 text-center transition hover:-translate-y-2 hover:border-secondary/30">

                    <div class="text-5xl font-bold text-secondary">

                        24/7

                    </div>

                    <p class="mt-3 text-muted">

                        Support

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>