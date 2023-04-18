@extends('adminlte::page')

@section('title', 'Proveedores')

@section('content_header')
    <h1>Proveedores</h1>
@stop

@section('content')



<div class="container">
    <div class="row">
        <div class="col col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">

                        <!--BOTON AGREGAR -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-agregar">
                            Agregar
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="modal-agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">


                                <div class="modal-dialog">

                                    <div class="modal-content">

                                        <div class="modal-header">


                                            <h5
                                                class="modal-title" id="exampleModalLabel">Agregar - Proveedor
                                            </h5>

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>


                                        </div>

                                        <div class="modal-body">

                                            <form  action="{{ route('proveedores.store') }}"  method="POST">
                                                @csrf

                                                {{-- RAZON --}}
                                                <div class="form-group">
                                                    <label for="RAZON">Razon</label>
                                                    <input type="text" class="form-control" id="RAZON" placeholder="Ingrese la razon del proveedor" name="RAZON">
                                                </div>

                                                {{-- DIRECCION --}}
                                                <div class="form-group">
                                                    <label for="DIRECCION">Direccion</label>
                                                    <input type="text" class="form-control" id="DIRECCION" placeholder="Ingrese la direccion del proveedor" name="DIRECCION">
                                                </div>


                                                {{-- CONTACTO --}}
                                                <div class="form-group">
                                                    <label for="CONTACTO">Contacto</label>
                                                    <input type="text" class="form-control" id="CONTACTO" placeholder="Ingrese el contacto del proveedor" name="CONTACTO">
                                                </div>

                                                {{-- METODO DE PAGO --}}
                                                <div class="form-group">
                                                    <label for="METODO_PAGO">Metodo de pago</label>
                                                    <input type="text" class="form-control" id="METODO_PAGO" placeholder="Ingrese un metodo de pago" name="METODO_PAGO">
                                                </div>

                                                {{-- DETALLE DE PAGO --}}
                                                <div class="form-group">
                                                    <label for="DETALLE_PAGO">Detalle de pago</label>
                                                    <input type="text" class="form-control" id="DETALLE_PAGO" placeholder="Ingrese el detalle de pago" name="DETALLE_PAGO">
                                                </div>

                                                {{-- CORREO --}}
                                                <div class="form-group">
                                                <label for="Correo">Correo</label>
                                                <input type="email" class="form-control" id="PROVEEDOR_CORREO" placeholder="Ingrese el correo del proveedor" name="PROVEEDOR_CORREO">
                                                </div>

                                                {{-- CI/RIF --}}
                                                <div class="form-group">
                                                    <label for="CI_RIF">CI_RIF</label>
                                                    <input type="text" class="form-control" id="CI_RIF" placeholder="Ingrese la Cedula o RIF del proveedor" name="CI_RIF">
                                                </div>


                                                {{-- BOTONES CANCELAR Y GUARDAR --}}
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
                                        <th scope="col">RAZON</th>
                                        <th scope="col">CI/RIF</th>
                                        <th scope="col">Metodo de pago</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @forelse ($proveedores as $proveedor)
                                    <tr>

                                        <th scope="row">{{ $proveedor->id  }}</th>
                                            <td>
                                                <a href="{{route('proveedores.details', $proveedor->id)}}">{{$proveedor->RAZON}}</a>
                                            </td>
                                            <td>{{ $proveedor->CI_RIF}}</td>
                                            <td>{{ $proveedor->METODO_PAGO }}</td>
                                            <td>



                                            {{-- Editar  --}}
                                            {{-- Buton editar  --}}
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-editar-{{ $proveedor->id  }}">
                                                Editar
                                            </button>


                                            {{-- modal editar --}}
                                            <div class="modal fade" id="modal-editar-{{ $proveedor->id  }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">


                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Editar - proveedor</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>


                                                       <div class="modal-body">
                                                           <form  action="{{route('proveedores.update',$proveedor->id ) }}"  method="POST">
                                                                    @csrf
                                                                    @method('PUT')


                                                                 {{-- RAZON --}}
                                                                <div class="form-group">
                                                                        <label for="RAZON">Razon</label>
                                                                        <input type="text" class="form-control" id="RAZON" placeholder="Ingrese la razon del proveedor" name="RAZON" value="{{$proveedor->RAZON}}">
                                                                </div>


                                                                    {{-- DIRECCION --}}
                                                                <div class="form-group">
                                                                        <label for="DIRECCION">Direccion</label>
                                                                        <input type="text" class="form-control" id="DIRECCION" placeholder="Ingrese la direccion del proveedor" name="DIRECCION" value="{{$proveedor->DIRECCION}}">
                                                                </div>


                                                                    {{-- CONTACTO --}}
                                                                <div class="form-group">
                                                                        <label for="CONTACTO">Contacto</label>
                                                                        <input type="text" class="form-control" id="CONTACTO" placeholder="Ingrese el contacto del proveedor" name="CONTACTO" value="{{$proveedor->CONTACTO}}">
                                                                </div>

                                                                    {{-- METODO DE PAGO --}}
                                                                <div class="form-group">
                                                                        <label for="METODO_PAGO">Metodo de pago</label>
                                                                        <input type="text" class="form-control" id="METODO_PAGO" placeholder="Ingrese un metodo de pago" name="METODO_PAGO" value="{{$proveedor->METODO_PAGO}}">
                                                                </div>

                                                                    {{-- DETALLE DE PAGO --}}
                                                                <div class="form-group">
                                                                        <label for="DETALLE_PAGO">Detalle de pago</label>
                                                                        <input type="text" class="form-control" id="DETALLE_PAGO" placeholder="Ingrese el detalle de pago" name="DETALLE_PAGO" value="{{$proveedor->DETALLE_PAGO}}">
                                                                </div>

                                                                    {{-- CORREO --}}
                                                                <div class="form-group">
                                                                    <label for="Correo">Correo</label>
                                                                    <input type="email" class="form-control" id="PROVEEDOR_CORREO" placeholder="Ingrese el correo del proveedor" name="PROVEEDOR_CORREO" value="{{$proveedor->PROVEEDOR_CORREO}}">
                                                                </div>

                                                                    {{-- CI/RIF --}}
                                                                <div class="form-group">
                                                                        <label for="CI_RIF">CI_RIF</label>
                                                                        <input type="text" class="form-control" id="CI_RIF" placeholder="Ingrese la Cedula o RIF del proveedor" name="CI_RIF" value="{{$proveedor->CI_RIF}}">
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


                                            {{-- Eliminar --}}
                                            {{-- form destroy --}}
                                            <form action="{{ route('proveedores.destroy', $proveedor) }}" method="POST">
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
