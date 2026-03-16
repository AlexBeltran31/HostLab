<section id="evaluacion" class="min-h-screen flex items-center justify-center bg-gray-950 px-6 py-24">
    <div class="bg-white rounded-2xl shadow-2xl p-10 w-full max-w-2xl">

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

            {{-- Región --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">{{ __('landing.form_region') }}</label>
                <select id="region" name="region"
                        class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-amber-400 focus:outline-none @error('region') border-red-500 @enderror">
                    <option value="">{{ __('landing.form_select') }}</option>
                    @foreach(array_keys($regiones) as $region)
                        <option value="{{ $region }}" {{ old('region') == $region ? 'selected' : '' }}>
                            {{ $region }}
                        </option>
                    @endforeach
                </select>
                @error('region') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            {{-- Comuna --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">{{ __('landing.form_comuna') }}</label>
                <select id="comuna" name="comuna" disabled
                        class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-amber-400 focus:outline-none @error('comuna') border-red-500 @enderror disabled:bg-gray-100 disabled:text-gray-400">
                    <option value="">{{ __('landing.form_select_region_first') }}</option>
                    @if(old('region'))
                        @foreach($regiones[old('region')] as $comuna)
                            <option value="{{ $comuna }}" {{ old('comuna') == $comuna ? 'selected' : '' }}>
                                {{ $comuna }}
                            </option>
                        @endforeach
                    @endif
                </select>
                @error('comuna') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            {{-- Tipo de propiedad --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">{{ __('landing.form_property_type') }}</label>
                <select name="tipo_propiedad"
                        class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-amber-400 focus:outline-none @error('tipo_propiedad') border-red-500 @enderror">
                    <option value="">{{ __('landing.form_select') }}</option>
                    <option value="departamento" {{ old('tipo_propiedad') == 'departamento' ? 'selected' : '' }}>{{ __('landing.property_apartment') }}</option>
                    <option value="casa"         {{ old('tipo_propiedad') == 'casa'         ? 'selected' : '' }}>{{ __('landing.property_house') }}</option>
                    <option value="otro"         {{ old('tipo_propiedad') == 'otro'         ? 'selected' : '' }}>{{ __('landing.property_other') }}</option>
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

@php
    $selectText = __('landing.form_select');
    $selectRegionText = __('landing.form_select_region_first');
@endphp

<script>
    const regiones = @json($regiones);
    const regionSelect = document.getElementById('region');
    const comunaSelect = document.getElementById('comuna');
    const selectText = "{{ $selectText }}";
    const selectRegionText = "{{ $selectRegionText }}";

    regionSelect.addEventListener('change', function() {
        const region = this.value;
        comunaSelect.innerHTML = '';

        if (region && regiones[region]) {
            comunaSelect.disabled = false;
            const defaultOption = document.createElement('option');
            defaultOption.value = '';
            defaultOption.textContent = selectText;
            comunaSelect.appendChild(defaultOption);

            regiones[region].forEach(function(comuna) {
                const option = document.createElement('option');
                option.value = comuna;
                option.textContent = comuna;
                comunaSelect.appendChild(option);
            });
        } else {
            comunaSelect.disabled = true;
            const defaultOption = document.createElement('option');
            defaultOption.value = '';
            defaultOption.textContent = selectRegionText;
            comunaSelect.appendChild(defaultOption);
        }
    });
</script>