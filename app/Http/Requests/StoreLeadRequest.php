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
            'telefono'                  => ['nullable', 'string', 'max:20'],
            'ciudad'                    => ['required', 'string', 'max:255'],
            'tipo_propiedad'            => ['required', 'string', 'in:apartamento,casa,estudio,otro'],
            'ya_publicada'              => ['required', 'boolean'],
            'permite_arriendo_temporal' => ['required', 'boolean'],
            'comentarios'               => ['nullable', 'string', 'max:1000'],
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required'                    => 'El nombre es obligatorio.',
            'email.required'                     => 'El email es obligatorio.',
            'email.email'                        => 'Ingresa un email válido.',
            'ciudad.required'                    => 'La ciudad es obligatoria.',
            'tipo_propiedad.required'            => 'Selecciona el tipo de propiedad.',
            'tipo_propiedad.in'                  => 'El tipo de propiedad no es válido.',
            'ya_publicada.required'              => 'Indica si la propiedad ya está publicada.',
            'permite_arriendo_temporal.required' => 'Indica si permite arriendo temporal.',
        ];
    }
}