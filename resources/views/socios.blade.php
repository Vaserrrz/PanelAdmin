@extends('adminlte::page')

@section('title', 'Socios')

@section('content_header')
    <h1>Socios</h1>
@stop

@section('content')



<div class="container">
    <div class="row">
        <div class="col col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-agregar">
                           Agregar
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modal-agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Agregar - Socio</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form  action="{{ route('socios.store') }}"  method="POST">
                                        @csrf

                                        {{-- NOMBRE --}}
                                        <div class="form-group">
                                            <label for="SOCIO_NOMBRE">Nombre</label>
                                            <input type="text" class="form-control" id="SOCIO_NOMBRE" placeholder="Ingrese el Nombre del Socio" name="SOCIO_NOMBRE">
                                        </div>

                                        {{-- CI SOCIO --}}
                                        <div class="form-group">
                                            <label for="CI_SOCIO">CI</label>
                                            <input type="text" class="form-control" id="CI_SOCIO" placeholder="Ingrese Cedula de Identidad del Socio" name="CI_SOCIO">
                                        </div>

                                        {{-- TELEFONO --}}
                                        <div class="form-group">
                                          <label for="TELF_SOCIO">Telefono</label>
                                          <input type="text" class="form-control" id="TELF_SOCIO" placeholder="Ingrese el telefono del socio" name="TELF_SOCIO">
                                        </div>

                                        {{-- CORREO --}}
                                        <div class="form-group">
                                            <label for="SOCIO_CORREO">Correo</label>
                                            <input type="email" class="form-control" id="SOCIO_CORREO" placeholder="Ingrese el Correo del socio" name="SOCIO_CORREO">
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </form>



                                </div>
                            </div>
                            </div>
                        </div>
                        {{-- Tabla de datos --}}
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">CI/RIF</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($socios as $socio)
                                    <tr>
                                        <th scope="row">{{ $socio->id  }}</th>

                                        <td>{{ $socio->SOCIO_NOMBRE }}</td>
                                        <td>{{ $socio->CI_SOCIO }}</td>
                                        <td>{{ $socio->TELF_SOCIO }}</td>
                                        <td>{{ $socio->SOCIO_CORREO }}</td>
                                        <td>
                                            {{-- Editar  --}}
                                            {{-- Buton editar  --}}
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-editar-{{ $socio->id  }}">
                                                Editar
                                            </button>
                                            {{-- modal editar --}}
                                            <div class="modal fade" id="modal-editar-{{ $socio->id  }}"        aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Agregar - socio</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form  action="{{route('socios.update',$socio->id ) }}"  method="POST">
                                                            @csrf
                                                            @method('PUT')

                                                                {{-- NOMBRE --}}
                                                            <div class="form-group">
                                                                <label for="SOCIO_NOMBRE">Nombre</label>
                                                                <input type="text" class="form-control" id="SOCIO_NOMBRE" placeholder="Ingrese el Nombre del Socio" name="SOCIO_NOMBRE">
                                                            </div>

                                                                {{-- CI SOCIO --}}
                                                            <div class="form-group">
                                                                    <label for="CI_SOCIO">CI</label>
                                                                    <input type="text" class="form-control" id="CI_SOCIO" placeholder="Ingrese Cedula de Identidad del Socio" name="CI_SOCIO">
                                                            </div>

                                                                {{-- TELEFONO --}}
                                                            <div class="form-group">
                                                                <label for="TELF_SOCIO">Telefono</label>
                                                                <input type="text" class="form-control" id="TELF_SOCIO" placeholder="Ingrese el telefono del socio" name="TELF_SOCIO">
                                                            </div>

                                                                {{-- CORREO --}}
                                                            <div class="form-group">
                                                                    <label for="SOCIO_CORREO">Correo</label>
                                                                    <input type="email" class="form-control" id="SOCIO_CORREO" placeholder="Ingrese el Correo del socio" name="SOCIO_CORREO">
                                                            </div>



                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                <button type="submit" class="btn btn-primary">Editar</button>
                                                            </div>
                                                        </form>



                                                    </div>
                                                </div>
                                                </div>
                                            </div>


                                            {{-- Eliminar --}}
                                            {{-- form destroy --}}
                                            <form action="{{ route('socios.destroy', $socio) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                               <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                            </form>

                                        </td>
                                    </tr>

                                @empty
                                    <tr>
                                        <td colspan="5">No hay datos</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                        <div class="card-footer">

                        </div>
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
