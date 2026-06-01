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
        ::-webkit-scrollbar-track { background: #0B0F19; }
        ::-webkit-scrollbar-thumb { background: #1F2937; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #10B981; }
    </style>
</head>
<body class="bg-avenir-bg text-gray-100 font-sans antialiased h-screen overflow-hidden flex">

    <!-- Sidebar (Left) -->
    <aside class="w-64 bg-avenir-surface border-r border-gray-800 flex flex-col hidden md:flex flex-shrink-0">
        <div class="p-6 border-b border-gray-800">
            <a href="/">
                <img src="{{ asset('images/logo.png') }}" alt="ResearchAvenir Logo" class="h-6 md:h-8 w-auto">
            </a>
        </div>
        <div class="flex-1 overflow-y-auto py-4">
            @yield('sidebar')
        </div>
    </aside>

    <!-- Main Content Area -->
    <main class="flex-1 flex flex-col h-screen overflow-hidden relative">
        <!-- Top Navbar -->
        <header class="h-16 border-b border-gray-800 bg-avenir-surface/80 backdrop-blur-md flex items-center justify-between px-6 sticky top-0 z-10">
            <!-- Navigation Links -->
            <nav class="flex items-center space-x-6">
                <a href="/" class="text-sm font-medium text-gray-300 hover:text-avenir-neon transition">Beranda</a>
                <a href="/katalog" class="text-sm font-medium text-gray-300 hover:text-avenir-neon transition">Katalog Riset</a>
                <a href="/artikel" class="text-sm font-medium text-gray-300 hover:text-avenir-neon transition">Artikel & News</a>
            </nav>

            <div class="flex items-center space-x-6">
                @yield('topbar-search')
                <div class="h-6 w-px bg-gray-700"></div>
                <!-- User Profile / Auth Nav placeholder -->
                <a href="/admin" class="text-sm font-medium text-avenir-neon hover:text-white transition">Dashboard Admin</a>
                <div class="w-8 h-8 rounded-full bg-gray-700 border border-avenir-neon overflow-hidden">
                    <img src="https://ui-avatars.com/api/?name=User&background=0D8ABC&color=fff" alt="User">
                </div>
            </div>
        </header>

        <!-- Content Body (Scrollable) -->
        <div class="flex-1 overflow-y-auto p-6 md:p-8">
            @yield('content')
        </div>
    </main>

</body>
</html>
