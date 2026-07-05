@extends('layouts.app')

@section('title', 'Tentang Developer - RuangRujuk')

@section('content')
<div class="relative min-h-screen bg-slate-50 py-24 overflow-hidden">
    <!-- Premium Ambient Background -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-[20%] -left-[10%] w-[50%] h-[50%] bg-emerald-200/40 rounded-full blur-[120px] mix-blend-multiply animate-blob"></div>
        <div class="absolute top-[20%] -right-[10%] w-[40%] h-[40%] bg-teal-200/40 rounded-full blur-[120px] mix-blend-multiply animate-blob delay-200"></div>
        <div class="absolute -bottom-[20%] left-[20%] w-[60%] h-[60%] bg-primary-100/50 rounded-full blur-[120px] mix-blend-multiply animate-blob delay-400"></div>
        
        <!-- Subtle grid pattern -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjEiIGZpbGw9InJnYmEoMCwwLDAsMC4wNSkiLz48L3N2Zz4=')] opacity-50"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8">
        
        <!-- Header Section -->
        <div class="text-center mb-16" data-aos="fade-down" data-aos-duration="1000">
            <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 tracking-tight mb-6">
                Di Balik <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-500 to-teal-600">RuangRujuk</span>
            </h1>
            <p class="text-lg md:text-2xl text-slate-500 max-w-3xl mx-auto font-light leading-relaxed">
                Membangun jembatan digital antara kompleksitas Hukum Keluarga Islam dan kemudahan akses bagi masyarakat modern.
            </p>
        </div>

        <!-- Bento Grid Container -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 auto-rows-[minmax(180px,auto)]">
            
            <!-- 1. Profile Card (Main Focus) -->
            <div class="md:col-span-4 md:row-span-2 group relative rounded-[2rem] bg-white/70 backdrop-blur-2xl border border-white/60 shadow-[0_8px_30px_rgb(0,0,0,0.04)] overflow-hidden transition-all duration-500 hover:shadow-[0_20px_40px_rgb(16,185,129,0.1)] hover:-translate-y-1" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <div class="p-8 flex flex-col items-center text-center h-full relative z-10">
                    <div class="relative mb-8">
                        <div class="absolute -inset-4 bg-gradient-to-tr from-emerald-400 to-teal-300 rounded-full blur-xl opacity-30 group-hover:opacity-60 transition duration-700 animate-pulse-glow"></div>
                        <img src="{{ asset('images/sufriandi.webp') }}" alt="Sufriandi" class="relative w-40 h-40 rounded-full border-4 border-white shadow-xl object-cover transform group-hover:scale-105 transition duration-500">
                    </div>
                    
                    <h2 class="text-3xl font-bold text-slate-800 mb-2">Sufriandi</h2>
                    <p class="text-emerald-600 font-semibold mb-6 tracking-wide uppercase text-sm">Fullstack Developer</p>
                    
                    <p class="text-slate-500 text-sm leading-relaxed mb-8 flex-grow">
                        Berfokus pada penciptaan pengalaman web yang intuitif, aman, dan berdampak positif bagi masyarakat luas.
                    </p>
                    
                    <!-- Social Links -->
                    <div class="flex justify-center gap-4 w-full mt-auto">
                        <a href="#" class="flex-1 py-3 px-4 bg-slate-900 hover:bg-slate-800 text-white rounded-2xl flex justify-center items-center gap-2 transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                        </a>
                        <a href="#" class="flex-1 py-3 px-4 bg-blue-600 hover:bg-blue-700 text-white rounded-2xl flex justify-center items-center gap-2 transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2. Vision/Mission Card (Wide) -->
            <div class="md:col-span-8 group relative rounded-[2rem] bg-gradient-to-br from-emerald-600 to-teal-800 overflow-hidden shadow-xl transition-all duration-500 hover:shadow-2xl hover:shadow-emerald-900/20" data-aos="fade-up" data-aos-delay="200">
                <!-- Decorative background elements -->
                <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 rounded-full bg-white opacity-5 mix-blend-overlay group-hover:scale-150 transition-transform duration-700"></div>
                <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-emerald-400 opacity-10 mix-blend-overlay group-hover:scale-150 transition-transform duration-1000"></div>
                
                <div class="p-8 md:p-12 relative z-10 h-full flex flex-col justify-center">
                    <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center mb-6 text-white shadow-inner">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-3xl md:text-4xl font-bold text-white mb-4">Visi & Dedikasi</h3>
                    <p class="text-emerald-50 text-lg leading-relaxed font-light">
                        Mendigitalisasi proses <strong class="font-bold text-white">Hukum Keluarga Islam</strong> dengan akurasi presisi. RuangRujuk hadir sebagai solusi inovatif yang menengahi kerumitan birokrasi dan syariat, menjadikannya sebuah *platform* yang dapat diandalkan oleh masyarakat dalam masa iddah dan rujuk.
                    </p>
                </div>
            </div>

            <!-- 3. Tech Stack Card -->
            <div class="md:col-span-5 group relative rounded-[2rem] bg-white/70 backdrop-blur-2xl border border-white/60 shadow-[0_8px_30px_rgb(0,0,0,0.04)] overflow-hidden transition-all duration-500 hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-1" data-aos="fade-up" data-aos-delay="300">
                <div class="p-8 h-full flex flex-col">
                    <div class="flex items-center justify-between mb-8">
                        <h3 class="text-2xl font-bold text-slate-800">Teknologi Utama</h3>
                        <div class="p-2 bg-slate-100 rounded-xl text-slate-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap gap-3 mt-auto">
                        <!-- Badges with glowing hover effects -->
                        <div class="px-4 py-2.5 bg-red-50 text-red-600 rounded-xl font-bold text-sm border border-red-100 hover:bg-red-500 hover:text-white transition duration-300 shadow-sm">Laravel 11</div>
                        <div class="px-4 py-2.5 bg-cyan-50 text-cyan-600 rounded-xl font-bold text-sm border border-cyan-100 hover:bg-cyan-500 hover:text-white transition duration-300 shadow-sm">Tailwind CSS</div>
                        <div class="px-4 py-2.5 bg-slate-800 text-white rounded-xl font-bold text-sm border border-slate-700 hover:bg-black transition duration-300 shadow-sm">Three.js</div>
                        <div class="px-4 py-2.5 bg-blue-50 text-blue-600 rounded-xl font-bold text-sm border border-blue-100 hover:bg-blue-500 hover:text-white transition duration-300 shadow-sm">MySQL</div>
                        <div class="px-4 py-2.5 bg-emerald-50 text-emerald-600 rounded-xl font-bold text-sm border border-emerald-100 hover:bg-emerald-500 hover:text-white transition duration-300 shadow-sm">Alpine.js</div>
                        
                        <!-- New Tech Stack -->
                        <div class="px-4 py-2.5 bg-green-50 text-green-600 rounded-xl font-bold text-sm border border-green-100 hover:bg-green-500 hover:text-white transition duration-300 shadow-sm">Supabase</div>
                        <div class="px-4 py-2.5 bg-sky-50 text-sky-600 rounded-xl font-bold text-sm border border-sky-100 hover:bg-sky-500 hover:text-white transition duration-300 shadow-sm">Flutter</div>
                        <div class="px-4 py-2.5 bg-yellow-50 text-yellow-600 rounded-xl font-bold text-sm border border-yellow-100 hover:bg-yellow-500 hover:text-white transition duration-300 shadow-sm">Python</div>
                        <div class="px-4 py-2.5 bg-indigo-50 text-indigo-600 rounded-xl font-bold text-sm border border-indigo-100 hover:bg-indigo-500 hover:text-white transition duration-300 shadow-sm">React</div>
                    </div>
                </div>
            </div>

            <!-- 4. Contact/Action Card -->
            <div class="md:col-span-3 group relative rounded-[2rem] bg-slate-900 overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.1)] transition-all duration-500 hover:shadow-2xl hover:shadow-slate-900/30 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="400">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,_var(--tw-gradient-stops))] from-slate-700 via-slate-900 to-black opacity-80"></div>
                
                <div class="p-8 relative z-10 h-full flex flex-col items-center justify-center text-center">
                    <div class="w-16 h-16 bg-white/10 rounded-full flex items-center justify-center mb-6 text-emerald-400 group-hover:scale-110 transition-transform duration-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Mari Berkolaborasi</h3>
                    <p class="text-slate-400 text-sm mb-6">Punya ide proyek atau diskusi seputar pengembangan web?</p>
                    <a href="mailto:contact@example.com" class="px-6 py-3 bg-emerald-500 hover:bg-emerald-400 text-slate-900 font-bold rounded-xl w-full transition-colors duration-300">
                        Hubungi Saya
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
