<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Jasa 3D Mockup') }} - Admin</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!-- 3D & Theme Styles -->
        <style>
            body {
                font-family: 'Plus Jakarta Sans', sans-serif;
            }
            .tilt-card {
                transform-style: preserve-3d;
                transform: perspective(1000px);
                transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
                will-change: transform;
            }
            .preserve-3d { transform-style: preserve-3d; }
            .tz-10 { transform: translateZ(20px); }
            .tz-20 { transform: translateZ(40px); }
            .tz-30 { transform: translateZ(60px); }
            .tz-40 { transform: translateZ(80px); }
            .tilt-card > * {
                transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-dark-950 text-slate-300 font-sans antialiased overflow-x-hidden selection:bg-brand-500 selection:text-white">
        
        <!-- Background Ambient Glow -->
        <div class="fixed inset-0 overflow-hidden pointer-events-none z-[-1]">
            <div class="absolute -top-40 -left-40 w-96 h-96 bg-brand-600 rounded-full mix-blend-screen filter blur-[120px] opacity-10"></div>
            <div class="absolute top-1/2 -right-20 w-[500px] h-[500px] bg-blue-600 rounded-full mix-blend-screen filter blur-[150px] opacity-10"></div>
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAwIDEwIEwgNDAgMTAgTSAxMCAwIEwgMTAgNDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0icmdiYSgyNTUsMjU1LDI1NSwwLjAyKSIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9wYXR0ZXJuPjwvZGVmcz48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI2dyaWQpIi8+PC9zdmc+')] opacity-50"></div>
        </div>

        <div class="min-h-screen relative z-10">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="border-b border-slate-800 bg-slate-900/50 backdrop-blur-md sticky top-0 z-40">
                    <div class="max-w-7xl mx-auto py-5 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
