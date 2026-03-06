<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo mensaje - Makitha</title>
</head>
<body style="margin:0; padding:0; background-color:#eef7fb; font-family:Arial, Helvetica, sans-serif; color:#241f20;">
    <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color:#eef7fb; margin:0; padding:32px 16px;">
        <tr>
            <td align="center">

                <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="max-width:640px; background-color:#ffffff; border-radius:24px; overflow:hidden; border:1px solid #d9eaf2;">
                    
                    <!-- Header -->
                    <tr>
                        <td style="background:linear-gradient(180deg, #d6edf5 0%, #eef7fb 100%); padding:36px 32px 18px; text-align:center;">
                            
                            <!-- Si exportas la animación a GIF, reemplaza esta ruta -->
                            <img 
                                src="https://makitha-dev.site/assets/personajeMakitha.gif" 
                                alt="Personaje Makitha"
                                style="display:block; margin:0 auto 18px; max-width:220px; width:100%; height:auto;"
                            >

                            <!-- Si prefieres imagen estática, usa esta en lugar de la de arriba -->
                            {{-- <img 
                                src="https://makitha-dev.site/assets/personajeMakitha.gif" 
                                alt="Personaje Makitha"
                                style="display:block; margin:0 auto 18px; max-width:220px; width:100%; height:auto;"
                            > --}}

                            <p style="margin:0 0 8px; font-size:13px; line-height:20px; letter-spacing:1.5px; text-transform:uppercase; color:#5d6b72;">
                                Nuevo lead recibido
                            </p>

                            <h1 style="margin:0; font-size:30px; line-height:36px; font-weight:700; color:#241f20;">
                                Nuevo mensaje desde tu sitio web
                            </h1>

                            <p style="margin:12px auto 0; max-width:460px; font-size:15px; line-height:24px; color:#4d4a4b;">
                                Recibiste una nueva solicitud desde el formulario de contacto de <strong>Makitha</strong>.
                            </p>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding:28px 28px 12px;">
                            <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%">
                                
                                <tr>
                                    <td style="padding:0 0 14px;">
                                        <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="background:#f8fcfe; border:1px solid #dcecf3; border-radius:18px;">
                                            <tr>
                                                <td style="padding:18px 20px;">
                                                    <p style="margin:0 0 6px; font-size:12px; text-transform:uppercase; letter-spacing:1px; color:#6c7b82;">Nombre completo</p>
                                                    <p style="margin:0; font-size:16px; line-height:24px; color:#241f20; font-weight:700;">{{ $data['full_name'] }}</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:0 0 14px;">
                                        <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="background:#f8fcfe; border:1px solid #dcecf3; border-radius:18px;">
                                            <tr>
                                                <td style="padding:18px 20px;">
                                                    <p style="margin:0 0 6px; font-size:12px; text-transform:uppercase; letter-spacing:1px; color:#6c7b82;">Empresa</p>
                                                    <p style="margin:0; font-size:16px; line-height:24px; color:#241f20; font-weight:700;">{{ $data['company_name'] }}</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:0 0 14px;">
                                        <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%">
                                            <tr>
                                                <td valign="top" width="50%" style="padding-right:7px;">
                                                    <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="background:#f8fcfe; border:1px solid #dcecf3; border-radius:18px;">
                                                        <tr>
                                                            <td style="padding:18px 20px;">
                                                                <p style="margin:0 0 6px; font-size:12px; text-transform:uppercase; letter-spacing:1px; color:#6c7b82;">Teléfono</p>
                                                                <p style="margin:0; font-size:16px; line-height:24px; color:#241f20; font-weight:700;">{{ $data['phone'] }}</p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>

                                                <td valign="top" width="50%" style="padding-left:7px;">
                                                    <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="background:#f8fcfe; border:1px solid #dcecf3; border-radius:18px;">
                                                        <tr>
                                                            <td style="padding:18px 20px;">
                                                                <p style="margin:0 0 6px; font-size:12px; text-transform:uppercase; letter-spacing:1px; color:#6c7b82;">Email</p>
                                                                <p style="margin:0; font-size:16px; line-height:24px; color:#241f20; font-weight:700;">
                                                                    <a href="mailto:{{ $data['email'] }}" style="color:#241f20; text-decoration:none;">{{ $data['email'] }}</a>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:0 0 8px;">
                                        <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="background:#fff7fd; border:1px solid #ffd0f6; border-radius:18px;">
                                            <tr>
                                                <td style="padding:20px;">
                                                    <p style="margin:0 0 8px; font-size:12px; text-transform:uppercase; letter-spacing:1px; color:#8a5e84;">Solicitud</p>
                                                    <p style="margin:0; font-size:15px; line-height:26px; color:#241f20; white-space:pre-line;">{{ $data['message'] }}</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="padding:0 28px 30px;">
                            <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="background:#241f20; border-radius:18px;">
                                <tr>
                                    <td style="padding:18px 20px; text-align:center;">
                                        <p style="margin:0; font-size:13px; line-height:22px; color:#ffffff;">
                                            Este mensaje fue enviado automáticamente desde el formulario de contacto de <strong>Makitha</strong>.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>
</body>
</html>