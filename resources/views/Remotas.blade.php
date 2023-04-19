@extends('adminlte::page')

@section('title', 'Remotas')

@section('content_header')
    <h1>Remotas Satelital</h1>
@stop

@section('content')



<div class="container">
    <div class="row">
        <div class="col col-md-12">
            <div class="card">
                <div class="card-header">


                    <div class="card-body">


                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalAgregar">
                            Agregar
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="ModalAgregar" tabindex="-1" aria-labelledby="ModalAgregar" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ModalAgregar">Agregar - Remota</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <form  action="{{ route('remotas.store') }}"  method="POST">
                                            @csrf

                                            <div class="row">
                                                <div class="col col-md-8">
                                                    <div class="form-group">
                                                        <label for="REMOTA_NODO">NODO</label>
                                                        <input type="text" class="form-control" id="REMOTA_NODO" placeholder="Ingrese el Nodo de la Remota" name="REMOTA_NODO">
                                                    </div>
                                                </div>

                                                <div class="col col-md-4">
                                                    <div class="form-group">
                                                        <label for="CLIENTE">Cliente</label>
                                                        <select id="SELECT_CLIENTE" name="SELECT_CLIENTE" class="form-control">
                                                            <option selected>Escoga el cliente...</option>


                                                            @forelse($clientes as $cliente)
                                                                <option value="{{$cliente->id}}">{{$cliente->CLIENTE_RAZON}}</option>
                                                            @empty
                                                                No hay hay clientes registrados
                                                            @endforelse
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col col-md-8">
                                                    <div class="form-group">
                                                        <label for="REMOTA_EQUIPO">Equipo</label>
                                                        <input type="text" class="form-control" id="REMOTA_LNB_SERIAL" placeholder="Ingrese el Equipo de la Remota" name="REMOTA_EQUIPO">
                                                    </div>
                                                </div>


                                                <div class="col col-md-4">
                                                    <div class="form-group">
                                                        <label for="ENCARGADO">                                                                Encargado</label>
                                                        <select id="SELECT_ENCARGADO" name="SELECT_ENCARGADO" class="form-control">
                                                            <option selected>Escoga el Encargado...</option>
                                                            {{-- @forelse($encargados as $encargado)
                                                                <option value="{{$encargado->id}}">{{$encargado->ENCARGADO_NOMBRE}}</option>
                                                            @empty
                                                            @endforelse --}}
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col col-md-4">
                                                    <div class="form-group">
                                                        <label for="descripcion">Serial</label>
                                                        <input type="text" class="form-control" id="REMOTA_SERIAL" placeholder="Ingrese el Serial de la Remota" name="REMOTA_SERIAL">
                                                    </div>
                                                </div>


                                                <div class="col col-md-4">
                                                    <div class="form-group">
                                                        <label for="REMOTA_COORDENADA">Coordenadas</label>
                                                        <input type="text" class="form-control" id="REMOTA_COORDENADA" placeholder="Ingrese las Coordenadas de la Remota" name="REMOTA_COORDENADA">
                                                    </div>
                                                </div>

                                                <div class="col col-md-4">
                                                    <div class="form-group">
                                                        <label for="SOCIO">Socio</label>
                                                        <select id="SELECT_SOCIO" name="SELECT_SOCIO" class="form-control">
                                                            <option selected>Escoga el Socio...</option>
                                                            @forelse($socios as $socio)
                                                                <option value="{{$socio->id}}">{{$socio->SOCIO_NOMBRE}}</option>
                                                            @empty
                                                            @endforelse
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col col-md-8">
                                                    <div class="form-group">
                                                        <label for="REMOTA_BUC">BUC</label>
                                                        <input type="text" class="form-control" id="REMOTA_BUC" placeholder="Ingrese el BUC de la Remota" name="REMOTA_BUC">
                                                    </div>
                                                </div>


                                                <div class="col col-md-4">
                                                    <div class="form-group">
                                                        <label for="REMOTA_BUC_SERIAL">BUC Serial</label>
                                                        <input type="text" class="form-control" id="REMOTA_BUC_SERIAL" placeholder="Ingrese el Serial del BUC" name="REMOTA_BUC_SERIAL">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col col-md-8">
                                                    <div class="form-group">
                                                        <label for="REMOTA_LNB">LNB</label>
                                                        <input type="text" class="form-control" id="REMOTA_LNB" placeholder="Ingrese el LNB de la Remota" name="REMOTA_LNB">
                                                    </div>
                                                </div>


                                                <div class="col col-md-4">
                                                    <div class="form-group">
                                                        <label for="REMOTA_LNB_SERIAL">Serial LNB</label>
                                                        <input type="text" class="form-control" id="REMOTA_LNB_SERIAL" placeholder="Ingrese el Serial del LNB" name="REMOTA_LNB_SERIAL">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col col-md-6">
                                                    <div class="form-group">
                                                        <label for="REMOTA_DIA_ACTIVACION">Dia Activacion</label>
                                                        <input type="date" class="form-control" id="REMOTA_DIA_ACTIVACION" placeholder="Ingrese el Dia de Activacion de la Remota" name="REMOTA_DIA_ACTIVACION">
                                                    </div>
                                                </div>
                                                <div class="col col-md-6">
                                                    <div class="form-group">
                                                        <label for="REMOTA_DIA_CORTE">Dia de Corte</label>
                                                        <input type="date" class="form-control" id="REMOTA_DIA_CORTE" placeholder="Ingrese el dia de corte de la Remota" name="REMOTA_DIA_CORTE">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col col-md-9">
                                                    <div class="form-group">
                                                        <label for="REMOTA_RENTA">Detalle</label>
                                                        <input type="text" class="form-control" id="REMOTA_RENTA" placeholder="Detalles a agregar" name="REMOTA_RENTA">
                                                    </div>
                                                </div>

                                                <div class="col col-md-3">
                                                    <div class="form-group">
                                                        <label for="REMOTA_STATUS">Status</label>
                                                        <input type="text" class="form-control" id="REMOTA_STATUS" placeholder="Ingrese el Status de la Remota" name="REMOTA_STATUS">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col col-md-6">
                                                    <div class="form-group">
                                                        <label for="REMOTA_IP_MODEM">IP Modem</label>
                                                        <input type="text" class="form-control" id="REMOTA_IP_MODEM" placeholder="Ingrese el IP del Modem" name="REMOTA_IP_MODEM">
                                                    </div>
                                                </div>

                                                <div class="col col-md-6">
                                                    <div class="form-group">
                                                        <label for="REMOTA_IP_GESTION">IP Gestion</label>
                                                        <input type="text" class="form-control" id="REMOTA_IP_GESTION" placeholder="Ingrese el IP de Gestion" name="REMOTA_IP_GESTION">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col col-md-6">
                                                    <div class="form-group">
                                                        <label for="REMOTA_PLATO">Plato</label>
                                                        <input type="text" class="form-control" id="REMOTA_PLATO" placeholder="Ingrese el Plato de la Remota" name="REMOTA_PLATO">
                                                    </div>
                                                </div>
                                                <div class="col col-md-6">
                                                    <div class="form-group">
                                                        <label for="REMOTA_BONDA">Bonda</label>
                                                        <input type="text" class="form-control" id="REMOTA_BONDA" placeholder="Ingrese la Bonda de la Remota" name="REMOTA_BONDA">
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="row">
                                                <div class="col col-md-4">
                                                    <div class="form-group">
                                                        <label for="PROVEEDOR">Proveedor</label>
                                                        <select id="SELECT_PROVEEDOR" name="SELECT_PROVEEDOR" class="form-control">
                                                            {{-- <option selected>Escoga el Proveedor...</option> --}}
                                                            <option value="">Escoga el Proveedor...</option>

                                                            @forelse($proveedores as $proveedor)
                                                                <option value="{{$proveedor->id}}"   >{{$proveedor->RAZON}}</option>
                                                            @empty
                                                                No hay proveedores registrados
                                                            @endforelse
                                                        </select>
                                                    </div>
                                                </div>

                                                {{-- satelite --}}
                                                <div class="col col-md-4">
                                                    <div class="form-group">
                                                        <label for="SATELITES">Satelites</label>
                                                        <select id="SELECT_SATELITE" name="SELECT_SATELITE" class="form-control" disabled>
                                                            <option value="">Escoga el Satelite...</option>
                                                            {{-- <option selected>Escoga el Satelite...</option> --}}
                                                            {{-- @forelse($satelites as $satelite)
                                                                <option value="{{$satelite->id}}">{{$satelite->SAT_NOMBRE}}</option>
                                                            @empty
                                                            @endforelse --}}
                                                        </select>
                                                    </div>
                                                </div>


                                                {{-- city --}}
                                                <div class="col col-md-4s">
                                                    <div class="form-group">
                                                        <label for="PLAN">Plan</label>
                                                        <select id="SELECT_PLAN" name="SELECT_PLAN" class="form-control" disabled>
                                                            <option value=""> Escoga un plan . . . </option>
                                                            {{-- <option selected>Escoga el plan...</option>
                                                            @forelse($plan as $plan)
                                                                <option value="{{$plan->id}}">{{$plan->PLAN_NOMBRE}}</option>
                                                            @empty
                                                            @endforelse --}}
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="col col-md-12">
                                                    <div class="form-group">
                                                        <label for="inputState">Revendedor</label>
                                                        <select id="SELECT_RESELLER" name="SELECT_RESELLER" class="form-control">
                                                            <option selected>Escoga el Revendedor...</option>
                                                            @forelse($revendedores as $revendedor)
                                                                <option value="{{$revendedor->id}}">{{$revendedor->NOMBRE_RESELLER}}</option>
                                                            @empty
                                                            @endforelse
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>



                                            {{--PLAN --}}



                                            <div class="row">
                                                <div class="col col-md-3">
                                                    <div class="form-group">
                                                        <label for="REMOTA_PLANUP">PlanUp</label>
                                                        <input type="checkbox" class="form-control" id="REMOTA_PLANUP" placeholder="Ingrese el PLANUP de la Remota" name="REMOTA_PLANUP">
                                                    </div>
                                                </div>
                                                <div class="col col-md-3">
                                                    <div class="form-group">
                                                        <label for="REMOTA_PLANDOWN">PlanDown</label>
                                                        <input type="checkbox"  class="form-control" id="REMOTA_PLANDOWN" placeholder="Ingrese el PLANDOWN de la Remota" name="REMOTA_PLANDOWN">
                                                    </div>
                                                </div>

                                                <div class="col col-md-3">
                                                    <div class="form-group">
                                                        <label for="REMOTA_COSTO_PLAN">Costo del Plan</label>
                                                        <input type="text" class="form-control" id="REMOTA_COSTO_PLAN" placeholder="Ingrese el Costo del Plan" name="REMOTA_COSTO_PLAN">
                                                    </div>
                                                </div>

                                                <div class="col col-md-3">
                                                    <div class="form-group">
                                                        <label for="REMOTA_RENTA">Renta</label>
                                                        <input type="text" class="form-control" id="REMOTA_RENTA" placeholder="Ingrese el monto de la Renta" name="REMOTA_RENTA">
                                                    </div>
                                                </div>
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
                                <th scope="col">Equipo</th>
                                <th scope="col">Nodo</th>
                                <th scope="col">Serial</th>
                                <th scope="col">IP</th>
                                <th scope="col">Acciones</th>
                              </tr>
                            </thead>


                            <tbody>
                                @forelse ($remotas as $remota)
                                    <tr>
                                        <th scope="row">{{ $remota->id }}</th>
                                        <td>
                                            <a href="{{route('remotas.details', $remota->id)}}">   {{ $remota->REMOTA_EQUIPO }}</a>
                                        </td>
                                        <td>{{ $remota->REMOTA_NODO }}</td>
                                        <td>{{ $remota->REMOTA_SERIAL }}</td>
                                        <td>{{ $remota->REMOTA_IP_MODEM }}</td>



                                        <td>
                                            {{-- Editar  --}}


                                            {{-- Buton editar  --}}
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-editar-{{ $remota->id  }}">
                                                Editar
                                            </button>

                                            {{-- modal editar --}}
                                            <div class="modal fade" id="modal-editar-{{$remota->id }}"        aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">

                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="ModalEditar">Editar - Remota</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form  action="{{ route('remotas.update', $remota->id)}}"  method="POST">
                                                                @csrf

                                                                <div class="row">
                                                                    <div class="col col-md-8">
                                                                        <div class="form-group">
                                                                            <label for="REMOTA_NODO">NODO</label>
                                                                            <input type="text" class="form-control" id="REMOTA_NODO" placeholder="Ingrese el Nodo de la Remota" name="REMOTA_NODO" value="{{$remota->REMOTA_NODO}}">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="CLIENTE">Cliente</label>
                                                                            <select id="SELECT_CLIENTE" name="SELECT_CLIENTE" class="form-control">
                                                                                <option selected>Escoga el cliente...</option>


                                                                                @forelse($clientes as $cliente)
                                                                                    <option value="{{$cliente->id}}">{{$cliente->CLIENTE_RAZON}}</option>
                                                                                    <option value="{{$remota->SELECT_CLIENTE}}" selected></option>
                                                                                @empty
                                                                                    No hay hay clientes registrados
                                                                                @endforelse
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col col-md-8">
                                                                        <div class="form-group">
                                                                            <label for="REMOTA_EQUIPO">Equipo</label>
                                                                            <input type="text" class="form-control" id="REMOTA_LNB_SERIAL" placeholder="Ingrese el Equipo de la Remota" name="REMOTA_EQUIPO" value="{{$remota->REMOTA_EQUIPO}}">
                                                                        </div>
                                                                    </div>


                                                                    <div class="col col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="ENCARGADO">Encargado</label>
                                                                            <select id="SELECT_ENCARGADO" name="SELECT_ENCARGADO" class="form-control">
                                                                                <option selected>Escoga el Encargado...</option>
                                                                                {{-- @forelse($encargados as $encargado)
                                                                                    <option value="{{$encargado->id}}">{{$encargado->ENCARGADO_NOMBRE}}</option>
                                                                                @empty
                                                                                @endforelse --}}
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="row">
                                                                    <div class="col col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="descripcion">Serial</label>
                                                                            <input type="text" class="form-control" id="REMOTA_SERIAL" placeholder="Ingrese el Serial de la Remota" name="REMOTA_SERIAL" value="{{$remota->REMOTA_SERIAL}}">
                                                                        </div>
                                                                    </div>


                                                                    <div class="col col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="REMOTA_COORDENADA">Coordenadas</label>
                                                                            <input type="text" class="form-control" id="REMOTA_COORDENADA" placeholder="Ingrese las Coordenadas de la Remota" name="REMOTA_COORDENADA"  value="{{$remota->REMOTA_COORDENADA}}">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="SOCIO">Socio</label>
                                                                            <select id="SELECT_SOCIO" name="SELECT_SOCIO" class="form-control">
                                                                                <option selected>Escoga el Socio...</option>
                                                                                @forelse($socios as $socio)
                                                                                    <option value="{{$socio->id}}">{{$socio->SOCIO_NOMBRE}}</option>
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col col-md-8">
                                                                        <div class="form-group">
                                                                            <label for="REMOTA_BUC">BUC</label>
                                                                            <input type="text" class="form-control" id="REMOTA_BUC" placeholder="Ingrese el BUC de la Remota" name="REMOTA_BUC"  value="{{$remota->REMOTA_BUC}}">
                                                                        </div>
                                                                    </div>


                                                                    <div class="col col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="REMOTA_BUC_SERIAL">BUC Serial</label>
                                                                            <input type="text" class="form-control" id="REMOTA_BUC_SERIAL" placeholder="Ingrese el Serial del BUC" name="REMOTA_BUC_SERIAL"  value="{{$remota->REMOTA_BUC_SERIAL}}">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col col-md-8">
                                                                        <div class="form-group">
                                                                            <label for="REMOTA_LNB">LNB</label>
                                                                            <input type="text" class="form-control" id="REMOTA_LNB" placeholder="Ingrese el LNB de la Remota" name="REMOTA_LNB" value="{{$remota->REMOTA_LNB}}">
                                                                        </div>
                                                                    </div>


                                                                    <div class="col col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="REMOTA_LNB_SERIAL">Serial LNB</label>
                                                                            <input type="text" class="form-control" id="REMOTA_LNB_SERIAL" placeholder="Ingrese el Serial del LNB" name="REMOTA_LNB_SERIAL"  value="{{$remota->REMOTA_LNB_SERIAL}}">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="REMOTA_DIA_ACTIVACION">Dia Activacion</label>
                                                                            <input type="date" class="form-control" id="REMOTA_DIA_ACTIVACION" placeholder="Ingrese el Dia de Activacion de la Remota" name="REMOTA_DIA_ACTIVACION"  value="{{$remota->REMOTA_DIA_ACTIVACION}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="REMOTA_DIA_CORTE">Dia de Corte</label>
                                                                            <input type="date" class="form-control" id="REMOTA_DIA_CORTE" placeholder="Ingrese el dia de corte de la Remota" name="REMOTA_DIA_CORTE"  value="{{$remota->REMOTA_DIA_CORTE}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col col-md-9">
                                                                        <div class="form-group">
                                                                            <label for="REMOTA_RENTA">Detalle</label>
                                                                            <input type="text" class="form-control" id="REMOTA_RENTA" placeholder="Detalles a agregar" name="REMOTA_RENTA"  value="{{$remota->REMOTA_RENTA}}">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="REMOTA_STATUS">Status</label>
                                                                            <input type="text" class="form-control" id="REMOTA_STATUS" placeholder="Ingrese el Status de la Remota" name="REMOTA_STATUS"  value="{{$remota->REMOTA_STATUS}}">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="REMOTA_IP_MODEM">IP Modem</label>
                                                                            <input type="text" class="form-control" id="REMOTA_IP_MODEM" placeholder="Ingrese el IP del Modem" name="REMOTA_IP_MODEM"  value="{{$remota->REMOTA_IP_MODEM}}">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="REMOTA_IP_GESTION">IP Gestion</label>
                                                                            <input type="text" class="form-control" id="REMOTA_IP_GESTION" placeholder="Ingrese el IP de Gestion" name="REMOTA_IP_GESTION" value="{{$remota->REMOTA_IP_GESTION}}">
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="row">
                                                                    <div class="col col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="REMOTA_PLATO">Plato</label>
                                                                            <input type="text" class="form-control" id="REMOTA_PLATO" placeholder="Ingrese el Plato de la Remota" name="REMOTA_PLATO" value="{{$remota->REMOTA_PLATO}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="REMOTA_BONDA">Bonda</label>
                                                                            <input type="text" class="form-control" id="REMOTA_BONDA" placeholder="Ingrese la Bonda de la Remota" name="REMOTA_BONDA"  value="{{$remota->REMOTA_BONDA}}">
                                                                        </div>
                                                                    </div>
                                                                </div>




                                                                <div class="row">
                                                                    <div class="col col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="PROVEEDOR">Proveedor</label>
                                                                            <select id="SELECT_PROVEEDOR" name="SELECT_PROVEEDOR" class="form-control">
                                                                                {{-- <option selected>Escoga el Proveedor...</option> --}}
                                                                                <option value="">Escoga el Proveedor...</option>

                                                                                @forelse($proveedores as $proveedor)
                                                                                    <option value="{{$proveedor->id}}"   >{{$proveedor->RAZON}}</option>
                                                                                @empty
                                                                                    No hay proveedores registrados
                                                                                @endforelse
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    {{-- satelite --}}
                                                                    <div class="col col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="SATELITES">Satelites</label>
                                                                            <select id="SELECT_SATELITE" name="SELECT_SATELITE" class="form-control" disabled>
                                                                                <option value="">Escoga el Satelite...</option>
                                                                                {{-- <option selected>Escoga el Satelite...</option> --}}
                                                                                {{-- @forelse($satelites as $satelite)
                                                                                    <option value="{{$satelite->id}}">{{$satelite->SAT_NOMBRE}}</option>
                                                                                @empty
                                                                                @endforelse --}}
                                                                            </select>
                                                                        </div>
                                                                    </div>


                                                                    {{-- city --}}
                                                                    <div class="col col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="PLAN">Plan</label>
                                                                            <select id="SELECT_PLAN" name="SELECT_PLAN" class="form-control" disabled>
                                                                                <option value=""> Escoga un plan . . . </option>
                                                                                {{-- <option selected>Escoga el plan...</option>
                                                                                @forelse($plan as $plan)
                                                                                    <option value="{{$plan->id}}">{{$plan->PLAN_NOMBRE}}</option>
                                                                                @empty
                                                                                @endforelse --}}
                                                                            </select>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="inputState">Revendedor</label>
                                                                            <select id="SELECT_RESELLER" name="SELECT_RESELLER" class="form-control">
                                                                                <option selected>Escoga el Revendedor...</option>
                                                                                @forelse($revendedores as $revendedor)
                                                                                    <option value="{{$revendedor->id}}">{{$revendedor->NOMBRE_RESELLER}}</option>
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>







                                                                <div class="row">
                                                                    <div class="col col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="REMOTA_PLANUP">PlanUp</label>
                                                                            <input type="checkbox" class="form-control" id="REMOTA_PLANUP" placeholder="Ingrese el PLANUP de la Remota" name="REMOTA_PLANUP"  value="{{$remota->REMOTA_PLANUP}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="REMOTA_PLANDOWN">PlanDown</label>
                                                                            <input type="checkbox"  class="form-control" id="REMOTA_PLANDOWN" placeholder="Ingrese el PLANDOWN de la Remota" name="REMOTA_PLANDOWN"  value="{{$remota->REMOTA_PLANDOWN}}">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="REMOTA_COSTO_PLAN">Costo del Plan</label>
                                                                            <input type="text" class="form-control" id="REMOTA_COSTO_PLAN" placeholder="Ingrese el Costo del Plan" name="REMOTA_COSTO_PLAN"  value="{{$remota->REMOTA_COSTO_PLAN}}">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="REMOTA_RENTA">Renta</label>
                                                                            <input type="text" class="form-control" id="REMOTA_RENTA" placeholder="Ingrese el monto de la Renta" name="REMOTA_RENTA"  value="{{$remota->REMOTA_RENTA}}">
                                                                        </div>
                                                                    </div>
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
                                            <form action="{{ route('remotas.destroy', $remota) }}" method="POST">
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
    <script>
        const proveedorSelect = document.getElementById('SELECT_PROVEEDOR');
        const sateliteSelect = document.getElementById('SELECT_SATELITE');
        const planSelect = document.getElementById('SELECT_PLAN');
        const clienteSelect = document.getElementById('SELECT_CLIENTE');
        const encargadoSelect = document.getElementById('SELECT_ENCARGADO');
        proveedorSelect.addEventListener('change', function() {
            sateliteSelect.innerHTML = '<option value="">Selecciona un satelite</option>';
            sateliteSelect.disabled = false;

            planSelect.innerHTML = '<option value="">Selecciona una plan</option>';
            planSelect.disabled = false;

            if (!proveedorSelect.value) {
                return;
            }


            fetch(`/remotas_satelites?PROVEEDOR_ID=${proveedorSelect.value}`)
                .then(response => response.json())
                .then(states => {
                    sateliteSelect.disabled = false;

                    states.forEach(satelite => {
                        console.log(satelite);
                        const option = document.createElement('option');
                        option.value = satelite.id;
                        option.textContent = satelite.SAT_NOMBRE;
                        sateliteSelect.appendChild(option);
                    });
                });
        });

        sateliteSelect.addEventListener('change', function() {
            planSelect.innerHTML = '<option value="">Selecciona una plan</option>';
            planSelect.disabled = true;

            if (!sateliteSelect.value) {
                return;
            }

            fetch(`/remotas_plans?SATELITE_ID=${sateliteSelect.value}`)
                .then(response => response.json())
                .then(plans => {
                    planSelect.disabled = false;

                    plans.forEach(plan => {
                        const option = document.createElement('option');
                        option.value = plan.id;
                        option.textContent = plan.PLAN_NOMBRE;
                        planSelect.appendChild(option);
                    });
                });
        });

        clienteSelect.addEventListener('change', function() {
            console.log('prueba');
            encargadoSelect.innerHTML = '<option value="">Selecciona un encargado</option>';
            encargadoSelect.disabled = false;

            if (!clienteSelect.value) {
                return;
            }

            fetch(`/remotas_encargados?CLIENTE_ID=${clienteSelect.value}`)
                .then(response => response.json())
                .then(states => {
                    console.log(states);
                    encargadoSelect.disabled = false;

                    states.forEach(encargado => {
                        console.log(encargado);
                        const option = document.createElement('option');
                        option.value = encargado.id;
                        option.textContent = encargado.ENCARGADO_NOMBRE;
                        encargadoSelect.appendChild(option);
                    });

                });
        });





    </script>
@stop
