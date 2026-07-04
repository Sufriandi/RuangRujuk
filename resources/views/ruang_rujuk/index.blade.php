@extends('layouts.app')

@section('title', 'Beranda - RuangRujuk')

@section('content')
<!-- Hero Section with Gradient Mesh -->
<section x-data="{ mouseX: 0, mouseY: 0 }" @mousemove="mouseX = $event.clientX; mouseY = $event.clientY" class="relative overflow-hidden bg-[radial-gradient(circle_at_top,_var(--tw-gradient-stops))] from-emerald-50 via-white to-slate-50 -mt-24 md:-mt-28 pt-32 pb-16 lg:pt-40 lg:pb-24 border-b border-slate-100">
    <!-- Ambient Blur Orbs with Parallax -->
    <div :style="`transform: translate(${mouseX * 0.02}px, ${mouseY * 0.02}px)`" class="absolute top-10 right-10 w-96 h-96 bg-emerald-300/20 rounded-full mix-blend-multiply filter blur-[80px] animate-blob premium-transition"></div>
    <div :style="`transform: translate(${mouseX * -0.01}px, ${mouseY * -0.01}px)`" class="absolute bottom-10 left-10 w-96 h-96 bg-teal-200/20 rounded-full mix-blend-multiply filter blur-[80px] animate-blob delay-200 premium-transition"></div>

    <div class="max-w-screen-xl mx-auto px-6 md:px-12 lg:px-24 grid lg:grid-cols-12 gap-16 items-center relative z-10 w-full">
        <div class="mr-auto place-self-center lg:col-span-7" data-aos="fade-right" data-aos-duration="1000">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/80 backdrop-blur-md text-slate-800 text-xs sm:text-sm font-bold mb-8 border border-emerald-100 shadow-sm hover:shadow-md premium-transition hover:border-emerald-200">
                <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 shadow-[0_0_8px_rgba(16,185,129,0.6)] animate-pulse"></span>
                Validasi Hukum Keluarga Islam
            </div>
            <h1 class="max-w-2xl mb-6 text-4xl font-extrabold tracking-tight leading-tight md:text-5xl xl:text-6xl text-slate-900 drop-shadow-sm">
                Keabsahan Rujuk Sesuai <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-teal-500 relative">Syariat & Negara</span>
            </h1>
            <p class="max-w-2xl mb-10 font-medium text-slate-600 lg:mb-12 md:text-lg lg:text-xl leading-relaxed">
                Menghadapi masa pasca-talak membutuhkan kehati-hatian. RuangRujuk memfasilitasi Anda menganalisis status perceraian, menentukan masa iddah secara presisi, dan memberikan panduan birokrasi KUA yang legal formal.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="/cek-prosedur" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold text-center text-white rounded-2xl bg-gradient-to-r from-emerald-600 to-teal-500 hover:from-emerald-500 hover:to-teal-400 focus:ring-4 focus:ring-emerald-500/30 premium-transition shadow-lg shadow-emerald-500/25 active:scale-95 hover:-translate-y-1 group">
                    Cek Status Rujuk
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 premium-transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
                <a href="/edukasi-talak" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold text-center text-slate-700 rounded-2xl bg-white border border-slate-200 hover:bg-slate-50 hover:text-emerald-700 hover:border-emerald-200 hover:shadow-md focus:ring-4 focus:ring-slate-100 premium-transition active:scale-95 hover:-translate-y-1">
                    Pelajari Jenis Talak
                </a>
            </div>
        </div>
        <div class="lg:col-span-5 relative hidden lg:flex justify-center items-center perspective-1000" data-aos="zoom-in-left" data-aos-duration="1200" data-aos-delay="200">
            <!-- Interactive 3D Wedding Rings (Three.js) -->
            <div class="relative w-full aspect-square max-w-lg flex justify-center items-center">
                <div id="ring3d" class="relative w-full h-full z-10 cursor-grab active:cursor-grabbing"></div>
                
                <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
                <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const el = document.getElementById('ring3d');
                    if (!el) return;
                    const W = el.clientWidth, H = el.clientHeight;

                    // Renderer
                    const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
                    renderer.setSize(W, H);
                    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
                    renderer.toneMapping = THREE.ACESFilmicToneMapping;
                    renderer.toneMappingExposure = 0.9;
                    renderer.outputEncoding = THREE.sRGBEncoding;
                    el.appendChild(renderer.domElement);

                    const scene = new THREE.Scene();
                    const camera = new THREE.PerspectiveCamera(30, W / H, 0.1, 500);
                    camera.position.set(0, 5, 22);
                    camera.lookAt(0, 0, 0);

                    // ===== DARK ENVIRONMENT MAP =====
                    // Gold needs dark surroundings + bright highlights for contrast
                    const pmrem = new THREE.PMREMGenerator(renderer);
                    const eScene = new THREE.Scene();

                    // Dark background (this is what makes gold look GOLD, not plastic)
                    eScene.add(new THREE.Mesh(
                        new THREE.SphereGeometry(80, 32, 32),
                        new THREE.MeshBasicMaterial({ color: 0x111111, side: THREE.BackSide })
                    ));

                    // Small bright highlight panels (these create the shiny streaks on gold)
                    const addPanel = (color, x, y, z, sx, sy) => {
                        const m = new THREE.Mesh(
                            new THREE.PlaneGeometry(sx, sy),
                            new THREE.MeshBasicMaterial({ color, side: THREE.DoubleSide })
                        );
                        m.position.set(x, y, z);
                        m.lookAt(0, 0, 0);
                        eScene.add(m);
                    };
                    addPanel(0xffffff, 0, 50, 10, 25, 8);     // top strip
                    addPanel(0xfff8ee, 40, 15, 25, 12, 30);   // right warm
                    addPanel(0xffeedd, -35, 10, -20, 15, 25);  // left warm
                    addPanel(0xffffff, 10, -10, 40, 20, 6);    // front strip
                    addPanel(0x332200, 0, -50, 0, 80, 80);     // dark floor

                    scene.environment = pmrem.fromScene(eScene, 0.04).texture;
                    pmrem.dispose();

                    // ===== MATERIALS =====
                    const goldA = new THREE.MeshStandardMaterial({
                        color: 0xb8860b,       // DarkGoldenRod
                        metalness: 1.0,
                        roughness: 0.15,
                        envMapIntensity: 2.0,
                    });
                    const goldB = new THREE.MeshStandardMaterial({
                        color: 0xcd7f32,       // Bronze/Rose Gold
                        metalness: 1.0,
                        roughness: 0.15,
                        envMapIntensity: 2.0,
                    });

                    // ===== RING GEOMETRY =====
                    // LatheGeometry: profile revolves around Y axis
                    // bandW = radial thickness (thin like real metal)
                    // bandH = visible band width (tall = wide band on finger)
                    const bandProfile = [];
                    const bandW = 0.35, bandH = 0.5;
                    const r = 3.0;
                    const steps = 24;
                    for (let i = 0; i <= steps; i++) {
                        const t = (i / steps) * Math.PI * 2;
                        const px = r + Math.cos(t) * bandW * 0.5;
                        const py = Math.sin(t) * bandH;
                        bandProfile.push(new THREE.Vector2(px, py));
                    }
                    const ringGeo = new THREE.LatheGeometry(bandProfile, 128);

                    // Ring 1 - plain rose gold band
                    const ring1 = new THREE.Mesh(ringGeo, goldB);

                    // Ring 2 - plain gold band
                    const ring2 = new THREE.Mesh(ringGeo, goldA);

                    // Position like reference photo
                    const group = new THREE.Group();

                    ring1.rotation.set(1.2, 0.3, 0.4);
                    ring1.position.set(-0.8, 2, -0.5);

                    ring2.rotation.set(0.2, -0.2, -0.3);
                    ring2.position.set(0.8, -1.5, 0.5);

                    group.add(ring1);
                    group.add(ring2);
                    scene.add(group);

                    // ===== LIGHTS =====
                    scene.add(new THREE.AmbientLight(0xfff0dd, 0.15));
                    const dl = new THREE.DirectionalLight(0xffffff, 0.8);
                    dl.position.set(5, 12, 8);
                    scene.add(dl);
                    const dl2 = new THREE.DirectionalLight(0xffeebb, 0.4);
                    dl2.position.set(-6, 4, -4);
                    scene.add(dl2);

                    // ===== INTERACTION =====
                    let mx = 0, my = 0;
                    el.addEventListener('mousemove', e => {
                        const r = el.getBoundingClientRect();
                        mx = ((e.clientX - r.left) / W - 0.5) * 2;
                        my = ((e.clientY - r.top) / H - 0.5) * 2;
                    });
                    el.addEventListener('mouseleave', () => { mx = 0; my = 0; });

                    let ry = 0, rx = 0.25;
                    (function loop() {
                        requestAnimationFrame(loop);
                        ry += (mx * 0.5 - ry) * 0.04;
                        rx += (0.25 + my * 0.25 - rx) * 0.04;
                        group.rotation.y = ry + Date.now() * 0.00025;
                        group.rotation.x = rx;
                        group.position.y = Math.sin(Date.now() * 0.0007) * 0.3;
                        renderer.render(scene, camera);
                    })();

                    window.addEventListener('resize', () => {
                        const nw = el.clientWidth, nh = el.clientHeight;
                        camera.aspect = nw / nh;
                        camera.updateProjectionMatrix();
                        renderer.setSize(nw, nh);
                    });
                });
                </script>
            </div>
        </div>
    </div>
