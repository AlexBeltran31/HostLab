<section id="positioning"
         class="h-screen px-6 relative bg-cover bg-center bg-no-repeat flex items-center"
         style="background-image: url('{{ asset('images/side2web.png') }}')">

    {{-- Overlay oscuro para legibilidad --}}
    <div class="absolute inset-0 bg-gray-950/70"></div>

    <div class="relative max-w-5xl mx-auto text-center">

        <span class="text-sm font-medium tracking-widest text-amber-400 uppercase">
            {{ __('landing.positioning_badge') }}
        </span>

        <h2 class="mt-4 text-4xl font-bold text-white">
            {{ __('landing.positioning_title') }}
        </h2>

        <p class="mt-6 text-lg text-gray-300 max-w-3xl mx-auto">
            {{ __('landing.positioning_description') }}
        </p>

    </div>
</section>