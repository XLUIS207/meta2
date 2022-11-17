<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Cotizador</title>
    <link href="{{ asset ('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('css/pdf.css')}}" rel="stylesheet">
</head>
<header>
    <div id="header" class="text-center mb-2">
        <img height="45px" src="{{ asset('img') }}/logo.png">
    </div>
</header>

<body>
    <main>
        <h6>BLUE EMPRESA ADMINISTRADORA S.A.C.</h6>
        <h6>20608678914</h6>
        <hr>
        <h5 class="text-center mt-3">Libro de reclamaciones</h5>
        <h6 class="text-center">Fecha: </h6>

        <h6>1. Identificación del Consumidor Reclamante</h6>
        <table class="table-bordered mb-2" width="100%">
            <tr>
                <td width="15%" class="text-naranja">{{ $mensaje->documento}}:</td>
                <td width="20%" class="text-center text-secondary">{{ $mensaje->numero_documento}}</td>
            </tr>
        </table>

        <table class="table-bordered mb-2" width="100%">
            <tr>
                <td width="13%" class="text-naranja">NOMBRES:</td>
                <td width="20%" class="text-center text-secondary">{{ $mensaje->nombres}}</td>
                <td width="13%" class="text-naranja">APELLIDO PATERNO:</td>
                <td width="20%" class="text-center text-secondary">{{ $mensaje->apellido_p}}</td>
                <td width="14%" class="text-naranja">APELLIDO MATERNO:</td>
                <td width="20%" class="text-center text-secondary">{{ $mensaje->apellido_m}}</td>
            </tr>
        </table>

        <table class="table-bordered mb-2" width="100%">
            <tr>
                <td width="15%" class="text-naranja">DIRECCIÓN:</td>
                <td colspan="5" class="text-center text-secondary ">{{ $mensaje->direccion}}</td>
            </tr>
            <tr>
                <td width="13%" class="text-naranja">DISTRITO:</td>
                <td width="20%" class="text-center text-secondary">{{ $mensaje->distrito}}</td>
                <td width="13%" class="text-naranja">PROVINCIA:</td>
                <td width="20%" class="text-center text-secondary">{{ $mensaje->provincia}}</td>
                <td width="14%" class="text-naranja">DEPARTAMENTO:</td>
                <td width="20%" class="text-center text-secondary">{{ $mensaje->departamento}}</td>
            </tr>
            <tr>
                <td width="13%" class="text-naranja">CELULAR:</td>
                <td width="20%" class="text-center text-secondary">{{ $mensaje->celular}}</td>
                <td width="13%" class="text-naranja">CORREO: </td>
                <td colspan="3" class="text-center text-secondary">{{ $mensaje->correo}}</td>
            </tr>
            <tr>
                <td width="13%" class="text-naranja">CORREO:</td>
                <td colspan="5" class="text-center text-secondary">{{ $mensaje->correo}}</td>
            </tr>
        </table>

        <h6 class="mt-3">2. Identificación del Bien Contratado</h6>

        <table class="table-bordered mb-2" width="100%">
            <tr>
                <td width="25%" class="text-naranja">MONEDA:</td>
                <td width="25%" class="text-center text-secondary">{{ $mensaje->moneda}}</td>
                <td width="25%" class="text-naranja">MONTO RECLAMADO: </td>
                <td width="25%" class="text-center text-secondary">{{ $mensaje->monto}}</td>
            </tr>
        </table>
        <P>{{ $mensaje->descripcion}}</P>

        <h6>3. Detalle de la reclamación y pedido del consumidor</h6>
        <table class="table-bordered mb-2" width="100%">
            <tr>
                <td width="25%" class="text-naranja">TIPO:</td>
                <td width="25%" class="text-center text-secondary">{{ $mensaje->tipo}}</td>
            </tr>
        </table>
        <P>{{ $mensaje->detalle}}</P>





        {{-- <h6 class="text-danger font-weight-bold">Nota:</h6> --}}
        <span class="ml-4">
            <p class="text-justify font-weight-bold">
                El provedor deberá dar respuesta al reclamo en un plazo no mayor de treinta (30) días calendario,
                pudiendo ampliar el plazo hasta por treinta (30) días más, previa
                comunicación al consumidor.
            </p>
        </span>


        {{-- <span class="ml-3">
            <strong class="text-naranja">Asesor Inmobiliario:</strong> <span class="text-secondary">{{
                $cotizacion->cliente->user->name }}</span><br />
            <strong class="text-naranja">Correo:</strong> <span class="text-secondary"> <a
                    href="mailto:{{ $cotizacion->cliente->user->email }}">{{ $cotizacion->cliente->user->email
                    }}</a></span> -
            <strong class="text-naranja">Celular:</strong> <span class="text-secondary"> <a
                    href="tel:+51 {{ $cotizacion->cliente->user->telefono }}">{{ $cotizacion->cliente->user->telefono
                    }}</a> <a target="_blank"
                    href="https://api.whatsapp.com/send?phone={{ $cotizacion->cliente->user->telefono }}&text=Buen día, te escribo por la cotización Nro.{{$cotizacion->id}}"><img
                        height="14px" src="{{ asset('images') }}/whatsaap.png"></a></span>
        </span> --}}

    </main>

</body>

</html>
