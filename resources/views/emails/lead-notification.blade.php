<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: Inter, sans-serif; background: #f9fafb; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 40px auto; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.06); }
        .header { background: #030712; padding: 32px 40px; text-align: center; }
        .header h1 { color: #fbbf24; margin: 0; font-size: 24px; letter-spacing: 2px; }
        .badge { background: #fbbf24; color: #030712; display: inline-block; padding: 4px 12px; border-radius: 20px; font-size: 13px; font-weight: 600; margin-top: 8px; }
        .body { padding: 40px; }
        .body h2 { color: #111827; font-size: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 16px; }
        td { padding: 12px 16px; border-bottom: 1px solid #f3f4f6; color: #374151; font-size: 14px; }
        td:first-child { font-weight: 600; color: #111827; width: 40%; }
        .footer { background: #f3f4f6; padding: 24px 40px; text-align: center; }
        .footer p { color: #9ca3af; font-size: 13px; margin: 0; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>HOSTLAB</h1>
            <div class="badge">Nuevo Lead</div>
        </div>
        <div class="body">
            <h2>Se recibió una nueva solicitud de evaluación</h2>
            <table>
                <tr><td>Nombre</td><td>{{ $lead->nombre }}</td></tr>
                <tr><td>Email</td><td>{{ $lead->email }}</td></tr>
                <tr><td>Teléfono</td><td>{{ $lead->telefono ?? '—' }}</td></tr>
                <tr><td>Región</td><td>{{ $lead->region }}</td></tr>
                <tr><td>Comuna</td><td>{{ $lead->comuna }}</td></tr>
                <tr><td>Tipo de propiedad</td><td>{{ ucfirst($lead->tipo_propiedad) }}</td></tr>
                <tr><td>¿Ya publicada?</td><td>{{ $lead->ya_publicada ? 'Sí' : 'No' }}</td></tr>
                <tr><td>¿Permite arriendo temporal?</td><td>{{ $lead->permite_arriendo_temporal ? 'Sí' : 'No' }}</td></tr>
                <tr><td>Comentarios</td><td>{{ $lead->comentarios ?? '—' }}</td></tr>
                <tr><td>Fecha</td><td>{{ $lead->created_at->format('d/m/Y H:i') }}</td></tr>
            </table>
        </div>
        <div class="footer">
            <p>© {{ date('Y') }} HostLab — Panel interno</p>
        </div>
    </div>
</body>
</html>