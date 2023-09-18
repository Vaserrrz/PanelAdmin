@extends('adminlte::page')

@section('title', 'Mikrotiks')

@section('content_header')
    <h1>Mikrotiks Satelital</h1>
@stop

@section('content')



<div class="container">
    <div class="row">
        <div class="col col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <div class="co col-md-6 float-left">
                            <a data-toggle="modal" data-target="#modal-agregar" class="btn btn-success btn-sm float-left"  data-placement="left" >
                              {{ __('Agregar') }}
                              {{-- class="btn btn-success" data-toggle="modal" data-target="#modal-agregar"> --}}
                            </a>
                        </div>
                        <div class="co col-md-6 float-right">
                            <a href={{ route('admin.home') }} class="btn btn-primary btn-sm float-right"  data-placement="left" >
                                {{ __('Volver') }}
                                {{-- class="btn btn-success" data-toggle="modal" data-target="#modal-agregar"> --}}
                              </a>
                        </div>
                    </div>
                </div>
                        <!-- Modal -->
                        <div class="modal fade" id="modal-agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Agregar - Mikrotik</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form  action="{{ route('mikrotiks.store') }}"  method="POST">
                                        @csrf

                                        {{-- NOMBRE --}}
                                        <div class="form-group">
                                            <label for="MK_NOMBRE">Nombre</label>
                                            <input type="text" class="form-control" id="MK_NOMBRE" placeholder="Nombre del Mikrotik" name="MK_NOMBRE" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>

                                        {{-- IP --}}
                                        <div class="form-group">
                                            <label for="MK_IP">IP</label>
                                            <input type="TEXT" class="form-control" id="MK_IP" placeholder="IP del Mikrotik" name="MK_IP">
                                        </div>

                                        {{-- mikrotik SERIAL --}}
                                        <div class="form-group">
                                          <label for="MK_SERIAL">Serial</label>
                                          <input type="text" class="form-control" id="MK_SERIAL" placeholder="Serial del Mikrotik" name="MK_SERIAL" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>

                                        {{-- IDENTITY  --}}
                                        <div class="form-group">
                                            <label for="MK_IDENTITY">IDENTITY</label>
                                            <input type="text" class="form-control" id="MK_IDENTITY" placeholder="IDENTITY del Mikrotik" name="MK_IDENTITY">
                                          </div>

                                        {{-- MODEL --}}
                                        <div class="form-group">
                                            <label for="MK_MODEL">Modelo</label>
                                            <input type="text" class="form-control" id="MK_MODEL" placeholder="Modelo del Mikrotik" name="MK_MODEL" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>

                                        {{-- VPNUSER --}}
                                        <div class="form-group">
                                            <label for="MK_VPNUSER">Usuario(VPN)</label>
                                            <input type="text" class="form-control" id="MK_VPNUSER" placeholder="Usuario (VPN) del Mikrotik" name="MK_VPNUSER">
                                        </div>

                                        {{-- VPNPASSWORD --}}
                                        <div class="form-group">
                                            <label for="MK_VPNPASSWORD">Contraseña(VPN)</label>
                                            <input type="text" class="form-control" id="MK_VPNPASSWORD" placeholder="Contraseña (VPN) del Mikrotik" name="MK_VPNPASSWORD">
                                        </div>

                                        {{-- VPNSERVER --}}
                                        <div class="form-group">
                                            <label for="MK_VPNSERVER">Servidor(VPN)</label>
                                            <input type="text" class="form-control" id="MK_VPNSERVER" placeholder="Servidor (VPN) del Mikrotik" name="MK_VPNSERVER">
                                        </div>

                                         {{-- ETHRCORTE1 --}}
                                         <div class="form-group">
                                            <label for="MK_ETHRCORTE1">ETHRCORTE1</label>
                                            <input type="text" class="form-control" id="MK_ETHRCORTE1" placeholder="ETHRCORTE1 del Mikrotik" name="MK_ETHRCORTE1">
                                        </div>

                                        {{-- ETHRCORTE2 --}}
                                        <div class="form-group">
                                            <label for="MK_ETHRCORTE2">ETHRCORTE2</label>
                                            <input type="text" class="form-control" id="MK_ETHRCORTE2" placeholder="ETHRCORTE2 del Mikrotik" name="MK_ETHRCORTE2">
                                        </div>

                                         {{-- USUARIO --}}
                                         <div class="form-group">
                                            <label for="MK_USUARIO">Usuario</label>
                                            <input type="text" class="form-control" id="MK_USUARIO" placeholder="Nombre de Usuario" name="MK_USUARIO">
                                        </div>

                                        {{-- CLAVE --}}
                                        <div class="form-group">
                                            <label for="MK_CLAVE">Clave</label>
                                            <input type="text" class="form-control" id="MK_CLAVE" placeholder="Clave para el Usuario" name="MK_CLAVE">
                                        </div>

                                         {{-- PUERTO --}}
                                         <div class="form-group">
                                            <label for="MK_PUERTO">Puerto</label>
                                            <input type="text" class="form-control" id="MK_PUERTO" placeholder="Puerto del Mikrotik" name="MK_PUERTO">
                                        </div>

                                        {{-- PROTOCOLO --}}
                                        <div class="form-group">
                                            <label for="MK_PROTOCOLO">Protocolo</label>
                                            <input type="text" class="form-control" id="MK_PROTOCOLO" placeholder="Protocolo del Mikrotik" name="MK_PROTOCOLO" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
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

                                <th scope="col">Nombre</th>
                                <th scope="col">IP</th>
                                <th scope="col">IDENTITY</th>
                                <th scope="col">Serial</th>
                                <th scope="col">Acciones </th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($mikrotiks as $mikrotik)
                                    <tr>
                                        <td>
                                            <a href="{{route('mikrotiks.details', $mikrotik->id)}}"> {{ $mikrotik->mk_nombre }}</a>
                                        </td>

                                        <td>{{ $mikrotik->mk_ip }}</td>
                                        <td>{{ $mikrotik->mk_serial }}</td>
                                        <td>{{ $mikrotik->mk_identify }}</td>


                                        <td>

                                            {{-- Editar  --}}
                                            {{-- Buton editar  --}}
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-editar-{{ $mikrotik->id  }}">
                                                Editar
                                            </button>
                                            {{-- modal editar --}}


                                            <div class="modal fade" id="modal-editar-{{ $mikrotik->id  }}"        aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Editar - mikrotik</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form  action="{{ route('mikrotiks.update', $mikrotik->id) }}"  method="POST">
                                                                @csrf

                                                                {{-- NOMBRE --}}
                                                                <div class="form-group">
                                                                    <label for="MK_NOMBRE">Nombre</label>
                                                                    <input type="text" class="form-control" id="MK_NOMBRE" placeholder="Ingrese el Nombre del mikrotik" name="MK_NOMBRE" style="text-transform:uppercase;"  onkeyup="javascript:this.value=this.value.toUpperCase();">
                                                                </div>

                                                                {{-- IP --}}
                                                                <div class="form-group">
                                                                    <label for="MK_IP">IP</label>
                                                                    <input type="text" class="form-control" id="MK_IP" placeholder="Ingrese el IP del mikrotik" name="MK_IP">
                                                                </div>

                                                                {{-- mikrotik SERIAL --}}
                                                                <div class="form-group">
                                                                <label for="MK_SERIAL">Serial</label>
                                                                <input type="text" class="form-control" id="MK_SERIAL" placeholder="Ingrese el Serial del mikrotik" name="MK_SERIAL">
                                                                </div>

                                                                {{-- IDENTITY  --}}
                                                                <div class="form-group">
                                                                    <label for="MK_IDENTITY">IDENTITY</label>
                                                                    <input type="text" class="form-control" id="MK_IDENTITY" placeholder="Ingrese el Identity del mikrotik" name="MK_IDENTITY">
                                                                </div>

                                                                {{-- MODEL --}}
                                                                <div class="form-group">
                                                                    <label for="MK_MODEL">Modelo</label>
                                                                    <input type="text" class="form-control" id="MK_MODEL" placeholder="Ingrese el Modelo del mikrotik" name="MK_MODEL">
                                                                </div>

                                                                {{-- VPNUSER --}}
                                                                <div class="form-group">
                                                                    <label for="MK_VPNUSER">Usuario(VPN)</label>
                                                                    <input type="text" class="form-control" id="MK_VPNUSER" placeholder="Ingrese EL Usuario (VPN) del mikrotik" name="MK_VPNUSER">
                                                                </div>

                                                                {{-- VPNPASSWORD --}}
                                                                <div class="form-group">
                                                                    <label for="MK_VPNPASSWORD">Contraseña(VPN)</label>
                                                                    <input type="password" class="form-control" id="MK_VPNPASSWORD" placeholder="Ingrese la Contraseña (VPN) del mikrotik" name="MK_VPNPASSWORD">
                                                                </div>

                                                                {{-- VPNSERVER --}}
                                                                <div class="form-group">
                                                                    <label for="MK_VPNSERVER">Servidor(VPN)</label>
                                                                    <input type="text" class="form-control" id="MK_VPNSERVER" placeholder="Ingrese El Servidor (VPN) del mikrotik" name="MK_VPNSERVER">
                                                                </div>

                                                                {{-- ETHRCORTE1 --}}
                                                                <div class="form-group">
                                                                    <label for="MK_ETHRCORTE1">ETHRCORTE1</label>
                                                                    <input type="text" class="form-control" id="MK_ETHRCORTE1" placeholder="Ingrese el ETHRCORTE1 del mikrotik" name="MK_ETHRCORTE1">
                                                                </div>

                                                                {{-- ETHRCORTE2 --}}
                                                                <div class="form-group">
                                                                    <label for="MK_ETHRCORTE2">ETHRCORTE2</label>
                                                                    <input type="text" class="form-control" id="MK_ETHRCORTE2" placeholder="Ingrese el ETHRCORTE2 del mikrotik" name="MK_ETHRCORTE2">
                                                                </div>

                                                                {{-- USUARIO --}}
                                                                <div class="form-group">
                                                                    <label for="MK_USUARIO">Usuario</label>
                                                                    <input type="text" class="form-control" id="MK_USUARIO" placeholder="Ingrese un nombre de Usuario" name="MK_USUARIO">
                                                                </div>

                                                                {{-- CLAVE --}}
                                                                <div class="form-group">
                                                                    <label for="MK_CLAVE">Clave</label>
                                                                    <input type="password" class="form-control" id="MK_CLAVE" placeholder="Crear clave para el usuario" name="MK_CLAVE">
                                                                </div>

                                                                {{-- PUERTO --}}
                                                                <div class="form-group">
                                                                    <label for="MK_PUERTO">Puerto</label>
                                                                    <input type="TEXT" class="form-control" id="MK_PUERTO" placeholder="Ingrese el Puerto del mikrotik" name="MK_PUERTO">
                                                                </div>

                                                                {{-- PROTOCOLO --}}
                                                                <div class="form-group">
                                                                    <label for="MK_PROTOCOLO">Protocolo</label>
                                                                    <input type="TEXT" class="form-control" id="MK_PROTOCOLO" placeholder="Ingrese el Protocolo del mikrotik" name="MK_PROTOCOLO">
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
                                            <form action="{{ route('mikrotiks.destroy', $mikrotik) }}" method="POST">
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
