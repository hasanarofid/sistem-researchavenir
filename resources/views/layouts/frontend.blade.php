<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ResearchAvenir - Futuristic Cyberpunk')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS (Vite) -->
    @vite(['resources/css/app.css'])
    
    <style>
        /* Custom Scrollbar for Hacker Aesthetic */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: var(--color-avenir-bg); }
        ::-webkit-scrollbar-thumb { background: var(--color-avenir-surface-hover); border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: var(--color-avenir-neon); }
    </style>
</head>
<body class="bg-avenir-bg text-gray-100 font-sans antialiased min-h-screen flex flex-col">

    <!-- Top Navbar (Public) -->
    <header class="h-16 border-b border-gray-800 bg-avenir-surface/80 backdrop-blur-md flex items-center justify-between px-6 sticky top-0 z-50">
        <!-- Logo -->
        <div class="flex items-center space-x-8">
            <a href="/">
                <img src="{{ asset('images/logo.png') }}" alt="ResearchAvenir Logo" class="h-6 md:h-8 w-auto">
            </a>
            
            <!-- Navigation Links -->
            <nav class="hidden md:flex items-center space-x-6">
                <a href="/" class="text-sm font-medium text-gray-300 hover:text-avenir-neon transition">Beranda</a>
                <a href="/katalog" class="text-sm font-medium text-gray-300 hover:text-avenir-neon transition">Katalog Riset</a>
                <a href="/artikel" class="text-sm font-medium text-gray-300 hover:text-avenir-neon transition">Artikel & News</a>
            </nav>
        </div>

        <div class="flex items-center space-x-6">
            @yield('topbar-search')
            <div class="h-6 w-px bg-gray-700 hidden md:block"></div>
            <!-- Auth Links -->
            <a href="/login" class="text-sm font-medium text-gray-300 hover:text-white transition">Sign In</a>
            <a href="/register" class="text-sm font-medium px-4 py-2 bg-avenir-neon/10 text-avenir-neon border border-avenir-neon rounded-lg hover:bg-avenir-neon hover:text-avenir-bg transition shadow-[0_0_10px_rgba(16,185,129,0.2)]">
                Daftar
            </a>
            <a href="/admin" class="text-sm font-medium text-avenir-neon hover:text-white transition hidden md:block" title="Admin Dashboard">
                Admin
            </a>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-1 w-full max-w-7xl mx-auto p-6 md:p-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="border-t border-gray-800 py-8 mt-auto">
        <div class="max-w-7xl mx-auto px-6 text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} ResearchAvenir. All rights reserved.
        </div>
    </footer>

</body>
</html>
