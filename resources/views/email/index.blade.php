<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        .Estilo1 {
            color: #347bd8
        }

        .Estilo2 {
            color: #1a5d9b
        }

        .Estilo3 {
            color: #20334f;
            font-weight: bold;
        }

    </style>
</head>

<body>
    <table class="x_MsoNormalTable" style="width:100.0%; background:#dde6f8" width="100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
            <tr>
                <td style="padding:0cm 0cm 0cm 0cm">
                    <div align="center">
                        <table class="x_MsoNormalTable" style="width:100.0%" width="100%" cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                                <tr>
                                    <td style="padding:18.75pt 0cm 18.75pt 0cm">
                                        <p align="center" class="x_MsoNormal Estilo2" style="text-align:center">
                                            <span style="font-family: &quot;Helvetica&quot;, sans-serif, serif, EmojiFont;">
                                                <b>
                                                <span style="font-size:18.5pt; text-decoration:none">
                                                    <img src="{{ asset('img/logo.png') }}" alt="site logo" />
                                                </span>
                                                </b>
                                            </span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:100.0%; border-top:solid #EDEFF2 1.0pt; border-left:none; border-bottom:solid #EDEFF2 1.0pt; border-right:none; background:white; padding:0cm 0cm 0cm 0cm; box-sizing:border-box"
                                        width="100%">
                                        <div align="center">
                                            <table class="x_MsoNormalTable"
                                                style="width:427.5pt; background:white; box-sizing:border-box"
                                                width="570" cellspacing="0" cellpadding="0" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td style="padding:26.25pt 26.25pt 26.25pt 26.25pt; box-sizing:border-box">
                                                            <h1 style="margin-top:0cm; box-sizing:border-box">
                                                                <span style="font-size: 14.5pt; font-family: &quot;Helvetica&quot;, sans-serif, serif, EmojiFont; color: rgb(47, 49, 51);">
                                                                    ¡Hola!
                                                                </span>
                                                            </h1>
                                                            <p style="margin-top:0cm; line-height:18.0pt; box-sizing:border-box">
                                                                <span
                                                                    style="font-size: 12pt; font-family: &quot;Helvetica&quot;, sans-serif, serif, EmojiFont; color: rgb(116, 120, 126);">Acabas
                                                                    de recibir una solicitud de contacto de la página
                                                                    WEB de BLUE - ADMINISTRADORA
                                                                </span>
                                                            </p>
                                                            <span
                                                                style="font-size: 12pt; font-family: &quot;Helvetica&quot;, sans-serif, serif, EmojiFont; color: rgb(116, 120, 126);">
                                                                <p><strong>Nombre: {{ $mail['name'] }}</strong></p>
                                                                <p><strong>Correo: <a href="mailto:{{ $mail['email'] }}">{{ $mail['email'] }}</a></strong></p>
                                                                <p><strong>Numero: {{ $mail['phone'] }}</strong></p>
                                                                <p><strong>Asunto: {{ $mail['subject'] }}</strong></p>
                                                                <p><strong>Mensaje: {{ $mail['message'] }}</strong></p>
                                                            </span></p>
                                                            <p
                                                                style="margin-top:0cm; line-height:18.0pt; box-sizing:border-box">
                                                                <span
                                                                    style="font-size: 12pt; font-family: &quot;Helvetica&quot;, sans-serif, serif, EmojiFont; color: rgb(116, 120, 126);">Saludos,<br>
                                                                    <span class="Estilo1">BLUE - ADMINISTRADORA</span></span>
                                                            </p>
                                                            <table class="x_MsoNormalTable"
                                                                style="width:100.0%; border:none; border-top:solid #EDEFF2 1.0pt; box-sizing:border-box"
                                                                width="100%" cellspacing="0" cellpadding="0" border="1">
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:0cm 0cm 0cm 0cm; box-sizing:border-box">
                                        <div align="center">
                                            <table class="x_MsoNormalTable" style="width:427.5pt; box-sizing:border-box"
                                                width="570" cellspacing="0" cellpadding="0" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td style="padding:26.25pt 26.25pt 26.25pt 26.25pt; box-sizing:border-box">
                                                            <p align="center" class="Estilo3" style="margin-top:0cm; text-align:center; line-height:18.0pt; box-sizing:border-box">
                                                                <span
                                                                    style="font-size: 9pt; font-family: &quot;Helvetica&quot;, sans-serif, serif, EmojiFont;">©
                                                                    2021 Blue- Administradora. Todos los derechos
                                                                    reservados.
                                                                </span>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
