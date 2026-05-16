<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit TODO</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#050505] text-white antialiased">
    <div class="min-h-screen bg-[#050505] px-6 py-10 sm:px-10 lg:px-16">
        <div class="mx-auto max-w-6xl space-y-10">
            <header class="flex flex-col gap-6 rounded-[2rem] border border-white/10 bg-white/5 p-6 shadow-2xl shadow-black/30 backdrop-blur-xl sm:flex-row sm:items-center sm:justify-between">
                <div class="space-y-2">
                    <p class="text-sm uppercase tracking-[0.35em] text-red-300">TaskForge</p>
                    <h1 class="text-3xl font-black tracking-tight text-white sm:text-4xl">Edit your TODO</h1>
                    <p class="max-w-2xl text-sm leading-6 text-slate-400">Update the task details quickly with the same polished form styling.</p>
                </div>
                <div class="inline-flex items-center gap-3 rounded-full border border-red-500/20 bg-red-600/10 px-4 py-3 text-sm font-semibold text-red-100 shadow-sm shadow-red-500/10">
                    <span data-lucide="edit" class="h-5 w-5"></span>
                    Update task entry
                </div>
            </header>

            <main class="grid gap-8 xl:grid-cols-[1.3fr_0.9fr]">
                <section class="rounded-[2rem] border border-white/10 bg-white/5 p-8 shadow-2xl shadow-black/30 backdrop-blur-xl">
                    <div class="flex items-center justify-between gap-4">
                        <div>
                            <p class="text-xs uppercase tracking-[0.35em] text-red-300">Edit task</p>
                            <h2 class="mt-3 text-2xl font-semibold text-white">Task details</h2>
                        </div>
                        <span class="inline-flex h-12 w-12 items-center justify-center rounded-3xl bg-red-600/15 text-red-400">
                            <span data-lucide="clipboard" class="h-6 w-6"></span>
                        </span>
                    </div>

                    <form class="mt-10 space-y-6" action="/todo/{{ $todo->id }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="grid gap-6 sm:grid-cols-2">
                            <label class="block">
                                <span class="mb-2 block text-sm font-semibold text-slate-300">Task title</span>
                                <div class="relative rounded-3xl border border-white/10 bg-[#090909] px-4 py-3 focus-within:border-red-500/40">
                                    <span class="pointer-events-none absolute inset-y-0 left-4 flex items-center text-red-400">
                                        <span data-lucide="edit-3" class="h-5 w-5"></span>
                                    </span>
                                    <input type="text" name="title" id="todoTitle" value="{{ $todo->title }}" placeholder="Launch homepage redesign" class="w-full bg-transparent pl-12 text-sm text-white placeholder:text-slate-500 focus:outline-none" />
                                </div>
                            </label>

                            <label class="block">
                                <span class="mb-2 block text-sm font-semibold text-slate-300">Due date</span>
                                <div class="relative rounded-3xl border border-white/10 bg-[#090909] px-4 py-3 focus-within:border-red-500/40">
                                    <span class="pointer-events-none absolute inset-y-0 left-4 flex items-center text-red-400">
                                        <span data-lucide="calendar" class="h-5 w-5"></span>
                                    </span>
                                    <input type="date" name="due_date" id="todoDate" value="{{ $todo->due_date }}" class="w-full bg-transparent pl-12 text-sm text-white focus:outline-none" />
                                </div>
                            </label>
                        </div>

                        <div class="grid gap-6 sm:grid-cols-2">
                            <label class="block">
                                <span class="mb-2 block text-sm font-semibold text-slate-300">Priority</span>
                                <div class="rounded-3xl border border-white/10 bg-[#090909] px-4 py-3">
                                    <select id="todoBestOption" name="bestOption" class="w-full bg-[#090909] text-sm text-white outline-none">
    
                                        <option value="High" {{ $todo->bestOption == 'High' ? 'selected' : '' }}>
                                            High
                                        </option>

                                        <option value="Medium" {{ $todo->bestOption == 'Medium' ? 'selected' : '' }}>
                                            Medium
                                        </option>

                                        <option value="Low" {{ $todo->bestOption == 'Low' ? 'selected' : '' }}>
                                            Low
                                        </option>

                                    </select>
                                </div>
                            </label>

                            <label class="block">
                                <span class="mb-2 block text-sm font-semibold text-slate-300">Category</span>
                                <div class="relative rounded-3xl border border-white/10 bg-[#090909] px-4 py-3 focus-within:border-red-500/40">
                                    <span class="pointer-events-none absolute inset-y-0 left-4 flex items-center text-red-400">
                                        <span data-lucide="tag" class="h-5 w-5"></span>
                                    </span>
                                    <input type="text" id="todoCategory" name="category" value="{{ $todo->category }}" placeholder="Work, Personal" class="w-full bg-transparent pl-12 text-sm text-white placeholder:text-slate-500 focus:outline-none" />
                                </div>
                            </label>
                        </div>

                        <label class="block">
                            <span class="mb-2 block text-sm font-semibold text-slate-300">Task description</span>
                            <textarea id="todoDescription" rows="5" name="description" placeholder="Add more context for your task..." class="w-full rounded-[1.5rem] border border-white/10 bg-[#090909] px-4 py-4 text-sm text-white placeholder:text-slate-500 focus:border-red-500/40 focus:outline-none">{{ $todo->description }}</textarea>
                        </label>

                        <div>
                            <div class="rounded-3xl border border-white/10 bg-[#090909] p-4 text-sm text-slate-400">
                                <div class="flex items-center gap-3">
                                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-3xl bg-red-600/15 text-red-400">
                                        <span data-lucide="info" class="h-4 w-4"></span>
                                    </span>
                                    <p>Pro tip: keep titles short and action-oriented.</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-3">
                            <button type="submit" class="p-2 rounded-lg bg-red-600/20 text-red-400 hover:bg-red-600/40 transition">
                                Update
                            </button>
                            <a href="/view-all" class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-6 py-3 text-sm font-semibold text-slate-200 transition hover:border-red-500/40 hover:bg-red-600/10">
                                <span data-lucide="chevron-left" class="h-4 w-4"></span>
                                Cancel
                            </a>
                        </div>
                    </form>
                </section>

                <aside class="space-y-6">
                    <div class="rounded-[2rem] border border-white/10 bg-white/5 p-6 shadow-lg shadow-black/20 backdrop-blur-xl">
                        <div class="flex items-center justify-between gap-3">
                            <div>
                                <p class="text-xs uppercase tracking-[0.35em] text-red-300">Quick summary</p>
                                <h3 class="mt-2 text-xl font-semibold text-white">Need a change?</h3>
                            </div>
                            <span class="inline-flex h-12 w-12 items-center justify-center rounded-3xl bg-red-600/15 text-red-400">
                                <span data-lucide="refresh-cw" class="h-6 w-6"></span>
                            </span>
                        </div>

                        <div class="mt-8 grid gap-4">
                            <div class="rounded-3xl border border-white/10 bg-[#090909] p-4">
                                <p class="text-sm text-slate-400">Keep your task updated</p>
                                <p class="mt-2 text-2xl font-bold text-white">Stay on top of progress</p>
                            </div>
                            <div class="rounded-3xl border border-white/10 bg-[#090909] p-4">
                                <p class="text-sm text-slate-400">Use the right category</p>
                                <p class="mt-2 text-2xl font-bold text-white">Sort tasks faster</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-[2rem] border border-white/10 bg-white/5 p-6 shadow-lg shadow-black/20 backdrop-blur-xl">
                        <p class="text-xs uppercase tracking-[0.35em] text-red-300">Hints</p>
                        <ul class="mt-4 space-y-3 text-sm text-slate-300">
                            <li class="flex items-center gap-3 rounded-3xl bg-[#090909] px-4 py-3">
                                <span data-lucide="check-circle" class="h-4 w-4 text-red-400"></span>
                                Update due dates when priorities shift.
                            </li>
                            <li class="flex items-center gap-3 rounded-3xl bg-[#090909] px-4 py-3">
                                <span data-lucide="tag" class="h-4 w-4 text-red-400"></span>
                                Keep category names consistent.
                            </li>
                            <li class="flex items-center gap-3 rounded-3xl bg-[#090909] px-4 py-3">
                                <span data-lucide="zap" class="h-4 w-4 text-red-400"></span>
                                Prioritize tasks with meaningful impact.
                            </li>
                        </ul>
                    </div>
                    <div class="rounded-[2rem] border border-white/10 bg-white/5 p-6 shadow-lg flex items-center justify-between shadow-black/20 backdrop-blur-xl">
                        <a href="/view-all" class="text-red-500 underline hover:text-red-700">Back To All Tasks</a>
                        <a href="/" class="inline-flex items-center gap-2 text-sm font-semibold text-red-100 hover:text-red-300">
                            <span data-lucide="home" class="h-4 w-4"></span>
                            Home
                        </a>
                    </div>
                </aside>
            </main>
        </div>
    </div>
</body>
</html>
