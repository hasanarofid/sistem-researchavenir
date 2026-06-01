@props(['title', 'category', 'status' => 'Free', 'views' => 0])

<div class="bg-avenir-surface border border-gray-800 rounded-xl p-5 transition-all duration-300 hover:border-avenir-neon hover:shadow-neon-hover group cursor-pointer flex flex-col h-full">
    
    <!-- Top Meta -->
    <div class="flex justify-between items-start mb-4">
        <span class="text-xs font-semibold uppercase tracking-widest text-avenir-text-muted group-hover:text-gray-300 transition-colors">
            {{ $category }}
        </span>
        <x-avenir.badge-status :status="$status" />
    </div>

    <!-- Title -->
    <h3 class="text-lg font-bold text-gray-100 leading-snug mb-4 group-hover:text-avenir-neon transition-colors duration-300 flex-1">
        {{ $title }}
    </h3>

    <!-- Bottom Meta -->
    <div class="flex items-center justify-between text-sm text-gray-500 pt-4 border-t border-gray-800/50 mt-auto">
        <div class="flex items-center space-x-1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
            <span>{{ number_format($views) }}</span>
        </div>
        <div class="text-avenir-neon opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            Read <span class="font-mono">-></span>
        </div>
    </div>
</div>
