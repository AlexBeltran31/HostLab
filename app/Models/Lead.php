<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'region',
        'comuna',
        'tipo_propiedad',
        'ya_publicada',
        'permite_arriendo_temporal',
        'comentarios',
    ];

    protected $casts = [
        'ya_publicada'              => 'boolean',
        'permite_arriendo_temporal' => 'boolean',
    ];
}