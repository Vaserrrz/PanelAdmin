@extends('adminlte::page')

@section('content_header')
    {{ $persona->nombre ?? "Consulta de Persona" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ $persona->tipo }}: Persona</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        @php
                            if ($persona) {
                                $nombre = $persona->nombre;
                                $cedula = $persona->cedula;
                                $direccion = $persona->direccion;
                                $telef1 = $persona->telef1;
                                $telef2 = $persona->telef2;
                                $whatsapp = $persona->whatsapp;
                                $telegram = $persona->telegram;
                                $correo = $persona->correo;
                                $tipo = $persona->tipo;

                            } else {
                                $nombre = 'Persona no encontrada';
                                $cedula = null;
                                $direccion = null;
                                $telef1 = null;
                                $telef2 = null;
                                $whatsapp = null;
                                $telegram = null;
                                $correo = null;
                                $tipo = null;
                            }
                        @endphp
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telef1:</strong>
                            {{ $telef1 }}
                        </div>
                        <div class="form-group">
                            <strong>Telef2:</strong>
                            {{ $telef2 }}
                        </div>
                        <div class="form-group">
                            <strong>Whatsapp:</strong>
                            {{ $whatsapp }}
                        </div>
                        <div class="form-group">
                            <strong>Telegram:</strong>
                            {{ $telegram }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $correo }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $tipo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
