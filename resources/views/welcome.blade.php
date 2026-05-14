<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO List | Home Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#050505] text-white antialiased">
    <div class="relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,_rgba(239,68,68,0.18),_transparent_35%),radial-gradient(circle_at_bottom_left,_rgba(248,113,113,0.12),_transparent_30%)] pointer-events-none"></div>

        <div class="relative mx-auto max-w-7xl px-6 py-16 sm:py-24">
            <header class="flex flex-col gap-10 lg:gap-16">
                <div class="grid gap-10 lg:grid-cols-[1.4fr_1fr] lg:items-center">
                    <div class="space-y-8">
                        <div class="inline-flex items-center rounded-full border border-red-500/20 bg-red-600/10 px-4 py-2 text-sm font-semibold uppercase tracking-[0.35em] text-red-300">
                            TODO List • Dark mode
                        </div>
                        <div>
                            <h1 class="text-5xl font-black tracking-tight text-white sm:text-6xl">A bold TODO homepage made for focus and speed.</h1>
                            <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">Bring every task into one cinematic workspace with contrast-rich red accents, elegant cards, and light speed productivity.</p>
                        </div>
                        <div class="flex flex-wrap gap-4">
                            <a href="/create-to-do" class="inline-flex items-center gap-2 rounded-full bg-red-600 px-6 py-3 text-base font-semibold text-white shadow-lg shadow-red-500/30 transition hover:bg-red-500">Get started <span data-lucide="chevron-right" class="h-5 w-5"></span></a>
                            <a href="#features" class="inline-flex items-center gap-2 rounded-full border border-red-600/50 bg-white/5 px-6 py-3 text-base font-semibold text-red-100 transition hover:border-red-400/70 hover:bg-red-600/10">View features <span data-lucide="arrow-right" class="h-5 w-5"></span></a>
                        </div>
                    </div>

                    <div class="rounded-[2rem] border border-white/10 bg-white/5 p-8 shadow-2xl shadow-black/40 backdrop-blur-xl">
                        <div class="flex items-center justify-between gap-4">
                            <div>
                                <p class="text-sm uppercase tracking-[0.35em] text-red-300">Daily mission</p>
                                <h2 class="mt-4 text-3xl font-semibold text-white">Finish your top 3 tasks.</h2>
                            </div>
                            <span class="inline-flex h-14 w-14 items-center justify-center rounded-3xl bg-red-600/15 text-red-400">
                                <span data-lucide="check-square" class="h-7 w-7"></span>
                            </span>
                        </div>

                        <div class="mt-8 space-y-4">
                            <div class="flex items-start gap-4 rounded-3xl bg-slate-950/80 p-4">
                                <span class="mt-1 inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-red-600/15 text-red-400">
                                    <span data-lucide="list-check" class="h-5 w-5"></span>
                                </span>
                                <div>
                                    <p class="font-semibold text-white">Smart task lists</p>
                                    <p class="mt-1 text-sm text-slate-400">Keep all your priorities visible with clean red progress cues.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 rounded-3xl bg-slate-950/80 p-4">
                                <span class="mt-1 inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-red-600/15 text-red-400">
                                    <span data-lucide="clock-3" class="h-5 w-5"></span>
                                </span>
                                <div>
                                    <p class="font-semibold text-white">Focus sessions</p>
                                    <p class="mt-1 text-sm text-slate-400">Stay on schedule with strong visual reminders and bold momentum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <section id="features" class="mt-20 grid gap-6 lg:grid-cols-3">
                <article class="group rounded-[1.75rem] border border-white/10 bg-white/5 p-8 transition hover:border-red-500/40 hover:bg-red-600/10">
                    <div class="inline-flex h-12 w-12 items-center justify-center rounded-3xl bg-red-600/15 text-red-400">
                        <span data-lucide="shield-check" class="h-6 w-6"></span>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-white">Secure planning</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-300">Keep your workflow private, organized, and easy to scan in a bold dark layout.</p>
                </article>
                <article class="group rounded-[1.75rem] border border-white/10 bg-white/5 p-8 transition hover:border-red-500/40 hover:bg-red-600/10">
                    <div class="inline-flex h-12 w-12 items-center justify-center rounded-3xl bg-red-600/15 text-red-400">
                        <span data-lucide="trending-up" class="h-6 w-6"></span>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-white">Fast progress</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-300">Track your wins with a layout tailored to momentum and quick decision-making.</p>
                </article>
                <article class="group rounded-[1.75rem] border border-white/10 bg-white/5 p-8 transition hover:border-red-500/40 hover:bg-red-600/10">
                    <div class="inline-flex h-12 w-12 items-center justify-center rounded-3xl bg-red-600/15 text-red-400">
                        <span data-lucide="calendar" class="h-6 w-6"></span>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-white">Daily routine</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-300">Build stronger daily habits with a homepage designed for recurring action.</p>
                </article>
            </section>
        </div>
    </div>
</body>
</html>
