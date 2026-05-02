<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kelompok 5')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    {{-- ===== NAVBAR ===== --}}
    <nav class="bg-blue-600 text-white shadow">
        <div class="max-w-5xl mx-auto px-4 py-3 flex items-center justify-between">

            <a href="{{ route('home') }}" class="font-bold text-lg">
                Kelompok 1
            </a>

            <div class="flex gap-6">
                <a href="{{ route('home') }}"
                   class="{{ request()->routeIs('home') ? 'underline font-bold' : 'hover:underline' }}">
                    Home
                </a>
                <a href="{{ route('about') }}"
                   class="{{ request()->routeIs('about') ? 'underline font-bold' : 'hover:underline' }}">
                    About
                </a>
                <a href="{{ route('blog') }}"
                   class="{{ request()->routeIs('blog') ? 'underline font-bold' : 'hover:underline' }}">
                    Blog
                </a>
                <a href="{{ route('contact') }}"
                   class="{{ request()->routeIs('contact') ? 'underline font-bold' : 'hover:underline' }}">
                    Contact
                </a>
            </div>

        </div>
    </nav>

    {{-- ===== KONTEN HALAMAN ===== --}}
    <main class="flex-1 max-w-5xl mx-auto w-full px-4 py-8">
        @yield('content')
    </main>

    {{-- ===== FOOTER ===== --}}
    <footer class="bg-gray-800 text-white text-center py-4 text-sm">
        © 2026 Kelompok 1 - Pemrograman Web Lanjut
    </footer>

</body>
</html>
