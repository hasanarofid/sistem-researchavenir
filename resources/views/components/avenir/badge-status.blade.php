@props(['status'])

@php
    $isPremium = strtolower($status) === 'premium';
    $colorClass = $isPremium 
        ? 'bg-avenir-neon/10 text-avenir-neon border border-avenir-neon/30' 
        : 'bg-gray-800 text-gray-400 border border-gray-700';
@endphp

<span class="px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider rounded-md {{ $colorClass }}">
    {{ $status }}
</span>
