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

                        <!-- MODAL AGREGAR -->
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
                                                        <select id="SELECT_CLIENTE" name="SELECT_CLIENTE" class="form-control select_cliente">
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
                                                        <select id="SELECT_ENCARGADO" name="SELECT_ENCARGADO" class="form-control select_encargado">
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
                                                        <select id="SELECT_SOCIO" name="SELECT_SOCIO" class="form-control select_socio">
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
                                                        <select id="SELECT_PROVEEDOR" name="SELECT_PROVEEDOR" class="form-control select_proveedor">
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
                                                        <select id="SELECT_SATELITE" name="SELECT_SATELITE" class="form-control select_satelite" disabled>
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
                                                        <select id="SELECT_PLAN" name="SELECT_PLAN" class="form-control select_plan" disabled>
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

                                            <div class="row">
                                                <div class="col col-md-3">
                                                    <div class="form-group">
                                                        <label for="REMOTA_PLANUP">PlanUp</label>
                                                        <input type="text" class="form-control" id="REMOTA_PLANUP" placeholder="Ingrese el PLANUP de la Remota" name="REMOTA_PLANUP">
                                                    </div>
                                                </div>
                                                <div class="col col-md-3">
                                                    <div class="form-group">
                                                        <label for="REMOTA_PLANDOWN">PlanDown</label>
                                                        <input type="text"  class="form-control" id="REMOTA_PLANDOWN" placeholder="Ingrese el PLANDOWN de la Remota" name="REMOTA_PLANDOWN">
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
                                            {{-- BOTON EDITAR  --}}
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-editar-{{ $remota->id  }}">
                                                Editar
                                            </button>

                                            {{-- MODAL EDITAR --}}
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
                                                                            <select id="SELECT_CLIENTE" name="SELECT_CLIENTE" class="form-control select_cliente">
                                                                                <option selected>Escoga el cliente...</option>


                                                                                @forelse($clientes as $cliente)

                                                                                    @if ($remota->CLIENTE_ID == $cliente->id)
                                                                                        <option value="{{$cliente->id}}" selected>{{$cliente->CLIENTE_RAZON}}</option>
                                                                                    @else
                                                                                        <option value="{{$cliente->id}}">{{$cliente->CLIENTE_RAZON}}</option>
                                                                                    @endif

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
                                                                            <select id="SELECT_ENCARGADO" name="SELECT_ENCARGADO" class="form-control select_encargado">
                                                                                {{-- <option selected>Escoga el Encargado...</option> --}}

                                                                        @php $encargados = App\Models\Encargado::where('CLIENTE_ID', $remota->CLIENTE_ID)->get();@endphp

                                                                                @forelse($encargados as $encargado)
                                                                                    @if ($remota->ENCARGADO_ID == $encargado->id)
                                                                                        <option selected value="{{$encargado->id}}">{{$encargado->ENCARGADO_NOMBRE}}</option>
                                                                                    @else
                                                                                        <option value="{{$encargado->id}}">{{$encargado->ENCARGADO_NOMBRE}}</option>

                                                                                    @endif

                                                                                @empty
                                                                                    No hay hay encargados registrados
                                                                                @endforelse
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
                                                                            <select id="SELECT_SOCIO" name="SELECT_SOCIO" class="form-control select_socio">

                                                                                <option selected>Escoga el Socio...</option>

                                                                                @forelse($socios as $socio)

                                                                                    @if ($remota->SOCIO_ID == $socio->id)
                                                                                        <option value="{{$socio->id}}" selected>{{$socio->SOCIO_NOMBRE}}</option>
                                                                                    @else
                                                                                    <option value="{{$socio->id}}">{{$socio->SOCIO_NOMBRE}}</option>
                                                                                    @endif

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
                                                                            <label for="PROVEEDOR">Proveedores</label>
                                                                            <select id="SELECT_PROVEEDOR" name="SELECT_PROVEEDOR" class="form-control select_proveedor">

                                                                                <option value="">Escoga el Proveedor...</option>

                                                                                @forelse($proveedores as $proveedor)
                                                                                    @if ($remota->PROVEEDOR_ID == $proveedor->id)
                                                                                        <option value="{{$proveedor->id}}" selected>{{$proveedor->RAZON}}</option>
                                                                                    @else
                                                                                        <option value="{{$proveedor->id}}">{{$proveedor->RAZON}}</option>
                                                                                    @endif

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
                                                                            <select id="SELECT_SATELITE" name="SELECT_SATELITE" class="form-control select_satelite" disabled>
                                                                                <option selected>Escoga el Satelite...</option>

                                                                                @php $satelites = App\Models\Satelite::where('PROVEEDOR_ID', $remota->PROVEEDOR_ID)->get();@endphp

                                                                                @forelse($satelites as $satelite)
                                                                                    @if ($remota->SATELITE_ID == $satelite->id)
                                                                                        <option selected value="{{$satelite->id}}">{{$satelite->SAT_NOMBRE}}</option>
                                                                                    @else
                                                                                        <option value="{{$satelite->id}}">{{$satelite->SAT_NOMBRE}}</option>
                                                                                    @endif
                                                                                @empty
                                                                                    No hay hay satelites registrados
                                                                                @endforelse
                                                                            </select>
                                                                        </div>
                                                                    </div>


                                                                    {{-- PLAN --}}
                                                                    <div class="col col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="PLANES">Planes</label>
                                                                            <select id="SELECT_PLAN2" name="SELECT_PLAN" class="form-control select_plan">
                                                                                <option value=""> Seleccione un plan ... </option>

                                                                                @php $planes = App\Models\Plan::where('SATELITE_ID', $remota->SATELITE_ID)->get();@endphp

                                                                                @forelse($planes as $plan)
                                                                                    @if ($remota->PLAN_ID == $plan->id)
                                                                                        <option selected value="{{$plan->id}}">{{$plan->PLAN_NOMBRE}}</option>
                                                                                    @else
                                                                                        <option value="{{$plan->id}}">{{$plan->PLAN_NOMBRE}}</option>                                                                                    @endif
                                                                                @empty
                                                                                No hay hay satelites registrados
                                                                                @endforelse
                                                                            </select>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="inputState">Revendedor</label>
                                                                            <select id="SELECT_RESELLER" name="SELECT_RESELLER" class="form-control select_plan">
                                                                                <option selected>Escoga el Revendedor...</option>

                                                                                @if ($remota->RESELLER_ID == $revendedor->id)
                                                                                <option selected value="{{$revendedor->id}}">{{$revendedor->NOMBRE_RESELLER}}</option>
                                                                                @else
                                                                                    <option  value="{{$revendedor->id}}">{{$revendedor->NOMBRE_RESELLER}}</option>
                                                                                @endif
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
                                                                            <input type="text" class="form-control" id="REMOTA_PLANUP" placeholder="Ingrese el PLANUP de la Remota" name="REMOTA_PLANUP"  value="{{$remota->REMOTA_PLANUP}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="REMOTA_PLANDOWN">PlanDown</label>
                                                                            <input type="text"  class="form-control" id="REMOTA_PLANDOWN" placeholder="Ingrese el PLANDOWN de la Remota" name="REMOTA_PLANDOWN"  value="{{$remota->REMOTA_PLANDOWN}}">
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

                                                                {{-- FOOTER --}}
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

        const clienteSelects   = document.querySelectorAll(".select_cliente");
        const encargadoSelects = document.querySelectorAll(".select_encargado");

        const proveedorSelects = document.querySelectorAll(".select_proveedor");
        const sateliteSelects = document.querySelectorAll(".select_satelite");
        const planSelects = document.querySelectorAll(".select_plan");

        const proveedorSelect = document.getElementById('SELECT_PROVEEDOR');
        const sateliteSelect = document.getElementById('SELECT_SATELITE');
        const planSelect = document.getElementById('SELECT_PLAN');


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
                        // console.log(satelite);
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

        //CLIENTE Y ENCARGADO
        clienteSelects.forEach(clienteSelect => {
            clienteSelect.addEventListener('change', function() {
                encargadoSelects.forEach(encargadoSelect => {
                    actualizarEncargados(clienteSelect, encargadoSelect);
                });
            });
        });

        function actualizarEncargados(clienteSelect, encargadoSelect) {
            encargadoSelect.innerHTML = '<option value="">Selecciona un encargado</option>';
            encargadoSelect.disabled = false;

            if (!clienteSelect.value) {
                return;
            }

            fetch(`/remotas_encargados?CLIENTE_ID=${clienteSelect.value}`)
            .then(response => response.json())
            .then(states => {
                // console.log(states);
                encargadoSelect.disabled = false;

                states.forEach(encargado => {
                // console.log(encargado);
                const option = document.createElement('option');
                option.value = encargado.id;
                option.textContent = encargado.ENCARGADO_NOMBRE;
                encargadoSelect.appendChild(option);
                });

            });
        }


        //PROVEEDORES Y SATELITES Y PLANES
        proveedorSelects.forEach(proveedorSelect => {
            proveedorSelect.addEventListener('change', function() {
                sateliteSelects.forEach(sateliteSelect => {
                    actualizarSatelites(proveedorSelect, sateliteSelect);

                    // Obtener el input de plan correspondiente al input de satélite actual
                    const planSelect = document.getElementById('SELECT_PLAN2');

                    // Asignar el evento change al input de satélite
                    sateliteSelect.addEventListener('change', function() {
                        actualizarPlanes(sateliteSelect, planSelect);
                    });

                });
            });
        });

        function actualizarSatelites(proveedorSelect, sateliteSelect) {
            sateliteSelect.innerHTML = '<option value="">Seleccione un satelite</option>';
            sateliteSelect.disabled = false;

            if (!proveedorSelect.value) {
                return;
            }

            fetch(`/remotas_satelites?PROVEEDOR_ID=${proveedorSelect.value}`)
            .then(response => response.json())
            .then(states => {
                // console.log(states);
                sateliteSelect.disabled = false;

                states.forEach(satelite => {
                    // console.log(satelite);
                    const option = document.createElement('option');
                    option.value = satelite.id;
                    option.textContent = satelite.SAT_NOMBRE;
                    sateliteSelect.appendChild(option);
                });

            });
        }

        function actualizarPlanes(sateliteSelect, planSelect) {
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
        }
    </script>
@stop
