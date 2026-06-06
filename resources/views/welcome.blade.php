<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DimensiStudio | Jasa 3D Mockup Profesional & Premium</title>
    
    <!-- Fonts & Assets compiled via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Google Fonts: Plus Jakarta Sans for a premium tech/design agency look -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    
    <style>
        /* Modern Isometric 3D CSS Showcase */
        .iso-scene {
            perspective: 1200px;
            transform-style: preserve-3d;
        }
        .iso-container {
            position: relative;
            width: 280px;
            height: 400px;
            transform: rotateX(60deg) rotateZ(-45deg);
            transform-style: preserve-3d;
            transition: transform 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .iso-container:hover {
            transform: rotateX(55deg) rotateZ(-35deg) scale(1.1);
        }
        .iso-layer {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 24px;
            transition: all 0.5s ease;
            box-shadow: -20px 20px 40px rgba(0,0,0,0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transform-style: preserve-3d;
        }
        
        /* Layer positioning to create depth */
        .layer-1 {
            transform: translateZ(0px);
            background: linear-gradient(135deg, rgba(30,41,59,0.9), rgba(15,23,42,0.9));
            backdrop-filter: blur(10px);
        }
        .layer-2 {
            transform: translateZ(80px);
            background: linear-gradient(135deg, rgba(20,184,166,0.15), rgba(13,148,136,0.05));
            backdrop-filter: blur(8px);
            border: 1px solid rgba(45, 212, 191, 0.4);
            animation: float-layer-2 4s ease-in-out infinite;
        }
        .layer-3 {
            transform: translateZ(160px);
            background: transparent;
            border: 2px dashed rgba(45, 212, 191, 0.6);
            animation: float-layer-3 4s ease-in-out infinite alternate;
        }

        @keyframes float-layer-2 {
            0%, 100% { transform: translateZ(80px); }
            50% { transform: translateZ(100px); }
        }
        @keyframes float-layer-3 {
            0%, 100% { transform: translateZ(160px); }
            50% { transform: translateZ(190px); }
        }

        /* 3D TILT EFFECT CLASSES */
        .tilt-card {
            transform-style: preserve-3d;
            transform: perspective(1000px);
            transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            will-change: transform;
        }
        
        /* 3D Depth Utilities (Z-Axis translations for inner elements) */
        .preserve-3d {
            transform-style: preserve-3d;
        }
        .tz-10 { transform: translateZ(20px); }
        .tz-20 { transform: translateZ(40px); }
        .tz-30 { transform: translateZ(60px); }
        .tz-40 { transform: translateZ(80px); }
        
        /* Required for z-axis pop to work smoothly on tilt */
        .tilt-card > * {
            transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        /* Pure CSS 3D Cube Animation */
        .css-3d-scene {
            perspective: 800px;
            width: 80px;
            height: 80px;
        }
        .css-cube {
            width: 100%;
            height: 100%;
            position: relative;
            transform-style: preserve-3d;
            animation: spin-cube 10s infinite linear;
        }
        .css-cube-face {
            position: absolute;
            width: 80px;
            height: 80px;
            background: rgba(20, 184, 166, 0.1);
            border: 2px solid rgba(20, 184, 166, 0.5);
            backdrop-filter: blur(4px);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: rgba(20, 184, 166, 0.8);
        }
        .cube-front  { transform: rotateY(  0deg) translateZ(40px); }
        .cube-back   { transform: rotateY(180deg) translateZ(40px); }
        .cube-right  { transform: rotateY( 90deg) translateZ(40px); }
        .cube-left   { transform: rotateY(-90deg) translateZ(40px); }
        .cube-top    { transform: rotateX( 90deg) translateZ(40px); }
        .cube-bottom { transform: rotateX(-90deg) translateZ(40px); }

        @keyframes spin-cube {
            0% { transform: rotateX(0deg) rotateY(0deg); }
            100% { transform: rotateX(360deg) rotateY(360deg); }
        }

        /* Floating Navbar Glass Effect */
        .nav-glass {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }
        .nav-dark-glass {
            background: rgba(2, 6, 23, 0.85);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        /* Scroll Reveal Utility */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
        
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-white text-slate-800 font-sans antialiased overflow-x-hidden selection:bg-brand-500 selection:text-white">

    <div class="fixed w-full z-50 px-4 sm:px-6 lg:px-8 top-4 transition-all duration-300" id="nav-wrapper">
        <nav class="max-w-6xl mx-auto nav-glass rounded-full shadow-lg shadow-slate-200/50 transition-all duration-300" id="navbar">
            <div class="px-6 py-3 flex justify-between items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-2 cursor-pointer group" onclick="window.scrollTo(0,0)">
                    <div class="w-9 h-9 bg-dark-950 rounded-lg flex items-center justify-center group-hover:bg-brand-500 transition-colors duration-300 preserve-3d" style="transform: perspective(200px) rotateY(15deg);">
                        <i class="fa-solid fa-cube text-white text-sm" style="transform: translateZ(10px);"></i>
                    </div>
                    <span class="font-bold text-xl text-dark-950 tracking-tight" id="logo-text">Dimensi<span class="text-brand-600">Studio</span></span>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="#layanan" class="text-sm font-semibold text-slate-600 hover:text-brand-600 transition-colors nav-link">Layanan</a>
                    <a href="#portofolio" class="text-sm font-semibold text-slate-600 hover:text-brand-600 transition-colors nav-link">Karya 3D</a>
                    <a href="#harga" class="text-sm font-semibold text-slate-600 hover:text-brand-600 transition-colors nav-link">Harga</a>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm font-semibold text-slate-600 hover:text-brand-600 transition-colors nav-link">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-semibold text-slate-600 hover:text-brand-600 transition-colors nav-link">Masuk</a>
                    @endauth
                    <a href="#kontak" class="bg-dark-950 hover:bg-brand-600 text-white px-6 py-2.5 rounded-full text-sm font-semibold transition-all shadow-md hover:shadow-brand-500/30 hover:-translate-y-0.5" id="nav-cta">
                        Konsultasi Gratis
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-slate-600 hover:text-dark-950 focus:outline-none p-2 transition-colors">
                        <i class="fa-solid fa-bars-staggered text-xl"></i>
                    </button>
                </div>
            </div>
        </nav>
    </div>

    <div id="mobile-menu" class="hidden fixed inset-0 z-40 bg-white/95 backdrop-blur-md flex-col justify-center items-center h-screen transition-opacity">
        <button id="close-menu-btn" class="absolute top-6 right-6 p-4 text-slate-800 text-2xl">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="flex flex-col space-y-6 text-center w-full px-8 preserve-3d">
            <a href="#layanan" class="mobile-link text-2xl font-bold text-slate-800 hover:text-brand-500 transition-colors">Layanan</a>
            <a href="#portofolio" class="mobile-link text-2xl font-bold text-slate-800 hover:text-brand-500 transition-colors">Portofolio 3D</a>
            <a href="#harga" class="mobile-link text-2xl font-bold text-slate-800 hover:text-brand-500 transition-colors">Harga</a>
            @auth
                <a href="{{ url('/dashboard') }}" class="mobile-link text-2xl font-bold text-slate-800 hover:text-brand-500 transition-colors">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="mobile-link text-2xl font-bold text-slate-800 hover:text-brand-500 transition-colors">Masuk</a>
            @endauth
            <a href="#kontak" class="mobile-link mt-8 bg-brand-500 text-white px-8 py-4 rounded-full text-xl font-bold transition-transform active:scale-95 shadow-xl shadow-brand-500/30">
                Mulai Proyek Sekarang
            </a>
        </div>
    </div>

    <header class="relative pt-36 pb-24 lg:pt-48 lg:pb-32 overflow-hidden bg-dark-950 preserve-3d">
        <!-- Background Glows -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none" style="transform: translateZ(-50px);">
            <div class="absolute -top-40 -left-40 w-96 h-96 bg-brand-600 rounded-full mix-blend-screen filter blur-[100px] opacity-20 animate-blob"></div>
            <div class="absolute top-40 -right-20 w-[500px] h-[500px] bg-blue-600 rounded-full mix-blend-screen filter blur-[120px] opacity-20 animate-blob" style="animation-delay: 2s;"></div>
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAwIDEwIEwgNDAgMTAgTSAxMCAwIEwgMTAgNDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0icmdiYSgyNTUsMjU1LDI1NSwwLjAzKSIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9wYXR0ZXJuPjwvZGVmcz48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI2dyaWQpIi8+PC9zdmc+')] opacity-50"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 preserve-3d">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-8 items-center preserve-3d">
                
                <!-- Text Content (Left) -->
                <div class="text-center lg:text-left reveal active tilt-card" data-tilt-max="5">
                    <div class="preserve-3d tz-20">
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-slate-800/50 border border-slate-700/50 text-brand-400 font-semibold text-xs uppercase tracking-widest mb-6 backdrop-blur-sm tz-10">
                            <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-brand-500"></span>
                            </span>
                            Premium 3D Visuals
                        </div>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white leading-[1.1] mb-6 tracking-tight tz-30">
                            Ubah Desain Datar Menjadi <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-400 to-blue-400">Dimensi 3D.</span>
                        </h1>
                        <p class="text-lg text-slate-400 mb-10 max-w-2xl mx-auto lg:mx-0 leading-relaxed font-light tz-20">
                            Studio 3D Mockup spesialis mengonversi aset 2D Anda menjadi render 3D fotorealistis. Buat presentasi produk Anda melompat keluar dari layar.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start tz-30">
                            <a href="#kontak" class="bg-brand-500 hover:bg-brand-400 text-dark-950 px-8 py-4 rounded-full font-bold text-sm transition-all shadow-[0_0_20px_rgba(20,184,166,0.3)] hover:shadow-[0_0_30px_rgba(20,184,166,0.5)] hover:-translate-y-1 text-center flex items-center justify-center gap-2">
                                Pesan Render 3D <i class="fa-solid fa-cube"></i>
                            </a>
                            <a href="#portofolio" class="bg-transparent hover:bg-slate-800/50 border border-slate-700 text-white px-8 py-4 rounded-full font-bold text-sm transition-all hover:-translate-y-1 text-center flex items-center justify-center gap-2 backdrop-blur-sm">
                                Eksplorasi Karya
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 3D Isometric Showcase (Right) -->
                <div class="relative w-full flex justify-center items-center h-[400px] lg:h-[500px] reveal active delay-200 iso-scene">
                    <div class="iso-container scale-75 md:scale-100">
                        <!-- Bottom Layer: Base Wireframe -->
                        <div class="iso-layer layer-1">
                            <div class="w-full h-full p-4 flex flex-col justify-end opacity-40">
                                <div class="grid grid-cols-3 gap-2 mb-2"><div class="h-8 bg-slate-700 rounded col-span-2"></div><div class="h-8 bg-slate-700 rounded"></div></div>
                                <div class="w-full h-32 bg-slate-700 rounded-lg"></div>
                            </div>
                        </div>
                        
                        <!-- Middle Layer: Glass Extrusion -->
                        <div class="iso-layer layer-2 flex items-center justify-center">
                            <div class="w-32 h-32 rounded-2xl bg-brand-500/20 flex items-center justify-center backdrop-blur-md border border-brand-400/50 shadow-[0_0_30px_rgba(20,184,166,0.2)]">
                                <!-- Inner floating element -->
                                <div class="w-16 h-16 bg-brand-400/30 rounded-xl animate-[spin_10s_linear_infinite] flex items-center justify-center border border-brand-300">
                                    <i class="fa-brands fa-unity text-brand-300 text-3xl"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Top Layer: Final Render Highlight -->
                        <div class="iso-layer layer-3 p-4 flex flex-col items-center justify-center bg-gradient-to-t from-dark-950/80 to-transparent">
                            <div class="w-full h-full border border-brand-400/30 rounded-xl flex flex-col items-center justify-center gap-3">
                                <i class="fa-solid fa-cube text-brand-400 text-5xl filter drop-shadow-[0_0_15px_rgba(45,212,191,0.8)]"></i>
                                <span class="text-brand-400 font-mono text-sm tracking-widest uppercase bg-dark-950/50 px-3 py-1 rounded-full backdrop-blur-sm">3D Rendered</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Decorative glow behind 3D object -->
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-brand-500/20 rounded-full filter blur-[80px] -z-10" style="transform: translateZ(-100px);"></div>
                </div>
            </div>
        </div>
    </header>

    <div class="bg-slate-50 py-8 border-b border-slate-200 overflow-hidden flex flex-col justify-center">
        <p class="text-center text-xs font-bold text-slate-400 uppercase tracking-widest mb-6">Dipercaya oleh berbagai brand inovatif</p>
        <div class="relative flex overflow-x-hidden group">
            <div class="flex animate-marquee whitespace-nowrap items-center space-x-16 px-8 opacity-60 grayscale group-hover:grayscale-0 transition-all duration-500">
                <span class="text-2xl font-bold text-slate-800 flex items-center gap-2"><i class="fa-brands fa-apple text-3xl"></i> StudioMac</span>
                <span class="text-2xl font-bold text-slate-800 flex items-center gap-2"><i class="fa-brands fa-aws text-3xl"></i> CloudPack</span>
                <span class="text-2xl font-bold text-slate-800 flex items-center gap-2"><i class="fa-brands fa-figma text-3xl"></i> DesignCo</span>
                <span class="text-2xl font-bold text-slate-800 flex items-center gap-2"><i class="fa-solid fa-cube text-3xl"></i> VoxelTech</span>
                <span class="text-2xl font-bold text-slate-800 flex items-center gap-2"><i class="fa-brands fa-spotify text-3xl"></i> AudioFit</span>
                <span class="text-2xl font-bold text-slate-800 flex items-center gap-2"><i class="fa-brands fa-stripe text-3xl"></i> PayFast</span>
            </div>
            <div class="flex animate-marquee whitespace-nowrap items-center space-x-16 px-8 absolute top-0 opacity-60 grayscale group-hover:grayscale-0 transition-all duration-500" style="left: 100%;">
                <span class="text-2xl font-bold text-slate-800 flex items-center gap-2"><i class="fa-brands fa-apple text-3xl"></i> StudioMac</span>
                <span class="text-2xl font-bold text-slate-800 flex items-center gap-2"><i class="fa-brands fa-aws text-3xl"></i> CloudPack</span>
                <span class="text-2xl font-bold text-slate-800 flex items-center gap-2"><i class="fa-brands fa-figma text-3xl"></i> DesignCo</span>
                <span class="text-2xl font-bold text-slate-800 flex items-center gap-2"><i class="fa-solid fa-cube text-3xl"></i> VoxelTech</span>
                <span class="text-2xl font-bold text-slate-800 flex items-center gap-2"><i class="fa-brands fa-spotify text-3xl"></i> AudioFit</span>
                <span class="text-2xl font-bold text-slate-800 flex items-center gap-2"><i class="fa-brands fa-stripe text-3xl"></i> PayFast</span>
            </div>
        </div>
    </div>

    <section class="py-24 bg-white overflow-hidden" id="layanan">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 perspective-1000">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <h2 class="text-brand-600 font-bold uppercase tracking-widest text-xs mb-3">Keunggulan 3D</h2>
                <h3 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-6">Layanan Render Terspesialisasi</h3>
                <p class="text-slate-500 text-lg">Setiap kartu di bawah ini dapat berinteraksi dalam ruang 3D. Arahkan kursor Anda untuk melihat dimensi kedalamannya.</p>
            </div>

            <!-- Bento Grid with 3D Tilt Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 auto-rows-[250px] sm:auto-rows-[280px]">
                
                <!-- Large Item (Spans 2 cols) -->
                <div class="md:col-span-2 tilt-card bg-slate-50 rounded-3xl p-8 border border-slate-200 hover:border-brand-300 hover:shadow-2xl hover:shadow-brand-500/10 transition-all duration-300 reveal group relative flex flex-col justify-between overflow-hidden cursor-crosshair">
                    <div class="absolute right-0 top-0 w-64 h-64 bg-gradient-to-bl from-brand-100 to-transparent rounded-bl-full opacity-50 -z-10 group-hover:scale-110 transition-transform duration-500 tz-10"></div>
                    
                    <!-- Decorative Pure CSS 3D Cube inside Card -->
                    <div class="absolute right-12 top-12 md:right-24 md:top-16 opacity-20 group-hover:opacity-100 transition-opacity duration-700 tz-40 z-0 hidden sm:block">
                        <div class="css-3d-scene">
                            <div class="css-cube">
                                <div class="css-cube-face cube-front"></div><div class="css-cube-face cube-back"></div>
                                <div class="css-cube-face cube-right"></div><div class="css-cube-face cube-left"></div>
                                <div class="css-cube-face cube-top"></div><div class="css-cube-face cube-bottom"></div>
                            </div>
                        </div>
                    </div>

                    <div class="preserve-3d tz-30 relative z-10 max-w-md">
                        <div class="w-14 h-14 bg-white rounded-xl shadow-md flex items-center justify-center text-brand-600 text-2xl mb-6 tz-20 border border-slate-100">
                            <i class="fa-solid fa-box-open"></i>
                        </div>
                        <h4 class="text-2xl font-bold text-slate-900 mb-2 tz-20">Kemasan & Produk Fisik</h4>
                        <p class="text-slate-600 tz-10">Render fotorealistis untuk botol, kotak, pouch, hingga kosmetik. Material dihitung secara fisik (PBR) mulai dari kaca, plastik matte, hingga foil metalik yang memantulkan cahaya.</p>
                        <a href="#kontak" class="inline-flex items-center gap-2 text-sm font-bold text-brand-600 hover:text-brand-700 mt-6 tz-20 bg-white px-4 py-2 rounded-full shadow-sm">
                            Konsultasi Desain <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Small Item 1 (Dark Isometric UI) -->
                <div class="tilt-card bg-dark-950 rounded-3xl p-8 border border-dark-900 hover:border-blue-500/50 hover:shadow-2xl hover:shadow-blue-500/20 transition-all duration-300 reveal delay-100 group flex flex-col justify-between relative overflow-hidden cursor-crosshair">
                    <!-- Isometric Grid Background -->
                    <div class="absolute inset-0 opacity-10 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px] [transform:rotateX(60deg)_rotateZ(-45deg)_scale(2)] group-hover:opacity-20 transition-opacity"></div>
                    <div class="absolute -right-10 -bottom-10 w-32 h-32 bg-blue-600 rounded-full filter blur-[40px] opacity-30 group-hover:opacity-60 transition-opacity tz-10"></div>
                    
                    <div class="preserve-3d tz-30 z-10">
                        <div class="w-12 h-12 bg-slate-800 rounded-xl flex items-center justify-center text-blue-400 text-xl mb-6 shadow-[0_0_15px_rgba(59,130,246,0.3)] tz-20 border border-slate-700">
                            <i class="fa-solid fa-mobile-screen"></i>
                        </div>
                        <h4 class="text-xl font-bold text-white mb-2 tz-20">UI/UX dalam 3D</h4>
                        <p class="text-slate-400 text-sm tz-10">Pamerkan desain antarmuka Anda pada layar smartphone melayang (floating screens) dengan kedalaman ruang yang sinematik.</p>
                    </div>
                </div>

                <!-- Small Item 2 -->
                <div class="tilt-card bg-slate-50 rounded-3xl p-8 border border-slate-200 hover:border-brand-300 hover:shadow-xl transition-all duration-300 reveal delay-200 flex flex-col justify-between group cursor-crosshair relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-white to-transparent opacity-50"></div>
                    <div class="preserve-3d tz-30 relative z-10">
                        <div class="w-12 h-12 bg-white rounded-xl shadow-md flex items-center justify-center text-brand-600 text-xl mb-6 tz-20 border border-slate-100">
                            <i class="fa-solid fa-shirt"></i>
                        </div>
                        <h4 class="text-xl font-bold text-slate-900 mb-2 tz-20">Apparel & Merch</h4>
                        <p class="text-slate-600 text-sm tz-10">Visualisasi kaos, hoodie, totebag dengan simulasi tekstur kain, lipatan realistis, dan pencahayaan studio.</p>
                    </div>
                </div>

                <!-- Medium Item (Spans 2 cols) -->
                <div class="md:col-span-2 tilt-card bg-gradient-to-br from-brand-50 to-blue-50 rounded-3xl p-8 border border-brand-200 hover:shadow-2xl hover:shadow-brand-500/10 transition-all duration-300 reveal delay-300 flex flex-col md:flex-row items-center justify-between overflow-hidden relative group cursor-crosshair">
                    <div class="preserve-3d tz-30 z-10 max-w-sm">
                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-brand-100 text-brand-700 border border-brand-200 rounded-full text-xs font-bold uppercase tracking-wider mb-4 tz-10">
                            <i class="fa-solid fa-video"></i> Fitur Premium
                        </div>
                        <h4 class="text-2xl font-bold text-slate-900 mb-2 tz-20">Animasi 360° & Exploded View</h4>
                        <p class="text-slate-600 text-sm mb-4 tz-10">Lebih dari sekadar gambar diam. Kami membuat video produk berputar 360 derajat atau animasi komponen terpisah (exploded view) untuk presentasi maksimal.</p>
                    </div>
                    
                    <!-- 3D Abstract Ring Representation -->
                    <div class="mt-6 md:mt-0 w-40 h-40 relative z-10 group-hover:scale-110 transition-transform duration-700 preserve-3d tz-40 flex items-center justify-center">
                        <div class="absolute inset-0 border-4 border-b-brand-500 border-r-blue-400 border-t-transparent border-l-transparent rounded-full animate-[spin_4s_linear_infinite] opacity-50" style="transform: rotateX(60deg);"></div>
                        <div class="absolute inset-2 border-4 border-t-brand-400 border-l-blue-500 border-b-transparent border-r-transparent rounded-full animate-[spin_3s_linear_infinite_reverse] opacity-70" style="transform: rotateX(60deg) translateZ(10px);"></div>
                        <div class="w-16 h-16 bg-white rounded-full shadow-xl flex items-center justify-center border-2 border-slate-100" style="transform: translateZ(20px);">
                            <i class="fa-solid fa-cube text-brand-500 text-2xl animate-pulse"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-dark-950 relative overflow-hidden" id="portofolio">
        <!-- Abstract Background for 3D feeling -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-slate-900 via-dark-950 to-dark-950"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 reveal">
                <div class="max-w-2xl">
                    <h2 class="text-brand-400 font-bold uppercase tracking-widest text-xs mb-3 flex items-center gap-2">
                        <i class="fa-solid fa-layer-group"></i> 3D Showcase
                    </h2>
                    <h3 class="text-3xl md:text-4xl font-extrabold text-white mb-4">Galeri Render 3D Premium</h3>
                    <p class="text-slate-400 text-lg">Arahkan kursor pada karya di bawah untuk melihat efek ruang 3D (Z-axis pop). Kualitas render kami dirancang untuk memukau klien Anda.</p>
                </div>
                <div class="mt-6 md:mt-0">
                    <button class="bg-transparent border border-slate-700 hover:border-brand-400 text-white hover:text-brand-400 px-6 py-3 rounded-full text-sm font-semibold transition-all shadow-[0_0_15px_rgba(20,184,166,0)] hover:shadow-[0_0_15px_rgba(20,184,166,0.2)]">
                        Lihat Resolusi 4K <i class="fa-solid fa-external-link-alt ml-2 text-xs"></i>
                    </button>
                </div>
            </div>

            <!-- Swiper 3D Coverflow Gallery -->
            <div class="swiper coverflow-swiper pt-10 pb-16">
                <div class="swiper-wrapper">
                    <!-- Item 1 -->
                    <div class="swiper-slide group rounded-[2rem] overflow-hidden bg-slate-900 border border-slate-800 shadow-[0_20px_50px_rgba(0,0,0,0.6)] cursor-grab active:cursor-grabbing">
                        <div class="aspect-[4/5] relative w-full h-full">
                            <img src="https://placehold.co/800x1000/1e293b/475569?text=Skincare+3D+Render" alt="Skincare Mockup" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-70 group-hover:opacity-100">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark-950 via-dark-950/50 to-transparent opacity-90 transition-opacity duration-300"></div>
                            <div class="absolute inset-0 p-6 md:p-8 flex flex-col justify-end">
                                <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                    <span class="px-3 py-1 bg-brand-500/20 text-brand-300 border border-brand-500/30 rounded-full text-[10px] sm:text-xs font-bold backdrop-blur-md mb-3 sm:mb-4 inline-block shadow-lg">Kosmetik & Kaca</span>
                                    <h4 class="text-xl sm:text-2xl font-bold text-white mb-2 filter drop-shadow-md">Serum Glass Bottle</h4>
                                    <p class="text-xs sm:text-sm text-slate-300 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">Render botol kaca frosted dengan efek caustics cahaya studio yang memantul realistis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 2 -->
                    <div class="swiper-slide group rounded-[2rem] overflow-hidden bg-slate-900 border border-slate-800 shadow-[0_20px_50px_rgba(0,0,0,0.6)] cursor-grab active:cursor-grabbing">
                        <div class="aspect-[4/5] relative w-full h-full">
                            <img src="https://placehold.co/800x1000/0f172a/334155?text=Isometric+UI+Render" alt="App UI Mockup" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-70 group-hover:opacity-100">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark-950 via-dark-950/50 to-transparent opacity-90 transition-opacity duration-300"></div>
                            <div class="absolute inset-0 p-6 md:p-8 flex flex-col justify-end">
                                <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                    <span class="px-3 py-1 bg-blue-500/20 text-blue-300 border border-blue-500/30 rounded-full text-[10px] sm:text-xs font-bold backdrop-blur-md mb-3 sm:mb-4 inline-block shadow-lg">Digital & UI</span>
                                    <h4 class="text-xl sm:text-2xl font-bold text-white mb-2 filter drop-shadow-md">Fintech Dashboard 3D</h4>
                                    <p class="text-xs sm:text-sm text-slate-300 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">Presentasi UI berlapis melayang dalam lingkungan isometrik dengan pencahayaan neon.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="swiper-slide group rounded-[2rem] overflow-hidden bg-slate-900 border border-slate-800 shadow-[0_20px_50px_rgba(0,0,0,0.6)] cursor-grab active:cursor-grabbing">
                        <div class="aspect-[4/5] relative w-full h-full">
                            <img src="https://placehold.co/800x1000/334155/64748b?text=Coffee+Foil+Render" alt="Packaging Mockup" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-70 group-hover:opacity-100">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark-950 via-dark-950/50 to-transparent opacity-90 transition-opacity duration-300"></div>
                            <div class="absolute inset-0 p-6 md:p-8 flex flex-col justify-end">
                                <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                    <span class="px-3 py-1 bg-orange-500/20 text-orange-300 border border-orange-500/30 rounded-full text-[10px] sm:text-xs font-bold backdrop-blur-md mb-3 sm:mb-4 inline-block shadow-lg">F&B Packaging</span>
                                    <h4 class="text-xl sm:text-2xl font-bold text-white mb-2 filter drop-shadow-md">Artisan Coffee Pouch</h4>
                                    <p class="text-xs sm:text-sm text-slate-300 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">Simulasi material foil aluminium doff dengan efek deboss emas 3D pada logo utama.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 4 (Bonus for Coverflow effect) -->
                    <div class="swiper-slide group rounded-[2rem] overflow-hidden bg-slate-900 border border-slate-800 shadow-[0_20px_50px_rgba(0,0,0,0.6)] cursor-grab active:cursor-grabbing">
                        <div class="aspect-[4/5] relative w-full h-full">
                            <img src="https://placehold.co/800x1000/111827/4b5563?text=Gadget+Mockup" alt="Gadget Mockup" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-70 group-hover:opacity-100">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark-950 via-dark-950/50 to-transparent opacity-90 transition-opacity duration-300"></div>
                            <div class="absolute inset-0 p-6 md:p-8 flex flex-col justify-end">
                                <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                    <span class="px-3 py-1 bg-indigo-500/20 text-indigo-300 border border-indigo-500/30 rounded-full text-[10px] sm:text-xs font-bold backdrop-blur-md mb-3 sm:mb-4 inline-block shadow-lg">Tech & Hardware</span>
                                    <h4 class="text-xl sm:text-2xl font-bold text-white mb-2 filter drop-shadow-md">Smartwatch Titanium</h4>
                                    <p class="text-xs sm:text-sm text-slate-300 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">Detail tekstur metal brushed dan layar OLED yang memancarkan cahaya ambient.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Pagination -->
                <div class="swiper-pagination !bottom-0"></div>
                <!-- Navigation -->
                <div class="swiper-button-next !text-brand-500 hidden md:flex after:!text-2xl !w-12 !h-12 bg-dark-950/50 backdrop-blur-md rounded-full border border-slate-800 hover:bg-brand-500 hover:!text-white transition-colors shadow-lg"></div>
                <div class="swiper-button-prev !text-brand-500 hidden md:flex after:!text-2xl !w-12 !h-12 bg-dark-950/50 backdrop-blur-md rounded-full border border-slate-800 hover:bg-brand-500 hover:!text-white transition-colors shadow-lg"></div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50 relative" id="harga">
        <!-- 3D Decorative Grid in Background -->
        <div class="absolute inset-0 pointer-events-none opacity-[0.03] bg-[linear-gradient(to_right,#000_1px,transparent_1px),linear-gradient(to_bottom,#000_1px,transparent_1px)] bg-[size:40px_40px] [transform:perspective(1000px)_rotateX(60deg)] origin-top"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <h2 class="text-brand-600 font-bold uppercase tracking-widest text-xs mb-3">Investasi Visual</h2>
                <h3 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">Pilih Paket Render 3D Anda</h3>
                <p class="text-slate-500 text-lg">Harga transparan untuk visual kelas dunia. Efek kartu 3D di bawah ini merepresentasikan kedalaman layanan kami.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-6xl mx-auto items-center perspective-1000">
                
                <!-- Basic Plan -->
                <div class="tilt-card bg-white border border-slate-200 rounded-[2rem] p-10 shadow-lg hover:shadow-2xl transition-all duration-300 reveal preserve-3d">
                    <div class="tz-20">
                        <h4 class="text-xl font-bold text-slate-900 mb-2">Single 3D Render</h4>
                        <p class="text-slate-500 text-sm mb-8">Visualisasi dasar 1 produk.</p>
                        <div class="mb-8">
                            <span class="text-5xl font-extrabold text-slate-900 tracking-tight">150<span class="text-2xl text-slate-400">k</span></span>
                            <span class="text-slate-500 text-sm">/gambar</span>
                        </div>
                        <ul class="space-y-4 mb-10">
                            <li class="flex items-start gap-3 text-slate-600"><i class="fa-solid fa-cube text-brand-500 mt-1"></i> <span>1 Angle Kamera</span></li>
                            <li class="flex items-start gap-3 text-slate-600"><i class="fa-solid fa-image text-brand-500 mt-1"></i> <span>Resolusi Tinggi 2K</span></li>
                            <li class="flex items-start gap-3 text-slate-600"><i class="fa-solid fa-droplet text-brand-500 mt-1"></i> <span>Material Basic (Plastik/Kertas)</span></li>
                        </ul>
                        <a href="#kontak" class="block w-full text-center py-4 rounded-full border-2 border-slate-200 hover:border-slate-900 hover:bg-slate-900 hover:text-white text-slate-800 font-bold transition-all tz-10">Pilih Paket</a>
                    </div>
                </div>

                <!-- Pro Plan (3D Highlighted) -->
                <div class="tilt-card bg-dark-950 rounded-[2rem] p-10 shadow-2xl transform lg:-translate-y-4 relative reveal delay-100 border border-brand-500/30 overflow-hidden group preserve-3d">
                    <div class="absolute -right-20 -top-20 w-48 h-48 bg-brand-500 rounded-full filter blur-[80px] opacity-30 group-hover:opacity-50 transition-opacity" style="transform: translateZ(-30px);"></div>
                    
                    <div class="tz-30">
                        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 tz-40">
                            <span class="bg-brand-500 text-dark-950 text-xs font-extrabold uppercase tracking-widest py-2 px-6 rounded-full shadow-[0_10px_20px_rgba(20,184,166,0.4)]">Terpopuler</span>
                        </div>
                        
                        <h4 class="text-xl font-bold text-white mb-2 tz-10">Produk Series 3D</h4>
                        <p class="text-slate-400 text-sm mb-8 tz-10">Katalog lengkap dengan variasi.</p>
                        <div class="mb-8 tz-20">
                            <span class="text-5xl font-extrabold text-white tracking-tight">450<span class="text-2xl text-brand-400">k</span></span>
                            <span class="text-slate-400 text-sm">/5 gambar</span>
                        </div>
                        <ul class="space-y-4 mb-10 tz-10">
                            <li class="flex items-start gap-3 text-slate-300"><i class="fa-solid fa-cubes text-brand-400 mt-1"></i> <span>5 Angle / Variasi Warna</span></li>
                            <li class="flex items-start gap-3 text-slate-300"><i class="fa-solid fa-tv text-brand-400 mt-1"></i> <span>Resolusi Ultra HD (4K)</span></li>
                            <li class="flex items-start gap-3 text-slate-300"><i class="fa-solid fa-gem text-brand-400 mt-1"></i> <span>Material PBR (Kaca, Metalik)</span></li>
                            <li class="flex items-start gap-3 text-slate-300"><i class="fa-solid fa-lightbulb text-brand-400 mt-1"></i> <span>Lighting Studio Kustom</span></li>
                        </ul>
                        <a href="#kontak" class="block w-full text-center py-4 rounded-full bg-brand-500 hover:bg-brand-400 text-dark-950 font-bold transition-all shadow-[0_10px_20px_rgba(20,184,166,0.3)] hover:-translate-y-1 tz-20">Mulai Proyek 3D</a>
                    </div>
                </div>

                <!-- Custom Plan -->
                <div class="tilt-card bg-white border border-slate-200 rounded-[2rem] p-10 shadow-lg hover:shadow-2xl transition-all duration-300 reveal delay-200 preserve-3d">
                    <div class="tz-20">
                        <h4 class="text-xl font-bold text-slate-900 mb-2">3D Animasi</h4>
                        <p class="text-slate-500 text-sm mb-8">Video render untuk kebutuhan iklan.</p>
                        <div class="mb-8">
                            <span class="text-5xl font-extrabold text-slate-900 tracking-tight">Custom</span>
                        </div>
                        <ul class="space-y-4 mb-10">
                            <li class="flex items-start gap-3 text-slate-600"><i class="fa-solid fa-rotate text-brand-500 mt-1"></i> <span>Video 360 Spin Seamless</span></li>
                            <li class="flex items-start gap-3 text-slate-600"><i class="fa-solid fa-burst text-brand-500 mt-1"></i> <span>Exploded View Animation</span></li>
                            <li class="flex items-start gap-3 text-slate-600"><i class="fa-solid fa-file-zipper text-brand-500 mt-1"></i> <span>Termasuk Source File (.blend)</span></li>
                        </ul>
                        <a href="#kontak" class="block w-full text-center py-4 rounded-full border-2 border-slate-200 hover:border-slate-900 hover:bg-slate-900 hover:text-white text-slate-800 font-bold transition-all tz-10">Hubungi Kami</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 relative overflow-hidden bg-white" id="kontak">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-dark-950 rounded-[3rem] p-8 md:p-16 relative overflow-hidden shadow-2xl reveal preserve-3d">
                <div class="absolute -right-32 -top-32 w-96 h-96 bg-brand-600 rounded-full filter blur-[100px] opacity-30"></div>
                <div class="absolute -left-32 -bottom-32 w-96 h-96 bg-blue-600 rounded-full filter blur-[100px] opacity-20"></div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 relative z-10 preserve-3d">
                    <div class="text-white tz-20">
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-slate-800/80 border border-slate-700 text-brand-400 font-semibold text-xs uppercase tracking-widest mb-6">
                            Mulai Berkolaborasi
                        </div>
                        <h2 class="text-4xl md:text-5xl font-extrabold mb-6">Bawa Desain Anda ke Dimensi Ketiga.</h2>
                        <p class="text-slate-400 text-lg mb-10">Kirimkan file label 2D (PDF/AI) atau referensi bentuk produk. Kami siap menyulapnya menjadi aset 3D yang siap memukau klien Anda.</p>
                        
                        <div class="space-y-6">
                            <div class="flex items-center gap-4">
                                <div class="w-14 h-14 bg-slate-800 rounded-2xl flex items-center justify-center text-brand-400 border border-slate-700 shadow-inner">
                                    <i class="fa-solid fa-envelope text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-slate-400">Email Studio</p>
                                    <p class="font-bold text-lg">render@dimensistudio.id</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-14 h-14 bg-slate-800 rounded-2xl flex items-center justify-center text-brand-400 border border-slate-700 shadow-inner">
                                    <i class="fa-brands fa-whatsapp text-2xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-slate-400">WhatsApp (Konsultasi Kilat)</p>
                                    <p class="font-bold text-lg">+62 812 3456 7890</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form wrapped in 3D floating effect -->
                    <div class="bg-white rounded-3xl p-8 shadow-2xl tz-30 transform hover:-translate-y-2 transition-transform duration-500 border border-slate-100">
                        <h3 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-2">
                            Kirim Brief 3D <i class="fa-solid fa-cube text-brand-500 text-lg"></i>
                        </h3>
                        <form onsubmit="handleForm(event)" class="space-y-5">
                            <div>
                                <input type="text" required class="w-full px-5 py-4 rounded-xl border border-slate-200 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition-all bg-slate-50 focus:bg-white text-sm" placeholder="Nama Anda / Perusahaan">
                            </div>
                            <div>
                                <input type="text" required class="w-full px-5 py-4 rounded-xl border border-slate-200 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition-all bg-slate-50 focus:bg-white text-sm" placeholder="No. WhatsApp / Email">
                            </div>
                            <div>
                                <textarea rows="4" required class="w-full px-5 py-4 rounded-xl border border-slate-200 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition-all bg-slate-50 focus:bg-white resize-none text-sm" placeholder="Jelaskan produk yang ingin di-render (misal: botol parfum kaca dengan tutup kayu)..."></textarea>
                            </div>
                            <button type="submit" class="w-full bg-brand-500 hover:bg-brand-600 text-white font-bold py-4 rounded-xl transition-all shadow-[0_5px_15px_rgba(20,184,166,0.4)] hover:shadow-[0_8px_20px_rgba(20,184,166,0.6)] flex justify-center items-center gap-2">
                                Minta Penawaran Harga <i class="fa-solid fa-paper-plane"></i>
                            </button>
                        </form>

                        <div id="successMessage" class="hidden mt-4 p-4 bg-emerald-50 text-emerald-700 rounded-xl border border-emerald-200 text-center font-medium text-sm">
                            <i class="fa-solid fa-circle-check mr-2"></i> Brief terkirim! Spesialis 3D kami akan menghubungi Anda.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark-950 text-slate-400 py-12 border-t border-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <!-- Brand -->
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-brand-600 rounded-lg flex items-center justify-center">
                        <i class="fa-solid fa-cube text-white text-sm"></i>
                    </div>
                    <span class="font-bold text-xl text-white tracking-tight">Dimensi<span class="text-brand-500">Studio</span></span>
                </div>
                
                <!-- Social -->
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-slate-900 border border-slate-800 flex items-center justify-center hover:bg-brand-500 hover:text-white hover:border-brand-500 transition-all hover:-translate-y-1">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-slate-900 border border-slate-800 flex items-center justify-center hover:bg-brand-500 hover:text-white hover:border-brand-500 transition-all hover:-translate-y-1">
                        <i class="fa-brands fa-behance"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-slate-900 border border-slate-800 flex items-center justify-center hover:bg-brand-500 hover:text-white hover:border-brand-500 transition-all hover:-translate-y-1">
                        <i class="fa-brands fa-artstation"></i>
                    </a>
                </div>
            </div>
            
            <div class="border-t border-slate-800/50 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center text-sm">
                <p>&copy; 2026 DimensiStudio. 3D Render & Mockup Specialists.</p>
                <div class="flex gap-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-brand-400 transition-colors">Portofolio PDF</a>
                    <a href="#" class="hover:text-brand-400 transition-colors">Kebijakan Privasi</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // 1. 3D Tilt Effect Logic (Vanilla JS)
        const tiltCards = document.querySelectorAll('.tilt-card');
        
        if (window.matchMedia("(hover: hover)").matches) {
            tiltCards.forEach(card => {
                card.addEventListener('mousemove', e => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    
                    const maxTilt = card.getAttribute('data-tilt-max') || 10;
                    
                    const rotateX = ((y - centerY) / centerY) * -maxTilt; 
                    const rotateY = ((x - centerX) / centerX) * maxTilt;
                    
                    card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`;
                });
                
                card.addEventListener('mouseleave', () => {
                    card.style.transform = `perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)`;
                });
            });
        }

        // 2. Mobile menu handling
        const btn = document.getElementById('mobile-menu-btn');
        const closeBtn = document.getElementById('close-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        function toggleMenu() {
            if(menu.classList.contains('hidden')){
                menu.classList.remove('hidden');
                menu.classList.add('flex');
                setTimeout(() => menu.style.opacity = '1', 10);
                document.body.style.overflow = 'hidden';
            } else {
                menu.style.opacity = '0';
                setTimeout(() => {
                    menu.classList.add('hidden');
                    menu.classList.remove('flex');
                    document.body.style.overflow = 'auto';
                }, 300);
            }
        }

        btn.addEventListener('click', toggleMenu);
        closeBtn.addEventListener('click', toggleMenu);
        mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));

        // 3. Smart Navbar styling on scroll
        const navbar = document.getElementById('navbar');
        const navWrapper = document.getElementById('nav-wrapper');
        const logoText = document.getElementById('logo-text');
        const navLinks = document.querySelectorAll('.nav-link');
        const navCta = document.getElementById('nav-cta');
        const heroSection = document.querySelector('header');

        window.addEventListener('scroll', () => {
            const heroBottom = heroSection.offsetHeight;
            
            if (window.scrollY > 20) {
                navWrapper.classList.replace('top-4', 'top-2');
                navbar.classList.replace('px-6', 'px-8');
            } else {
                navWrapper.classList.replace('top-2', 'top-4');
                navbar.classList.replace('px-8', 'px-6');
            }

            if (window.scrollY > heroBottom - 50) {
                navbar.classList.remove('nav-dark-glass');
                navbar.classList.add('nav-glass');
                logoText.classList.replace('text-white', 'text-dark-950');
                navLinks.forEach(l => { 
                    l.classList.remove('text-slate-300', 'hover:text-white');
                    l.classList.add('text-slate-600', 'hover:text-brand-600');
                });
                navCta.classList.replace('bg-white', 'bg-dark-950');
                navCta.classList.replace('text-dark-950', 'text-white');
            } else {
                navbar.classList.add('nav-dark-glass');
                navbar.classList.remove('nav-glass');
                logoText.classList.replace('text-dark-950', 'text-white');
                navLinks.forEach(l => {
                    l.classList.remove('text-slate-600', 'hover:text-brand-600');
                    l.classList.add('text-slate-300', 'hover:text-white');
                });
                navCta.classList.replace('bg-dark-950', 'bg-brand-500');
                navCta.classList.replace('text-white', 'text-dark-950');
            }
        });
        window.dispatchEvent(new Event('scroll'));

        // 4. Advanced Scroll Reveal
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 100;

                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                }
            }
        }
        window.addEventListener("scroll", reveal);
        reveal();

        // 5. AJAX Form Submission
        function handleForm(e) {
            e.preventDefault();
            const form = e.target;
            const btnSubmit = form.querySelector('button[type="submit"]');
            const originalText = btnSubmit.innerHTML;
            
            btnSubmit.innerHTML = '<i class="fa-solid fa-cube fa-spin"></i> Merender Brief...';
            btnSubmit.disabled = true;
            btnSubmit.classList.add('opacity-70');

            const name = form.querySelector('input[placeholder*="Nama"]').value;
            const contact = form.querySelector('input[placeholder*="WhatsApp"]').value;
            const description = form.querySelector('textarea').value;

            fetch('{{ route("briefs.store") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    name: name,
                    contact: contact,
                    description: description
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const successMsg = document.getElementById('successMessage');
                    successMsg.innerHTML = `<i class="fa-solid fa-circle-check mr-2"></i> ${data.message}`;
                    successMsg.classList.remove('hidden');
                    form.reset();
                    setTimeout(() => {
                        successMsg.classList.add('hidden');
                    }, 5000);
                } else {
                    alert('Gagal mengirim brief. Harap periksa inputan Anda.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan koneksi.');
            })
            .finally(() => {
                btnSubmit.innerHTML = originalText;
                btnSubmit.disabled = false;
                btnSubmit.classList.remove('opacity-70');
            });
        }

        // Initialize Swiper Coverflow
        const swiper = new Swiper('.coverflow-swiper', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            initialSlide: 1,
            coverflowEffect: {
                rotate: 35,
                stretch: 0,
                depth: 250,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <style>
        /* Swiper custom slide sizing for coverflow */
        .coverflow-swiper .swiper-slide {
            width: 280px;
        }
        @media (min-width: 640px) {
            .coverflow-swiper .swiper-slide {
                width: 320px;
            }
        }
        @media (min-width: 1024px) {
            .coverflow-swiper .swiper-slide {
                width: 380px;
            }
        }
        /* Style adjustments for swiper pagination dots */
        .swiper-pagination-bullet {
            background-color: #475569;
            opacity: 0.5;
        }
        .swiper-pagination-bullet-active {
            background-color: #14b8a6; /* Brand color */
            opacity: 1;
        }
    </style>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>
</html>
