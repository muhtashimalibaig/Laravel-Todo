<a {{ 

$attributes->merge([
    'class' => 'inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm font-semibold text-slate-200 transition hover:border-red-500/40 hover:bg-red-600/10'
])

}}>

{{ $slot }}

</a>