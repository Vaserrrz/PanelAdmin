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
                        {{-- {!! Form::open(['route'=>['personas.store'],'method'=>'POST']) !!} --}}
                        <form method="POST" action="{{ route('personas.store') }}"  role="form" enctype="multipart/form-data">
                            {{-- @csrf --}}
                            @include('persona.form')
                        </form>
                        {{-- {!! Form::close() !!} --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
