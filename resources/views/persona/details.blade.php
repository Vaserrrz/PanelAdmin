@extends('adminlte::page')

@section('title', 'Personas')

@section('content_header')
    <h1>{{$persona->tipo}}: {{$persona->nombre}} </h1>
@endsection

@section('content')

<div class="container">
    <div class="row">

        <div class="col col-md-12">
            <a class="btn btn-primary" href="{{ route('personas.index') }}"> {{ __('Volver') }}</a>
            <div class="card">
                <div class="card-header">
                    <h4><b>Datos Asociados</b> </h4>
                </div>
          </div>
       </div>
    </div>

    <div class="row">
        <div class="col col-lg-12 w-100">
            <div class="card p-5">
                <form>
                    <div class="row">
                        <div class="co col-md-12">
                            <div class="form">
                                <span class="block">Telefono: </span>
                                <label>{{$persona->telef1}} </label><br>
                                <span class="block">Correo: </span>
                                <label>{{$persona->correo}}</label><br>
                                <span class="block">Dirección: </span>
                                <label>{{$persona->direccion}}</label>
                                @if ($persona->tipo == "Técnico")
                                    <br><span class="block">Whatsapp: </span>
                                    <label>{{$persona->whatsapp}}</label>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection

@section('css')
@endsection

@section('js')
    {{-- <script> alert('Hi!'); </script> --}}
@endsection
