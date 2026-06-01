@extends('layouts.frontend')

@section('title', 'Login - ResearchAvenir')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-cyber-black py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
    <!-- Cyberpunk Background Elements -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]"></div>
        <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 -z-10 h-[400px] w-[400px] rounded-full bg-cyber-green opacity-10 blur-[120px]"></div>
    </div>

    <div class="max-w-md w-full space-y-8 relative z-10 bg-cyber-dark p-10 rounded-2xl border border-gray-800 shadow-[0_0_40px_rgba(0,0,0,0.5)]">
        <div>
            <h2 class="mt-2 text-center text-3xl font-bold text-white font-['Space_Grotesk'] tracking-tight">
                Masuk ke <span class="text-cyber-green">Avenir</span>
            </h2>
            <p class="mt-2 text-center text-sm text-gray-400">
                Akses dashboard riset dan portofolio Anda.
            </p>
        </div>

        @if ($errors->any())
            <div class="bg-red-500/10 border border-red-500/50 text-red-500 px-4 py-3 rounded-lg text-sm mb-4">
                {{ $errors->first() }}
            </div>
        @endif

        <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="space-y-4">
                <div>
                    <label for="email-address" class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Email Address</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required class="appearance-none relative block w-full px-4 py-3 bg-cyber-black border border-gray-700 placeholder-gray-500 text-white rounded-lg focus:outline-none focus:ring-1 focus:ring-cyber-green focus:border-cyber-green focus:z-10 sm:text-sm transition-colors" placeholder="Email Anda">
                </div>
                <div>
                    <label for="password" class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none relative block w-full px-4 py-3 bg-cyber-black border border-gray-700 placeholder-gray-500 text-white rounded-lg focus:outline-none focus:ring-1 focus:ring-cyber-green focus:border-cyber-green focus:z-10 sm:text-sm transition-colors" placeholder="Password">
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember-me" name="remember" type="checkbox" class="h-4 w-4 text-cyber-green focus:ring-cyber-green border-gray-700 rounded bg-cyber-black">
                    <label for="remember-me" class="ml-2 block text-sm text-gray-400">
                        Ingat saya
                    </label>
                </div>

                <div class="text-sm">
                    <a href="#" class="font-medium text-cyber-green hover:text-emerald-400 transition-colors">
                        Lupa password?
                    </a>
                </div>
            </div>

            <div>
                <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-bold rounded-lg text-cyber-black bg-cyber-green hover:bg-emerald-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyber-green focus:ring-offset-cyber-black uppercase tracking-widest transition-all transform hover:-translate-y-0.5">
                    Sign In
                </button>
            </div>
        </form>
        
        <div class="mt-6 text-center">
            <p class="text-sm text-gray-400">
                Belum punya akun? 
                <a href="#" class="font-medium text-yellow-500 hover:text-yellow-400 transition-colors">
                    Daftar di sini
                </a>
            </p>
        </div>
    </div>
</div>
@endsection
