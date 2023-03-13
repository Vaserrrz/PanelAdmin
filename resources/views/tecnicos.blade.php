@extends('adminlte::page')

@section('title', 'Tecnicos')

@section('content_header')
    <h1>Tecnicos</h1>
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
                                <h5 class="modal-title" id="exampleModalLabel">Agregar - Tecnico</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form  action="{{ route('tecnicos.store') }}"  method="POST">
                                        @csrf

                                        {{-- NOMBRE --}}
                                        <div class="form-group">
                                            <label for="TECNICO_NOMBRE">Nombre</label>
                                            <input type="text" class="form-control" id="TECNICO_NOMBRE" placeholder="Ingrese el Nombre del Tecnico" name="TECNICO_NOMBRE">
                                        </div>

                                        {{-- CORREO --}}
                                        <div class="form-group">
                                            <label for="TECNICO_CORREO">Correo</label>
                                            <input type="email" class="form-control" id="TECNICO_CORREO" placeholder="Ingrese el Correo del Tecnico" name="TECNICO_CORREO">
                                        </div>

                                        {{-- TELEFONO --}}
                                        <div class="form-group">
                                          <label for="TECNICO_TELF">Telefono</label>
                                          <input type="text" class="form-control" id="TECNICO_TELF" placeholder="Ingrese el telefono del tecnico" name="TECNICO_TELF">
                                        </div>

                                        {{-- TELEFONO 2 --}}
                                        <div class="form-group">
                                            <label for="TECNICO_TELF2">Telefono Secundario</label>
                                            <input type="text" class="form-control" id="TECNICO_TELF2" placeholder="Ingrese el telefono secundario del tecnico" name="TECNICO_TELF2">
                                          </div>

                                        {{-- ZONA DE TRABAJO --}}
                                        <div class="form-group">
                                            <label for="ZONA_TRABAJO">Zona de Trabajo</label>
                                            <input type="text" class="form-control" id="ZONA_TRABAJO" placeholder="Ingrese el Correo del tecnico" name="ZONA_TRABAJO">
                                        </div>

                                        {{-- INCIDENCIA --}}
                                        <div class="form-group">
                                            <label for="INCIDENCIA">Incidencias</label>
                                            <input type="text" class="form-control" id="INCIDENCIA" placeholder="Ingrese las incidencias" name="INCIDENCIA">
                                        </div>

                                        {{-- REEMPLAZO --}}
                                        <div class="form-group">
                                            <label for="INCIDENCIA">Reemplazos</label>
                                            <input type="text" class="form-control" id="REEMPLAZO" placeholder="Ingrese las incidencias" name="REEMPLAZO">
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
                                <th scope="col">Correo</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Zona de Trabajo</th>
                                <th scope="col">Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($tecnicos as $tecnico)
                                    <tr>
                                        <th scope="row">{{ $tecnico->id  }}</th>

                                        <td>
                                            <a href="{{route('tecnicos.details',$tecnico->id)}}">{{ $tecnico->TECNICO_NOMBRE }}</a>
                                        </td>
                                        <td>{{ $tecnico->TECNICO_CORREO }}</td>
                                        <td>{{ $tecnico->TECNICO_TELF }}</td>

                                        <td>{{ $tecnico->ZONA_TRABAJO  }}</td>


                                        <td>
                                            {{-- Editar  --}}
                                            {{-- Buton editar  --}}
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-editar-{{ $tecnico->id  }}">
                                                Editar
                                            </button>
                                            {{-- modal editar --}}
                                            <div class="modal fade" id="modal-editar-{{ $tecnico->id  }}"        aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Agregar - Tecnico</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form  action="{{route('tecnicos.update', $tecnico->id)}}"  method="POST">
                                                            @csrf
                                                            @method('PUT')

                                                            {{-- NOMBRE --}}
                                                            <div class="form-group">
                                                                <label for="TECNICO_NOMBRE">Nombre</label>
                                                                <input type="text" class="form-control" id="TECNICO_NOMBRE" placeholder="Ingrese el Nombre del Tecnico" name="TECNICO_NOMBRE">
                                                            </div>

                                                            {{-- CORREO --}}
                                                            <div class="form-group">
                                                                <label for="TECNICO_CORREO">CI</label>
                                                                <input type="email" class="form-control" id="TECNICO_CORREO" placeholder="Ingrese el Correo del Tecnico" name="TECNICO_CORREO">
                                                            </div>

                                                            {{-- TELEFONO --}}
                                                            <div class="form-group">
                                                            <label for="TECNICO_TELF">Telefono</label>
                                                            <input type="text" class="form-control" id="TECNICO_TELF" placeholder="Ingrese el telefono del tecnico" name="TECNICO_TELF">
                                                            </div>

                                                            {{-- TELEFONO 2 --}}
                                                            <div class="form-group">
                                                                <label for="TECNICO_TELF2">Telefono Secundario</label>
                                                                <input type="text" class="form-control" id="TECNICO_TELF2" placeholder="Ingrese el telefono secundario del tecnico" name="TECNICO_TELF2">
                                                            </div>

                                                            {{-- ZONA DE TRABAJO --}}
                                                            <div class="form-group">
                                                                <label for="ZONA_TRABAJO">Zona de Trabajo</label>
                                                                <input type="text" class="form-control" id="ZONA_TRABAJO" placeholder="Ingrese el Correo del tecnico" name="ZONA_TRABAJO">
                                                            </div>

                                                            {{-- INCIDENCIA --}}
                                                            <div class="form-group">
                                                                <label for="INCIDENCIA">Incidencia</label>
                                                                <input type="text" class="form-control" id="INCIDENCIA" placeholder="Ingrese las incidencias" name="INCIDENCIA">
                                                            </div>

                                                            {{-- REEMPLAZO --}}
                                                            <div class="form-group">
                                                                <label for="INCIDENCIA">Reemplazos</label>
                                                                <input type="text" class="form-control" id="REEMPLAZO" placeholder="Ingrese las incidencias" name="REEMPLAZO">
                                                            </div>
                                                        </form>



                                                    </div>
                                                </div>
                                                </div>
                                            </div>


                                            {{-- Eliminar --}}
                                            {{-- form destroy --}}
                                            <form action="{{ route('tecnicos.destroy', $tecnico) }}" method="POST">
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
