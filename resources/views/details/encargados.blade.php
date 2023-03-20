@extends('adminlte::page')

@section('title', 'encargados')

@section('content_header')
    <h1>Encargados</h1>
@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col col-md-12">
            <div class="card">
                <div class="card-header">
                    {{$encargado->encargado_NOMBRE}}
                </div>
                <div class="card-body">
                  <h5 class="card-title">Informacion Encargados</h5>
                </div>
          </div>
       </div>
    </div>
    <form>
        <div class="row">
            <div class="col col-md-7">
                <div class="form-group">
                    <label for="encargado_CORREO">Nombre</label>
                    <input class="form-control" type="text" value="{{$encargado->encargado_NOMBRE}}" readonly>
                  </div>
            </div>


            <div class="co col-md-5">
                <div class="form-group">
                    <label for="ZONA_TRABAJO">Telefono</label>
                    <input class="form-control" type="text" value="{{$encargado->ZONA_TRABAJO}}" readonly>
                </div>
            </div>

            <div class="col col-md-7">
                <div class="form-group">
                    <label for="encargado_CORREO">Correo</label>
                    <input class="form-control" type="text" value="{{$encargado->encargado_CORREO}}" readonly>
                </div>
            </div>


            <div class="form-group col-md-5">
                <label for="inputState">Cliente</label>
                <select id="inputState" class="form-control">
                    <option selected>Escoga el cliente...</option>
                    @forelse($cliente as $cliente)
                        <option value="{{$cliente->id}}">{{$cliente->CLIENTE_RAZON}}</option>
                    @empty
                    @endforelse
                </select>
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
