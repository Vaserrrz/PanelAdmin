@extends('adminlte::page')

@section('title', 'Tecnicos')

@section('content_header')
    <h1>Proveedor: {{$proveedor->razon}}</h1>
@stop

@section('content')

<div class="container">

    <div class="row">
        <div class="col col-md-12">
            <a class="btn btn-primary" href="{{ route('proveedores') }}"> {{ __('Volver') }}</a>
            <div class="card">
                <div class="card-header">
                    <h4><b>Información Adicional</b> </h4>
                </div>
          </div>
       </div>
    </div>

    <div class="row">
        <div class="col col-md-12 col-lg-12 w-100">
            <div class="card p-5">
                <form>
                    <div class="row">
                        <div class="form">
                            <span class="block">Cédula o RIF: </span>
                            <label>{{$proveedor->ci_rif}}</label><br>
                            <span class="block">Dirección: </span>
                            <label>{{$proveedor->direccion}}</label><br>
                            <span class="block">Correo Electrónico: </span>
                            <label>{{$proveedor->correo}}</label><br>
                            <span class="block">Persona de Contacto: </span>
                            <label>{{$proveedor->contacto}}</label><br>
                            <span class="block">Metodo de Pago: </span>
                            <label>{{$proveedor->metodo_pago}}</label><br>
                            <span class="block">Detalle de Pago: </span>
                            <label>{{$proveedor->detalle_pago}}</label>
                        </div>
                </form>
            </div>
        </div>
    </div>

</div>

@stop

@section('css')
@stop

@section('js')
    {{-- <script> alert('Hi!'); </script> --}}
@stop
