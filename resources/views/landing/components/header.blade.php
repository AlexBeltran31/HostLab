<header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-sm border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-6 py-2 flex items-center justify-between">

        {{-- Logo + Nombre --}}
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <img src="{{ asset('images/logo.png') }}" alt="HostLab" class="h-20 w-auto">
            <span class="text-gray-950 font-semibold text-3xl tracking-tight">HostLab</span>
        </a>

        {{-- Navegación --}}
        <nav class="hidden md:flex items-center gap-8">
            <a href="#positioning"
               class="text-gray-600 hover:text-gray-950 text-sm font-medium transition">
                {{ __('landing.nav_about') }}
            </a>
            <a href="#approach"
               class="text-gray-600 hover:text-gray-950 text-sm font-medium transition">
                {{ __('landing.nav_approach') }}
            </a>
            <a href="#how-it-works"
               class="text-gray-600 hover:text-gray-950 text-sm font-medium transition">
                {{ __('landing.nav_how') }}
            </a>
            <a href="#evaluacion"
               class="bg-gray-950 text-white text-sm font-semibold px-5 py-2 rounded-full hover:bg-gray-800 transition">
                {{ __('landing.nav_contact') }}
            </a>
        </nav>

        {{-- Selector de idioma --}}
        @include('landing.components.language-switcher')

    </div>
</header>