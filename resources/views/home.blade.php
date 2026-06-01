@extends('layouts.frontend')

@section('title', 'ResearchAvenir - Riset Ekuitas Kelas Institusi')

@section('content')
<div class="relative overflow-hidden bg-cyber-black text-gray-200">
    <!-- Cyberpunk Background Elements -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]"></div>
        <div class="absolute left-0 right-0 top-0 -z-10 m-auto h-[310px] w-[310px] rounded-full bg-cyber-green opacity-20 blur-[100px]"></div>
    </div>

    <!-- Hero Section -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 pt-32 pb-24 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-cyber-green/30 bg-cyber-green/10 text-cyber-green text-xs font-bold tracking-widest uppercase mb-8">
            <span class="w-2 h-2 rounded-full bg-cyber-green animate-pulse"></span>
            RISET EKUITAS · LANGGANAN PROFESIONAL
        </div>
        
        <h1 class="text-5xl md:text-7xl font-bold mb-6 tracking-tight text-white font-['Space_Grotesk']">
            Riset Saham Kelas <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyber-green to-emerald-400">Institusi</span><br>
            untuk Investor <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyber-green to-emerald-400">Cerdas</span>
        </h1>
        
        <p class="text-lg text-gray-400 mb-12 max-w-3xl mx-auto leading-relaxed">
            Berlangganan untuk akses penuh ke katalog riset ekuitas mendalam dan artikel pasar yang ditulis analis bersertifikasi — semuanya berbasis Annual Report audited. <strong class="text-white">7 hari trial gratis</strong>, lalu Rp 149.000/bulan.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-20">
            <a href="{{ route('katalog') }}" class="px-8 py-4 rounded-full bg-cyber-green text-cyber-black font-bold text-sm tracking-wide uppercase hover:bg-emerald-400 hover:shadow-[0_0_20px_rgba(16,185,129,0.4)] transition-all transform hover:-translate-y-1">
                Jelajahi Katalog Riset →
            </a>
            <a href="#" class="px-8 py-4 rounded-full border-2 border-gray-600 text-gray-300 font-bold text-sm tracking-wide uppercase hover:border-cyber-green hover:text-cyber-green transition-all transform hover:-translate-y-1">
                🎁 Coba Riset Gratis
            </a>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-gray-800/50 border border-gray-800 rounded-2xl overflow-hidden backdrop-blur-sm">
            <div class="bg-cyber-dark p-6 text-left border-b-2 border-transparent hover:border-cyber-green transition-colors relative group">
                <div class="text-3xl font-bold text-white mb-1 font-mono">13<span class="text-sm text-cyber-green ml-1 font-sans">Riset</span></div>
                <div class="text-xs text-gray-500 uppercase tracking-widest">Tersedia di Katalog</div>
            </div>
            <div class="bg-cyber-dark p-6 text-left border-b-2 border-transparent hover:border-cyber-green transition-colors">
                <div class="text-3xl font-bold text-white mb-1 font-mono">4<span class="text-sm text-cyber-green ml-1 font-sans">Tahun</span></div>
                <div class="text-xs text-gray-500 uppercase tracking-widest">Data Historis Audited</div>
            </div>
            <div class="bg-cyber-dark p-6 text-left border-b-2 border-transparent hover:border-cyber-green transition-colors">
                <div class="text-3xl font-bold text-white mb-1 font-mono">DCF<span class="text-sm text-cyber-green ml-1 font-sans">/ FCFE</span></div>
                <div class="text-xs text-gray-500 uppercase tracking-widest">Model Valuasi Utama</div>
            </div>
            <div class="bg-cyber-dark p-6 text-left border-b-2 border-transparent hover:border-cyber-green transition-colors">
                <div class="text-3xl font-bold text-white mb-1 font-mono">100<span class="text-sm text-cyber-green ml-1 font-sans">%</span></div>
                <div class="text-xs text-gray-500 uppercase tracking-widest">Annual Report Audited</div>
            </div>
        </div>
    </div>
</div>

