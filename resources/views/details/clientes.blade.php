@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>Cliente: {{$cliente->CLIENTE_RAZON}}</h1>
@stop

@section('content')

<div class="container">
    <div class="col col-md-12">
        <a class="btn btn-primary" href="{{ route('clientes') }}"> {{ __('Volver') }}</a>
        <div class="card">
            <div class="card-header">
                <h4><b>Datos Asociados</b> </h4>
            </div>
      </div>
   </div>

    <div class="row">
        <div class="col col-md-12">
            <div class="card p-5">
                <form>
                    <div class="row">
                        <div class="col col-md-7">
                            <div class="form-group">
                                <span>Nombre: </span>
                                <label>{{$cliente->CLIENTE_RAZON}}</label><br>
                                <span>Dirección: </span>
                                <label>{{$cliente->CLIENTE_DIRECCION}}</label><br>
                                <span>Detalle: </span>
                                <label>{{$cliente->CLIENTE_DETALLE}}</label><br>
                                <span>Correo: </span>
                                <label>{{$cliente->CLIENTE_CORREO}}</label><br>
                                <span>Telefono: </span>
                                <label>{{$cliente->CLIENTE_TELF}}</label><br>
                                <span>Telefono Secundario</span>
                                <label>{{$cliente->CLIENTE_TELF2}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-12">
                        <table class="table table-bordered">
                            <thead>
                              <tr align="center">
                                <th scope="col" width = "45%">Encargado</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">correo</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($encargados as $encargado)
                                    <tr>
                                        <td>{{ $encargado->ENCARGADO_NOMBRE }}</td>
                                        <td align="center">{{ $encargado->ENCARGADO_TELF }}</td>
                                        <td>{{ $encargado->ENCARGADO_CORREO}}</td>
                                    </tr>
                                @empty
                                    <tr><td colspan="3">No tiene Encargados Asociados</td></tr>
                                @endforelse
                            </tbody>
                        </table>
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
