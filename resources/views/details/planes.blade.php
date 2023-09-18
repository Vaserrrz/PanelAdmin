@extends('adminlte::page')

@section('title', 'Planes')

@section('content_header')
    <h1>Plan: {{strtoupper($plan->plan_NOMBRE)}}</h1>
@stop

@section('content')

<div class="container">

    <div class="row">
        <div class="col col-md-12">
            <a class="btn btn-primary" href="{{ route('planes') }}"> {{ __('Volver') }}</a>
            <div class="card">
                <div class="card-body">
                    <h4><b>Información del Plan</b> </h4>
                </div>
          </div>
       </div>
    </div>

    <div class="row">
        <div class="col col-md-12 col-lg-12 w-100">
            <div class="card p-5">
                    <div class="row">
                        <div class="col col-md-7">
                            <div class="form-group">

                                <span>Contención: </span>
                                <label>{{$plan->plan_CONTENCION}}</label><br>
                                <span>Datos de Subida: </span>
                                <label>{{$plan->plan_SUBIDA}}</label><br>
                                <span>Datos de Bajada: </span>
                                <label>{{$plan->plan_BAJADA}}</label><br>
                                <span>Costo Básico del plan: </span>
                                <label>{{$plan->plan_COSTO}}</label><br>
                                <span>Precio al Público: </span>
                                <label>{{$plan->plan_PRECIO}}</label><br>
                                <span>Nombre del Proveedor:</span>
                                <label>{{$proveedor->nombre}}</label><br>
                                <span>Nombre del Vendedor: </span>
                                <label>{{$revendedor->nombre}}</label>
                            </div>
                        </div>
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
