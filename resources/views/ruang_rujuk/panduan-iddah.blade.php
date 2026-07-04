@extends('layouts.app')

@section('title', 'Panduan Masa Iddah - RuangRujuk')

@section('content')
<div class="max-w-screen-xl mx-auto px-6 md:px-12 lg:px-24 py-12">
    <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-down">
        <span class="inline-block py-1.5 px-4 rounded-full bg-emerald-100 text-emerald-700 font-bold tracking-widest uppercase text-xs mb-4">Pedoman Waktu Transisi</span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-6 drop-shadow-sm">Perhitungan Masa Iddah</h1>
        <p class="text-slate-600 text-lg leading-relaxed font-medium">Iddah adalah masa tunggu diwajibkan pasca perceraian. Berfungsi memastikan kekosongan rahim, ruang rekonsiliasi, dan penghormatan ikatan pernikahan.</p>
    </div>

    <!-- Penjelasan Singkat -->
    <div class="grid md:grid-cols-3 gap-8 mb-12" data-aos="fade-up">
        <div class="col-span-1 md:col-span-2 bg-gradient-to-br from-emerald-600 to-teal-500 rounded-[2rem] p-8 md:p-10 text-white shadow-xl shadow-emerald-500/20 premium-transition hover:-translate-y-1">
            <h2 class="font-extrabold text-3xl mb-4 flex items-center gap-3">
                <svg class="w-8 h-8 text-emerald-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                Makna Filosofis Iddah
            </h2>
            <p class="text-emerald-50 text-base md:text-lg leading-relaxed font-medium mb-6">Iddah bukan sekadar pengekangan, melainkan mekanisme perlindungan yang syariat berikan untuk menjaga kehormatan wanita dan kejelasan nasab keturunan. Masa ini memberikan ruang bagi kedua belah pihak untuk merenung dan berpotensi rujuk kembali sebelum ikatan terputus sepenuhnya.</p>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 border border-white/20">
                    <strong class="block text-white mb-1">Bara'atur Rahim</strong>
                    <span class="text-sm text-emerald-100">Memastikan rahim bersih dari kehamilan untuk mencegah sengketa nasab anak.</span>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 border border-white/20">
                    <strong class="block text-white mb-1">Ta'abbudi</strong>
                    <span class="text-sm text-emerald-100">Menunjukkan penghormatan dan rasa duka atas hilangnya ikatan sakral pernikahan.</span>
                </div>
            </div>
        </div>
        <div class="col-span-1 bg-white rounded-[2rem] border border-slate-200 p-8 shadow-xl premium-transition hover:-translate-y-1 relative overflow-hidden group">
            <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-amber-50 rounded-full blur-2xl group-hover:bg-emerald-50 premium-transition"></div>
            <div class="relative z-10">
                <div class="flex items-center gap-3 mb-5">
                    <div class="p-2 bg-amber-100 text-amber-600 rounded-xl"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
                    <h3 class="font-extrabold text-2xl text-slate-800">Pengecualian</h3>
                </div>
                <p class="text-slate-600 text-sm leading-relaxed mb-4 font-medium">Tidak ada kewajiban masa iddah bagi janda cerai hidup dalam kondisi <strong class="text-amber-600">Qabla Al-Dukhul</strong>.</p>
                <div class="bg-amber-50 rounded-xl p-4 text-sm border border-amber-100 mb-4">
                    <strong class="block mb-1 text-amber-800">Definisi Singkat:</strong> 
                    <span class="text-amber-700/80">Perceraian yang terjadi sesudah akad namun sebelum pernah melakukan hubungan badan suami-istri.</span>
                </div>
                <p class="text-xs text-slate-500 italic">Istri dalam kondisi ini dapat langsung menerima khitbah (lamaran) atau menikah keesokan harinya secara sah.</p>
            </div>
        </div>
    </div>

    <!-- Tabel Kondisi Iddah (Full Width) -->
    <div class="bg-white/80 backdrop-blur-xl rounded-[2rem] border border-slate-200/80 shadow-xl overflow-hidden premium-transition mb-12" data-aos="fade-up" data-aos-delay="200">
        <div class="bg-gradient-to-r from-slate-50 to-slate-100/50 border-b border-slate-200 px-8 py-6 flex justify-between items-center">
            <h2 class="font-extrabold text-slate-800 text-2xl flex items-center gap-3">
                <svg class="w-7 h-7 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                Ketentuan Durasi Iddah (KHI Psl 153)
            </h2>
        </div>
        <div class="overflow-x-auto p-6 md:p-8">
            <table class="w-full text-left border-separate border-spacing-y-3">
                <thead class="text-xs text-slate-500 uppercase tracking-widest font-bold">
                    <tr>
                        <th scope="col" class="px-6 py-4">Kondisi Fisik / Fisiologis Istri</th>
                        <th scope="col" class="px-6 py-4">Penyebab Putusnya Nikah</th>
                        <th scope="col" class="px-6 py-4 text-emerald-700">Durasi Masa Tunggu (Iddah)</th>
                        <th scope="col" class="px-6 py-4 text-slate-400">Detail & Rujukan</th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                    <tr class="bg-white hover:bg-emerald-50/50 premium-transition shadow-sm rounded-2xl group cursor-pointer">
                        <td class="px-6 py-5 font-bold text-slate-900 whitespace-nowrap rounded-l-2xl border border-r-0 border-slate-100 group-hover:border-emerald-100">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-xl bg-pink-100 text-pink-600 flex items-center justify-center group-hover:scale-110 premium-transition">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                Sedang Mengandung (Hamil)
                            </div>
                        </td>
                        <td class="px-6 py-5 font-medium text-slate-600 border-y border-slate-100 group-hover:border-emerald-100">Cerai Hidup / Cerai Mati</td>
                        <td class="px-6 py-5 font-extrabold text-emerald-600 border border-x-0 border-slate-100 group-hover:border-emerald-100 text-lg">Sampai Melahirkan</td>
                        <td class="px-6 py-5 text-slate-500 rounded-r-2xl border border-l-0 border-slate-100 group-hover:border-emerald-100 text-xs font-medium">Bisa lebih singkat atau lebih lama tergantung usia kandungan saat dijatuhi talak.</td>
                    </tr>
                    <tr class="bg-white hover:bg-emerald-50/50 premium-transition shadow-sm rounded-2xl group cursor-pointer">
                        <td class="px-6 py-5 font-bold text-slate-900 whitespace-nowrap rounded-l-2xl border border-r-0 border-slate-100 group-hover:border-emerald-100">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center group-hover:scale-110 premium-transition">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                </div>
                                Haid Normal (Masih Menstruasi)
                            </div>
                        </td>
                        <td class="px-6 py-5 font-medium text-slate-600 border-y border-slate-100 group-hover:border-emerald-100">Cerai Hidup (Talak)</td>
                        <td class="px-6 py-5 font-extrabold text-emerald-600 border border-x-0 border-slate-100 group-hover:border-emerald-100 text-lg">3 Kali Masa Suci</td>
                        <td class="px-6 py-5 text-slate-500 rounded-r-2xl border border-l-0 border-slate-100 group-hover:border-emerald-100 text-xs font-medium">Umumnya dihitung minimal 90 hari bagi yang siklusnya normal.</td>
                    </tr>
                    <tr class="bg-white hover:bg-emerald-50/50 premium-transition shadow-sm rounded-2xl group cursor-pointer">
                        <td class="px-6 py-5 font-bold text-slate-900 whitespace-nowrap rounded-l-2xl border border-r-0 border-slate-100 group-hover:border-emerald-100">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center group-hover:scale-110 premium-transition">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                Menopause / Belum Pernah Haid
                            </div>
                        </td>
                        <td class="px-6 py-5 font-medium text-slate-600 border-y border-slate-100 group-hover:border-emerald-100">Cerai Hidup (Talak)</td>
                        <td class="px-6 py-5 font-extrabold text-emerald-600 border border-x-0 border-slate-100 group-hover:border-emerald-100 text-lg">90 Hari Mutlak</td>
                        <td class="px-6 py-5 text-slate-500 rounded-r-2xl border border-l-0 border-slate-100 group-hover:border-emerald-100 text-xs font-medium">Bagi wanita yang tidak lagi memiliki siklus menstruasi secara fisiologis.</td>
                    </tr>
                    <tr class="bg-slate-50 hover:bg-slate-100 premium-transition shadow-sm rounded-2xl group cursor-pointer">
                        <td class="px-6 py-5 font-bold text-slate-900 whitespace-nowrap rounded-l-2xl border border-r-0 border-slate-200">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-xl bg-slate-200 text-slate-600 flex items-center justify-center group-hover:scale-110 premium-transition">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
                                </div>
                                Tidak Sedang Hamil
                            </div>
                        </td>
                        <td class="px-6 py-5 font-bold text-slate-700 border-y border-slate-200">Cerai Mati (Suami Wafat)</td>
                        <td class="px-6 py-5 font-extrabold text-slate-900 border border-x-0 border-slate-200 text-lg">130 Hari (4 Bln 10 Hr)</td>
                        <td class="px-6 py-5 text-slate-500 rounded-r-2xl border border-l-0 border-slate-200 text-xs font-medium bg-slate-200/50">Masa Ihdad (berkabung) otomatis berjalan beriringan dengan iddah.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Tiga Kolom Informasi -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-up" data-aos-delay="300">
        <!-- Hak Selama Iddah -->
        <div class="bg-white rounded-[2rem] border border-slate-200 p-8 shadow-lg hover:-translate-y-2 hover:shadow-xl premium-transition flex flex-col h-full">
            <h3 class="font-extrabold text-slate-800 mb-5 border-b-2 border-slate-100 pb-3 flex items-center gap-3 text-xl">
                <div class="p-2 bg-emerald-100 text-emerald-600 rounded-xl"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg></div> 
                Hak Istri Saat Iddah
            </h3>
            <div class="space-y-4 flex-grow">
                <div class="bg-slate-50 p-4 rounded-xl border border-slate-100 group hover:border-emerald-300 premium-transition">
                    <strong class="block text-slate-800 text-sm mb-1 group-hover:text-emerald-700">Talak Raj'i (Bisa Rujuk)</strong>
                    <p class="text-xs text-slate-500 font-medium leading-relaxed">Berhak penuh atas nafkah (makan), pakaian (kiswah), dan tempat tinggal (maskan) dari mantan suami. Suami dilarang mengusir dari rumah bersama.</p>
                </div>
                <div class="bg-slate-50 p-4 rounded-xl border border-slate-100 group hover:border-amber-300 premium-transition">
                    <strong class="block text-slate-800 text-sm mb-1 group-hover:text-amber-700">Bain (Cerai Gugat/Talak 3)</strong>
                    <p class="text-xs text-slate-500 font-medium leading-relaxed">Gugur hak nafkah dan pakaiannya, namun tetap memiliki hak mendapat tempat perlindungan/tinggal KECUALI jika ia melakukan pembangkangan (nusyuz).</p>
                </div>
            </div>
        </div>

        <!-- Larangan Selama Iddah -->
        <div class="bg-white rounded-[2rem] border border-slate-200 p-8 shadow-lg hover:-translate-y-2 hover:shadow-xl premium-transition flex flex-col h-full">
            <h3 class="font-extrabold text-slate-800 mb-5 border-b-2 border-slate-100 pb-3 flex items-center gap-3 text-xl">
                <div class="p-2 bg-red-100 text-red-600 rounded-xl"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg></div> 
                Larangan Utama
            </h3>
            <div class="space-y-3 flex-grow">
                <div class="flex gap-3">
                    <span class="text-red-500 font-black mt-0.5">•</span>
                    <p class="text-sm text-slate-600 font-medium leading-relaxed"><strong>Menerima Khitbah (Lamaran) Terang-terangan.</strong> Laki-laki lain dilarang meminang wanita yang masih dalam masa iddah secara langsung.</p>
                </div>
                <div class="flex gap-3">
                    <span class="text-red-500 font-black mt-0.5">•</span>
                    <p class="text-sm text-slate-600 font-medium leading-relaxed"><strong>Melaksanakan Akad Nikah Baru.</strong> Pernikahan yang dilangsungkan di masa iddah hukumnya tidak sah (batal demi hukum).</p>
                </div>
                <div class="flex gap-3">
                    <span class="text-red-500 font-black mt-0.5">•</span>
                    <p class="text-sm text-slate-600 font-medium leading-relaxed"><strong>Keluar Rumah Tanpa Izin.</strong> Khususnya pada Talak Raj'i, istri dilarang keluar rumah kediaman bersama tanpa izin suami kecuali untuk hajat mendesak.</p>
                </div>
            </div>
        </div>

        <!-- Masa Ihdad (Berkabung) -->
        <div class="bg-white rounded-[2rem] border border-slate-200 p-8 shadow-lg hover:-translate-y-2 hover:shadow-xl premium-transition flex flex-col h-full lg:col-span-1 md:col-span-2">
            <h3 class="font-extrabold text-slate-800 mb-5 border-b-2 border-slate-100 pb-3 flex items-center gap-3 text-xl">
                <div class="p-2 bg-indigo-100 text-indigo-600 rounded-xl"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg></div> 
                Masa Ihdad (Cerai Mati)
            </h3>
            <p class="text-sm text-slate-600 font-medium leading-relaxed mb-4">Masa berkabung diwajibkan bagi istri yang ditinggal wafat suaminya sebagai bentuk penghormatan dan empati terhadap keluarga yang ditinggalkan.</p>
            <div class="bg-indigo-50 p-4 rounded-xl border border-indigo-100 flex-grow">
                <h4 class="font-bold text-indigo-900 text-sm mb-2">Selama masa ini (4 Bulan 10 Hari), wanita dianjurkan:</h4>
                <ul class="text-xs text-indigo-800/80 space-y-2 font-medium">
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 shrink-0 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> Tidak memakai pakaian yang mencolok / perhiasan berlebihan.</li>
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 shrink-0 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> Tidak menggunakan parfum yang memikat perhatian.</li>
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 shrink-0 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> Berdiam diri di rumah (kecuali bekerja atau keperluan asasi).</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
