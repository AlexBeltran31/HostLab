<header class="fixed top-0 left-0 right-0 z-50 bg-gray-950/95 backdrop-blur-sm border-b border-gray-800">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        {{-- Logo + Nombre --}}
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <div class="w-8 h-8 bg-amber-400 rounded-lg flex items-center justify-center">
                <span class="text-gray-950 font-bold text-sm">HL</span>
            </div>
            <span class="text-white font-semibold text-lg tracking-tight">HostLab</span>
        </a>

        {{-- Navegación --}}
        <nav class="hidden md:flex items-center gap-8">
            <a href="#positioning"
               class="text-gray-400 hover:text-amber-400 text-sm font-medium transition scroll-link">
                {{ __('landing.nav_about') }}
            </a>
            <a href="#approach"
               class="text-gray-400 hover:text-amber-400 text-sm font-medium transition scroll-link">
                {{ __('landing.nav_approach') }}
            </a>
            <a href="#how-it-works"
               class="text-gray-400 hover:text-amber-400 text-sm font-medium transition scroll-link">
                {{ __('landing.nav_how') }}
            </a>
            <a href="#evaluacion"
               class="bg-amber-400 text-gray-950 text-sm font-semibold px-5 py-2 rounded-full hover:bg-amber-300 transition scroll-link">
                {{ __('landing.nav_contact') }}
            </a>
        </nav>

        {{-- Selector de idioma --}}
        @include('landing.components.language-switcher')

    </div>
</header>