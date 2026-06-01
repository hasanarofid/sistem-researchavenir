@props(['variant' => 'solid'])

@php
    $baseClasses = 'inline-flex items-center justify-center px-4 py-2 font-semibold text-sm rounded-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-avenir-bg';
    
    $variants = [
        'solid' => 'bg-avenir-neon text-avenir-bg hover:bg-emerald-400 focus:ring-avenir-neon shadow-neon hover:shadow-neon-hover',
        'outline' => 'border border-avenir-neon text-avenir-neon hover:bg-avenir-neon/10 focus:ring-avenir-neon',
    ];

    $classes = $baseClasses . ' ' . ($variants[$variant] ?? $variants['solid']);
@endphp

<button {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
