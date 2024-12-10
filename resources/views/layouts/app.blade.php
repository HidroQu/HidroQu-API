<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="{{ asset('logo-circle.svg') }}">
    {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
    <meta name="description"
          content="Solusi Hidroponik Cerdas untuk Memantau Kesehatan Tanaman melalui Pemindaian Daun melalui HidroQu AI. Identifikasi kekurangan nutrisi dan optimalkan budidaya hidroponik Anda.">
    <meta name="og:title" content="HidroQu">
    <meta name="og:description"
          content="Solusi Hidroponik Cerdas untuk Memantau Kesehatan Tanaman melalui Pemindaian Daun melalui HidroQu AI. Identifikasi kekurangan nutrisi dan optimalkan budidaya hidroponik Anda.">
    <meta name="og:title" content="HidroQu">
    <meta name="og:image" content="{{ asset('about.jpg') }}">
    <meta name="og:url" content="{{ config('app.url') }}">
    <meta name="og:type" content="product">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="HidroQu">
    <meta name="twitter:description" content="Solusi Hidroponik Cerdas untuk Memantau Kesehatan Tanaman melalui Pemindaian Daun melalui HidroQu AI. Identifikasi kekurangan nutrisi dan optimalkan budidaya hidroponik Anda.">
    <meta name="twitter:image" content="{{ asset('about.jpg') }}">
    <meta name="twitter:url" content={{ config('app.url') }}>

    <title>{{ config('app.name') }}</title>

    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <header
        class="bg-[#086B5A]/85 fixed w-full h-20 content-center top-0 z-20 px-4 text-white backdrop-blur-md sm:px-6 lg:px-8">
        <nav class="navbar justify-between">
            <div class="flex items-center">
                <img class="w-10 mr-1" src="{{ asset('logo-transparent.svg') }}" alt="HidroQu Logo">
                <a class="text-3xl font-bold" href="#">HidroQu</a>
            </div>

            <div class="flex items-center">
                <div class="hidden items-center gap-2 lg:flex">
                    <a href="#home" class="btn btn-ghost font-black">Beranda</a>
                    <a href="#about" class="btn btn-ghost">Tentang</a>
                    <a href="#features" class="btn btn-ghost">Fitur-fitur</a>
                    <a href="#download" class="btn btn-ghost">Download</a>
                </div>

                <div class="block lg:hidden" x-data="{ open: false }">
                    <button class="relative z-20 flex h-8 w-8 items-center justify-center"
                            aria-label="Toggle Navigation" @click="open = !open" :aria-expanded="open">
                        <svg class="h-3.5 w-3.5 overflow-visible" aria-hidden="true" stroke="currentColor"
                             fill="none" stroke-width="2" stroke-linecap="round">
                            <path :class="{ 'origin-center transition': true, 'scale-90 opacity-0': open }"
                                  d="M0 1H14M0 7H14M0 13H14"></path>
                            <path :class="{ 'origin-center transition': true, 'scale-90 opacity-0': !open }"
                                  d="M2 2L12 12M12 2L2 12"></path>
                        </svg>
                    </button>

                    <div class="absolute inset-x-0 top-0 z-10 min-h-screen min-w-fit bg-slate-700/50 backdrop-blur-sm"
                         aria-hidden="true" x-show="open">
                    </div>
                    <div
                        class="absolute inset-x-0 top-full z-20 mx-4 mt-0 flex origin-top flex-col rounded-2xl bg-white p-4 text-lg font-medium uppercase tracking-tight text-slate-900 shadow-xl ring-1 ring-slate-900/5 sm:mx-6 lg:mx-8"
                        id="navbar" tabindex="-1" x-show="open">
                        <h1 class="divider my-2 text-xl font-medium">HidroQu</h1>
                        <ul class="menu w-full rounded-box">
                            <li><a href="">Contact US</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="min-h-screen">
        {{ $slot }}
    </main>

    <footer class="footer footer-center bg-base-100 text-base-content p-4">
        <aside>
            <p>Copyright &copy; 2024 - All right reserved by HidroQu</p>
        </aside>
    </footer>

    @vite('resources/js/app.js')
</body>
</html>
