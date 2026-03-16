<section id="approach" class="min-h-screen flex items-center bg-gray-50 px-6 py-24">
    <div class="max-w-6xl mx-auto w-full">

        <div class="text-center mb-8">
            <span class="text-sm font-medium tracking-widest text-amber-400 uppercase">
                {{ __('landing.approach_badge') }}
            </span>
            <h2 class="mt-2 text-4xl font-bold" style="color: #0F1B2D;">
                {{ __('landing.approach_title') }}
            </h2>
            <p class="mt-4 text-lg text-gray-500 max-w-2xl mx-auto">
                {{ __('landing.approach_description') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            <div class="rounded-2xl overflow-hidden flex flex-col group hover:scale-105 transition-transform duration-300 cursor-pointer" style="background:#FFFFFF; border: 1px solid #E6E8EC; box-shadow: 0 10px 30px rgba(0,0,0,0.06);">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/produccion.png') }}" alt="Producción visual" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <h3 class="text-lg font-semibold text-center min-h-[64px] flex items-center justify-center leading-tight" style="color: #0F1B2D;">{{ __('landing.approach_item1_title') }}</h3>
                    <p class="mt-3 text-sm text-gray-500 text-center">{{ __('landing.approach_item1_desc') }}</p>
                </div>
            </div>

            <div class="rounded-2xl overflow-hidden flex flex-col group hover:scale-105 transition-transform duration-300 cursor-pointer" style="background:#FFFFFF; border: 1px solid #E6E8EC; box-shadow: 0 10px 30px rgba(0,0,0,0.06);">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/gestion.png') }}" alt="Gestión integral" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <h3 class="text-lg font-semibold text-center min-h-[64px] flex items-center justify-center leading-tight" style="color: #0F1B2D;">{!! __('landing.approach_item2_title') !!}</h3>
                    <p class="mt-3 text-sm text-gray-500 text-center">{{ __('landing.approach_item2_desc') }}</p>
                </div>
            </div>

            <div class="rounded-2xl overflow-hidden flex flex-col group hover:scale-105 transition-transform duration-300 cursor-pointer" style="background:#FFFFFF; border: 1px solid #E6E8EC; box-shadow: 0 10px 30px rgba(0,0,0,0.06);">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/revenue.png') }}" alt="Revenue management" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <h3 class="text-lg font-semibold text-center min-h-[64px] flex items-center justify-center leading-tight" style="color: #0F1B2D;">{!! __('landing.approach_item3_title') !!}</h3>
                    <p class="mt-3 text-sm text-gray-500 text-center">{{ __('landing.approach_item3_desc') }}</p>
                </div>
            </div>

            <div class="rounded-2xl overflow-hidden flex flex-col group hover:scale-105 transition-transform duration-300 cursor-pointer" style="background:#FFFFFF; border: 1px solid #E6E8EC; box-shadow: 0 10px 30px rgba(0,0,0,0.06);">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/seguridad.png') }}" alt="Seguridad" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <h3 class="text-lg font-semibold text-center min-h-[64px] flex items-center justify-center leading-tight" style="color: #0F1B2D;">{{ __('landing.approach_item4_title') }}</h3>
                    <p class="mt-3 text-sm text-gray-500 text-center">{{ __('landing.approach_item4_desc') }}</p>
                </div>
            </div>

        </div>
    </div>
</section>