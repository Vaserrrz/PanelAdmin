@extends('adminlte::page')

@section('title', 'clientes')

@section('content_header')
    <h1>Cliente: {{$cliente->CLIENTE_RAZON}}</h1>
@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col col-md-12">
            <div class="card">
                <div class="card-header">
                    Especificaciones
                </div>
                <div class="card-body">
                  <h5 class="card-title"></h5>
                </div>
          </div>
       </div>
    </div>
    <form>
        <div class="row">
            <div class="col col-md-7">
                <div class="form-group">
                    <label for="cliente_CORREO">Nombre</label>
                    <input class="form-control" type="text" value="{{$cliente->CLIENTE_RAZON}}" readonly>
                  </div>
            </div>


            <div class="co col-md-5">
                <div class="form-group">
                    <label for="ZONA_TRABAJO">Direccion</label>
                    <input class="form-control" type="text" value="{{$cliente->CLIENTE_DIRECCION}}" readonly>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col col-md-7">
                <div class="form-group">
                    <label for="cliente_CORREO">Detalle</label>
                    <input class="form-control" type="text" value="{{$cliente->CLIENTE_DETALLE}}" readonly>
                </div>
            </div>

            <div class="col col-md-5">
                <div class="form-group">
                    <label for="cliente_CORREO">Correo</label>
                    <input class="form-control" type="text" value="{{$cliente->CLIENTE_CORREO}}" readonly>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-md-6">
                <div class="form-group">
                    <label for="cliente_CORREO">Telefono</label>
                    <input class="form-control" type="text" value="{{$cliente->CLIENTE_TELF}}" readonly>
                </div>
            </div>

            <div class="col col-md-6">
                <div class="form-group">
                    <label for="cliente_CORREO">Telefono Secundario</label>
                    <input class="form-control" type="text" value="{{$cliente->CLIENTE_TELF2}}" readonly>
                </div>
            </div>
        </div>
    </form>
</div>

@stop

@section('css')
@stop

@section('js')
    {{-- <script> alert('Hi!'); </script> --}}
@stop
