<a {{ $attributes->merge([
    'class' => 'inline-flex items-center gap-2 rounded-full bg-red-600 px-6 py-2 cursor-pointer text-sm font-semibold text-white hover:bg-red-500',
]) }}>
    {{ $slot }}
</a>