<!-- Featured Free Research -->
<section class="py-24 bg-cyber-dark border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-xs font-bold tracking-[0.2em] text-cyber-green mb-6 uppercase">◆ Riset Pilihan Minggu Ini · Gratis</div>
        
        <div class="flex flex-col lg:flex-row bg-cyber-black border border-gray-800 rounded-2xl overflow-hidden group hover:border-cyber-green/50 transition-colors">
            <div class="p-10 lg:p-14 lg:w-3/5 flex flex-col justify-center">
                <div class="inline-block px-3 py-1 rounded-full bg-yellow-500/10 text-yellow-500 text-xs font-bold tracking-wider mb-6 w-max border border-yellow-500/20">
                    🎁 GRATIS — Promosi
                </div>
                <h2 class="text-3xl font-bold text-white mb-4 leading-tight font-['Space_Grotesk'] group-hover:text-cyber-green transition-colors">
                    PT Sinar Mas Agro Resources & Technology
                </h2>
                <p class="text-gray-400 mb-8 leading-relaxed">
                    CPO terintegrasi terbesar Indonesia. Q1-2026 NI melonjak +517% YoY. P/E 6,8x — undervalued vs peer regional.
                </p>
                <div class="flex flex-wrap gap-8 mb-8">
                    <div>
                        <div class="text-xl font-bold text-yellow-500 font-mono mb-1">+517%</div>
                        <div class="text-[10px] text-gray-500 uppercase tracking-widest">YoY NI Q1-26</div>
                    </div>
                    <div>
                        <div class="text-xl font-bold text-yellow-500 font-mono mb-1">6,8x</div>
                        <div class="text-[10px] text-gray-500 uppercase tracking-widest">P/E Ratio</div>
                    </div>
                    <div>
                        <div class="text-xl font-bold text-yellow-500 font-mono mb-1">5,2x</div>
                        <div class="text-[10px] text-gray-500 uppercase tracking-widest">EV/EBITDA</div>
                    </div>
                </div>
                <div>
                    <a href="#" class="inline-block px-6 py-3 rounded-full bg-white text-cyber-black text-xs font-bold tracking-wider uppercase hover:bg-cyber-green transition-colors">
                        Baca Riset Gratis →
                    </a>
                </div>
            </div>
            <div class="lg:w-2/5 bg-gradient-to-br from-emerald-900 to-cyber-black p-12 flex items-center justify-center border-l border-gray-800 relative overflow-hidden">
                <div class="absolute inset-0 bg-[linear-gradient(to_right,#10b98110_1px,transparent_1px),linear-gradient(to_bottom,#10b98110_1px,transparent_1px)] bg-[size:14px_14px]"></div>
                <!-- Circular Progress SVG Placeholder -->
                <svg viewBox="0 0 200 200" class="w-64 h-64 relative z-10 drop-shadow-[0_0_15px_rgba(16,185,129,0.3)]">
                    <circle cx="100" cy="100" r="80" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="14"/>
                    <circle cx="100" cy="100" r="80" fill="none" stroke="#10b981" stroke-width="14"
                        stroke-dasharray="380" stroke-dashoffset="60" stroke-linecap="round"
                        transform="rotate(-90 100 100)"/>
                    <text x="100" y="95" text-anchor="middle" font-family="monospace" font-size="32" font-weight="700" fill="#10b981">85%</text>
                    <text x="100" y="120" text-anchor="middle" font-family="sans-serif" font-size="12" fill="#6b7280" font-weight="600" letter-spacing="2">CONVICTION</text>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Why Avenir Section -->
