@extends('adminlte::page')

@section('title', 'Clientes')

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
                                <h5 class="modal-title" id="exampleModalLabel">Agregar - Cliente</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form  action="{{ route('clientes.store') }}"  method="POST">
                                        @csrf
                                        {{-- Nombre --}}
                                        <div class="form-group">
                                          <label for="nombre">Nombre</label>
                                          <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre" name="nombre">
                                        </div>

                                        {{-- Email --}}
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="Ingrese el email" name="email">
                                        </div>

                                        {{-- Descripcion --}}
                                        <div class="form-group">
                                            <label for="descripcion">Descripcion</label>
                                            <input type="descripcion" class="form-control" id="descripcion" placeholder="Ingrese una descripcion" name="descripcion">
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
                                <th scope="col">#id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Email</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($clientes as $cliente)
                                    <tr>
                                        <th scope="row">{{ $cliente->id }}</th>
                                        <td>{{ $cliente->nombre }}</td>
                                        <td>{{ $cliente->email }}</td>
                                        <td>{{ $cliente->descripcion }}</td>
                                        <td>
                                            {{-- Editar  --}}
                                            {{-- Buton editar  --}}
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-editar-{{ $cliente->id }}">
                                                Editar
                                            </button>
                                            {{-- modal editar --}}
                                            <div class="modal fade" id="modal-editar-{{ $cliente->id }}"        aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Agregar - Cliente</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form  action="{{route('clientes.update',$cliente->id) }}"  method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            {{-- Nombre --}}
                                                            <div class="form-group">
                                                              <label for="nombre">Nombre</label>
                                                              <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre" name="nombre" value="{{ $cliente->nombre }}">
                                                            </div>

                                                            {{-- Email --}}
                                                            <div class="form-group">
                                                                <label for="email">Email</label>
                                                                <input type="email" class="form-control" id="email" placeholder="Ingrese el email" name="email" value="{{ $cliente->email }}">
                                                            </div>

                                                            {{-- Descripcion --}}
                                                            <div class="form-group">
                                                                <label for="descripcion">Descripcion</label>
                                                                <input type="descripcion" class="form-control" id="descripcion" placeholder="Ingrese una descripcion" name="descripcion" value="{{ $cliente->descripcion }}">
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
                                            <form action="{{ route('clientes.destroy', $cliente) }}" method="POST">
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