</section>

<!-- Features Grid -->
<section class="py-24 bg-white relative z-20">
    <div class="max-w-screen-xl mx-auto px-6 md:px-12 lg:px-24">
        <div class="text-center max-w-2xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-5 tracking-tight">Solusi Holistik Hukum</h2>
            <p class="text-slate-600 text-lg font-medium leading-relaxed">Pendekatan sistematis untuk memastikan setiap tahapan rujuk sesuai dengan Kompilasi Hukum Islam (KHI) dan regulasi negara.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="p-8 rounded-[2rem] bg-white border border-slate-100 shadow-lg shadow-slate-200/40 premium-transition hover:-translate-y-2 hover:shadow-2xl hover:shadow-emerald-500/10 hover:border-emerald-200 group cursor-pointer" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 rounded-2xl bg-emerald-50 border border-emerald-100 flex items-center justify-center mb-8 premium-transition group-hover:scale-110 group-hover:bg-emerald-500 group-hover:shadow-lg shadow-emerald-500/20">
                    <svg class="w-8 h-8 text-emerald-600 premium-transition group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-4 group-hover:text-emerald-700 premium-transition">Akurasi Rujukan KHI</h3>
                <p class="text-slate-600 leading-relaxed font-medium group-hover:text-slate-700 premium-transition">Algoritma dirancang mengikuti presisi Kompilasi Hukum Islam, memastikan status Talak Raj'i atau Bain tervalidasi dengan ketat tanpa celah bias.</p>
            </div>
            <!-- Feature 2 -->
            <div class="p-8 rounded-[2rem] bg-white border border-slate-100 shadow-lg shadow-slate-200/40 premium-transition hover:-translate-y-2 hover:shadow-2xl hover:shadow-amber-500/10 hover:border-amber-200 group cursor-pointer" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 rounded-2xl bg-amber-50 border border-amber-100 flex items-center justify-center mb-8 premium-transition group-hover:scale-110 group-hover:bg-amber-500 group-hover:shadow-lg shadow-amber-500/20">
                    <svg class="w-8 h-8 text-amber-600 premium-transition group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-4 group-hover:text-amber-700 premium-transition">Validasi Masa Iddah</h3>
                <p class="text-slate-600 leading-relaxed font-medium group-hover:text-slate-700 premium-transition">Penentuan akhir masa iddah dilakukan instan berdasarkan kondisi biologis istri secara nyata, menghindari kesalahan fatal perhitungan hari.</p>
            </div>
            <!-- Feature 3 -->
            <div class="p-8 rounded-[2rem] bg-white border border-slate-100 shadow-lg shadow-slate-200/40 premium-transition hover:-translate-y-2 hover:shadow-2xl hover:shadow-teal-500/10 hover:border-teal-200 group cursor-pointer" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 rounded-2xl bg-teal-50 border border-teal-100 flex items-center justify-center mb-8 premium-transition group-hover:scale-110 group-hover:bg-teal-500 group-hover:shadow-lg shadow-teal-500/20">
                    <svg class="w-8 h-8 text-teal-600 premium-transition group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-4 group-hover:text-teal-700 premium-transition">Panduan Birokrasi</h3>
                <p class="text-slate-600 leading-relaxed font-medium group-hover:text-slate-700 premium-transition">Transparansi dokumen persyaratan, alur pemeriksaan PPN di KUA, hingga terbitnya Kutipan Buku Pendaftaran Rujuk tersaji komprehensif.</p>
            </div>
        </div>
    </div>
