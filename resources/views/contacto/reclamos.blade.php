@extends('layouts.app')
@section('content')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-image " data-bg="img/bg/33.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title"> Libro de <strong class="extrabold">RECLAMACIONES</strong></h1>
                    {{-- <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html"><span class="ltn__secondary-color"><i
                                            class="fas fa-home"></i></span> Inicio</a></li>
                            <li>Libro</li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- CONTACT ADDRESS AREA START -->
<div class="ltn__contact-address-area mb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="img/icons/10.png" alt="Icon Image">
                    </div>
                    <h3>CORREO ELECTRÓNICO</h3>
                    <p>Puedes escribirnos a: <br>
                        <a href="mailto:blue.aqp.adm@gmail.com">blue.aqp.adm@gmail.com</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="img/icons/11.png" alt="Icon Image">
                    </div>
                    <h3>NÚMERO DE TELÉFONO</h3>
                    <p>Puedes llamar o escribir por WhatsApp<br> al: <a href="tel:+51958964022">+51958964022</a> / <a
                            href="tel:+51914647026">+51 914647026</a></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="img/icons/12.png" alt="Icon Image">
                    </div>
                    <h3>DIRECCIÓN</h3>
                    <p>Calle Vista Alegre N 300,<br>
                        Cerro Colorado</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CONTACT ADDRESS AREA END -->
<div class="ltn__contact-message-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__form-box contact-form-box box-shadow white-bg">
                    <h4 class="title-2">LIBRO DE RECLAMACIONES</h4>
                    <p>
                        CONFORME A LO ESTABLECIDO EN EL CÓDIGO DE PROTECCIÓN Y DEFENSA DEL CONSUMIDOR, BLUE ADMINISTRADORA SAC CUENTA CON UN LIBRO DE RECLAMACIONES VIRTUAL A SU DISPOSICIÓN
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CONTACT MESSAGE AREA START -->
<div class="ltn__contact-message-area mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__form-box contact-form-box box-shadow white-bg">

                    {!! Form::open(['method' => 'POST', 'route' => 'Reclamo.store', 'class' => 'form-horizontal']) !!}
                    <h4 class="title-1">1. IDENTIFICACIÓN DEL CONSUMIDOR RECLAMANTE</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-item input-item-email {{ $errors->has('documento') ? ' has-error' : '' }}">
                                {!! Form::select('documento', ['DNI' => 'DNI', 'CEX' => 'CEX','PASAPORTE' => 'PASAPORTE'],null, ['class' => 'form-control', 'placeholder' =>'Seleccionar Documento']) !!}
                                <small class="text-danger">{{ $errors->first('documento') }}</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-item input-item-name {{ $errors->has('numero_documento') ? ' has-error' : '' }}">
                                {!! Form::text('numero_documento', null, ['class' => 'form-control', 'placeholder' =>'# Documento']) !!}
                                <small class="text-danger">{{ $errors->first('numero_documento') }}</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-item input-item-name {{ $errors->has('apellido_p') ? ' has-error' : '' }}">
                                {!! Form::text('apellido_p', null, ['class' => 'form-control', 'placeholder' =>'Apellido Paterno']) !!}
                                <small class="text-danger">{{ $errors->first('apellido_p') }}</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-item input-item-email {{ $errors->has('apellido_m') ? ' has-error' : '' }}">
                                {!! Form::text('apellido_m', null, ['class' => 'form-control', 'placeholder' =>'Apellido Materno']) !!}
                                <small class="text-danger">{{ $errors->first('apellido_m') }}</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-item input-item-email {{ $errors->has('nombres') ? ' has-error' : '' }}">
                                {!! Form::text('nombres', null, ['id' => 'nombres', 'class' => 'form-control', 'placeholder' =>'Nombres']) !!}
                                <small class="text-danger">{{ $errors->first('nombres') }}</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-item input-item-email {{ $errors->has('departamento') ? ' has-error' : '' }}">
                                {!! Form::select('departamento', $departamentos, null ,['id' => 'departamento','class' => 'form-control', 'placeholder' =>'Seleccionar Departamento']) !!}
                                <small class="text-danger">{{ $errors->first('departamento') }}</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-item input-item-email {{ $errors->has('provincia') ? ' has-error' : '' }}">
                                {!! Form::select('provincia', $provincias, null, ['id' => 'provincia','class' => 'form-control', 'placeholder' =>'Seleccionar Provincia']) !!}
                                <small class="text-danger">{{ $errors->first('provincia') }}</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-item input-item-email {{ $errors->has('distrito') ? ' has-error' : '' }}">
                                {!! Form::select('distrito', $distritos,null, ['id' => 'distrito','class' => 'form-control', 'placeholder' =>'Seleccionar Distrito']) !!}
                                <small class="text-danger">{{ $errors->first('distrito') }}</small>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-item input-item-email {{ $errors->has('direccion') ? ' has-error' : '' }}">
                                {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' =>'Dirección']) !!}
                                <small class="text-danger">{{ $errors->first('direccion') }}</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-item input-item-email {{ $errors->has('correo') ? ' has-error' : '' }}">
                                {!! Form::text('correo', null, ['class' => 'form-control', 'placeholder' =>'Correo']) !!}
                                <small class="text-danger">{{ $errors->first('correo') }}</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-item input-item-email {{ $errors->has('celular') ? ' has-error' : '' }}">
                                {!! Form::text('celular', null, ['class' => 'form-control', 'placeholder' =>'Celular']) !!}
                                <small class="text-danger">{{ $errors->first('celular') }}</small>
                            </div>
                        </div>
                    </div>

                    <h4 class="title-1">2. IDENTIFICACIÓN DEL SERVICIO CONTRATADO</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-item input-item-email {{ $errors->has('moneda') ? ' has-error' : '' }}">
                                {!! Form::select('moneda', ['Soles' => 'Soles', 'Dolares' => 'Dolares'],null, ['class' => 'form-control', 'placeholder' =>'Seleccionar Moneda']) !!}
                                <small class="text-danger">{{ $errors->first('moneda') }}</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-item input-item-name {{ $errors->has('monto') ? ' has-error' : '' }}">
                                {!! Form::number('monto', null, ['class' => 'form-control', 'placeholder' =>'Monto']) !!}
                                <small class="text-danger">{{ $errors->first('monto') }}</small>
                            </div>
                        </div>
                    </div>
                    <div class="input-item input-item-textarea {{ $errors->has('descripcion') ? ' has-error' : '' }}">
                        {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' =>'Descripción', 'rows' => '2']) !!}
                        <small class="text-danger">{{ $errors->first('descripcion') }}</small>
                    </div>

                    <h4 class="title-1">3. DETALLE DEL RECLAMO</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-item input-item-email {{ $errors->has('tipo') ? ' has-error' : '' }}">
                                {!! Form::select('tipo', ['Consulta' => 'Consulta', 'Queja' => 'Queja', 'Reclamo' => 'Reclamo', 'Sugerencia' => 'Sugerencia'],null, ['class' => 'form-control', 'placeholder' =>'Seleccionar Tipo']) !!}
                                <small class="text-danger">{{ $errors->first('tipo') }}</small>
                            </div>
                        </div>
                    </div>

                    <div class="input-item input-item-textarea {{ $errors->has('detalle') ? ' has-error' : '' }}">
                        {!! Form::textarea('detalle', null, ['class' => 'form-control', 'placeholder' =>'Detalle', 'rows' => '2']) !!}
                        <small class="text-danger">{{ $errors->first('detalle') }}</small>
                    </div>


                    <p id="demo"></p>

                    <div class="btn-wrapper mt-0">
                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">ENVIAR</button>
                    </div>
                    <p class="form-messege mb-0 mt-20"></p>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CONTACT MESSAGE AREA END -->

<!-- GOOGLE MAP AREA START -->
{{-- <div class="google-map mb--80">

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3828.057230347514!2d-71.5669446851375!3d-16.371046788695143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424b3fbe106f2f%3A0x6e15cd94c413d780!2sVista%20Alegre%20300%2C%20Arequipa%2004014!5e0!3m2!1ses-419!2spe!4v1637433742577!5m2!1ses-419!2spe"
        width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</div> --}}
<!-- GOOGLE MAP AREA END -->

@include('layouts.flex')

@endsection
@section('javascript')
<script src="{{ asset('js/reclamos.js')}}"></script>
@stop
