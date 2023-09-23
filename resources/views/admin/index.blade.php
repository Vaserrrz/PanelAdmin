@extends('adminlte::page')

@section('title', 'Panel Principal')

@section('content_header')
    <h1>RoutCloud</h1>
@stop

@section('content')
    <p>Panel Administrador</p>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h1 class="card-title">Cuentas</h1>
          <p class="card-text" style="color: green;">activas</p>
        </div>
      </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hello!'); </script>
@stop
