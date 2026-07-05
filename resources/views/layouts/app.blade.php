<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'RuangRujuk - Validasi Hukum Keluarga Islam')</title>
    <link rel="icon" type="image/webp" href="{{ asset('images/logo ruangrujuk.webp') }}">
    
    <!-- Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Alpine.js & AOS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Tailwind CSS (CDN for standalone preview) & Flowbite -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                          50: '#ecfdf5',
                          100: '#d1fae5',
                          500: '#10b981',
                          600: '#059669',
                          700: '#047857',
                          800: '#065f46',
                          900: '#064e3b',
                        },
                        accent: {
                          500: '#f59e0b',
                          600: '#d97706',
                        },
                        emerald: {
                            50: '#ecfdf5',
                            100: '#d1fae5',
                            500: '#10b981',
                            600: '#059669',
                            700: '#047857',
                            800: '#065f46',
                            900: '#064e3b',
                        },
                        amber: {
                            500: '#f59e0b',
                            600: '#d97706',
                        }
                    },
                    transitionTimingFunction: {
                        'premium': 'cubic-bezier(0.4, 0, 0.2, 1)',
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 0.8s cubic-bezier(0.4, 0, 0.2, 1) forwards',
                        'blob': 'blob 7s infinite',
                        'float': 'float 4s ease-in-out infinite',
                        'pulse-glow': 'pulseGlow 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: 0, transform: 'translateY(30px)' },
                            '100%': { opacity: 1, transform: 'translateY(0)' },
                        },
                        blob: {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
                            '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        pulseGlow: {
                            '0%, 100%': { opacity: 1, transform: 'scale(1)' },
                            '50%': { opacity: .8, transform: 'scale(1.05)', filter: 'brightness(1.2)' },
                        }
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    
    @if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f5f9; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        
        ::selection { background: rgba(16, 185, 129, 0.2); color: #064e3b; }

        /* Animation delays */
        .delay-100 { animation-delay: 100ms; opacity: 0; }
        .delay-200 { animation-delay: 200ms; opacity: 0; }
        .delay-300 { animation-delay: 300ms; opacity: 0; }
        .delay-400 { animation-delay: 400ms; opacity: 0; }
        
        .premium-transition {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 500ms;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased flex flex-col min-h-screen" x-data="{ scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)">

    <!-- Navbar -->
    <nav :class="scrolled ? 'bg-white/80 backdrop-blur-2xl shadow-xl shadow-slate-200/40 py-3 border-slate-200/80' : 'bg-white/40 backdrop-blur-lg shadow-sm py-5 border-slate-200/30'" class="fixed w-full z-50 top-0 start-0 border-b transition-all duration-500 ease-in-out">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-6 md:px-12 lg:px-24">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse group premium-transition">
                <!-- SVG Logo -->
                <div class="p-2 bg-gradient-to-br from-primary-50 to-primary-100/50 rounded-xl group-hover:bg-emerald-100 group-hover:shadow-md group-hover:-translate-y-0.5 premium-transition">
                    <img src="{{ asset('images/logo ruangrujuk.webp') }}" alt="Logo RuangRujuk" class="w-7 h-7 group-hover:scale-110 premium-transition">
                </div>
                <span class="self-center text-2xl font-extrabold whitespace-nowrap text-slate-800 tracking-tight">Ruang<span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-teal-500">Rujuk</span></span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a href="/cek-prosedur" class="text-primary-700 hover:text-white bg-primary-50/50 border-2 border-primary-600 hover:bg-primary-600 hover:shadow-lg hover:shadow-primary-500/30 focus:ring-4 focus:outline-none focus:ring-primary-500/20 active:scale-95 font-semibold rounded-xl text-sm px-6 py-2.5 text-center premium-transition transform">
                    Cek Prosedur
                </a>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-slate-500 rounded-xl md:hidden hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-slate-200 premium-transition active:scale-95" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-slate-100 rounded-xl bg-white/50 backdrop-blur-sm md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent">
                    <li>
                        <a href="/" class="block py-2 px-3 {{ request()->is('/') ? 'text-emerald-600 font-bold' : 'text-slate-600 hover:text-emerald-600 font-medium' }} rounded md:p-0 premium-transition hover:-translate-y-0.5 relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 hover:after:w-full after:h-0.5 after:bg-emerald-600 after:transition-all after:duration-500">Beranda</a>
                    </li>
                    <li>
                        <a href="/edukasi-talak" class="block py-2 px-3 {{ request()->is('edukasi-talak') ? 'text-emerald-600 font-bold' : 'text-slate-600 hover:text-emerald-600 font-medium' }} rounded md:p-0 premium-transition hover:-translate-y-0.5 relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 hover:after:w-full after:h-0.5 after:bg-emerald-600 after:transition-all after:duration-500">Edukasi Talak</a>
                    </li>
                    <li>
                        <a href="/panduan-iddah" class="block py-2 px-3 {{ request()->is('panduan-iddah') ? 'text-emerald-600 font-bold' : 'text-slate-600 hover:text-emerald-600 font-medium' }} rounded md:p-0 premium-transition hover:-translate-y-0.5 relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 hover:after:w-full after:h-0.5 after:bg-emerald-600 after:transition-all after:duration-500">Panduan Iddah</a>
                    </li>
                    <li>
                        <a href="/alur-kua" class="block py-2 px-3 {{ request()->is('alur-kua') ? 'text-emerald-600 font-bold' : 'text-slate-600 hover:text-emerald-600 font-medium' }} rounded md:p-0 premium-transition hover:-translate-y-0.5 relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 hover:after:w-full after:h-0.5 after:bg-emerald-600 after:transition-all after:duration-500">Regulasi KUA</a>
                    </li>
                    <li>
                        <a href="/tentang" class="block py-2 px-3 {{ request()->is('tentang') ? 'text-emerald-600 font-bold' : 'text-slate-600 hover:text-emerald-600 font-medium' }} rounded md:p-0 premium-transition hover:-translate-y-0.5 relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 hover:after:w-full after:h-0.5 after:bg-emerald-600 after:transition-all after:duration-500">Tentang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow pt-16 pb-24 relative z-10">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-300 py-12 relative overflow-hidden mt-auto">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-slate-800 via-slate-900 to-black opacity-50"></div>
        <div class="max-w-screen-xl mx-auto px-6 md:px-12 lg:px-24 md:flex md:items-start md:justify-between grid gap-8 relative z-10">
            <div class="mb-6 md:mb-0 max-w-md">
                <a href="/" class="flex items-center space-x-3 mb-4 group premium-transition">
                    <img src="{{ asset('images/logo ruangrujuk.webp') }}" alt="Logo RuangRujuk" class="w-8 h-8 group-hover:rotate-12 group-hover:scale-110 premium-transition">
                    <span class="self-center text-2xl font-bold whitespace-nowrap text-white">RuangRujuk</span>
                </a>
                <p class="text-sm text-slate-400 leading-relaxed group-hover:text-slate-300 premium-transition">Sistem Validasi & Penentu Prosedur Rujuk berdasarkan Kompilasi Hukum Islam (KHI). Mengedepankan akurasi hukum dan keandalan data.</p>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-12">
                <div>
                    <h2 class="mb-4 text-sm font-semibold text-white uppercase tracking-widest opacity-80">Navigasi</h2>
                    <ul class="text-slate-400 font-medium space-y-3">
                        <li><a href="/" class="hover:text-emerald-400 premium-transition hover:pl-2">Beranda</a></li>
                        <li><a href="/edukasi-talak" class="hover:text-emerald-400 premium-transition hover:pl-2">Edukasi Talak</a></li>
                        <li><a href="/panduan-iddah" class="hover:text-emerald-400 premium-transition hover:pl-2">Panduan Iddah</a></li>
                        <li><a href="/tentang" class="hover:text-emerald-400 premium-transition hover:pl-2">Tentang Developer</a></li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-4 text-sm font-semibold text-white uppercase tracking-widest opacity-80">Layanan</h2>
                    <ul class="text-slate-400 font-medium space-y-3">
                        <li><a href="/alur-kua" class="hover:text-emerald-400 premium-transition hover:pl-2">Alur Regulasi KUA</a></li>
                        <li><a href="/cek-prosedur" class="hover:text-emerald-400 premium-transition hover:pl-2">Cek Status Rujuk</a></li>
                        <li><a href="#" class="hover:text-emerald-400 premium-transition hover:pl-2">Konsultasi</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-8 border-slate-800/80 max-w-screen-xl mx-auto relative z-10" />
        <div class="max-w-screen-xl mx-auto px-6 md:px-12 lg:px-24 flex flex-col md:flex-row justify-between items-center text-sm text-slate-500 relative z-10">
            <span>© 2026 RuangRujuk™. All Rights Reserved.</span>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#" class="hover:text-white premium-transition">Syarat & Ketentuan</a>
                <a href="#" class="hover:text-white premium-transition">Kebijakan Privasi</a>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 50,
            easing: 'ease-out-cubic',
        });
    </script>
    @stack('scripts')
</body>
</html>
