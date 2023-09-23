@extends('adminlte::page')

@section('title', 'Panel Principal')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')


    <div class="row">
        <div class="card text-bg-dark mb-5 mx-1" style="max-width: 300px; width: 45%; height: 200px;">
            <div class="card-header">
                <h1 class="card-title text-center font-weight-bold">
                    Clientes
                </h1>
            </div>
            <div class="card-body">
                <h5 class="card-title">
                </h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card text-bg-dark mb-5 mx-1" style="max-width: 300px; width: 45%; height: 200px;">
            <div class="card-header">
                <h1 class="card-title text-center font-weight-bold">
                    Cuentas
                </h1>
            </div>
            <div class="card-body">
                <div class="col">
                    <p class="card-text" style="color: rgb(0, 0, 0);">Starlink</p>
                    <p class="card-text" style="color: rgb(0, 0, 0);">Estandar</p>
                    <p class="card-text" style="color: rgb(0, 0, 0);">Otra</p>

                </div>
            </div>
        </div>
        <div class="card text-bg-dark mb-5 mx-1" style="max-width: 300px; width: 45%; height: 200px;">
            <div class="card-header">
                <h1 class="card-title text-center font-weight-bold">
                    Mikrotik
                </h1>
            </div>
            <div class="card-body">
                <p class="card-text" style="color: green;">activos</p>
                <p class="card-text" style="color: orange;">suspendidos</p>
            </div>
        </div>
        <div class="card text-bg-dark mb-5 mx-1" style="max-width: 300px; width: 45%; height: 200px;">
            <div class="card-header">
                <h1 class="card-title text-center font-weight-bold">
                    Pagos Pendientes
                </h1>
            </div>
            <div class="card-body">
                <p class="card-text" style="color: red;">pendientes</p>
            </div>
        </div>
        <div class="card text-bg-dark mb-5 mx-1" style="max-width: 300px; width: 45%; height: 200px;">
            <div class="card-header">
                <h1 class="card-title text-center font-weight-bold">
                    Pagos
                </h1>
            </div>
            <div class="card-body">
                <p class="card-text" style="color: green;">realizados</p>
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
