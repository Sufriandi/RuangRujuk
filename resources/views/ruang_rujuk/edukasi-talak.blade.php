@extends('layouts.app')

@section('title', 'Edukasi Talak & Status Hukum - RuangRujuk')

@section('content')
<div class="max-w-screen-xl mx-auto px-6 md:px-12 lg:px-24 py-12">
    <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-down">
        <span class="inline-block py-1.5 px-4 rounded-full bg-emerald-100 text-emerald-700 font-bold tracking-widest uppercase text-xs mb-4">Panduan Hukum Keluarga</span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-6 drop-shadow-sm">Klasifikasi Talak & Dampaknya</h1>
        <p class="text-slate-600 text-lg leading-relaxed font-medium">Pahami perbedaan mendasar antara jenis-jenis talak dalam literatur fikih dan Kompilasi Hukum Islam (KHI). Setiap jenis memiliki konsekuensi mengikat terkait hak rujuk.</p>
    </div>

    <div class="max-w-4xl mx-auto bg-white/80 backdrop-blur-xl border border-slate-200/80 rounded-[2rem] shadow-2xl overflow-hidden" data-aos="fade-up" data-aos-delay="100" x-data="{ activeTab: 'raj-i' }">
        
        <!-- Tabs Headers -->
        <div class="p-3 bg-slate-50/80 border-b border-slate-200/60">
            <ul class="flex flex-col sm:flex-row gap-2 text-sm font-medium text-center text-slate-500 p-2 bg-slate-200/40 rounded-[1.5rem]">
                <li class="flex-1">
                    <button @click="activeTab = 'raj-i'" :class="activeTab === 'raj-i' ? 'bg-white text-emerald-700 shadow-md shadow-slate-200/50 scale-100' : 'text-slate-500 hover:text-slate-700 hover:bg-slate-100/50 scale-[0.98]'" class="w-full inline-block py-4 px-6 rounded-[1rem] premium-transition focus:ring-4 focus:ring-emerald-500/10 outline-none" type="button">
                        <span class="block text-lg sm:text-xl font-extrabold mb-1 tracking-tight">Talak Raj'i</span>
                        <span class="font-medium opacity-80 text-xs uppercase tracking-widest">Talak 1 & 2</span>
                    </button>
                </li>
                <li class="flex-1">
                    <button @click="activeTab = 'sughra'" :class="activeTab === 'sughra' ? 'bg-white text-amber-700 shadow-md shadow-slate-200/50 scale-100' : 'text-slate-500 hover:text-slate-700 hover:bg-slate-100/50 scale-[0.98]'" class="w-full inline-block py-4 px-6 rounded-[1rem] premium-transition focus:ring-4 focus:ring-amber-500/10 outline-none" type="button">
                        <span class="block text-lg sm:text-xl font-extrabold mb-1 tracking-tight">Bain Sughra</span>
                        <span class="font-medium opacity-80 text-xs uppercase tracking-widest">Cerai Gugat</span>
                    </button>
                </li>
                <li class="flex-1">
                    <button @click="activeTab = 'kubra'" :class="activeTab === 'kubra' ? 'bg-white text-red-700 shadow-md shadow-slate-200/50 scale-100' : 'text-slate-500 hover:text-slate-700 hover:bg-slate-100/50 scale-[0.98]'" class="w-full inline-block py-4 px-6 rounded-[1rem] premium-transition focus:ring-4 focus:ring-red-500/10 outline-none" type="button">
                        <span class="block text-lg sm:text-xl font-extrabold mb-1 tracking-tight">Bain Kubra</span>
                        <span class="font-medium opacity-80 text-xs uppercase tracking-widest">Talak Mutlak</span>
                    </button>
                </li>
            </ul>
        </div>

        <!-- Tabs Content with transitions -->
        <div class="relative min-h-[400px] bg-white/40">
            
            <!-- Tab 1: Raj'i -->
            <div x-show="activeTab === 'raj-i'" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 -translate-x-4" x-transition:enter-end="opacity-100 translate-x-0" class="p-8 md:p-12">
                <div class="flex items-center gap-4 mb-8">
                    <div class="p-3 bg-gradient-to-br from-emerald-100 to-teal-50 rounded-2xl text-emerald-600 shadow-sm">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h2 class="text-3xl font-extrabold text-slate-900">Talak Raj'i (1 & 2)</h2>
                </div>
                <div class="prose max-w-none text-slate-600">
                    <p class="text-xl mb-6 leading-relaxed"><strong>Talak Raj'i</strong> adalah talak di mana suami memiliki hak prerogatif merujuk istrinya kembali tanpa perlu persetujuan istri dan tanpa memperbarui akad nikah, <strong class="text-emerald-700 bg-emerald-50 px-2 py-1 rounded">selama istri masih dalam masa iddah.</strong></p>
                    
                    <div class="grid md:grid-cols-2 gap-6 my-10">
                        <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-md hover:shadow-xl hover:-translate-y-1 premium-transition group">
                            <h3 class="text-emerald-700 font-bold mb-3 flex items-center gap-2 group-hover:scale-105 origin-left premium-transition"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Kondisi Kritis</h3>
                            <p class="text-sm leading-relaxed font-medium">Hak rujuk mutlak ini memiliki batas waktu. Jika masa iddah telah berakhir, maka status Talak Raj'i otomatis berubah menjadi Talak Bain Sughra.</p>
                        </div>
                        <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-md hover:shadow-xl hover:-translate-y-1 premium-transition group">
                            <h3 class="text-emerald-700 font-bold mb-3 flex items-center gap-2 group-hover:scale-105 origin-left premium-transition"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg> Dasar Hukum</h3>
                            <p class="text-sm italic text-slate-500 leading-relaxed font-medium border-l-4 border-emerald-300 pl-3">"Talak raj'i adalah talak kesatu atau kedua, dimana suami berhak rujuk selama isteri dalam masa iddah." (KHI Psl 118)</p>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-slate-900 mb-5 border-b-2 border-slate-100 pb-3 mt-10">Metode Pengucapan (Fikih & KHI)</h3>
                    <p class="mb-5 leading-relaxed">Dalam menjatuhkan talak raj'i, terdapat dua kategori redaksi ucapan yang memiliki konsekuensi berbeda di mata hukum:</p>
                    <div class="space-y-4 mb-10">
                        <div class="bg-emerald-50/50 p-5 rounded-2xl border border-emerald-100">
                            <h4 class="font-extrabold text-emerald-800 mb-2">1. Talak Sharih (Tegas/Jelas)</h4>
                            <p class="text-slate-600 text-sm leading-relaxed">Ucapan yang maknanya langsung tertuju pada perceraian dan tidak memiliki makna lain. Contoh: <em>"Saya talak kamu"</em> atau <em>"Kamu saya ceraikan."</em> Talak ini jatuh <strong>meskipun suami mengaku tidak berniat</strong> menceraikan.</p>
                        </div>
                        <div class="bg-slate-50 p-5 rounded-2xl border border-slate-200">
                            <h4 class="font-extrabold text-slate-800 mb-2">2. Talak Kinayah (Sindiran)</h4>
                            <p class="text-slate-600 text-sm leading-relaxed">Ucapan bersayap yang bisa berarti cerai atau hal lain. Contoh: <em>"Pulanglah kamu ke rumah orang tuamu."</em> Talak jenis ini <strong>hanya jatuh jika disertai niat cerai</strong> di dalam hati sang suami.</p>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-slate-900 mb-5 border-b-2 border-slate-100 pb-3">Prosedur Rujuk yang Sah</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start bg-slate-50 p-4 rounded-xl hover:bg-emerald-50 premium-transition">
                            <div class="p-1 bg-white rounded-lg shadow-sm mr-4 mt-0.5"><svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg></div>
                            <span class="font-medium text-slate-700">Suami menyatakan kehendak rujuk secara lisan (sharih/jelas) kepada istri.</span>
                        </li>
                        <li class="flex items-start bg-slate-50 p-4 rounded-xl hover:bg-emerald-50 premium-transition">
                            <div class="p-1 bg-white rounded-lg shadow-sm mr-4 mt-0.5"><svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg></div>
                            <span class="font-medium text-slate-700">Dihadiri sekurang-kurangnya 2 orang saksi yang adil.</span>
                        </li>
                        <li class="flex items-start bg-slate-50 p-4 rounded-xl hover:bg-emerald-50 premium-transition">
                            <div class="p-1 bg-white rounded-lg shadow-sm mr-4 mt-0.5"><svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg></div>
                            <span class="font-medium text-slate-700">Wajib dicatatkan ke KUA di hadapan PPN untuk mendapatkan Kutipan Buku Pendaftaran Rujuk.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Tab 2: Bain Sughra -->
            <div x-show="activeTab === 'sughra'" x-cloak x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 -translate-x-4" x-transition:enter-end="opacity-100 translate-x-0" class="p-8 md:p-12">
                <div class="flex items-center gap-4 mb-8">
                    <div class="p-3 bg-gradient-to-br from-amber-100 to-orange-50 rounded-2xl text-amber-600 shadow-sm">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    </div>
                    <h2 class="text-3xl font-extrabold text-slate-900">Talak Bain Sughra</h2>
                </div>
                <div class="prose max-w-none text-slate-600">
                    <p class="text-xl mb-6 leading-relaxed"><strong>Talak Bain Sughra</strong> menghilangkan status perkawinan seketika, suami tidak dapat merujuk begitu saja. Wajib <strong class="text-amber-700">melaksanakan akad nikah baru beserta mahar baru</strong> jika ingin kembali.</p>
                    
                    <h3 class="text-2xl font-bold text-slate-900 mb-5 border-b-2 border-slate-100 pb-3 mt-8">Penyebab Bain Sughra (KHI Pasal 119)</h3>
                    <div class="bg-white border border-slate-200 rounded-2xl shadow-md overflow-hidden mb-8">
                        <ul class="divide-y divide-slate-100">
                            <li class="p-5 hover:bg-slate-50 premium-transition cursor-default group">
                                <span class="font-bold text-slate-800 text-lg group-hover:text-amber-600 premium-transition">1. Talak Raj'i Habis Iddah</span>
                                <p class="text-md mt-2 text-slate-500 leading-relaxed font-medium">Jika masa iddah dari Talak 1 atau 2 terlewati tanpa rujuk, status berubah menjadi Bain Sughra secara otomatis.</p>
                            </li>
                            <li class="p-5 hover:bg-slate-50 premium-transition cursor-default group">
                                <span class="font-bold text-slate-800 text-lg group-hover:text-amber-600 premium-transition">2. Talak Qabla Al-Dukhul</span>
                                <p class="text-md mt-2 text-slate-500 leading-relaxed font-medium">Perceraian sebelum suami istri pernah berhubungan badan (jima'). Tidak ada iddah.</p>
                            </li>
                            <li class="p-5 hover:bg-slate-50 premium-transition cursor-default group">
                                <span class="font-bold text-slate-800 text-lg group-hover:text-amber-600 premium-transition">3. Khuluk / Cerai Gugat</span>
                                <p class="text-md mt-2 text-slate-500 leading-relaxed font-medium">Perceraian atas gugatan istri dengan membayar iwadl melalui putusan PA.</p>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-gradient-to-r from-amber-50 to-orange-50 border-l-4 border-amber-500 p-6 rounded-r-2xl shadow-sm mb-10">
                        <h4 class="font-extrabold text-amber-800 mb-2 text-lg">Konsekuensi Hukum Mutlak:</h4>
                        <p class="text-amber-700/90 font-medium leading-relaxed">Dalam Talak Bain Sughra, mantan suami diperlakukan layaknya laki-laki asing (non-mahram). Persetujuan mantan istri mutlak diperlukan untuk pernikahan baru. Ini melibatkan prosedur layaknya menikah pertama kali: pendaftaran nikah di KUA, persetujuan Wali Nasab, pembayaran Mahar (Mas Kawin) baru, dan Ijab Kabul ulang.</p>
                    </div>

                    <h3 class="text-2xl font-bold text-slate-900 mb-5 border-b-2 border-slate-100 pb-3">Memahami Khuluk (Cerai Gugat)</h3>
                    <p class="mb-5 leading-relaxed text-slate-600">Khuluk adalah salah satu variasi Bain Sughra yang sangat spesifik. Dalam kasus Khuluk, proses perceraian diinisiasi (digugat) oleh pihak istri ke Pengadilan Agama.</p>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-white p-6 rounded-2xl border border-slate-200">
                            <h4 class="font-extrabold text-slate-800 mb-2">Konsep Iwadl (Tebusan)</h4>
                            <p class="text-sm text-slate-500 leading-relaxed">Gugatan cerai ini disertai dengan pembayaran <em>'Iwadl'</em> (uang tebusan) dari istri kepada suami. Karena istri yang 'membeli' kebebasannya, suami kehilangan hak prerogatif untuk merujuk sepihak.</p>
                        </div>
                        <div class="bg-white p-6 rounded-2xl border border-slate-200">
                            <h4 class="font-extrabold text-slate-800 mb-2">Perlindungan KHI</h4>
                            <p class="text-sm text-slate-500 leading-relaxed">Kompilasi Hukum Islam memastikan bahwa besaran Iwadl harus disepakati dan tidak memberatkan. Hak-hak dasar istri paska cerai (seperti hadhanah/hak asuh anak) tetap dilindungi pengadilan.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab 3: Bain Kubra -->
            <div x-show="activeTab === 'kubra'" x-cloak x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 -translate-x-4" x-transition:enter-end="opacity-100 translate-x-0" class="p-8 md:p-12">
                <div class="flex items-center gap-4 mb-8">
                    <div class="p-3 bg-gradient-to-br from-red-100 to-rose-50 rounded-2xl text-red-600 shadow-sm">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    </div>
                    <h2 class="text-3xl font-extrabold text-red-600">Bain Kubra (Talak 3)</h2>
                </div>
                <div class="prose max-w-none text-slate-600">
                    <p class="text-xl mb-6 leading-relaxed"><strong>Talak Bain Kubra</strong> dijatuhkan untuk ketiga kalinya. Ini tingkat perceraian paling fatal dalam Hukum Islam yang memutus ikatan secara absolut.</p>

                    <div class="bg-red-50 p-8 rounded-3xl border border-red-200 my-8 shadow-sm">
                        <h3 class="text-red-800 font-extrabold mb-3 flex items-center gap-3 text-xl"><svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg> Larangan Hukum Keras</h3>
                        <p class="text-red-700/90 leading-relaxed font-bold text-lg italic border-l-4 border-red-400 pl-4">"Talak ba'in kubraa adalah talak yang terjadi untuk ketiga kalinya. Talak jenis ini tidak dapat dirujuk dan tidak dapat dinikahkan kembali." (KHI Pasal 120)</p>
                    </div>

                    <h3 class="text-2xl font-bold text-slate-900 mb-6 border-b-2 border-slate-100 pb-3">Syarat Kembali (Muhallil)</h3>
                    <p class="mb-6 font-medium text-lg">Haram selamanya KECUALI memenuhi seluruh rentetan syarat berikut secara sah (bukan rekayasa):</p>
                    
                    <div class="space-y-4 mb-10">
                        <div class="flex gap-5 items-center p-4 bg-white rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 premium-transition">
                            <div class="w-12 h-12 rounded-xl bg-slate-100 text-slate-700 font-black text-xl flex items-center justify-center shadow-inner shrink-0">1</div>
                            <div>
                                <p class="font-bold text-slate-900 text-lg mb-1">Mantan istri menyelesaikan iddah</p>
                                <p class="text-sm text-slate-500">Masa tunggu dari talak ketiga harus diselesaikan penuh secara hukum.</p>
                            </div>
                        </div>
                        <div class="flex gap-5 items-center p-4 bg-white rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 premium-transition">
                            <div class="w-12 h-12 rounded-xl bg-slate-100 text-slate-700 font-black text-xl flex items-center justify-center shadow-inner shrink-0">2</div>
                            <div>
                                <p class="font-bold text-slate-900 text-lg mb-1">Menikah sah dengan pria lain (Muhallil)</p>
                                <p class="text-sm text-slate-500">Pernikahan harus wajar, sah secara syariat, <strong>tanpa niat/kontrak rekayasa</strong> untuk bercerai kembali.</p>
                            </div>
                        </div>
                        <div class="flex gap-5 items-center p-4 bg-white rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 premium-transition">
                            <div class="w-12 h-12 rounded-xl bg-slate-100 text-slate-700 font-black text-xl flex items-center justify-center shadow-inner shrink-0">3</div>
                            <div>
                                <p class="font-bold text-slate-900 text-lg mb-1">Melakukan hubungan badan (Jima')</p>
                                <p class="text-sm text-slate-500">Hubungan suami istri hakiki (Dukhul) dengan suami baru adalah syarat mutlak, bukan sekadar akad.</p>
                            </div>
                        </div>
                        <div class="flex gap-5 items-center p-4 bg-white rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 premium-transition">
                            <div class="w-12 h-12 rounded-xl bg-slate-100 text-slate-700 font-black text-xl flex items-center justify-center shadow-inner shrink-0">4</div>
                            <div>
                                <p class="font-bold text-slate-900 text-lg mb-1">Bercerai alami dengan suami baru</p>
                                <p class="text-sm text-slate-500">Perceraian terjadi karena alasan yang natural (meninggal dunia atau talak karena ketidakcocokan), bukan setingan.</p>
                            </div>
                        </div>
                        <div class="flex gap-5 items-center p-4 bg-white rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 premium-transition">
                            <div class="w-12 h-12 rounded-xl bg-slate-100 text-slate-700 font-black text-xl flex items-center justify-center shadow-inner shrink-0">5</div>
                            <div>
                                <p class="font-bold text-slate-900 text-lg mb-1">Menyelesaikan iddah dari suami baru</p>
                                <p class="text-sm text-slate-500">Setelah iddah ini selesai, barulah suami pertama boleh melamar dan menikahinya dengan akad baru.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-indigo-50 border-l-4 border-indigo-400 p-6 rounded-r-2xl">
                        <h4 class="font-extrabold text-indigo-900 mb-2">Filosofi & Kebijaksanaan Fikih</h4>
                        <p class="text-indigo-800/80 text-sm leading-relaxed">Persyaratan yang sangat ketat dan panjang ini sengaja dirancang dalam Syariat Islam untuk memberikan efek jera yang kuat bagi suami agar tidak menjadikan ucapan talak sebagai mainan atau senjata emosi belaka. Institusi pernikahan diposisikan pada derajat kesakralan yang sangat tinggi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    [x-cloak] { display: none !important; }
</style>

@endsection