<section class="py-24 bg-cyber-black">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <div class="text-xs font-bold tracking-[0.2em] text-yellow-500 mb-4 uppercase">◆ Mengapa Avenir</div>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 font-['Space_Grotesk']">
                Riset Ekuitas yang <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-500 to-amber-300">Bekerja</span> untuk Investor
            </h2>
            <p class="text-gray-400 max-w-2xl mx-auto leading-relaxed">
                Lebih dari sekadar arsip riset. Avenir Research adalah platform langganan yang dibangun di atas tiga prinsip utama: data audited, metodologi multi-skenario, dan analis bersertifikasi.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-px bg-gray-800 border border-gray-800">
            <!-- Card 1 -->
            <div class="bg-cyber-dark p-10 md:p-14 group hover:bg-gray-900 transition-colors">
                <div class="text-yellow-500 font-mono text-sm tracking-[0.2em] mb-6 font-bold">01</div>
                <h3 class="text-2xl font-bold text-white mb-4 font-['Space_Grotesk']">Data Audited, Bukan Kira-Kira</h3>
                <p class="text-gray-400 leading-relaxed mb-6">
                    Setiap angka — dari revenue hingga DER — bersumber langsung dari Annual Report yang sudah diaudit dan laporan keuangan resmi IDX. Tidak ada estimasi liar, tidak ada hallucination AI. Anda bisa verifikasi sendiri ke sumber.
                </p>
                <div class="inline-block px-3 py-1 border border-yellow-500/30 rounded text-[10px] text-yellow-500 tracking-wider uppercase font-mono">
                    Source-First Methodology
                </div>
            </div>
            <!-- Card 2 -->
            <div class="bg-cyber-dark p-10 md:p-14 group hover:bg-gray-900 transition-colors">
                <div class="text-yellow-500 font-mono text-sm tracking-[0.2em] mb-6 font-bold">02</div>
                <h3 class="text-2xl font-bold text-white mb-4 font-['Space_Grotesk']">Multi-Skenario, Bukan Single Target</h3>
                <p class="text-gray-400 leading-relaxed mb-6">
                    Setiap riset menyajikan framework valuasi tiga skenario — Base Case, Bull Case, Bear Case. Anda mendapatkan range yang jujur, bukan angka tunggal yang menyesatkan. Keputusan investasi tetap di tangan Anda.
                </p>
                <div class="inline-block px-3 py-1 border border-yellow-500/30 rounded text-[10px] text-yellow-500 tracking-wider uppercase font-mono">
                    FCFE DCF Framework
                </div>
            </div>
            <!-- Card 3 -->
            <div class="bg-cyber-dark p-10 md:p-14 group hover:bg-gray-900 transition-colors">
                <div class="text-yellow-500 font-mono text-sm tracking-[0.2em] mb-6 font-bold">03</div>
                <h3 class="text-2xl font-bold text-white mb-4 font-['Space_Grotesk']">Ditulis Analis Bersertifikasi</h3>
                <p class="text-gray-400 leading-relaxed mb-6">
                    Setiap riset dikerjakan oleh analis dengan sertifikasi profesional CFA, WPPE, atau setara — bukan algoritma scraping, bukan tipster Telegram. Tim editorial Avenir mereview setiap publikasi sebelum naik tayang.
                </p>
                <div class="inline-block px-3 py-1 border border-yellow-500/30 rounded text-[10px] text-yellow-500 tracking-wider uppercase font-mono">
                    Certified Mitra Network
                </div>
            </div>
            <!-- Card 4 -->
            <div class="bg-cyber-dark p-10 md:p-14 group hover:bg-gray-900 transition-colors">
                <div class="text-yellow-500 font-mono text-sm tracking-[0.2em] mb-6 font-bold">04</div>
                <h3 class="text-2xl font-bold text-white mb-4 font-['Space_Grotesk']">Akses Demokratis, Harga Terjangkau</h3>
                <p class="text-gray-400 leading-relaxed mb-6">
                    Riset sell-side institusi biasa dijual ratusan juta per tahun ke klien besar saja. Avenir membuka akses penuh dengan langganan mulai Rp 149.000/bulan — agar investor ritel pun bisa berinvestasi seperti institusi.
                </p>
                <div class="inline-block px-3 py-1 border border-yellow-500/30 rounded text-[10px] text-yellow-500 tracking-wider uppercase font-mono">
                    AKSES PENUH 7 HARI GRATIS
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
