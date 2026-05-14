<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Tasks</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#050505] text-white antialiased">
    <div class="min-h-screen bg-[#050505] px-6 py-10 sm:px-10 lg:px-16">
        <div class="mx-auto max-w-6xl space-y-10">
            <header class="flex flex-col gap-6 rounded-[2rem] border border-white/10 bg-white/5 p-6 shadow-2xl shadow-black/30 backdrop-blur-xl sm:flex-row sm:items-center sm:justify-between">
                <div class="space-y-2">
                    <p class="text-sm uppercase tracking-[0.35em] text-red-300">TaskForge</p>
                    <h1 class="text-3xl font-black tracking-tight text-white sm:text-4xl">All your tasks at a glance</h1>
                    <p class="max-w-2xl text-sm leading-6 text-slate-400">Manage, prioritize, and conquer your TODO list with a sleek dark interface.</p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <x-secondary href="/">
                        <x-icon name="home" class="h-4 w-4" />
                        Back to Home
                    </x-secondary>
                    <x-button>
                        <x-icon name="plus" class="h-4 w-4" />
                        Add A Task
                    </x-button>
                </div>
            </header>

            <main class="rounded-[2rem] border border-white/10 bg-white/5 p-8 shadow-2xl shadow-black/30 backdrop-blur-xl">
                <div class="flex items-center justify-between gap-4 mb-8">
                    <div>
                        <p class="text-xs uppercase tracking-[0.35em] text-red-300">Task list</p>
                        <h2 class="mt-3 text-2xl font-semibold text-white">Your active tasks</h2>
                    </div>
                    <span class="inline-flex h-12 w-12 items-center justify-center rounded-3xl bg-red-600/15 text-red-400">
                        <x-icon name="list-check" class="h-6 w-6" />
                    </span>
                </div>

                <div class="space-y-4">
                    <!-- Example task items - replace with dynamic content -->
                    <div class="rounded-[1.75rem] border border-white/10 bg-[#090909] p-6 transition hover:border-red-500/20">
                        <div class="flex items-center justify-between gap-4">
                            <div class="flex items-center gap-4">
                                <span class="inline-flex h-10 w-10 items-center justify-center rounded-3xl bg-red-600/15 text-red-400">
                                    <x-icon name="check-circle" class="h-5 w-5" />
                                </span>
                                <div>
                                    <p class="font-semibold text-white">Finish homepage redesign</p>
                                    <p class="text-sm text-slate-400">Due today • High priority</p>
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <button class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/5 text-slate-400 transition hover:bg-red-600/15 hover:text-red-400">
                                    <x-icon name="edit" class="h-4 w-4" />
                                </button>
                                <button class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/5 text-slate-400 transition hover:bg-red-600/15 hover:text-red-400">
                                    <x-icon name="trash-2" class="h-4 w-4" />
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-[1.75rem] border border-white/10 bg-[#090909] p-6 transition hover:border-red-500/20">
                        <div class="flex items-center justify-between gap-4">
                            <div class="flex items-center gap-4">
                                <span class="inline-flex h-10 w-10 items-center justify-center rounded-3xl bg-slate-600/15 text-slate-400">
                                    <x-icon name="circle" class="h-5 w-5" />
                                </span>
                                <div>
                                    <p class="font-semibold text-white">Plan next sprint</p>
                                    <p class="text-sm text-slate-400">Due tomorrow • Medium priority</p>
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <button class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/5 text-slate-400 transition hover:bg-red-600/15 hover:text-red-400">
                                    <x-icon name="edit" class="h-4 w-4" />
                                </button>
                                <button class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/5 text-slate-400 transition hover:bg-red-600/15 hover:text-red-400">
                                    <x-icon name="trash-2" class="h-4 w-4" />
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-[1.75rem] border border-white/10 bg-[#090909] p-6 transition hover:border-red-500/20">
                        <div class="flex items-center justify-between gap-4">
                            <div class="flex items-center gap-4">
                                <span class="inline-flex h-10 w-10 items-center justify-center rounded-3xl bg-slate-600/15 text-slate-400">
                                    <x-icon name="circle" class="h-5 w-5" />
                                </span>
                                <div>
                                    <p class="font-semibold text-white">Review project documentation</p>
                                    <p class="text-sm text-slate-400">Due in 3 days • Low priority</p>
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <button class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/5 text-slate-400 transition hover:bg-red-600/15 hover:text-red-400">
                                    <x-icon name="edit" class="h-4 w-4" />
                                </button>
                                <button class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/5 text-slate-400 transition hover:bg-red-600/15 hover:text-red-400">
                                    <x-icon name="trash-2" class="h-4 w-4" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 text-center">
                    <p class="text-sm text-slate-400">No more tasks? <a href="/create-to-do" class="text-red-400 hover:text-red-300 transition">Create a new one</a></p>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
