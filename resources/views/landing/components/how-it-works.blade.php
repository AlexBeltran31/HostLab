<section id="how-it-works" class="min-h-screen flex items-center bg-white px-6 py-24">
    <div class="max-w-4xl mx-auto">

        <div class="text-center">
            <span class="text-sm font-medium tracking-widest text-amber-400 uppercase">
                {{ __('landing.how_badge') }}
            </span>
            <h2 class="mt-4 text-4xl font-bold text-gray-900">
                {{ __('landing.how_title') }}
            </h2>
        </div>

        <div class="mt-16 space-y-6">

            @foreach ([1, 2, 3, 4] as $step)
            <div class="flex items-start gap-6 p-8 bg-gray-200 rounded-2xl">
                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-amber-400 text-gray-950 font-bold flex items-center justify-center text-lg">
                    {{ $step }}
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">{{ __("landing.how_step{$step}_title") }}</h3>
                    <p class="mt-2 text-gray-500 text-sm">{{ __("landing.how_step{$step}_desc") }}</p>
                </div>
            </div>
            @endforeach

        </div>

        <div class="mt-16 text-center">
            <a href="#evaluacion"
               class="inline-block bg-amber-400 text-gray-950 font-semibold px-8 py-4 rounded-full hover:bg-amber-300 transition">
                {{ __('landing.how_cta') }}
            </a>
        </div>

    </div>
</section>