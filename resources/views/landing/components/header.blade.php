<header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-sm border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-6 py-2 flex items-center justify-between">

        {{-- Logo + Nombre --}}
        <a href="#hero" class="flex items-center gap-3">
            <img src="{{ asset('images/logo.png') }}" alt="HostLab" class="h-16 w-auto">
            <span class="text-gray-950 font-semibold text-2xl tracking-tight">HostLab</span>
        </a>

        {{-- Navegación desktop --}}
        <nav class="hidden md:flex items-center gap-8">
            <a href="#approach"
               class="text-gray-600 hover:text-gray-950 text-base font-medium transition">
                {{ __('landing.nav_approach') }}
            </a>
            <a href="#positioning"
               class="text-gray-600 hover:text-gray-950 text-base font-medium transition">
                {{ __('landing.nav_about') }}
            </a>
            <a href="#how-it-works"
               class="text-gray-600 hover:text-gray-950 text-base font-medium transition">
                {{ __('landing.nav_how') }}
            </a>
            <a href="#evaluacion"
               class="bg-gray-950 text-white text-base font-semibold px-5 py-2 rounded-full hover:bg-gray-800 transition">
                {{ __('landing.nav_contact') }}
            </a>
        </nav>

        {{-- Derecha: idioma + hamburguesa --}}
        <div class="flex items-center gap-4">
            @include('landing.components.language-switcher')

            {{-- Botón hamburguesa (solo móvil) --}}
            <button id="menu-toggle" class="md:hidden flex flex-col gap-1.5 p-2">
                <span class="w-6 h-0.5 bg-gray-950 transition-all duration-300" id="line1"></span>
                <span class="w-6 h-0.5 bg-gray-950 transition-all duration-300" id="line2"></span>
                <span class="w-6 h-0.5 bg-gray-950 transition-all duration-300" id="line3"></span>
            </button>
        </div>

    </div>

    {{-- Menú móvil --}}
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 px-6 py-4 space-y-4">
        <a href="#approach" class="block text-gray-700 font-medium py-2 hover:text-gray-950 transition mobile-link">
            {{ __('landing.nav_approach') }}
        </a>
        <a href="#positioning" class="block text-gray-700 font-medium py-2 hover:text-gray-950 transition mobile-link">
            {{ __('landing.nav_about') }}
        </a>
        <a href="#how-it-works" class="block text-gray-700 font-medium py-2 hover:text-gray-950 transition mobile-link">
            {{ __('landing.nav_how') }}
        </a>
        <a href="#evaluacion" class="block bg-gray-950 text-white font-semibold px-5 py-3 rounded-full text-center hover:bg-gray-800 transition mobile-link">
            {{ __('landing.nav_contact') }}
        </a>
    </div>
</header>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const line1 = document.getElementById('line1');
    const line2 = document.getElementById('line2');
    const line3 = document.getElementById('line3');

    menuToggle.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
        line1.classList.toggle('rotate-45');
        line1.classList.toggle('translate-y-2');
        line2.classList.toggle('opacity-0');
        line3.classList.toggle('-rotate-45');
        line3.classList.toggle('-translate-y-2');
    });

    document.querySelectorAll('.mobile-link').forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
            line1.classList.remove('rotate-45', 'translate-y-2');
            line2.classList.remove('opacity-0');
            line3.classList.remove('-rotate-45', '-translate-y-2');
        });
    });
</script>