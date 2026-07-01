<?php

namespace App\Services;

use App\Models\Lead;
use Illuminate\Support\Facades\Http;

class CallMeBotService
{
    public function sendLeadNotification(Lead $lead): void
    {
        $phone = config('services.callmebot.phone');
        $apikey = config('services.callmebot.apikey');

        if (! $phone || ! $apikey) {
            return;
        }

        $text = "Nuevo lead HostLab\n"
            . "Nombre: {$lead->nombre}\n"
            . "Email: {$lead->email}\n"
            . "Teléfono: {$lead->telefono}\n"
            . "Región: {$lead->region}\n"
            . "Comuna: {$lead->comuna}\n"
            . "Tipo propiedad: {$lead->tipo_propiedad}\n"
            . '¿Ya publicada?: ' . ($lead->ya_publicada ? 'Sí' : 'No') . "\n"
            . "Comentarios: {$lead->comentarios}";

        Http::get('https://api.callmebot.com/whatsapp.php', [
            'phone' => $phone,
            'text' => $text,
            'apikey' => $apikey,
        ]);
    }
}
