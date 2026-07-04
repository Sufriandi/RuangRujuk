@extends('layouts.app')

@section('title', 'Cek Prosedur Rujuk - RuangRujuk')

@section('content')
<div class="max-w-screen-xl mx-auto px-6 md:px-12 lg:px-24 py-12">
    <div class="mb-12" data-aos="fade-down">
        <h1 class="text-4xl font-extrabold text-slate-900 mb-3 drop-shadow-sm">Analisis Kelayakan Rujuk</h1>
        <p class="text-slate-600 text-lg max-w-2xl font-medium">Sistem kalkulasi cerdas KHI mendiagnosis status hukum perceraian Anda dan prosedur sah yang ditempuh.</p>
    </div>

    <div class="grid lg:grid-cols-12 gap-8 lg:gap-12" x-data="{ 
        status: 'idle', 
        kondisi: '', 
        jenisTalak: '',
        submittedJenisTalak: '',
        submittedKondisi: '',
        sisaHari: 0,
        calculateIddah() {
            const tglInput = document.getElementById('tanggal_talak').value;
            if(!tglInput) return 90;
            const parts = tglInput.split('/');
            if(parts.length !== 3) return 90;
            const tglTalak = new Date(parts[2], parts[1] - 1, parts[0]);
            const today = new Date();
            today.setHours(0,0,0,0);
            tglTalak.setHours(0,0,0,0);
            const diffTime = today.getTime() - tglTalak.getTime();
            const passedDays = diffTime > 0 ? Math.floor(diffTime / (1000 * 60 * 60 * 24)) : 0;
            const remaining = 90 - passedDays;
            return remaining > 0 ? remaining : 0;
        },
        submitForm() {
            this.status = 'loading';
            setTimeout(() => {
                this.submittedJenisTalak = this.jenisTalak;
                this.submittedKondisi = this.kondisi;
                if(this.kondisi === 'hamil') {
                    this.sisaHari = 'Menunggu Kelahiran';
                } else {
                    this.sisaHari = this.calculateIddah();
                }
                this.status = 'done';
            }, 1000);
        }
    }">
        
        <!-- Form Kolom Kiri -->
        <div class="lg:col-span-5" data-aos="fade-right" data-aos-delay="100">
            <div class="bg-white/90 backdrop-blur-md rounded-[2rem] shadow-xl border border-slate-200/80 p-8 sm:p-10 relative overflow-hidden group/form">
                <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-50 rounded-bl-[4rem] -z-10 group-hover/form:scale-110 premium-transition"></div>
                <form action="#" method="POST" id="formCekRujuk">
                    @csrf
                    <h2 class="text-2xl font-extrabold text-slate-800 mb-8 flex items-center gap-3">
                        <div class="p-2 bg-emerald-100 text-emerald-600 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                        </div>
                        Data Putusan
                    </h2>

                    <!-- Tanggal Putusan -->
                    <div class="mb-5 relative group">
                        <label for="tanggal_talak" class="block mb-2 text-sm font-bold text-slate-700">Tanggal Jatuh Talak (PA)</label>
                        <div class="relative max-w-full">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-4 pointer-events-none">
                                <svg class="w-5 h-5 text-slate-400 group-focus-within:text-emerald-500 premium-transition" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 00-2-2h-2V1a1 1 0 00-2 0v1h-3V1a1 1 0 00-2 0v1H6V1a1 1 0 00-2 0v1H2a2 2 0 00-2 2v2h20V4ZM0 18a2 2 0 002 2h16a2 2 0 002-2V8H0v10Zm5-8h10a1 1 0 010 2H5a1 1 0 010-2Z"/>
                                </svg>
                            </div>
                            <input datepicker datepicker-autohide datepicker-format="dd/mm/yyyy" type="text" id="tanggal_talak" class="bg-slate-50 border-2 border-slate-200 text-slate-900 text-sm font-medium rounded-xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 block w-full ps-12 p-3 premium-transition hover:border-emerald-300" placeholder="Pilih tanggal">
                        </div>
                    </div>

                    <!-- Jenis Talak -->
                    <div class="mb-5 group">
                        <label for="jenis_talak" class="block mb-2 text-sm font-bold text-slate-700">Jenis Talak</label>
                        <select id="jenis_talak" x-model="jenisTalak" class="bg-slate-50 border-2 border-slate-200 text-slate-900 text-sm font-medium rounded-xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 block w-full p-3 premium-transition hover:border-emerald-300 appearance-none bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23475569%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E')] bg-no-repeat bg-[position:right_1rem_center] bg-[length:0.75rem]">
                            <option value="" disabled selected>Pilih jenis dari akta</option>
                            <option value="1">Talak 1 (Raj'i)</option>
                            <option value="2">Talak 2 (Raj'i)</option>
                            <option value="gugat">Cerai Gugat / Khuluk</option>
                            <option value="3">Talak 3 (Bain Kubra)</option>
                        </select>
                    </div>

                    <!-- Kondisi Istri -->
                    <div class="mb-6">
                        <label class="block mb-3 text-sm font-bold text-slate-700">Kondisi Fisik Istri</label>
                        <div class="space-y-2.5">
                            <label class="flex items-center p-3 border-2 border-slate-200 rounded-xl cursor-pointer hover:bg-emerald-50 hover:border-emerald-300 premium-transition has-[:checked]:border-emerald-500 has-[:checked]:bg-emerald-50">
                                <input type="radio" x-model="kondisi" name="kondisi" value="hamil" class="w-4 h-4 text-emerald-600 bg-white border-slate-300 focus:ring-emerald-500 focus:ring-2">
                                <span class="ml-3 text-sm font-bold text-slate-700">Sedang Hamil</span>
                            </label>
                            <label class="flex items-center p-3 border-2 border-slate-200 rounded-xl cursor-pointer hover:bg-emerald-50 hover:border-emerald-300 premium-transition has-[:checked]:border-emerald-500 has-[:checked]:bg-emerald-50">
                                <input type="radio" x-model="kondisi" name="kondisi" value="haid" class="w-4 h-4 text-emerald-600 bg-white border-slate-300 focus:ring-emerald-500 focus:ring-2">
                                <span class="ml-3 text-sm font-bold text-slate-700">Haid Normal</span>
                            </label>
                            <label class="flex items-center p-3 border-2 border-slate-200 rounded-xl cursor-pointer hover:bg-emerald-50 hover:border-emerald-300 premium-transition has-[:checked]:border-emerald-500 has-[:checked]:bg-emerald-50">
                                <input type="radio" x-model="kondisi" name="kondisi" value="menopause" class="w-4 h-4 text-emerald-600 bg-white border-slate-300 focus:ring-emerald-500 focus:ring-2">
                                <span class="ml-3 text-sm font-bold text-slate-700">Menopause</span>
                            </label>
                        </div>
                    </div>

                    <!-- Conditional Input -->
                    <div x-show="kondisi === 'hamil'" x-collapse class="mb-5">
                        <label for="tanggal_lahir" class="block mb-2 text-sm font-bold text-slate-700">Tgl Melahirkan (Jika Sudah)</label>
                        <input datepicker datepicker-autohide type="text" id="tanggal_lahir" class="bg-slate-50 border-2 border-slate-200 text-slate-900 text-sm font-medium rounded-xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 block w-full p-3" placeholder="Opsional">
                    </div>

                    <button type="button" :disabled="jenisTalak === '' || kondisi === ''" :class="(jenisTalak === '' || kondisi === '') ? 'opacity-50 cursor-not-allowed' : 'hover:-translate-y-1 hover:from-emerald-500 hover:to-teal-400 focus:ring-emerald-500/30 shadow-emerald-500/25 active:scale-95 hover:shadow-lg'" @click="submitForm()" class="w-full text-white bg-gradient-to-r from-emerald-600 to-teal-500 focus:ring-4 focus:outline-none font-extrabold rounded-xl text-sm px-5 py-3.5 text-center premium-transition shadow-md flex justify-center items-center gap-2 relative overflow-hidden">
                        <span x-show="status === 'idle'" class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                            Proses Validasi
                        </span>
                        <span x-show="status === 'loading'" class="flex items-center gap-2">
                            <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                            Memproses...
                        </span>
                        <span x-show="status === 'done'" class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                            Hitung Ulang
                        </span>
                    </button>
                </form>
            </div>
        </div>

        <!-- Kolom Kanan / Hasil Output -->
        <div class="lg:col-span-7 relative" data-aos="fade-left" data-aos-delay="200">
            <!-- Placeholder Default -->
            <div x-show="status !== 'done'" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="bg-white/50 backdrop-blur-sm rounded-[2rem] border-2 border-dashed border-slate-300 flex flex-col items-center justify-center p-10 text-center premium-transition h-full min-h-[500px]">
                <div class="w-24 h-24 bg-white shadow-sm rounded-full flex items-center justify-center mb-6" :class="status === 'loading' ? 'animate-pulse' : ''">
                    <svg class="w-10 h-10 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
                <h3 class="text-2xl font-extrabold text-slate-500 mb-2" x-text="status === 'loading' ? 'Menganalisis KHI...' : 'Menunggu Data'"></h3>
                <p class="text-slate-400 font-medium max-w-sm">Lengkapi formulir untuk memuat analisis status hukum.</p>
            </div>

            <!-- Block Hasil Simulasi -->
            <div x-show="status === 'done'" x-transition:enter="transition ease-out duration-700 delay-300" x-transition:enter-start="opacity-0 scale-95 translate-y-4" x-transition:enter-end="opacity-100 scale-100 translate-y-0" class="bg-white rounded-[2rem] shadow-2xl border overflow-hidden premium-transition relative" :class="submittedJenisTalak === '3' ? 'border-red-100 hover:shadow-red-500/10' : (submittedJenisTalak === 'gugat' ? 'border-amber-100 hover:shadow-amber-500/10' : 'border-emerald-100 hover:shadow-emerald-500/10')">
                <!-- Ribbon Decorative -->
                <div class="absolute top-0 right-0 w-40 h-40 overflow-hidden">
                    <div class="absolute top-0 right-0 w-8 h-8 rounded-bl-full shadow-lg" :class="submittedJenisTalak === '3' ? 'bg-red-500' : (submittedJenisTalak === 'gugat' ? 'bg-amber-500' : 'bg-emerald-500')"></div>
                </div>
                
                <!-- Hasil: Talak Raj'i -->
                <div x-show="submittedJenisTalak === '1' || submittedJenisTalak === '2'">
                    <!-- Watermark -->
                    <div class="absolute -bottom-10 -right-10 opacity-[0.03] pointer-events-none">
                        <svg class="w-96 h-96 text-emerald-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div class="p-8 md:p-10 border-b border-slate-100 bg-[radial-gradient(ellipse_at_top_left,_var(--tw-gradient-stops))] from-emerald-50 via-white to-white relative z-10">
                        <span class="inline-flex items-center justify-center px-4 py-1.5 mb-5 text-xs font-black text-emerald-700 bg-emerald-100/80 rounded-full uppercase tracking-widest border border-emerald-200 shadow-sm animate-pulse">Hasil Analisis</span>
                        <h3 class="text-3xl font-black text-slate-900 mb-3 drop-shadow-sm">Talak Raj'i <span class="text-emerald-600">(Masa Iddah)</span></h3>
                        <p class="text-slate-600 font-medium text-lg leading-relaxed">Berdasarkan kalkulasi, mantan istri saat ini masih berada dalam masa perhitungan Iddah sah.</p>
                    </div>
                    
                    <div class="p-8 md:p-10 space-y-8 bg-white">
                        <div class="grid sm:grid-cols-2 gap-5">
                            <div class="p-5 bg-gradient-to-br from-slate-50 to-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-md hover:-translate-y-1 premium-transition">
                                <div class="text-xs text-slate-500 uppercase font-black tracking-widest mb-2">Masa Iddah Tersisa</div>
                                <div class="text-4xl font-black text-emerald-600">
                                    <template x-if="typeof sisaHari === 'number'">
                                        <span><span x-text="sisaHari"></span> <span class="text-xl font-bold text-slate-500">Hari</span></span>
                                    </template>
                                    <template x-if="typeof sisaHari !== 'number'">
                                        <span class="text-xl font-black text-emerald-600" x-text="sisaHari"></span>
                                    </template>
                                </div>
                            </div>
                            <div class="p-5 bg-gradient-to-br from-slate-50 to-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-md hover:-translate-y-1 premium-transition">
                                <div class="text-xs text-slate-500 uppercase font-black tracking-widest mb-2">Status Rujuk</div>
                                <div class="text-2xl font-black text-slate-800 flex items-center gap-2 mt-1" :class="sisaHari === 0 ? 'text-amber-600' : ''">
                                    <div class="p-1.5 bg-emerald-100 rounded-lg text-emerald-600" :class="sisaHari === 0 ? 'bg-amber-100 text-amber-600' : ''"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div>
                                    <span x-text="sisaHari === 0 ? 'Iddah Habis' : 'Bebas'"></span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h4 class="font-extrabold text-slate-900 mb-4 flex items-center gap-3 text-xl">
                                <div class="p-2 bg-slate-100 rounded-lg text-slate-600"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
                                Catatan Hukum & Instruksi
                            </h4>
                            <div class="text-sm text-slate-700 leading-relaxed space-y-4 bg-slate-50 p-6 rounded-2xl border border-slate-200 font-medium mb-6">
                                <p class="flex items-start gap-3"><span class="font-black text-emerald-600">1.</span> <span>Karena masih iddah Raj'i, Anda berhak penuh merujuk tanpa persetujuan wali/akad baru.</span></p>
                                <p class="flex items-start gap-3"><span class="font-black text-emerald-600">2.</span> <span>Segera ikrar rujuk sebelum masa iddah habis. Jika lewat, wajib akad nikah ulang (Bain Sughra).</span></p>
                                <p class="flex items-start gap-3"><span class="font-black text-emerald-600">3.</span> <span>Datangi KUA domisili dengan KTP, KK, Akta Cerai Asli untuk mencatatkan ikrar.</span></p>
                            </div>

                            <h4 class="font-extrabold text-slate-900 mb-4 flex items-center gap-3 text-lg mt-8">
                                <div class="p-2 bg-emerald-50 rounded-lg text-emerald-600"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg></div>
                                Hak Istri Selama Iddah Raj'i (KHI Psl 149)
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm">
                                    <h5 class="font-bold text-slate-800 mb-1 text-sm">Nafkah & Kiswah</h5>
                                    <p class="text-xs text-slate-500 font-medium leading-relaxed">Suami tetap wajib memberikan nafkah (biaya hidup), maskan (tempat tinggal), dan kiswah (pakaian) kepada mantan istri selama masa iddah belum selesai.</p>
                                </div>
                                <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm">
                                    <h5 class="font-bold text-slate-800 mb-1 text-sm">Larangan Pengusiran</h5>
                                    <p class="text-xs text-slate-500 font-medium leading-relaxed">Mantan istri berhak tetap tinggal di rumah bersama kediaman mereka. Suami dilarang mengusir istri, kecuali istri melakukan nusyuz (pembangkangan).</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6">
                            <a href="/alur-kua" class="inline-flex justify-center items-center w-full px-6 py-4 text-base font-bold text-emerald-800 bg-emerald-50 border border-emerald-200 rounded-2xl hover:bg-emerald-100 hover:border-emerald-300 premium-transition active:scale-95 group">
                                Lihat Persyaratan KUA
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 premium-transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Hasil: Bain Sughra -->
                <div x-show="submittedJenisTalak === 'gugat'" x-cloak>
                    <!-- Watermark -->
                    <div class="absolute -bottom-10 -right-10 opacity-[0.03] pointer-events-none">
                        <svg class="w-96 h-96 text-amber-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    </div>
                    <div class="p-8 md:p-10 border-b border-slate-100 bg-[radial-gradient(ellipse_at_top_left,_var(--tw-gradient-stops))] from-amber-50 via-white to-white relative z-10">
                        <span class="inline-flex items-center justify-center px-4 py-1.5 mb-5 text-xs font-black text-amber-700 bg-amber-100/80 rounded-full uppercase tracking-widest border border-amber-200 shadow-sm animate-pulse">Hasil Analisis</span>
                        <h3 class="text-3xl font-black text-slate-900 mb-3 drop-shadow-sm">Bain Sughra <span class="text-amber-600">(Cerai Gugat/Khuluk)</span></h3>
                        <p class="text-slate-600 font-medium text-lg leading-relaxed">Perceraian ini memutuskan ikatan perkawinan secara seketika. Suami tidak berhak merujuk mantan istri secara sepihak.</p>
                    </div>
                    
                    <div class="p-8 md:p-10 space-y-8 bg-white">
                        <div class="grid sm:grid-cols-2 gap-5">
                            <div class="p-5 bg-gradient-to-br from-slate-50 to-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-md hover:-translate-y-1 premium-transition">
                                <div class="text-xs text-slate-500 uppercase font-black tracking-widest mb-2">Masa Iddah</div>
                                <div class="text-3xl font-black text-slate-800 flex items-center gap-2 mt-1">
                                    <div class="p-1.5 bg-slate-100 rounded-lg text-slate-600"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
                                    <span x-text="submittedKondisi === 'hamil' ? 'Sampai Melahirkan' : (submittedKondisi === 'menopause' ? '3 Bulan' : '3 Kali Suci')"></span>
                                </div>
                            </div>
                            <div class="p-5 bg-gradient-to-br from-amber-50 to-white rounded-2xl border border-amber-100 shadow-sm hover:shadow-md hover:-translate-y-1 premium-transition">
                                <div class="text-xs text-slate-500 uppercase font-black tracking-widest mb-2">Status Rujuk</div>
                                <div class="text-2xl font-black text-amber-600 flex items-center gap-2 mt-1">
                                    <div class="p-1.5 bg-amber-100 rounded-lg text-amber-600"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg></div>
                                    Wajib Akad Baru
                                </div>
                            </div>
                        </div>

                        <div>
                            <h4 class="font-extrabold text-slate-900 mb-4 flex items-center gap-3 text-xl">
                                <div class="p-2 bg-slate-100 rounded-lg text-slate-600"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
                                Catatan Hukum & Instruksi
                            </h4>
                            <div class="text-sm text-slate-700 leading-relaxed space-y-4 bg-slate-50 p-6 rounded-2xl border border-slate-200 font-medium mb-6">
                                <p class="flex items-start gap-3"><span class="font-black text-amber-600">1.</span> <span>Pada perceraian cerai gugat/khuluk, hak rujuk secara otomatis hilang terlepas masih dalam iddah atau tidak.</span></p>
                                <p class="flex items-start gap-3"><span class="font-black text-amber-600">2.</span> <span>Jika kedua belah pihak ingin kembali membina rumah tangga, wajib melalui proses pelamaran ulang, persetujuan istri, dan pelaksanaan <strong>Akad Nikah Baru</strong> beserta mahar.</span></p>
                            </div>

                            <h4 class="font-extrabold text-slate-900 mb-4 flex items-center gap-3 text-lg mt-8">
                                <div class="p-2 bg-amber-50 rounded-lg text-amber-600"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg></div>
                                Hak Istri Selama Iddah Bain
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm">
                                    <h5 class="font-bold text-slate-800 mb-1 text-sm">Tempat Tinggal</h5>
                                    <p class="text-xs text-slate-500 font-medium leading-relaxed">Istri masih berhak menempati rumah kediaman bersama selama masa iddahnya belum berakhir.</p>
                                </div>
                                <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm">
                                    <h5 class="font-bold text-slate-800 mb-1 text-sm">Nafkah</h5>
                                    <p class="text-xs text-slate-500 font-medium leading-relaxed">Berbeda dengan Raj'i, pada iddah Bain istri <strong class="text-amber-600">tidak berhak atas nafkah hidup</strong>, kecuali ia sedang dalam keadaan hamil.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hasil: Bain Kubra -->
                <div x-show="submittedJenisTalak === '3'" x-cloak>
                    <!-- Watermark -->
                    <div class="absolute -bottom-10 -right-10 opacity-[0.03] pointer-events-none">
                        <svg class="w-96 h-96 text-red-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg>
                    </div>
                    <div class="p-8 md:p-10 border-b border-slate-100 bg-[radial-gradient(ellipse_at_top_left,_var(--tw-gradient-stops))] from-red-50 via-white to-white relative z-10">
                        <span class="inline-flex items-center justify-center px-4 py-1.5 mb-5 text-xs font-black text-red-700 bg-red-100/80 rounded-full uppercase tracking-widest border border-red-200 shadow-sm animate-pulse">Hasil Analisis</span>
                        <h3 class="text-3xl font-black text-slate-900 mb-3 drop-shadow-sm">Bain Kubra <span class="text-red-600">(Talak Tiga)</span></h3>
                        <p class="text-slate-600 font-medium text-lg leading-relaxed">Ikatan pernikahan telah terputus secara mutlak. Haram hukumnya untuk rujuk atau menikah kembali secara langsung.</p>
                    </div>
                    
                    <div class="p-8 md:p-10 space-y-8 bg-white">
                        <div class="grid sm:grid-cols-2 gap-5">
                            <div class="p-5 bg-gradient-to-br from-slate-50 to-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-md hover:-translate-y-1 premium-transition">
                                <div class="text-xs text-slate-500 uppercase font-black tracking-widest mb-2">Masa Iddah</div>
                                <div class="text-3xl font-black text-slate-800 flex items-center gap-2 mt-1">
                                    <div class="p-1.5 bg-slate-100 rounded-lg text-slate-600"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
                                    <span x-text="submittedKondisi === 'hamil' ? 'Sampai Melahirkan' : (submittedKondisi === 'menopause' ? '3 Bulan' : '3 Kali Suci')"></span>
                                </div>
                            </div>
                            <div class="p-5 bg-gradient-to-br from-red-50 to-white rounded-2xl border border-red-100 shadow-sm hover:shadow-md hover:-translate-y-1 premium-transition">
                                <div class="text-xs text-slate-500 uppercase font-black tracking-widest mb-2">Status Rujuk</div>
                                <div class="text-2xl font-black text-red-600 flex items-center gap-2 mt-1">
                                    <div class="p-1.5 bg-red-100 rounded-lg text-red-600"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg></div>
                                    Haram (Terlarang)
                                </div>
                            </div>
                        </div>

                        <div>
                            <h4 class="font-extrabold text-slate-900 mb-4 flex items-center gap-3 text-xl">
                                <div class="p-2 bg-slate-100 rounded-lg text-slate-600"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
                                Catatan Hukum & Instruksi
                            </h4>
                            <div class="text-sm text-slate-700 leading-relaxed space-y-4 bg-slate-50 p-6 rounded-2xl border border-slate-200 font-medium mb-6">
                                <p class="flex items-start gap-3"><span class="font-black text-red-600">1.</span> <span>Mantan suami haram merujuk atau menikahi kembali mantan istri.</span></p>
                                <p class="flex items-start gap-3"><span class="font-black text-red-600">2.</span> <span>Mantan istri hanya bisa dinikahi kembali jika ia telah menikah secara sah dengan laki-laki lain (Muhallil), berhubungan suami istri, lalu bercerai dan habis masa iddahnya secara alami tanpa rekayasa.</span></p>
                                <p class="flex items-start gap-3"><span class="font-black text-red-600">3.</span> <span>Segala bentuk perjanjian atau rekayasa nikah Muhallil sangat dilarang dan diharamkan secara syariat.</span></p>
                            </div>

                            <h4 class="font-extrabold text-slate-900 mb-4 flex items-center gap-3 text-lg mt-8">
                                <div class="p-2 bg-red-50 rounded-lg text-red-600"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg></div>
                                Hak Istri Selama Iddah Bain Kubra
                            </h4>
                            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm">
                                <h5 class="font-bold text-slate-800 mb-1 text-sm">Tidak Ada Nafkah dan Tempat Tinggal</h5>
                                <p class="text-xs text-slate-500 font-medium leading-relaxed">Mantan istri yang dijatuhi Talak Bain Kubra <strong class="text-red-600">tidak berhak atas nafkah, pakaian, maupun tempat tinggal</strong>, kecuali ia sedang dalam keadaan hamil (KHI Psl 149).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
