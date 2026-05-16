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

                   <div class="flex items-center gap-3">

                        <!-- SEARCH FORM -->
                        <form method="GET" action="/view-all" class="relative w-full max-w-md">
                            <label for="search" class="sr-only">Search tasks</label>
                            <span class="pointer-events-none absolute inset-y-0 left-4 flex items-center text-red-400">
                                <x-icon name="search" class="h-4 w-4" />
                            </span>
                            <input
                                id="search"
                                name="search"
                                type="search"
                                placeholder="Search tasks title"
                                value="{{ request('search') }}"
                                class="w-full rounded-full border border-white/10 bg-[#090909] py-3 pl-12 pr-28 text-sm text-white placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-red-500"
                            />

                            @if(request('search'))
                                <a href="/view-all" class="absolute inset-y-0 right-1 inline-flex items-center rounded-full bg-white/5 px-3 text-xs font-semibold text-slate-300 transition hover:bg-red-600/20 hover:text-white">
                                    Clear
                                </a>
                            @else
                                <button type="submit" class="absolute cursor-pointer inset-y-0 right-1 inline-flex items-center rounded-full bg-red-600 px-5 py-1 text-xs font-semibold text-white transition hover:bg-red-500">
                                    Search
                                </button>
                            @endif
                        </form>

                    </div>
                </div>

                <div class="space-y-4" id="todoList">

                @foreach ($todos as $todo)
                    <div class="p-4 rounded-xl border border-white/10 bg-[#0b0b0b] hover:bg-[#111111] transition">
                        <div class="flex items-start justify-between mb-3">
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-white">
                                    {{ $todo->title }}
                                </h3>
                            </div>
                            <div class="flex items-center gap-2 ml-4">
                                <a href="/edit-to-do/{{ $todo->id }}" class="p-2 rounded-lg bg-green-600/20 text-green-400 hover:bg-green-600/40 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <form action="/todo/{{ $todo->id }}" method="POST" style="display:inline;" onsubmit="alert('Are you sure to Delete this Todo?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="p-2 rounded-lg cursor-pointer bg-red-600/20 text-red-400 hover:bg-red-600/40 transition">
                                        <x-icon name="trash" class="h-4 w-4"></x-icon>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <p class="text-sm text-slate-400 mb-4">
                            {{ $todo->description }}
                        </p>

                        <div class="flex flex-wrap gap-4 text-sm mb-4">
                            @if ($todo->due_date)
                                <div class="flex items-center gap-2">
                                    <x-icon name="calendar" class="h-4 w-4 text-slate-500" />
                                    <span class="text-slate-300">{{ $todo->due_date }}</span>
                                </div>
                            @endif
                            @if ($todo->category)
                                <div class="flex items-center gap-2">
                                    <span class="text-slate-300 bg-red-600/20 text-red-300 px-2 py-1 rounded">{{ $todo->category }}</span>
                                </div>
                            @endif
                        </div>

                        @if ($todo->bestOption)
                            <div class="flex items-center gap-2 text-sm">
                                <span class="text-yellow-400">⭐</span>
                                <span class="text-slate-300">Priority: {{ $todo->bestOption }}</span>
                            </div>
                        @endif

                    </div>
                @endforeach
                
                
                </div>

                <div class="mt-8 text-center">
                    <p class="text-sm text-slate-400">Add more tasks? <a href="/create-to-do" class="text-red-400 hover:text-red-300 transition">Create a new one</a></p>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
