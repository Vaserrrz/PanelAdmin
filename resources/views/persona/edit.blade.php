@extends('adminlte::page')

@section('content_header')
    <h4>Editar Persona</h4>
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} Persona</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('personas.update', $persona->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('persona.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
