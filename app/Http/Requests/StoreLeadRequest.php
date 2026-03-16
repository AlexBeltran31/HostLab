<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeadRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre'                    => ['required', 'string', 'max:255'],
            'email'                     => ['required', 'email', 'max:255'],
            'telefono'                  => ['nullable', 'regex:/^\+?[0-9\s\-\(\)]{7,20}$/'],
            'region'                    => ['required', 'string', 'max:255'],
            'comuna'                    => ['required', 'string', 'max:255'],
            'tipo_propiedad'            => ['required', 'string', 'in:departamento,casa,otro'],
            'ya_publicada'              => ['required', 'boolean'],
            'comentarios'               => ['nullable', 'string', 'max:1000'],
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required'                    => 'El nombre es obligatorio.',
            'email.required'                     => 'El email es obligatorio.',
            'email.email'                        => 'Ingresa un email válido.',
            'telefono.regex'                     => 'Ingresa un número de teléfono válido.',
            'region.required'                    => 'Selecciona una región.',
            'comuna.required'                    => 'Selecciona una comuna.',
            'tipo_propiedad.required'            => 'Selecciona el tipo de propiedad.',
            'tipo_propiedad.in'                  => 'El tipo de propiedad no es válido.',
            'ya_publicada.required'              => 'Indica si la propiedad ya está publicada.',
        ];
    }
}