@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>Clientes</h1>
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

                                        {{-- CI/RIF --}}
                                        <div class="form-group">
                                            <label for="email">CI/RIF</label>
                                            <input type="text" class="form-control" id="CI/RIF" placeholder="Ingrese Cedula/RIF del cliente" name="CI_RIF">
                                        </div>

                                        {{-- RAZON --}}
                                        <div class="form-group">
                                          <label for="CLIENTE_RAZON">Razon</label>
                                          <input type="text" class="form-control" id="CLIENTE_RAZON" placeholder="Ingrese la razon social del cliente" name="CLIENTE_RAZON">
                                        </div>

                                        {{-- DIRECCION --}}
                                        <div class="form-group">
                                            <label for="CLIENTE_DIRECCION">Direccion</label>
                                            <input type="text" class="form-control" id="CLIENTE_DIRECCION" placeholder="Ingrese la direccion del cliente" name="CLIENTE_DIRECCION">
                                        </div>

                                        {{-- CORREO --}}
                                        <div class="form-group">
                                            <label for="CLIENTE_CORREO">Correo</label>
                                            <input type="email" class="form-control" id="CLIENTE_CORREO" placeholder="Ingrese el Correo del Cliente" name="CLIENTE_CORREO">
                                          </div>

                                          {{-- DETALLE --}}
                                          <div class="form-group">
                                            <label for="CLIENTE_DETALLE">Detalle</label>
                                            <input type="text" class="form-control" id="CLIENTE_DETALLE" placeholder="Ingrese el Detalle" name="CLIENTE_DETALLE">
                                        </div>

                                         {{-- TELEFONO --}}
                                         <div class="form-group">
                                            <label for="CLIENTE_TELF">Telefono</label>
                                            <input type="text" class="form-control" id="CLIENTE_TELF" placeholder="Ingrese el telefono del cliente " name="CLIENTE_TELF">
                                        </div>

                                         {{-- TELEFONO 2 --}}
                                         <div class="form-group">
                                            <label for="CLIENTE_TELF2">Telefono Secundario</label>
                                            <input type="text" class="form-control" id="CLIENTE_TELF" placeholder="Ingrese el telefono secundario del cliente" name="CLIENTE_TELF2">
                                        </div>

                                          {{-- WHATSAPP --}}
                                          <div class="form-group">
                                            <label for="CLIENTE_WHATSAPP">Whatsapp</label>
                                            <input type="text" class="form-control" id="CLIENTE_WHATSAPP" placeholder="Ingrese el Whatsapp del cliente" name="CLIENTE_WHATSAPP">
                                        </div>

                                           {{-- TELEGRAM --}}
                                           <div class="form-group">
                                            <label for="CLIENTE_TELEGRAM">Telegram</label>
                                            <input type="text" class="form-control" id="CLIENTE_TELEGRAM" placeholder="Ingrese el Telegram del cliente" name="CLIENTE_TELEGRAM">
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
                                <th scope="col">Razón Social</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Teléfono</th>


                                <th scope="col">Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($clientes as $cliente)
                                    <tr>
                                        <th scope="row">{{ $cliente->id  }}</th>

                                        <td>
                                            <a href="{{route('clientes.details', $cliente->id)}}">
                                                {{ $cliente->CLIENTE_RAZON }}
                                            </a>
                                        </td>
                                        <td>{{ $cliente->CLIENTE_DIRECCION }}</td>
                                        <td>{{ $cliente->CLIENTE_TELF}}</td>

                                        <td>
                                            {{-- Editar  --}}
                                            {{-- Buton editar  --}}
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-editar-{{ $cliente->id  }}">
                                                Editar
                                            </button>
                                            {{-- modal editar --}}
                                            <div class="modal fade" id="modal-editar-{{$cliente->id}}"        aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Agregar - Cliente</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form  action="{{route('clientes.update', $cliente->id)}}"  method="POST">
                                                            @csrf
                                                            @method('put')
                                                            {{-- CI/RIF --}}
                                                            <div class="form-group">
                                                                <label for="email">CI/RIF</label>
                                                                <input type="text" class="form-control" id="CI/RIF" placeholder="Ingrese Cedula/RIF del cliente" name="CI_RIF" value="{{$cliente->CI_RIF}}">
                                                            </div>

                                                            {{-- RAZON --}}
                                                            <div class="form-group">
                                                              <label for="CLIENTE_RAZON">Razon</label>
                                                              <input type="text" class="form-control" id="CLIENTE_RAZON" placeholder="Ingrese la razon social del cliente" name="CLIENTE_RAZON" value="{{$cliente->CLIENTE_RAZON}}">
                                                            </div>

                                                            {{-- DIRECCION --}}
                                                            <div class="form-group">
                                                                <label for="CLIENTE_DIRECCION">Direccion</label>
                                                                <input type="text" class="form-control" id="CLIENTE_DIRECCION" placeholder="Ingrese la direccion del cliente" name="CLIENTE_DIRECCION" value="{{$cliente->CLIENTE_DIRECCION}}">
                                                            </div>

                                                              {{-- DETALLE --}}
                                                              <div class="form-group">
                                                                <label for="CLIENTE_DETALLE">Detalle</label>
                                                                <input type="text" class="form-control" id="CLIENTE_DETALLE" placeholder="Ingrese el detalle" name="CLIENTE_DETALLE" value="{{$cliente->CLIENTE_DETALLE}}">
                                                            </div>

                                                             {{-- TELEFONO --}}
                                                             <div class="form-group">
                                                                <label for="CLIENTE_TELF">Telefono</label>
                                                                <input type="text" class="form-control" id="CLIENTE_TELF" placeholder="Ingrese el telefono del cliente " name="CLIENTE_TELF" value="{{$cliente->CLIENTE_TELF}}">
                                                            </div>

                                                             {{-- TELEFONO 2 --}}
                                                             <div class="form-group">
                                                                <label for="CLIENTE_TELF2">Telefono</label>
                                                                <input type="text" class="form-control" id="CLIENTE_TELF" placeholder="Ingrese el telefono del cliente (2)" name="CLIENTE_TELF2" value="{{$cliente->CLIENTE_TELF2}}">
                                                            </div>

                                                              {{-- WHATSAPP --}}
                                                              <div class="form-group">
                                                                <label for="CLIENTE_WHATSAPP">Whatsapp</label>
                                                                <input type="text" class="form-control" id="CLIENTE_WHATSAPP" placeholder="Ingrese el Whatsapp del cliente" name="CLIENTE_WHATSAPP" value="{{$cliente->CLIENTE_WHATSAPP}}">
                                                            </div>

                                                               {{-- TELEGRAM --}}
                                                               <div class="form-group">
                                                                <label for="CLIENTE_TELEGRAM">Telegram</label>
                                                                <input type="text" class="form-control" id="CLIENTE_TELEGRAM" placeholder="Ingrese el Telegram del cliente" name="CLIENTE_TELEGRAM" value="{{$cliente->CLIENTE_TELEGRAM}}">
                                                            </div>

                                                             {{-- CORREO --}}
                                                             <div class="form-group">
                                                                <label for="CLIENTE_CORREO ">Correo</label>
                                                                <input type="email" class="form-control" id="CLIENTE_CORREO " placeholder="Ingrese el Correo del cliente" name="CLIENTE_CORREO" value="{{$cliente->CLIENTE_CORREO}}">
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
