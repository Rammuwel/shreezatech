<section class="py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Heading -->
        <div class="mx-auto mb-16 max-w-3xl text-center">

            <span class="inline-flex rounded-full border border-primary/20 bg-primary/10 px-4 py-2 text-sm font-medium text-primary">
                Open Positions
            </span>

            <h2 class="mt-6 text-3xl sm:text-4xl font-bold text-heading lg:text-5xl">
                Explore Exciting Career Opportunities
            </h2>

            <p class="mt-5 text-lg text-muted">
                Explore exciting career opportunities and become part of a team
                building innovative digital solutions.
            </p>

        </div>

        <!-- Jobs -->
        <div class="space-y-6">

            @foreach([
                [
                    'title' => 'Backend Developer',
                    'tags' => 'Laravel • Livewire • MySQL',
                    'exp' => '3+ Years',
                    'loc' => 'Indore / Remote',
                    'time' => 'Full Time',
                ],
                [
                    'title' => 'Frontend Developer',
                    'tags' => 'React • Next.js • Tailwind CSS',
                    'exp' => '2+ Years',
                    'loc' => 'Remote',
                    'time' => 'Full Time',
                ],
                [
                    'title' => 'UI/UX Designer',
                    'tags' => 'Figma • Adobe XD • Prototyping',
                    'exp' => '2+ Years',
                    'loc' => 'Hybrid',
                    'time' => 'Full Time',
                ],
            ] as $job)
            <div class="group rounded-3xl border border-border bg-card p-8 transition duration-300 hover:-translate-y-1 hover:border-primary/40 hover:shadow-[0_20px_50px_rgba(0,0,0,.2)]">

                <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">

                    <div class="flex items-start gap-5">
                        <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-primary/10 text-primary text-2xl">
                            <i class="fa-solid fa-briefcase"></i>
                        </div>

                        <div>
                            <h3 class="text-2xl font-semibold text-heading group-hover:text-primary transition">
                                {{ $job['title'] }}
                            </h3>

                            <p class="mt-2 text-sm text-muted">
                                {{ $job['tags'] }}
                            </p>

                            <div class="mt-5 flex flex-wrap gap-4 text-sm text-muted">

                                <span class="inline-flex items-center gap-2 rounded-full border border-border bg-background px-3 py-1.5">
                                    <i class="fa-solid fa-briefcase text-primary"></i>
                                    {{ $job['exp'] }}
                                </span>

                                <span class="inline-flex items-center gap-2 rounded-full border border-border bg-background px-3 py-1.5">
                                    <i class="fa-solid fa-location-dot text-primary"></i>
                                    {{ $job['loc'] }}
                                </span>

                                <span class="inline-flex items-center gap-2 rounded-full border border-border bg-background px-3 py-1.5">
                                    <i class="fa-solid fa-clock text-primary"></i>
                                    {{ $job['time'] }}
                                </span>

                            </div>
                        </div>
                    </div>

                    <a href="#apply"
                        class="inline-flex shrink-0 items-center justify-center rounded-xl bg-primary px-6 py-3 font-medium text-white transition hover:bg-blue-600 hover:-translate-y-0.5">

                        Apply Now

                        <i class="fa-solid fa-arrow-right ml-2"></i>

                    </a>

                </div>

            </div>
            @endforeach

        </div>

        <!-- Button -->
        <div class="mt-14 text-center">

            <a href="#apply"
                class="inline-flex items-center rounded-xl border border-primary bg-primary px-8 py-4 font-semibold text-white transition hover:bg-blue-600">

                Apply for Open Positions

                <i class="fa-solid fa-arrow-right ml-3"></i>

            </a>

        </div>

    </div>
</section>
