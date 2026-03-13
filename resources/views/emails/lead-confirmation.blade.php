<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: Inter, sans-serif; background: #f9fafb; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 40px auto; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.06); }
        .header { background: #030712; padding: 32px 40px; text-align: center; }
        .header h1 { color: #fbbf24; margin: 0; font-size: 24px; letter-spacing: 2px; }
        .body { padding: 40px; }
        .body h2 { color: #111827; font-size: 20px; }
        .body p { color: #6b7280; line-height: 1.6; }
        .highlight { background: #fef3c7; border-left: 4px solid #fbbf24; padding: 16px 20px; border-radius: 6px; margin: 24px 0; }
        .footer { background: #f3f4f6; padding: 24px 40px; text-align: center; }
        .footer p { color: #9ca3af; font-size: 13px; margin: 0; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>HOSTLAB</h1>
        </div>
        <div class="body">
            <h2>Hola, {{ $lead->nombre }} 👋</h2>
            <p>Recibimos tu solicitud de evaluación de propiedad. Nuestro equipo la revisará y te contactará en menos de <strong>24 horas</strong>.</p>

            <div class="highlight">
                <p style="margin:0; color:#92400e;"><strong>Resumen de tu solicitud:</strong></p>
                <p style="margin:8px 0 0; color:#92400e;">
                    📍 Ciudad: {{ $lead->ciudad }}<br>
                    🏠 Tipo: {{ ucfirst($lead->tipo_propiedad) }}<br>
                    📧 Email: {{ $lead->email }}
                </p>
            </div>

            <p>Mientras tanto, si tienes alguna pregunta no dudes en responder este correo.</p>
            <p>¡Gracias por confiar en HostLab!</p>
        </div>
        <div class="footer">
            <p>© {{ date('Y') }} HostLab — Gestión premium de arriendos temporales</p>
        </div>
    </div>
</body>
</html>