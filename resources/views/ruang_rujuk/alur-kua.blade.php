@extends('layouts.app')

@section('title', 'Alur Regulasi KUA - RuangRujuk')

@section('content')
<div class="max-w-screen-xl mx-auto px-6 md:px-12 lg:px-24 py-12">
    <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-down">
        <span class="inline-block py-1.5 px-4 rounded-full bg-emerald-100 text-emerald-700 font-bold tracking-widest uppercase text-xs mb-4">Panduan Birokrasi</span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-6 drop-shadow-sm">Prosedur Rujuk KUA</h1>
        <p class="text-slate-600 text-lg leading-relaxed font-medium">Rujuk wajib dicatatkan di hadapan Pegawai Pencatat Nikah (PPN) untuk legalitas formal. Berikut alur prosedural resmi pendaftaran rujuk.</p>
    </div>

    <div class="max-w-4xl mx-auto relative px-4 sm:px-6 md:px-12 mb-20">
        <!-- Vertical Line (Desktop only) -->
        <div class="hidden md:block absolute top-10 bottom-10 left-[50%] w-1.5 bg-gradient-to-b from-emerald-200 via-teal-300 to-emerald-200 rounded-full z-0 opacity-50 transform -translate-x-1/2"></div>

        <div class="space-y-12 md:space-y-24 relative z-10">
            <!-- Step 1 -->
            <div class="flex flex-col md:flex-row items-center justify-between group w-full" data-aos="fade-up" data-aos-delay="100">
                <div class="order-2 md:order-1 w-full md:w-5/12">
                    <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-lg group-hover:shadow-2xl group-hover:-translate-y-2 group-hover:border-emerald-300 premium-transition w-full text-right relative overflow-hidden">
                        <div class="absolute -left-6 -bottom-6 w-24 h-24 bg-emerald-50 rounded-full blur-xl"></div>
                        <h3 class="text-2xl font-extrabold text-slate-900 mb-3 group-hover:text-emerald-700 premium-transition relative z-10">Persiapan Berkas</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-4 font-medium relative z-10">Suami wajib menyiapkan kelengkapan dokumen administratif (wajib legalisir jika dari luar kota).</p>
                        <ul class="text-xs text-slate-700 space-y-3 font-semibold relative z-10 flex flex-col items-end">
                            <li class="flex items-center gap-3">Fotokopi KTP & KK Suami Istri <div class="bg-emerald-100 p-1 rounded-full shrink-0"><svg class="w-3.5 h-3.5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></div></li>
                            <li class="flex items-center gap-3">Akta Cerai Asli Pengadilan <div class="bg-emerald-100 p-1 rounded-full shrink-0"><svg class="w-3.5 h-3.5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></div></li>
                            <li class="flex items-center gap-3">Pengantar RT/RW & Desa (N1-N4) <div class="bg-emerald-100 p-1 rounded-full shrink-0"><svg class="w-3.5 h-3.5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></div></li>
                        </ul>
                    </div>
                </div>
                <div class="order-1 md:order-2 mb-6 md:mb-0 w-full md:w-2/12 flex justify-center">
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-3xl bg-white border-4 border-emerald-200 flex items-center justify-center shadow-xl group-hover:border-emerald-500 group-hover:rotate-12 group-hover:scale-110 premium-transition relative z-20">
                        <span class="text-emerald-600 font-black text-2xl md:text-3xl">1</span>
                    </div>
                </div>
                <div class="order-3 w-full md:w-5/12 hidden md:block"></div>
            </div>

            <!-- Step 2 -->
            <div class="flex flex-col md:flex-row items-center justify-between group w-full" data-aos="fade-up" data-aos-delay="200">
                <div class="order-1 md:order-1 w-full md:w-5/12 hidden md:block"></div>
                <div class="order-1 md:order-2 mb-6 md:mb-0 w-full md:w-2/12 flex justify-center">
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-3xl bg-white border-4 border-emerald-200 flex items-center justify-center shadow-xl group-hover:border-emerald-500 group-hover:-rotate-12 group-hover:scale-110 premium-transition relative z-20">
                        <span class="text-emerald-600 font-black text-2xl md:text-3xl">2</span>
                    </div>
                </div>
                <div class="order-2 md:order-3 w-full md:w-5/12">
                    <div class="bg-amber-50 p-6 rounded-3xl border border-amber-200 shadow-lg group-hover:shadow-2xl group-hover:-translate-y-2 group-hover:border-amber-400 premium-transition w-full text-left relative overflow-hidden">
                        <div class="absolute -right-6 -bottom-6 w-24 h-24 bg-amber-100 rounded-full blur-xl"></div>
                        <h3 class="text-2xl font-extrabold text-slate-900 mb-3 group-hover:text-emerald-700 premium-transition relative z-10">Pemeriksaan PPN</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-4 font-medium relative z-10">Kedua belah pihak (Suami & Istri) <strong>wajib hadir fisik</strong> di KUA. Tidak dapat diwakilkan kuasa hukum.</p>
                        <div class="bg-white/60 p-4 rounded-2xl border border-amber-200/50 backdrop-blur-sm relative z-10">
                            <h4 class="font-bold text-amber-800 text-sm mb-2">Poin Validasi Mutlak:</h4>
                            <p class="text-xs text-amber-700/90 leading-relaxed font-semibold">Memastikan masa iddah belum habis dan talak bukan tipe Bain (Talak 3/Khuluk). Jika syarat tak terpenuhi, pendaftaran ditolak otomatis.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="flex flex-col md:flex-row items-center justify-between group w-full" data-aos="fade-up" data-aos-delay="300">
                <div class="order-2 md:order-1 w-full md:w-5/12">
                    <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-lg border-r-4 border-r-emerald-500 group-hover:shadow-2xl group-hover:-translate-y-2 group-hover:border-emerald-300 premium-transition w-full text-right relative overflow-hidden">
                        <h3 class="text-2xl font-extrabold text-slate-900 mb-3 group-hover:text-emerald-700 premium-transition relative z-10">Ikrar & Kesaksian</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-4 font-medium relative z-10">Pengucapan sighat rujuk secara langsung. <strong>Biaya Rp0 (Gratis)</strong> jika di KUA saat jam kerja.</p>
                        <p class="text-xs text-slate-700 leading-relaxed font-semibold p-4 bg-emerald-50/50 rounded-2xl relative z-10 border border-emerald-100/50">Suami mengucap ikrar di hadapan istri dengan kerelaan, didampingi PPN dan minimal <strong>2 orang saksi adil</strong>. Pencatatan ditandatangani hari itu juga.</p>
                    </div>
                </div>
                <div class="order-1 md:order-2 mb-6 md:mb-0 w-full md:w-2/12 flex justify-center">
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-3xl bg-gradient-to-br from-emerald-500 to-teal-600 border-4 border-white flex items-center justify-center shadow-2xl shadow-emerald-500/40 group-hover:scale-110 group-hover:rotate-12 premium-transition relative z-20">
                        <span class="text-white font-black text-2xl md:text-3xl">3</span>
                    </div>
                </div>
                <div class="order-3 w-full md:w-5/12 hidden md:block"></div>
            </div>

            <!-- Step 4 -->
            <div class="flex flex-col md:flex-row items-center justify-between group w-full" data-aos="fade-up" data-aos-delay="400">
                <div class="order-1 md:order-1 w-full md:w-5/12 hidden md:block"></div>
                <div class="order-1 md:order-2 mb-6 md:mb-0 w-full md:w-2/12 flex justify-center">
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-3xl bg-white border-4 border-emerald-200 flex items-center justify-center shadow-xl group-hover:border-emerald-500 group-hover:scale-110 group-hover:-rotate-12 premium-transition relative z-20">
                        <svg class="w-8 h-8 md:w-10 md:h-10 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                </div>
                <div class="order-2 md:order-3 w-full md:w-5/12">
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-3xl border border-blue-100 shadow-lg group-hover:shadow-2xl group-hover:-translate-y-2 premium-transition w-full text-left relative overflow-hidden">
                        <h3 class="text-2xl font-extrabold text-slate-900 mb-3 group-hover:text-emerald-700 premium-transition relative z-10">Penerbitan Dokumen</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-4 font-medium relative z-10">Pemulihan status legal negara. Dokumen terbit secara instan.</p>
                        <div class="bg-white/80 backdrop-blur-sm p-4 rounded-2xl border border-blue-200/50 relative z-10 shadow-sm">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="p-1.5 bg-blue-600 text-white rounded-lg shadow-sm"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg></div>
                                <h4 class="font-extrabold text-slate-800 text-sm">Buku Pendaftaran Rujuk</h4>
                            </div>
                            <p class="text-xs text-slate-700/90 leading-relaxed font-semibold">Bawa dokumen ini ke Pengadilan Agama untuk menganulir Akta Cerai & mengambil kembali Buku Nikah asli yang ditahan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Informasi Tambahan / FAQ -->
    <div class="max-w-5xl mx-auto px-6 md:px-12 lg:px-24 mt-24 mb-10" data-aos="fade-up">
        <div class="bg-white rounded-[2rem] border border-slate-200 p-8 md:p-12 shadow-xl premium-transition hover:shadow-2xl">
            <h2 class="text-3xl font-extrabold text-slate-800 mb-8 border-b-2 border-emerald-100 pb-4 inline-block">Informasi Tambahan & FAQ</h2>
            
            <div class="space-y-4" x-data="{ activeAccordion: 1 }">
                <!-- FAQ Item 1 -->
                <div class="bg-slate-50 rounded-2xl border border-slate-100 overflow-hidden premium-transition">
                    <button @click="activeAccordion = activeAccordion === 1 ? null : 1" class="flex items-center justify-between w-full p-6 text-left focus:outline-none group">
                        <div class="flex items-center gap-4">
                            <div class="p-2 bg-emerald-100 text-emerald-600 rounded-xl shrink-0 group-hover:scale-110 premium-transition"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
                            <h4 class="font-bold text-slate-800 text-lg group-hover:text-emerald-700 premium-transition">Berapa Lama Prosesnya?</h4>
                        </div>
                        <svg class="w-5 h-5 text-slate-400 transform premium-transition" :class="activeAccordion === 1 ? 'rotate-180 text-emerald-500' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="activeAccordion === 1" x-collapse>
                        <div class="p-6 pt-0 text-slate-600 text-sm leading-relaxed font-medium pl-16">
                            Proses pencatatan ikrar rujuk di KUA dapat diselesaikan dalam <strong>satu hari kerja (1 day service)</strong> asalkan seluruh berkas persyaratan dan saksi sudah lengkap saat kedatangan. Anda akan langsung menerima Kutipan Buku Pendaftaran Rujuk.
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="bg-slate-50 rounded-2xl border border-slate-100 overflow-hidden premium-transition">
                    <button @click="activeAccordion = activeAccordion === 2 ? null : 2" class="flex items-center justify-between w-full p-6 text-left focus:outline-none group">
                        <div class="flex items-center gap-4">
                            <div class="p-2 bg-emerald-100 text-emerald-600 rounded-xl shrink-0 group-hover:scale-110 premium-transition"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
                            <h4 class="font-bold text-slate-800 text-lg group-hover:text-emerald-700 premium-transition">Apakah Ada Biaya Resmi?</h4>
                        </div>
                        <svg class="w-5 h-5 text-slate-400 transform premium-transition" :class="activeAccordion === 2 ? 'rotate-180 text-emerald-500' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="activeAccordion === 2" x-collapse>
                        <div class="p-6 pt-0 text-slate-600 text-sm leading-relaxed font-medium pl-16">
                            Sesuai aturan perundang-undangan (PP No. 48 Tahun 2014), biaya pencatatan rujuk adalah <strong>Rp0 (Gratis)</strong> jika dilaksanakan di kantor KUA pada hari dan jam kerja operasional. Tidak ada pungutan lain sekecil apapun.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-slate-50 rounded-2xl border border-slate-100 overflow-hidden premium-transition">
                    <button @click="activeAccordion = activeAccordion === 3 ? null : 3" class="flex items-center justify-between w-full p-6 text-left focus:outline-none group">
                        <div class="flex items-center gap-4">
                            <div class="p-2 bg-emerald-100 text-emerald-600 rounded-xl shrink-0 group-hover:scale-110 premium-transition"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg></div>
                            <h4 class="font-bold text-slate-800 text-lg group-hover:text-emerald-700 premium-transition">Siapa Saja yang Berhak Menjadi Saksi?</h4>
                        </div>
                        <svg class="w-5 h-5 text-slate-400 transform premium-transition" :class="activeAccordion === 3 ? 'rotate-180 text-emerald-500' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="activeAccordion === 3" x-collapse>
                        <div class="p-6 pt-0 text-slate-600 text-sm leading-relaxed font-medium pl-16">
                            Saksi diutamakan minimal 2 orang laki-laki muslim yang sudah <em>baligh</em> (dewasa), berakal sehat, dan adil. Sangat disarankan untuk membawa pihak keluarga, kerabat terdekat, atau tokoh masyarakat setempat agar memiliki kekuatan pembuktian sosial maupun hukum jika kelak ada sengketa.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-slate-50 rounded-2xl border border-slate-100 overflow-hidden premium-transition">
                    <button @click="activeAccordion = activeAccordion === 4 ? null : 4" class="flex items-center justify-between w-full p-6 text-left focus:outline-none group">
                        <div class="flex items-center gap-4">
                            <div class="p-2 bg-amber-100 text-amber-600 rounded-xl shrink-0 group-hover:scale-110 premium-transition"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg></div>
                            <h4 class="font-bold text-slate-800 text-lg group-hover:text-amber-700 premium-transition">Bagaimana Jika Istri Menolak Dirujuk?</h4>
                        </div>
                        <svg class="w-5 h-5 text-slate-400 transform premium-transition" :class="activeAccordion === 4 ? 'rotate-180 text-emerald-500' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="activeAccordion === 4" x-collapse>
                        <div class="p-6 pt-0 text-slate-600 text-sm leading-relaxed font-medium pl-16">
                            Berdasarkan hukum Islam, hak rujuk pada masa Iddah Raj'i sepenuhnya ada di tangan suami. Namun dalam yurisprudensi Indonesia, PPN di KUA tetap akan memanggil istri untuk memastikan kerelaan demi mencegah kekerasan. Jika istri bersikeras menolak dengan alasan kuat, ia diizinkan menempuh jalur pengajuan gugatan <em>syiqaq</em> ke Pengadilan Agama.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
