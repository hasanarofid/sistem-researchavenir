@extends('layouts.frontend')

@section('title', 'Artikel & News - ResearchAvenir')

@section('sidebar')
    <nav class="space-y-1">
        <x-avenir.sidebar-item icon="📰" label="Semua Artikel" href="#" active="true" />
        <x-avenir.sidebar-item icon="📈" label="Market News" href="#" />
        <x-avenir.sidebar-item icon="📚" label="Edukasi Riset" href="#" />
        <x-avenir.sidebar-item icon="💡" label="Insight Avenir" href="#" />
    </nav>
@endsection

@section('topbar-search')
    <div class="relative w-full max-w-md hidden md:block">
        <input type="text" placeholder="Cari artikel, berita, atau panduan..." class="w-full bg-gray-900 border border-gray-700 text-gray-300 text-sm rounded-lg focus:ring-avenir-neon focus:border-avenir-neon block w-full pl-4 p-2.5 outline-none transition" />
    </div>
@endsection

@section('content')
    <!-- Header Page -->
    <div class="mb-8">
        <h2 class="text-3xl font-bold text-white mb-2">Market <span class="text-avenir-neon">News & Artikel</span></h2>
        <p class="text-gray-400">Pembaruan terkini seputar pasar modal dan wawasan eksklusif.</p>
    </div>

    <!-- Grid Layout -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($articles as $article)
        <div class="bg-avenir-bg/50 border border-gray-800 rounded-xl overflow-hidden hover:shadow-neon hover:border-avenir-neon transition-all duration-300 group flex flex-col h-full">
            <div class="h-48 bg-gray-800 relative overflow-hidden">
                <!-- Fallback Image for Cyberpunk feel -->
                <div class="absolute inset-0 bg-gradient-to-br from-gray-800 to-black group-hover:scale-105 transition-transform duration-500"></div>
                <div class="absolute top-4 left-4">
                    <x-avenir.badge-status :status="$article->status == 'published' ? 'Free' : 'Premium'" />
                </div>
            </div>
            
            <div class="p-6 flex flex-col flex-grow">
                <div class="text-xs text-avenir-neon font-mono mb-2 uppercase tracking-wider">{{ $article->category ?? 'Market Update' }}</div>
                <h3 class="text-lg font-semibold text-white mb-3 group-hover:text-avenir-neon transition-colors line-clamp-2">
                    {{ $article->title }}
                </h3>
                <p class="text-sm text-gray-400 mb-4 line-clamp-3">
                    {!! Str::limit(strip_tags($article->content), 120) !!}
                </p>
                
                <div class="mt-auto pt-4 border-t border-gray-800 flex items-center justify-between">
                    <div class="text-xs text-gray-500 font-mono">
                        {{ $article->created_at->format('d M Y') }}
                    </div>
                    <a href="#" class="text-sm text-avenir-neon hover:text-white font-medium flex items-center">
                        Baca Selengkapnya
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-full text-center py-10 text-gray-500">
            Belum ada artikel yang dipublikasikan.
        </div>
        @endforelse
    </div>
@endsection
