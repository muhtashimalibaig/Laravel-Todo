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
                    <x-button href="/create-to-do">
                        <x-icon name="plus" class="h-4 w-4" />
                        Add A Task
                    </x-button>
                </div>
            </header>

            <main class="rounded-[2rem] border border-white/10 bg-white/5 p-8 shadow-2xl shadow-black/30 backdrop-blur-xl">
                <div class="flex flex-col gap-4 mb-8 md:flex-row md:items-center md:justify-between">
                    <div>
                        <p class="text-xs uppercase tracking-[0.35em] text-red-300">Task list</p>
                        <h2 class="mt-3 text-2xl font-semibold text-white">Your active tasks</h2>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="relative w-full max-w-md">
                            <label for="search" class="sr-only">Search tasks</label>
                            <input id="search" type="search" placeholder="Search Tasks Title" class="w-full rounded-full border border-white/10 bg-[#090909] py-3 pl-12 pr-10 text-sm text-white placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-red-500" />
                            <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-red-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                            </span>
                            <button id="clearSearch" type="button" class="absolute inset-y-0 right-1 hidden items-center rounded-full px-3 text-sm text-slate-400 hover:text-red-400">Clear</button>
                        </div>

                        <span class="inline-flex h-12 w-12 items-center justify-center rounded-3xl bg-red-600/15 text-red-400">
                            <x-icon name="list-check" class="h-6 w-6" />
                        </span>
                    </div>
                </div>

                <div class="space-y-4" id="todoList"></div>

                <div class="mt-8 text-center">
                    <p class="text-sm text-slate-400">Add more tasks? <a href="/create-to-do" class="text-red-400 hover:text-red-300 transition">Create a new one</a></p>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
