@extends('adminlte::page')

@section('title', 'Tecnicos')

@section('content_header')
    <h1>Proveedores</h1>
@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col col-md-12">
            <div class="card">
                <div class="card-header">
                    {{$proveedor->RAZON}}
                </div>
                <div class="card-body">
                  <h5 class="card-title">Informacion Proveedor</h5>
                </div>
          </div>
       </div>
    </div>
    <form>
        <div class="row">
                        <div class="col col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">CI_RIF</label>
                                <input class="form-control" type="text" value="{{$proveedor->CI_RIF}}" readonly>
                              </div>
                        </div>


                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Direccion</label>
                                <input class="form-control" type="text" value="{{$proveedor->DIRECCION}}" readonly>
                              </div>
                        </div>
        </div>

        <div class="row">
            <div class="col col-md-8">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Correo Electronico</label>
                    <input class="form-control" type="TEXT" value="{{$proveedor->PROVEEDOR_CORREO}}" readonly>
                </div>
            </div>
            <div class="col col-md-4">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Contacto</label>
                    <input class="form-control" type="text" value="{{$proveedor->CONTACTO}}" readonly>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Detalle de Pago</label>
                    <input class="form-control" type="text" value="{{$proveedor->DETALLE_PAGO}}" readonly>
                </div>
            </div>
            <div class="col col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Metodo de Pago</label>
                    <input class="form-control" type="text" value="{{$proveedor->METODO_PAGO}}" readonly>
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
