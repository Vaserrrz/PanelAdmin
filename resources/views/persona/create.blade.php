@extends('adminlte::page')

@section('content_header')
    <h4>Crear Persona</h4>
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="card-body">
                        {!! Form::open(['route'=>['personas.store'],'method'=>'POST']) !!}
                        {{-- <form method="POST" action="{{ route('personas.store') }}"  role="form" enctype="multipart/form-data"> --}}
                            @csrf
                            @include('persona.form')
                        {{-- </form> --}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
{{-- <!-- Modal -->
    <div class="modal fade" id="modal-agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalPersona">Agregar - Persona</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['route'=>['personas.store'],'method'=>'POST']) !!}
                    {{-- <form method="POST" action="{{ route('personas.store') }}"  role="form" enctype="multipart/form-data"> -}}
                        @csrf
                        @include('persona.form')
                    {{-- </form> -}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
 --}}
