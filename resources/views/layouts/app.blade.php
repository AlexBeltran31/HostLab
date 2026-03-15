<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'HostLab') }}</title>
    <meta name="description" content="{{ __('landing.meta_description') }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- Styles --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">

    @include('landing.components.header')

    {{-- Flash message --}}
    @if (session('success'))
        <div id="flash-message" class="fixed top-16 left-1/2 -translate-x-1/2 z-50 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg whitespace-nowrap flex items-center gap-4">
            <span>{{ session('success') }}</span>
            <button onclick="document.getElementById('flash-message').remove()" class="text-white font-bold text-lg leading-none hover:text-green-200 transition">
                &times;
            </button>
        </div>
    @endif

    <main class="pt-16">
        @yield('content')
    </main>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const start = window.scrollY;
                    const end = target.getBoundingClientRect().top + window.scrollY;
                    const duration = 800;
                    const startTime = performance.now();

                    function scroll(currentTime) {
                        const elapsed = currentTime - startTime;
                        const progress = Math.min(elapsed / duration, 1);
                        const ease = progress < 0.5
                            ? 2 * progress * progress
                            : -1 + (4 - 2 * progress) * progress;

                        window.scrollTo(0, start + (end - start) * ease);

                        if (progress < 1) requestAnimationFrame(scroll);
                    }

                    requestAnimationFrame(scroll);
                }
            });
        });
    </script>

</body>
</html>