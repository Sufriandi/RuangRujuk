@extends('layouts.app')

@section('title', 'Hak Asuh Anak (Hadhanah) - RuangRujuk')

@section('content')
<div class="relative pt-20 pb-24 overflow-hidden">
    <!-- Background Decor -->
    <div class="absolute inset-0 bg-slate-50">
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-emerald-100/50 rounded-full blur-[100px] animate-blob"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-teal-100/50 rounded-full blur-[100px] animate-blob delay-200"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span class="inline-block py-1 px-3 rounded-full bg-emerald-100 text-emerald-700 text-sm font-bold tracking-wider uppercase mb-4 border border-emerald-200">
                Edukasi Keluarga
            </span>
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight mb-6">
                Panduan Hak Asuh Anak <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-teal-500">(Hadhanah)</span>
            </h1>
            <p class="text-lg text-slate-600 font-medium">
                Memahami regulasi dan prioritas hak pengasuhan anak pasca perceraian berdasarkan Kompilasi Hukum Islam (KHI).
            </p>
        </div>

        <!-- Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column: Main Concepts -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Concept Card -->
                <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-xl shadow-slate-200/40 relative overflow-hidden group" data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-50 rounded-bl-full -mr-10 -mt-10 transition-transform group-hover:scale-110 duration-500"></div>
                    <h2 class="text-2xl font-bold text-slate-800 mb-4 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        Apa itu Hadhanah?
                    </h2>
                    <p class="text-slate-600 leading-relaxed text-lg">
                        <strong>Hadhanah</strong> adalah kegiatan mengasuh, memelihara, dan mendidik anak yang belum mumayyiz (belum mampu membedakan yang baik dan buruk) atau belum berumur 12 tahun, setelah terjadinya perceraian. Hak asuh ini ditujukan demi kepentingan terbaik bagi masa depan anak.
                    </p>
                </div>

                <!-- Priority Card -->
                <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-xl shadow-slate-200/40 relative overflow-hidden group" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="text-2xl font-bold text-slate-800 mb-6 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-teal-100 text-teal-600 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                        </div>
                        Urutan Prioritas Hak Asuh (Pasal 156 KHI)
                    </h2>
                    <p class="text-slate-600 mb-6 text-lg">Apabila terjadi perselisihan hak asuh anak, Kompilasi Hukum Islam menetapkan urutan kerabat yang paling berhak:</p>
                    
                    <ul class="space-y-4">
                        <li class="flex items-start gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-100">
                            <div class="w-8 h-8 rounded-full bg-emerald-500 text-white flex items-center justify-center font-bold flex-shrink-0">1</div>
                            <div>
                                <strong class="text-slate-800 text-lg block">Ibu Kandung</strong>
                                <span class="text-slate-500">Mendapatkan prioritas mutlak untuk anak di bawah usia 12 tahun (belum mumayyiz).</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-100">
                            <div class="w-8 h-8 rounded-full bg-slate-200 text-slate-600 flex items-center justify-center font-bold flex-shrink-0">2</div>
                            <div>
                                <strong class="text-slate-800 text-lg block">Kerabat Perempuan Garis Ibu</strong>
                                <span class="text-slate-500">Nenek dari pihak ibu dan seterusnya ke atas.</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-100">
                            <div class="w-8 h-8 rounded-full bg-slate-200 text-slate-600 flex items-center justify-center font-bold flex-shrink-0">3</div>
                            <div>
                                <strong class="text-slate-800 text-lg block">Ayah Kandung</strong>
                                <span class="text-slate-500">Jika ibu dan kerabat garis ibu tidak memenuhi syarat atau meninggal dunia.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Right Column: Sidebar / Rules -->
            <div class="space-y-8">
                <!-- Age Rules Card -->
                <div class="bg-slate-900 rounded-3xl p-8 shadow-2xl relative overflow-hidden" data-aos="fade-left" data-aos-delay="300">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-500/20 rounded-bl-full blur-xl"></div>
                    <h3 class="text-xl font-bold text-white mb-6">Aturan Batasan Usia</h3>
                    
                    <div class="space-y-6">
                        <div class="border-l-2 border-emerald-500 pl-4">
                            <h4 class="text-emerald-400 font-bold mb-1">Anak Belum Mumayyiz</h4>
                            <p class="text-slate-300 text-sm">Di bawah usia 12 tahun, hak asuh mutlak berada di tangan <strong>Ibu</strong>.</p>
                        </div>
                        <div class="border-l-2 border-teal-500 pl-4">
                            <h4 class="text-teal-400 font-bold mb-1">Anak Sudah Mumayyiz</h4>
                            <p class="text-slate-300 text-sm">Telah berumur 12 tahun ke atas, anak diberikan <strong>kebebasan memilih</strong> antara diasuh oleh ayah atau ibunya.</p>
                        </div>
                    </div>
                </div>

                <!-- Requirement Card -->
                <div class="bg-emerald-600 rounded-3xl p-8 shadow-xl text-white relative overflow-hidden" data-aos="fade-left" data-aos-delay="400">
                    <div class="absolute bottom-0 right-0 w-24 h-24 bg-white/10 rounded-tl-full mix-blend-overlay"></div>
                    <h3 class="text-xl font-bold mb-4">Syarat Pemegang Hak Asuh</h3>
                    <ul class="list-disc list-inside space-y-2 text-emerald-50 text-sm">
                        <li>Berakal sehat (tidak gila)</li>
                        <li>Dewasa (Baligh)</li>
                        <li>Mampu mendidik anak (Amanah)</li>
                        <li>Beragama Islam (jika anak beragama Islam)</li>
                    </ul>
                    <div class="mt-6 p-4 bg-black/20 rounded-xl backdrop-blur-sm">
                        <p class="text-xs font-medium leading-relaxed">
                            <span class="font-bold text-white uppercase">Penting:</span> Hak asuh dapat <strong>dicabut</strong> oleh Pengadilan Agama apabila pemegang hak asuh terbukti melalaikan kewajibannya atau berperilaku buruk yang mengancam keselamatan fisik maupun mental anak.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
