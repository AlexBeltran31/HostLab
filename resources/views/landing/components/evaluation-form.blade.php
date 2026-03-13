<section id="evaluacion" class="py-24 bg-gray-50 px-6">
    <div class="max-w-2xl mx-auto">

        <h2 class="text-3xl font-bold text-gray-900 text-center">
            {{ __('landing.form_title') }}
        </h2>
        <p class="mt-3 text-gray-500 text-center">
            {{ __('landing.form_subtitle') }}
        </p>

        <form action="{{ route('leads.store') }}" method="POST" class="mt-10 space-y-6">
            @csrf

            {{-- Nombre --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">{{ __('landing.form_name') }}</label>
                <input type="text" name="nombre" value="{{ old('nombre') }}"
                       class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-amber-400 focus:outline-none @error('nombre') border-red-500 @enderror">
                @error('nombre') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            {{-- Email --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">{{ __('landing.form_email') }}</label>
                <input type="email" name="email" value="{{ old('email') }}"
                       class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-amber-400 focus:outline-none @error('email') border-red-500 @enderror">
                @error('email') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            {{-- Teléfono --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">{{ __('landing.form_phone') }} <span class="text-gray-400">({{ __('landing.optional') }})</span></label>
                <input type="text" name="telefono" value="{{ old('telefono') }}"
                       class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-amber-400 focus:outline-none">
            </div>

            {{-- Ciudad --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">{{ __('landing.form_city') }}</label>
                <input type="text" name="ciudad" value="{{ old('ciudad') }}"
                       class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-amber-400 focus:outline-none @error('ciudad') border-red-500 @enderror">
                @error('ciudad') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            {{-- Tipo de propiedad --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">{{ __('landing.form_property_type') }}</label>
                <select name="tipo_propiedad"
                        class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-amber-400 focus:outline-none @error('tipo_propiedad') border-red-500 @enderror">
                    <option value="">{{ __('landing.form_select') }}</option>
                    <option value="apartamento" {{ old('tipo_propiedad') == 'apartamento' ? 'selected' : '' }}>{{ __('landing.property_apartment') }}</option>
                    <option value="casa"        {{ old('tipo_propiedad') == 'casa'        ? 'selected' : '' }}>{{ __('landing.property_house') }}</option>
                    <option value="estudio"     {{ old('tipo_propiedad') == 'estudio'     ? 'selected' : '' }}>{{ __('landing.property_studio') }}</option>
                    <option value="otro"        {{ old('tipo_propiedad') == 'otro'        ? 'selected' : '' }}>{{ __('landing.property_other') }}</option>
                </select>
                @error('tipo_propiedad') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            {{-- Ya publicada --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">{{ __('landing.form_already_published') }}</label>
                <div class="mt-2 flex gap-6">
                    <label class="flex items-center gap-2">
                        <input type="radio" name="ya_publicada" value="1" {{ old('ya_publicada') == '1' ? 'checked' : '' }}>
                        {{ __('landing.yes') }}
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="radio" name="ya_publicada" value="0" {{ old('ya_publicada') == '0' ? 'checked' : '' }}>
                        {{ __('landing.no') }}
                    </label>
                </div>
                @error('ya_publicada') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            {{-- Permite arriendo temporal --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">{{ __('landing.form_allows_rental') }}</label>
                <div class="mt-2 flex gap-6">
                    <label class="flex items-center gap-2">
                        <input type="radio" name="permite_arriendo_temporal" value="1" {{ old('permite_arriendo_temporal') == '1' ? 'checked' : '' }}>
                        {{ __('landing.yes') }}
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="radio" name="permite_arriendo_temporal" value="0" {{ old('permite_arriendo_temporal') == '0' ? 'checked' : '' }}>
                        {{ __('landing.no') }}
                    </label>
                </div>
                @error('permite_arriendo_temporal') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            {{-- Comentarios --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">{{ __('landing.form_comments') }} <span class="text-gray-400">({{ __('landing.optional') }})</span></label>
                <textarea name="comentarios" rows="4"
                          class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-amber-400 focus:outline-none">{{ old('comentarios') }}</textarea>
            </div>

            {{-- Submit --}}
            <button type="submit"
                    class="w-full bg-amber-400 text-gray-950 font-semibold py-4 rounded-full hover:bg-amber-300 transition">
                {{ __('landing.form_submit') }}
            </button>

        </form>
    </div>
</section>