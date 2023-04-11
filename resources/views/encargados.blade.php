@extends('adminlte::page')

@section('title', 'Encargados')

@section('content_header')
    <h1>Encargados</h1>
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
                                <h5 class="modal-title" id="exampleModalLabel">Agregar - Encargado</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form  action="{{ route('encargados.store') }}"  method="POST">
                                        @csrf
                                        {{-- Nombre --}}
                                        <div class="form-group">
                                          <label for="ENCARGADO_NOMBRE">Nombre</label>
                                          <input type="text" class="form-control" id="ENCARGADO_NOMBRE" placeholder="Ingrese el nombre del encargado" name="ENCARGADO_NOMBRE">
                                        </div>

                                        {{-- Email --}}
                                        <div class="form-group">
                                            <label for="ENCARGADO_CORREO">Correo</label>
                                            <input type="email" class="form-control" id="ENCARGADO_CORREO" placeholder="Ingrese el correo del encargado" name="ENCARGADO_CORREO">
                                        </div>

                                        {{-- Descripcion --}}
                                        <div class="form-group">
                                            <label for="ENCARGADO_TELF">Telefono</label>
                                            <input type="integer" class="form-control" id="ENCARGADO_TELF" placeholder="Ingrese el telefono del encargado" name="ENCARGADO_TELF">
                                        </div>


                                        {{--CLIENTE ID --}}
                                        <div class="form-group">
                                            <label for="inputState">Cliente ID</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>Escoga el Cliente...</option>
                                                @forelse($clientes as $cliente)
                                                    <option value="{{$cliente->CLIENTE_RAZON}}">{{$cliente->CLIENTE_RAZON}}</option>
                                                @empty
                                                @endforelse
                                            </select>
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
                                <th scope="col">NOMBRE</th>
                                <th scope="col">TELEFONO</th>
                                <th scope="col">CORREO</th>
                                <th scope="col">Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($encargados as $encargado)
                                    <tr>
                                        <th scope="row">{{ $encargado->id }}</th>

                                        <td>
                                            <a href="{{route('encargados.details', $encargado->id)}}"> {{ $encargado->ENCARGADO_NOMBRE }}</a>
                                        </td>
                                        <td>{{ $encargado->ENCARGADO_TELF }}</td>
                                        <td>{{ $encargado->ENCARGADO_CORREO }}</td>
                                        <td>
                                            {{-- Editar  --}}
                                            {{-- Buton editar  --}}
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-editar-{{ $encargado->id }}">
                                                Editar
                                            </button>
                                            {{-- modal editar --}}
                                            <div class="modal fade" id="modal-editar-{{ $encargado->id }}"        aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Agregar - Encargado</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form  action="{{route('encargados.update',$encargado->id) }}"  method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            {{-- Nombre --}}
                                                            <div class="form-group">
                                                              <label for="nombre">Nombre</label>
                                                              <input type="text" class="form-control" id="ENCARGADO_NOMBRE" placeholder="Ingrese el nombre del encargado" name="ENCARGADO_NOMBRE" value="{{ $encargado->ENCARGADO_NOMBRE }}">
                                                            </div>

                                                            {{-- Correo --}}
                                                            <div class="form-group">
                                                                <label for="email">Correo</label>
                                                                <input type="email" class="form-control" id="ENCARGADO_CORREO" placeholder="PRUEBA PLACEHOLDER" name="ENCARGADO_CORREO" value="{{ $encargado->ENCARGADO_CORREO }}">
                                                            </div>

                                                            {{-- Telefono --}}
                                                            <div class="form-group">
                                                                <label for="descripcion">Telefono</label>
                                                                <input type="descripcion" class="form-control" id="ENCARGADO_TELF" placeholder="Ingrese el numero telefonico del encargado" name="ENCARGADO_TELF" value="{{ $encargado->ENCARGADO_TELF }}">
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
                                            <form action="{{ route('encargados.destroy', $encargado) }}" method="POST">
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
