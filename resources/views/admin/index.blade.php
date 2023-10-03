@extends('layoutsd.app')

@section('titulo', 'Panel Principal')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('contenido')


{{--
    <div class="row">
        <div class="card text-bg-primary mb-5 mx-1" style="max-width: 270px; height: 140px;">            <div class="row g-0">
                <div class="col-md-12">
                    <div class="card-body">
                        <h3 class="card-title mb-2">Card title</h5>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
        <div class="card text-bg-primary mb-5 mx-1" style="max-width: 270px; height: 140px;">            <div class="row g-0">
            <div class="col-md-12">
                <div class="card-body">
                    <h3 class="card-title mb-2">Card title</h5>
                </div>
            </div>
            <div class="row g-0">
                <div class="card-body">

                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="row">
        <div class="card text-bg-primary mb-5 mx-1" style="max-width: 270px; height: 140px;">            <div class="row g-0">
                <div class="col-md-12">
                    <div class="card-body">
                        <h3 class="card-title mb-2">Card title</h5>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="row">
        <div class="card border-primary mb-3 mx-1" style="max-width: 18rem;">
            <div class="card-body">
                <h3 class="card-title mb-(-1) mx-1">CLIENTES</h5>
                <div class="card-content">
                   Clientes registrados:<h1>0</h1>
                </div>
            </div>
            <div class="card-footer text-end">
                <a href="javascript: void(0);" class="card-link">Ver clientes</a>
            </div>
        </div>
        <div class="card border-primary mb-3 mx-1" style="max-width: 18rem;">
            <div class="card-body">
                <h3 class="card-title mb-(-1) mx-1">CUENTAS</h5>
                <div class="card-content">
                   Cuent registrados:<h1>0</h1>
                </div>
            </div>
            <div class="card-footer text-end">
                <a href="javascript: void(0);" class="card-link">Ver clientes</a>
            </div>
        </div>
        <div class="card border-primary mb-3 mx-1" style="max-width: 18rem;">
            <div class="card-body">
                <h3 class="card-title mb-(-1) mx-1">PAGOS</h5>
                <div class="card-content">
                   Clientes registrados:<h1>0</h1>
                </div>
            </div>
            <div class="card-footer text-end">
                <a href="javascript: void(0);" class="card-link">Ver clientes</a>
            </div>
        </div>
        <div class="card border-primary mb-3 mx-1" style="max-width: 18rem;">
            <div class="card-body">
                <h3 class="card-title mb-(-1) mx-1">PAGOS PENDIENTES</h5>
                <div class="card-content">
                   Clientes registrados:<h1>0</h1>
                </div>
            </div>
            <div class="card-footer text-end">
                <a href="javascript: void(0);" class="card-link">Ver clientes</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card border-primary mb-3 mx-1" style="max-width: 18rem;">
            <div class="card-body">
                <h3 class="card-title mb-(-1) mx-1">CLIENTES</h5>
                <div class="card-content">
                   Clientes registrados:<h1>0</h1>
                </div>
            </div>
            <div class="card-footer text-end">
                <a href="javascript: void(0);" class="card-link">Ver clientes</a>
            </div>
        </div>

    </div>








@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hello!'); </script>
@stop
