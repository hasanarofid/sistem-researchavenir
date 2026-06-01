@props(['active' => false, 'icon' => null, 'label'])

<a {{ $attributes->merge(['class' => 'flex items-center px-6 py-3 transition-colors duration-200 relative group cursor-pointer ' . ($active ? 'text-avenir-neon bg-avenir-surface-hover' : 'text-gray-400 hover:text-gray-200 hover:bg-gray-800/50')]) }}>
    
    <!-- Active Indicator Line -->
    @if($active)
        <span class="absolute left-0 top-0 bottom-0 w-1 bg-avenir-neon shadow-[0_0_8px_#10B981]"></span>
    @else
        <span class="absolute left-0 top-0 bottom-0 w-1 bg-transparent group-hover:bg-gray-600 transition-colors"></span>
    @endif

    @if($icon)
        <span class="mr-3">{!! $icon !!}</span>
    @endif
    
    <span class="font-medium text-sm">{{ $label }}</span>
</a>