</section>

<!-- Summary Statistics & Law Component (Bento Grid) -->
<section class="py-24 bg-slate-50 border-t border-slate-200">
    <div class="max-w-screen-xl mx-auto px-6 md:px-12 lg:px-24">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div data-aos="fade-right">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-8 tracking-tight">Urgensi Pencatatan Hukum</h2>
                <div class="space-y-5">
                    <div class="flex gap-5 p-6 bg-white rounded-3xl border border-slate-100 shadow-md hover:shadow-xl premium-transition hover:-translate-y-1 group">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-12 h-12 rounded-2xl bg-red-50 flex items-center justify-center group-hover:bg-red-500 premium-transition shadow-sm">
                                <svg class="w-6 h-6 text-red-500 group-hover:text-white premium-transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-lg font-extrabold text-slate-900 mb-2">Rujuk Di Bawah Tangan</h4>
                            <p class="text-slate-600 font-medium leading-relaxed">Rujuk yang tidak dicatatkan berpotensi menghilangkan hak perdata dan tidak memiliki kekuatan hukum pembuktian di pengadilan.</p>
                        </div>
                    </div>
                    <div class="flex gap-5 p-6 bg-white rounded-3xl border border-slate-100 shadow-md border-l-8 border-l-emerald-500 hover:shadow-xl hover:border-l-emerald-600 premium-transition hover:-translate-y-1 group">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-50 flex items-center justify-center group-hover:bg-emerald-500 premium-transition shadow-sm">
                                <svg class="w-6 h-6 text-emerald-600 group-hover:text-white premium-transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-lg font-extrabold text-slate-900 mb-2">Pasal 163 KHI</h4>
                            <p class="text-slate-600 font-medium leading-relaxed">Suami dapat merujuk istrinya dalam masa iddah. Wajib dilaksanakan di hadapan PPN untuk legalitas formal.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Bento Grid Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5" data-aos="fade-left" data-aos-delay="200">
                <div class="bg-gradient-to-br from-emerald-600 to-teal-500 p-8 rounded-[2rem] text-white shadow-xl shadow-emerald-500/20 premium-transition hover:-translate-y-1.5 hover:shadow-2xl hover:scale-[1.02] group cursor-pointer relative overflow-hidden sm:col-span-2">
                    <div class="absolute -right-4 -top-4 w-32 h-32 bg-white/10 rounded-full blur-2xl group-hover:bg-white/20 premium-transition"></div>
                    <div class="flex justify-between items-start mb-4">
                        <div class="text-emerald-100 text-sm font-black uppercase tracking-widest bg-black/10 px-3 py-1 rounded-full">Talak Raj'i</div>
                        <div class="p-2 bg-white/20 rounded-xl backdrop-blur-md"><svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg></div>
                    </div>
                    <div class="text-4xl md:text-5xl font-extrabold mb-3 group-hover:scale-105 origin-left premium-transition">Hak Penuh</div>
                    <p class="text-emerald-50 font-medium leading-relaxed max-w-sm">Hak rujuk tanpa perlu persetujuan istri selama masa Iddah belum berakhir.</p>
                </div>
                
                <div class="bg-white p-8 rounded-[2rem] border border-slate-200 shadow-lg premium-transition hover:-translate-y-1.5 hover:shadow-xl hover:border-slate-300 hover:scale-[1.02] group cursor-pointer flex flex-col justify-between">
                    <div>
                        <div class="text-slate-400 text-xs font-black uppercase tracking-widest mb-3 group-hover:text-slate-500 premium-transition">Bain Sughra</div>
                        <div class="text-3xl font-extrabold text-slate-900 mb-3 group-hover:scale-105 origin-left premium-transition">Akad Baru</div>
                    </div>
                    <p class="text-slate-500 text-sm font-medium leading-relaxed mt-4">Pasca Iddah habis, mewajibkan akad nikah dan mahar baru.</p>
                </div>
                
                <div class="bg-white p-8 rounded-[2rem] border border-slate-200 shadow-lg premium-transition hover:-translate-y-1.5 hover:shadow-xl hover:border-red-200 hover:scale-[1.02] group cursor-pointer flex flex-col justify-between">
                    <div>
                        <div class="text-slate-400 text-xs font-black uppercase tracking-widest mb-3 group-hover:text-red-400 premium-transition">Bain Kubra</div>
                        <div class="text-3xl font-extrabold text-red-500 mb-3 group-hover:scale-105 origin-left premium-transition">Putus Mutlak</div>
                    </div>
                    <p class="text-slate-500 text-sm font-medium leading-relaxed mt-4">Talak 3 mengharamkan rujuk langsung. Wajib melalui Muhallil.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
