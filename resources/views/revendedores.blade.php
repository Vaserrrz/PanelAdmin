@extends('adminlte::page')

@section('title', 'Revendedores')

@section('content_header')
    <h1>Revendedores</h1>
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
                                <h5 class="modal-title" id="exampleModalLabel">Agregar - Revendedor</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form  action="{{ route('revendedores.store') }}"  method="POST">
                                        @csrf

                                        {{-- NOMBRE --}}
                                        <div class="form-group">
                                            <label for="NOMBRE_RESELLER">Nombre</label>
                                            <input type="text" class="form-control" id="NOMBRE_RESELLER" placeholder="Ingrese el Nombre del revendedor" name="NOMBRE_RESELLER">
                                        </div>

                                        {{-- NOC_RESELLER --}}
                                        <div class="form-group">
                                            <label for="NOC_RESELLER">NOC</label>
                                            <input type="text" class="form-control" id="NOC_RESELLER" placeholder="Ingrese el NOC" name="NOC_RESELLER">
                                        </div>

                                        {{-- TELEFONO --}}
                                        <div class="form-group">
                                          <label for="TELF_RESELLER">Telefono</label>
                                          <input type="text" class="form-control" id="TELF_RESELLER" placeholder="Ingrese el telefono del revendedor" name="TELF_RESELLER">
                                        </div>

                                        {{-- TELEFONO 2 --}}
                                        <div class="form-group">
                                            <label for="TELF_RESELLER">Telefono Secundario</label>
                                            <input type="text" class="form-control" id="TELF2_RESELLER" placeholder="Ingrese el telefono secundario del revendedor" name="TELF2_RESELLER">
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
                                <th scope="col">NOC</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Telefono Secundario</th>
                                <th scope="col">Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($revendedores as $revendedor)
                                    <tr>
                                        <th scope="row">{{ $revendedor->id  }}</th>

                                        <td>{{ $revendedor->NOMBRE_RESELLER }}</td>
                                        <td>{{ $revendedor->NOC_RESELLER }}</td>
                                        <td>{{ $revendedor->TELF_RESELLER }}</td>
                                        <td>{{ $revendedor->TELF2_RESELLER }}</td>
                                        <td>
                                            {{-- Editar  --}}
                                            {{-- Buton editar  --}}
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-editar-{{ $revendedor->id  }}">
                                                Editar
                                            </button>
                                            {{-- modal editar --}}
                                            <div class="modal fade" id="modal-editar-{{ $revendedor->id  }}"        aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Editar - Revendedor</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form  action="{{route('revendedores.update',$revendedor->id ) }}"  method="POST">
                                                            @csrf
                                                            @method('PUT')

                                                             {{-- NOMBRE --}}
                                                            <div class="form-group">
                                                                <label for="NOMBRE_RESELLER">Nombre</label>
                                                                <input type="text" class="form-control" id="NOMBRE_RESELLER" placeholder="Ingrese el Nombre del revendedor" name="NOMBRE_RESELLER">
                                                            </div>

                                                            {{-- NOC_RESELLER --}}
                                                            <div class="form-group">
                                                                <label for="NOC_RESELLER">NOC</label>
                                                                <input type="text" class="form-control" id="NOC_RESELLER" placeholder="Ingrese el NOC" name="NOC_RESELLER">
                                                            </div>

                                                            {{-- TELEFONO --}}
                                                            <div class="form-group">
                                                            <label for="TELF_RESELLER">Telefono</label>
                                                            <input type="text" class="form-control" id="TELF_RESELLER" placeholder="Ingrese el telefono del revendedor" name="TELF_RESELLER">
                                                            </div>

                                                            {{-- TELEFONO 2 --}}
                                                            <div class="form-group">
                                                                <label for="TELF_RESELLER">Telefono Secundario</label>
                                                                <input type="text" class="form-control" id="TELF2_RESELLER" placeholder="Ingrese el telefono secundario del revendedor" name="TELF2_RESELLER">
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
                                            <form action="{{ route('revendedores.destroy', $revendedor) }}" method="POST">
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
