@extends('layouts.dashboard')

@section('title', 'Admin Dashboard - ResearchAvenir')

@section('sidebar')
    <nav class="space-y-1">
        <x-avenir.sidebar-item icon="📊" label="Overview" href="/admin" active="true" />
        <x-avenir.sidebar-item icon="📝" label="Manajemen Riset" href="#" />
        <x-avenir.sidebar-item icon="📰" label="Manajemen Artikel" href="#" />
        <x-avenir.sidebar-item icon="👥" label="Pengguna" href="#" />
        <x-avenir.sidebar-item icon="⚙️" label="Pengaturan" href="#" />
    </nav>
@endsection

@section('topbar-search')
    <div class="relative w-full max-w-md hidden md:block">
        <input type="text" placeholder="Cari data admin..." class="w-full bg-gray-900 border border-gray-700 text-gray-300 text-sm rounded-lg focus:ring-avenir-neon focus:border-avenir-neon block w-full pl-4 p-2.5 outline-none transition" />
    </div>
@endsection

@section('content')
    <!-- Header Page -->
    <div class="mb-8">
        <h2 class="text-3xl font-bold text-white mb-2">Admin <span class="text-avenir-neon">Dashboard</span></h2>
        <p class="text-gray-400">Ringkasan operasional dan statistik platform Avenir.</p>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-avenir-surface border border-gray-800 rounded-xl p-6 relative overflow-hidden">
            <div class="absolute -right-4 -top-4 w-24 h-24 bg-avenir-neon/10 rounded-full blur-xl"></div>
            <div class="text-gray-400 text-sm font-medium mb-1">Total Users</div>
            <div class="text-3xl font-bold text-white font-mono">{{ number_format($stats['users']) }}</div>
        </div>
        
        <div class="bg-avenir-surface border border-gray-800 rounded-xl p-6 relative overflow-hidden">
            <div class="absolute -right-4 -top-4 w-24 h-24 bg-blue-500/10 rounded-full blur-xl"></div>
            <div class="text-gray-400 text-sm font-medium mb-1">Total Riset</div>
            <div class="text-3xl font-bold text-white font-mono">{{ number_format($stats['researches']) }}</div>
        </div>

        <div class="bg-avenir-surface border border-gray-800 rounded-xl p-6 relative overflow-hidden">
            <div class="absolute -right-4 -top-4 w-24 h-24 bg-purple-500/10 rounded-full blur-xl"></div>
            <div class="text-gray-400 text-sm font-medium mb-1">Total Artikel</div>
            <div class="text-3xl font-bold text-white font-mono">{{ number_format($stats['articles']) }}</div>
        </div>

        <div class="bg-avenir-surface border border-gray-800 rounded-xl p-6 relative overflow-hidden">
            <div class="absolute -right-4 -top-4 w-24 h-24 bg-avenir-neon/10 rounded-full blur-xl"></div>
            <div class="text-gray-400 text-sm font-medium mb-1">Total Views</div>
            <div class="text-3xl font-bold text-white font-mono">{{ number_format($stats['views']) }}</div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Riset Terbaru -->
        <div class="bg-avenir-surface border border-gray-800 rounded-xl p-6">
            <h3 class="text-lg font-bold text-white mb-4 border-b border-gray-800 pb-2">Riset Terbaru</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-400">
                    <thead class="text-xs text-avenir-neon uppercase bg-gray-900/50">
                        <tr>
                            <th scope="col" class="px-4 py-3 rounded-l-lg">Judul</th>
                            <th scope="col" class="px-4 py-3">Sektor</th>
                            <th scope="col" class="px-4 py-3 rounded-r-lg">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($researches as $research)
                        <tr class="border-b border-gray-800 hover:bg-gray-800/50 transition">
                            <td class="px-4 py-3 font-medium text-white line-clamp-1">{{ $research->title }}</td>
                            <td class="px-4 py-3">{{ $research->sector }}</td>
                            <td class="px-4 py-3">{{ \Carbon\Carbon::parse($research->date)->format('d/m/Y') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="px-4 py-3 text-center">Data kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Artikel Terbaru -->
        <div class="bg-avenir-surface border border-gray-800 rounded-xl p-6">
            <h3 class="text-lg font-bold text-white mb-4 border-b border-gray-800 pb-2">Artikel Terbaru</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-400">
                    <thead class="text-xs text-avenir-neon uppercase bg-gray-900/50">
                        <tr>
                            <th scope="col" class="px-4 py-3 rounded-l-lg">Judul</th>
                            <th scope="col" class="px-4 py-3">Status</th>
                            <th scope="col" class="px-4 py-3 rounded-r-lg">Author</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($articles as $article)
                        <tr class="border-b border-gray-800 hover:bg-gray-800/50 transition">
                            <td class="px-4 py-3 font-medium text-white line-clamp-1">{{ $article->title }}</td>
                            <td class="px-4 py-3">
                                <span class="px-2 py-1 bg-{{ $article->status == 'published' ? 'avenir-neon' : 'gray-600' }}/20 text-{{ $article->status == 'published' ? 'avenir-neon' : 'gray-400' }} rounded text-xs">
                                    {{ ucfirst($article->status) }}
                                </span>
                            </td>
                            <td class="px-4 py-3">{{ $article->author ?? '-' }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="px-4 py-3 text-center">Data kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
