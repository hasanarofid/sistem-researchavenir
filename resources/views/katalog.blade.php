@extends('layouts.frontend')

@section('title', 'Katalog Riset - ResearchAvenir')

@section('sidebar')
    <nav class="space-y-1">
        <x-avenir.sidebar-item active="true" label="Semua Riset" />
        <x-avenir.sidebar-item label="Macro Outlook" />
        <x-avenir.sidebar-item label="Emiten Deep Dive" />
        <x-avenir.sidebar-item label="Sektoral Analysis" />
    </nav>
    
    <div class="px-6 mt-8">
        <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-widest mb-4">Akses</h3>
        <div class="space-y-2 text-sm text-gray-400">
            <label class="flex items-center space-x-3 cursor-pointer hover:text-gray-200">
                <input type="checkbox" class="form-checkbox h-4 w-4 text-avenir-neon bg-gray-800 border-gray-700 rounded focus:ring-avenir-neon focus:ring-offset-avenir-bg">
                <span>Premium Only</span>
            </label>
            <label class="flex items-center space-x-3 cursor-pointer hover:text-gray-200">
                <input type="checkbox" class="form-checkbox h-4 w-4 text-avenir-neon bg-gray-800 border-gray-700 rounded focus:ring-avenir-neon focus:ring-offset-avenir-bg">
                <span>Free Access</span>
            </label>
        </div>
    </div>
@endsection

@section('topbar-search')
    <div class="relative w-full max-w-md">
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <svg class="h-5 w-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        <input type="text" class="block w-full pl-10 pr-3 py-2 border border-gray-700 rounded-lg leading-5 bg-gray-800/50 text-gray-300 placeholder-gray-500 focus:outline-none focus:bg-avenir-surface focus:border-avenir-neon focus:ring-1 focus:ring-avenir-neon sm:text-sm transition-colors" placeholder="Cari emiten, sektor, atau kata kunci...">
    </div>
@endsection

@section('content')
    <div class="flex justify-between items-end mb-8">
        <div>
            <h2 class="text-3xl font-bold text-white mb-2">Intelijen <span class="text-avenir-neon">Pasar</span></h2>
            <p class="text-gray-400">Temukan insight riset mendalam berbasis data.</p>
        </div>
        <x-avenir.button variant="outline">
            Filter Lanjutan
        </x-avenir.button>
    </div>

    <!-- Grid Layout 3 Kolom -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        @forelse($researches as $research)
        <x-avenir.card-research 
            :title="$research->title" 
            :category="$research->sector" 
            :status="$loop->index % 2 == 0 ? 'Premium' : 'Free'" 
            :views="rand(1000, 9999)" 
        />
        @empty
        <div class="col-span-full text-center py-10 text-gray-500">
            Belum ada riset yang tersedia.
        </div>
        @endforelse

    </div>
@endsection
