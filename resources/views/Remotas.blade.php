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
                            <button  type="button" class="btn btn-success" data-toggle="modal"  data-target="#ModalAgregar">
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
                                                            <input type="text" value="{{old('REMOTA_NODO')}}" class="form-control" id="REMOTA_NODO" placeholder="Ingrese el Nodo de la Remota" name="REMOTA_NODO">
                                                            @error('REMOTA_NODO')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col col-md-4">
                                                        <div class="form-group">
                                                            <label for="CLIENTE">Cliente</label>

                                                            <select id="SELECT_CLIENTE_MA" name="SELECT_CLIENTE_MA" class="form-control select_cliente">
                                                                <option selected>Escoga el cliente...</option>
                                                                @forelse($clientes as $cliente)
                                                                    <option value="{{$cliente->id}}">{{$cliente->CLIENTE_RAZON}}</option>
                                                                @empty
                                                                    No hay hay clientes registrados
                                                                @endforelse
                                                            </select>

                                                            @error('SELECT_CLIENTE_MA')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col col-md-8">
                                                        <div class="form-group">
                                                            <label for="REMOTA_EQUIPO">Equipo</label>
                                                            <input type="text" value="{{old('REMOTA_EQUIPO')}}" class="form-control" id="REMOTA_EQUIPO" placeholder="Ingrese el Equipo de la Remota" name="REMOTA_EQUIPO">
                                                            @error('REMOTA_EQUIPO')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col col-md-4">
                                                        <div class="form-group">
                                                            <label for="ENCARGADO">Encargado</label>
                                                            <select id="SELECT_ENCARGADO_MA" name="SELECT_ENCARGADO" class="form-control select_encargado">
                                                                <option selected>Seleccione un Encargado...</option>
                                                                @forelse($encargados as $encargado)
                                                                    <option value="{{$encargado->id}}">{{$encargado->ENCARGADO_NOMBRE}}</option>
                                                                @empty
                                                                @endforelse
                                                            </select>
                                                            @error('SELECT_ENCARGADO')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col col-md-4">
                                                        <div class="form-group">
                                                            <label for="descripcion">Serial</label>
                                                            <input type="text" value="{{old('REMOTA_SERIAL')}}" class="form-control" id="REMOTA_SERIAL" placeholder="Ingrese el Serial de la Remota" name="REMOTA_SERIAL">
                                                            @error('REMOTA_SERIAL')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col col-md-4">
                                                        <div class="form-group">
                                                            <label for="REMOTA_COORDENADA">Coordenadas</label>
                                                            <input type="text" value="{{old('REMOTA_COORDENADA')}}" class="form-control" id="REMOTA_COORDENADA" placeholder="Ingrese las Coordenadas de la Remota" name="REMOTA_COORDENADA">
                                                            @error('REMOTA_COORDENADA')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col col-md-4">
                                                        <div class="form-group">
                                                            <label for="SOCIO">Socio</label>
                                                            <select id="SELECT_SOCIO" name="SELECT_SOCIO_MA" class="form-control select_socio">
                                                                <option selected>Seleccione el Socio...</option>
                                                                @forelse($socios as $socio)
                                                                    <option value="{{$socio->id}}">{{$socio->SOCIO_NOMBRE}}</option>
                                                                @empty
                                                                @endforelse
                                                            </select>
                                                            @error('SELECT_SOCIO_MA')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col col-md-8">
                                                        <div class="form-group">
                                                            <label for="REMOTA_BUC">BUC</label>
                                                            <input type="text" value="{{old('REMOTA_BUC')}}" class="form-control" id="REMOTA_BUC" placeholder="Ingrese el BUC de la Remota" name="REMOTA_BUC">
                                                            @error('REMOTA_BUC')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col col-md-4">
                                                        <div class="form-group">
                                                            <label for="REMOTA_BUC_SERIAL">BUC Serial</label>
                                                            <input type="text" value="{{old('REMOTA_BUC_SERIAL')}}" class="form-control" id="REMOTA_BUC_SERIAL" placeholder="Ingrese el Serial del BUC" name="REMOTA_BUC_SERIAL">
                                                            @error('REMOTA_BUC_SERIAL')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col col-md-8">
                                                        <div class="form-group">
                                                            <label for="REMOTA_LNB">LNB</label>
                                                            <input type="text" value="{{old('REMOTA_LNB')}}" class="form-control" id="REMOTA_LNB" placeholder="Ingrese el LNB de la Remota" name="REMOTA_LNB">
                                                            @error('REMOTA_LNB')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col col-md-4">
                                                        <div class="form-group">
                                                            <label for="REMOTA_LNB_SERIAL">Serial LNB</label>
                                                            <input type="text" value="{{old('REMOTA_LNB_SERIAL')}}" class="form-control" id="REMOTA_LNB_SERIAL" placeholder="Ingrese el Serial del LNB" name="REMOTA_LNB_SERIAL">
                                                            @error('REMOTA_LNB_SERIAL')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col col-md-6">
                                                        <div class="form-group">
                                                            <label for="REMOTA_DIA_ACTIVACION">Dia Activacion</label>
                                                            <input type="date" value="{{old('REMOTA_DIA_ACTIVACION')}}" class="form-control" id="REMOTA_DIA_ACTIVACION" placeholder="Ingrese el Dia de Activacion de la Remota" name="REMOTA_DIA_ACTIVACION">
                                                            @error('REMOTA_DIA_ACTIVACION')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col col-md-6">
                                                        <div class="form-group">
                                                            <label for="REMOTA_DIA_CORTE">Dia de Corte</label>
                                                            <input type="date" value="{{old('REMOTA_DIA_CORTE')}}" class="form-control" id="REMOTA_DIA_CORTE" placeholder="Ingrese el dia de corte de la Remota" name="REMOTA_DIA_CORTE">
                                                            @error('REMOTA_DIA_CORTE')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col col-md-9">
                                                        <div class="form-group">
                                                            <label for="REMOTA_DETALLE">Detalle</label>
                                                            <input type="text" value="{{old('REMOTA_DETALLE')}}" class="form-control" id="REMOTA_DETALLE" placeholder="Detalles a agregar" name="REMOTA_DETALLE">
                                                            @error('REMOTA_DETALLE')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col col-md-3">
                                                        <div class="form-group">
                                                            <label for="REMOTA_STATUS">Status</label>
                                                            <input type="checkbox" value="{{old('REMOTA_STATUS')}}" class="form-control" id="REMOTA_STATUS" placeholder="Ingrese el Status de la Remota" name="REMOTA_STATUS">
                                                            @error('REMOTA_STATUS')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col col-md-6">
                                                        <div class="form-group">
                                                            <label for="REMOTA_IP_MODEM">IP Modem</label>
                                                            <input type="text" value="{{old('REMOTA_IP_MODEM')}}" class="form-control" id="REMOTA_IP_MODEM" placeholder="Ingrese el IP del Modem" name="REMOTA_IP_MODEM">
                                                            @error('REMOTA_IP_MODEM')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col col-md-6">
                                                        <div class="form-group">
                                                            <label for="REMOTA_IP_GESTION">IP Gestion</label>
                                                            <input type="text" value="{{old('REMOTA_IP_GESTION')}}" class="form-control" id="REMOTA_IP_GESTION" placeholder="Ingrese el IP de Gestion" name="REMOTA_IP_GESTION">
                                                            @error('REMOTA_IP_GESTION')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col col-md-6">
                                                        <div class="form-group">
                                                            <label for="REMOTA_PLATO">Plato</label>
                                                            <input type="text" value="{{old('REMOTA_PLATO')}}" class="form-control" id="REMOTA_PLATO" placeholder="Ingrese el Plato de la Remota" name="REMOTA_PLATO">
                                                            @error('REMOTA_PLATO')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col col-md-6">
                                                        <div class="form-group">
                                                            <label for="REMOTA_BONDA">Bonda</label>
                                                            <input type="text" value="{{old('REMOTA_BONDA')}}" class="form-control" id="REMOTA_BONDA" placeholder="Ingrese la Bonda de la Remota" name="REMOTA_BONDA">
                                                            @error('REMOTA_BONDA')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col col-md-4">
                                                        <div class="form-group">
                                                            <label for="PROVEEDOR">Proveedor</label>
                                                            <select id="SELECT_PROVEEDOR_MA" name="SELECT_PROVEEDOR" class="form-control">
                                                                <option value="">Seleccione un Proveedor...</option>
                                                                @forelse($proveedores as $proveedor)
                                                                    <option value="{{$proveedor->id}}">{{$proveedor->RAZON}}</option>
                                                                @empty
                                                                    No hay Satelites registrados
                                                                @endforelse
                                                            </select>
                                                            @error('SELECT_PROVEEDOR')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    {{-- SATELITES --}}
                                                    <div class="col col-md-4">
                                                        <div class="form-group">
                                                            <label for="SATELITES">Satelites</label>
                                                            <select id="SELECT_SAT_MA" name="SELECT_SATELITE" class="form-control" >
                                                                <option value="">Seleccione el Satelite...</option>
                                                            </select>
                                                            @error('SELECT_SATELITE')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    {{-- PLAN --}}
                                                    <div class="col col-md-4">
                                                        <div class="form-group">
                                                            <label for="PLAN">Plan</label>
                                                            <select id="SELECT_PLAN_MA" name="SELECT_PLAN" class="form-control">
                                                                <option value="">Seleccione un plan . . . </option>
                                                            </select>
                                                            @error('SELECT_PLAN')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
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
                                                            @error('SELECT_RESELLER')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col col-md-3">
                                                        <div class="form-group">
                                                            <label for="REMOTA_PLANUP">PlanUp</label>
                                                            <input type="text" value="{{old('REMOTA_PLANUP')}}" class="form-control" id="REMOTA_PLANUP" placeholder="Ingrese el PLANUP de la Remota" name="REMOTA_PLANUP">
                                                            @error('REMOTA_PLANUP')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col col-md-3">
                                                        <div class="form-group">
                                                            <label for="REMOTA_PLANDOWN">PlanDown</label>
                                                            <input type="text" value="{{old('REMOTA_PLANDOWN')}}" class="form-control" id="REMOTA_PLANDOWN" placeholder="Ingrese el PLANDOWN de la Remota" name="REMOTA_PLANDOWN">
                                                            @error('REMOTA_PLANDOWN')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col col-md-3">
                                                        <div class="form-group">
                                                            <label for="REMOTA_COSTO_PLAN">Costo del Plan</label>
                                                            <input type="text" value="{{old('REMOTA_COSTO_PLAN')}}" class="form-control" id="REMOTA_COSTO_PLAN" placeholder="Ingrese el Costo del Plan" name="REMOTA_COSTO_PLAN">
                                                            @error('REMOTA_COSTO_PLAN')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col col-md-3">
                                                        <div class="form-group">
                                                            <label for="REMOTA_RENTA">Renta</label>
                                                            <input type="text" value="{{old('REMOTA_RENTA')}}" class="form-control" id="REMOTA_RENTA" placeholder="Ingrese el monto de la Renta" name="REMOTA_RENTA">
                                                            @error('REMOTA_RENTA')
                                                                <br>
                                                                    <small>
                                                                        *{{$message}}
                                                                    </small>
                                                                <br>
                                                            @enderror
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
                                        <th scope="col">Cliente</th>
                                        <th scope="col">SeHrial</th>
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
                                            <td>{{$remota->CLIENTE_ID}}</td>
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
                                                                                @error('REMOTA_NODO')
                                                                                    <br>
                                                                                        <small>
                                                                                            *{{$message}}
                                                                                        </small>
                                                                                    <br>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="CLIENTE">Cliente</label>
                                                                                <select id="SELECT_CLIENTE_ME" name="SELECT_CLIENTE" class="form-control select_cliente">
                                                                                    <option selected>Seleccione el cliente...</option>

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
                                                                                <input type="text"  class="form-control" id="REMOTA_LNB_SERIAL" placeholder="Ingrese el Equipo de la Remota" name="REMOTA_EQUIPO" value="{{$remota->REMOTA_EQUIPO}}">
                                                                                @error('REMOTA_EQUIPO')
                                                                                    <br>
                                                                                        <small>
                                                                                            *{{$message}}
                                                                                        </small>
                                                                                    <br>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="ENCARGADO">Encargado</label>
                                                                                <select id="SELECT_ENCARGADO_ME" name="SELECT_ENCARGADO" class="form-control select_encargado">

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

                                                                                    <option selected>Seleccione el Socio...</option>

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
                                                                                @if ($remota->REMOTA_STATUS>0)
                                                                                    <input type="checkbox" class="form-control input_status_editar" id="REMOTA_STATUS" placeholder="Ingrese el Status de la Remota" name="REMOTA_STATUS"  value="{{$remota->REMOTA_STATUS}}" checked>
                                                                                @else
                                                                                    <input type="checkbox" class="form-control input_status_editar" id="REMOTA_STATUS" placeholder="Ingrese el Status de la Remota" name="REMOTA_STATUS"  value="{{$remota->REMOTA_STATUS}}">
                                                                                @endif

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
                                                                                <select id="SELECT_PROVEEDOR_ME" name="SELECT_PROVEEDOR" class="form-control select_proveedor">
                                                                                    <option value="">Seleccione un Proveedor...</option>
                                                                                    @forelse($proveedores as $proveedor)
                                                                                        @if ($remota->PROVEEDOR_ID == $proveedor->id)
                                                                                            <option selected value="{{$proveedor->id}}">{{$proveedor->RAZON}}</option>
                                                                                        @else
                                                                                            <option value="{{$proveedor->id}}">{{$proveedor->RAZON}}</option>
                                                                                        @endif
                                                                                    @empty
                                                                                        No hay proveedores registrados
                                                                                    @endforelse
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        {{-- SATELITE --}}
                                                                        <div class="col col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="SATELITES">Satelites</label>
                                                                                <select id="SELECT_SATELITE_ME" name="SELECT_SATELITE" class="form-control select_satelite">
                                                                                    <option selected>Seleccione el Satelite...</option>
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
                                                                                <select id="SELECT_PLAN_ME" name="SELECT_PLAN" class="form-control select_plan">
                                                                                    <option value=""> Seleccione un plan ... </option>
                                                                                    @php $planes = App\Models\Plan::where('SATELITE_ID', $remota->SATELITE_ID)->get();@endphp
                                                                                    @forelse($planes as $plan)
                                                                                        @if ($remota->PLAN_ID == $plan->id)
                                                                                            <option selected value="{{$plan->id}}">{{$plan->PLAN_NOMBRE}}</option>
                                                                                        @else
                                                                                            <option value="{{$plan->id}}">{{$plan->PLAN_NOMBRE}}</option>
                                                                                        @endif
                                                                                    @empty
                                                                                    No hay hay satelites registrados
                                                                                    @endforelse
                                                                                </select>
                                                                            </div>
                                                                        </div>


                                                                        <div class="col col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="inputState">Revendedor</label>
                                                                                <select id="SELECT_RESELLER" name="SELECT_RESELLER" class="form-control">
                                                                                    <option selected>Escoga el Revendedor...</option>
                                                                                    @forelse($revendedores as $revendedor)
                                                                                        @if ($remota->RESELLER_ID == $revendedor->id)
                                                                                            <option selected value="{{$revendedor->id}}">{{$revendedor->NOMBRE_RESELLER}}</option>
                                                                                        @else
                                                                                            <option  value="{{$revendedor->id}}">{{$revendedor->NOMBRE_RESELLER}}</option>
                                                                                        @endif
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
                                                                                <input type="text" class="form-control select_planUp" id="REMOTA_PLANUP_ME" placeholder="Ingrese el PLANUP de la Remota" name="REMOTA_PLANUP"  value="{{$remota->REMOTA_PLANUP}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="REMOTA_PLANDOWN">PlanDown</label>
                                                                                <input type="text"  class="form-control select_planDown" id="REMOTA_PLANDOWN_ME" placeholder="Ingrese el PLANDOWN de la Remota" name="REMOTA_PLANDOWN"  value="{{$remota->REMOTA_PLANDOWN}}">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="REMOTA_COSTO_PLAN">Costo del Plan</label>
                                                                                <input type="text" class="form-control select_costo_plan" id="REMOTA_COSTO_PLAN_ME" placeholder="Ingrese el Costo del Plan" name="REMOTA_COSTO_PLAN"  value="{{$remota->REMOTA_COSTO_PLAN}}">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="REMOTA_RENTA">Renta</label>
                                                                                <input type="text" class="form-control select_renta_plan" id="REMOTA_RENTA_ME" placeholder="Ingrese el monto de la Renta" name="REMOTA_RENTA"  value="{{$remota->REMOTA_RENTA}}">
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
                                                <button onclick="" type="" class="btn btn-danger btn-sm">Eliminar</button>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    </script>

    <script>

        //CONSTANTES MODAL AGREGAR
        const proveedorSelectMA = document.getElementById('SELECT_PROVEEDOR_MA');
        const selectSatMA = document.getElementById('SELECT_SAT_MA');
        const selectPlanMA = document.getElementById('SELECT_PLAN_MA');
        const clienteSelectMA = document.getElementById('SELECT_CLIENTE_MA');
        const encargadoSelectMA = document.getElementById('SELECT_ENCARGADO_MA');
        //PROPIEDADES PLAN (AGREGAR)
        const renta_plan = document.getElementById('REMOTA_RENTA');
        const costo_plan = document.getElementById('REMOTA_COSTO_PLAN');
        const planUp = document.getElementById('REMOTA_PLANUP');
        const planDown = document.getElementById('REMOTA_PLANDOWN');


        // CONSTANTES MODAL EDITAR
        const SelectClientesME = document.querySelectorAll('.select_cliente');
        const SelectEncargadosME = document.querySelectorAll('.select_encargado')
        const selectProveedoresME = document.querySelectorAll('.select_proveedor');
        const selectSatelitesME = document.querySelectorAll('.select_satelite');
        const selectPlanesME = document.querySelectorAll('.select_plan');
        //PROPIEDADES PLAN (EDITAR)
        const renta_planesME = document.querySelectorAll('.select_renta_plan');
        const costo_planesME = document.querySelectorAll('.select_costo_plan');
        const planesUpME = document.querySelectorAll('.select_planUp');
        const planesDownME = document.querySelectorAll('.select_planDown');


        //MODAL EDITAR
        //Clientes y Encargados
        SelectClientesME.forEach(select_cliente => {
            select_cliente.addEventListener('change', function() {
                SelectEncargadosME.forEach(select_encargado => {
                    actualizarEncargados(select_cliente, select_encargado);
                });
            });
        });
        function actualizarEncargados(select_cliente, select_encargado) {
            select_encargado.innerHTML = '<option value="">Seleccione un encargado</option>';
            select_encargado.disabled = false;
            const clienteIdME = select_cliente.value
            if (!clienteIdME) {
                return;
            }
            fetch(`/remotas_encargados?CLIENTE_ID=${clienteIdME}`)
            .then(response => response.json())
            .then(encargados => {
                    // console.log(states);
                select_encargado.disabled = false;
                encargados.forEach(encargado => {
                    // console.log(encargado);
                    const option = document.createElement('option');
                    option.value = encargado.id;
                    option.textContent = encargado.ENCARGADO_NOMBRE;
                    select_encargado.appendChild(option);
                });
            });
        }
        //Proveedores y Satelites
        selectProveedoresME.forEach(select_proveedor => {
            select_proveedor.addEventListener('change', function() {
                selectSatelitesME.forEach(select_satelite => {
                    actualizarSatelites(select_proveedor,select_satelite)
                });
                //Limpiar Plan al cambio de Proveedor
                selectPlanesME.forEach(select_plan => {
                    select_plan.innerHTML = '<option value="">Seleccione un Plan</option>';
                    renta_planesME.forEach
                });
                //Limpiando Propiedades de Plan al cambio de Proveedor
                renta_planesME.forEach(renta => {
                    renta.value = ''
                });
                costo_planesME.forEach(costo => {
                    costo.value = ''
                });
                planesUpME.forEach(up => {
                    up.value = ''
                });
                planesDownME.forEach(down => {
                    down.value = ''
                });
            });
        });
        function actualizarSatelites(select_proveedor,select_satelite) {
            select_satelite.innerHTML = '<option value="">Seleccione un Satelite</option>';

            select_satelite.disabled = false;
            const proveedorIdME = select_proveedor.value
            if (!proveedorIdME) {
                return;
            }
            fetch(`/remotas_satelites?PROVEEDOR_ID=${proveedorIdME}`)
            .then(response => response.json())
            .then(satelites => {
                select_satelite.disabled = false;
                satelites.forEach(satelite => {
                    const option = document.createElement('option')
                    option.value = satelite.id;
                    option.textContent = satelite.SAT_NOMBRE;
                    select_satelite.appendChild(option);
                });
            });

        }
        //Satelites y Planes
        selectSatelitesME.forEach(select_satelite => {
            select_satelite.addEventListener('change', function() {
                selectPlanesME.forEach(select_plan => {
                    actualizarPlanes(select_satelite,select_plan)
                });
                //Limpiar Plan al cambio de Proveedor
                selectPlanesME.forEach(select_plan => {
                    select_plan.innerHTML = '<option value="">Seleccione un Plan</option>';
                    renta_planesME.forEach
                });
                //Limpiando Propiedades de Plan al cambio de Proveedor
                renta_planesME.forEach(renta => {
                    renta.value = ''
                });
                costo_planesME.forEach(costo => {
                    costo.value = ''
                });
                planesUpME.forEach(up => {
                    up.value = ''
                });
                planesDownME.forEach(down => {
                    down.value = ''
                });
            });
        });
        function actualizarPlanes(select_satelite,select_plan) {
            select_plan.innerHTML = '<option value="">Seleccione un Plan</option>';
            select_plan.disabled = false;
            const sateliteIdME = select_satelite.value
            if (!sateliteIdME) {
                return;
            }
            fetch(`/remotas_plans?SATELITE_ID=${sateliteIdME}`)
            .then(response => response.json())
            .then(planes => {
                select_plan.disabled = false;
                planes.forEach(plan => {
                    const option = document.createElement('option')
                    option.value = plan.id;
                    option.textContent = plan.PLAN_NOMBRE;
                    select_plan.appendChild(option);
                });
            });
        }
        //Propiedades Planes (EDITAR)
        selectPlanesME.forEach(select_plan => {
            select_plan.addEventListener('change', function() {
                //Limpiando Propiedades de Plan al cambio de Proveedor
                renta_planesME.forEach(renta => {
                    renta.value = ''
                });
                costo_planesME.forEach(costo => {
                    costo.value = ''
                });
                planesUpME.forEach(up => {
                    up.value = ''
                });
                planesDownME.forEach(down => {
                    down.value = ''
                });
                const planIdME = select_plan.value
                if (!planIdME) {
                    return;
                }
                fetch(`/remotas_plan_properties?PLAN_ID=${planIdME}`)
                .then(response => response.json())
                .then(properties => {
                    // console.log(properties);
                    renta_planesME.forEach(renta => {
                        renta.value = properties[0].PLAN_PRECIO
                    });
                    costo_planesME.forEach(costo => {
                        costo.value = properties[0].PLAN_COSTO
                    });
                    planesUpME.forEach(up => {
                        up.value = properties[0].PLAN_SUBIDA
                    });
                    planesDownME.forEach(down => {
                        down.value = properties[0].PLAN_BAJADA
                    });
                });
            });
        });

        //MODAL AGREGAR
        //Clientes y Encargados
        clienteSelectMA.addEventListener('change', () => {
            const clienteId = clienteSelectMA.value;
            // Limpiar opciones anteriores
            encargadoSelectMA.innerHTML = '<option value="">Seleccione un Encargado</option>';
            // Si no se ha seleccionado un cliente, salir del listener
            if (!clienteId) {
                return;
            }
            // Enviar petición al servidor para obtener los encargados del cliente seleccionado
            fetch(`/remotas_encargados?CLIENTE_ID=${clienteId}`)
                .then(response => response.json())

                .then(encargados => {
                // Agregar nuevas opciones
                    encargados.forEach(encargado => {
                        const option = document.createElement('option');
                        option.value = encargado.id;
                        option.text = encargado.ENCARGADO_NOMBRE;
                        encargadoSelectMA.add(option);
                    });
                })
        });
        //Proveedores y Satelites
        proveedorSelectMA.addEventListener('change', () => {
            const proveedorId = proveedorSelectMA.value;

            fetch(`/remotas_satelites?PROVEEDOR_ID=${proveedorId}`)
            .then(response => response.json())
            .then(satelites => {

                // Limpiar opciones anteriores
                selectSatMA.innerHTML = '<option value="">Seleccione un Satelite</option>';
                selectPlanMA.innerHTML = '<option value="">Seleccione un Plan</option>';
                renta_plan.value = ''
                costo_plan.value = ''
                planUp.value = ''
                planDown.value = ''
                // Si no se ha seleccionado un satélite, salir del listener
                if (!proveedorId) {
                    return;
                }
                // Agregar nuevas opciones
                satelites.forEach(sat => {
                    const option = document.createElement('option');
                    option.value = sat.id;
                    option.text = sat.SAT_NOMBRE;
                    selectSatMA.add(option);
                });
            });
        });
        //Satelites y Planes
        selectSatMA.addEventListener('change', () => {
            const satId = selectSatMA.value;
            // Limpiar opciones anteriores
            selectPlanMA.innerHTML = '<option value="">Seleccione un Plan</option>';
            renta_plan.value = ''
            costo_plan.value = ''
            planUp.value = ''
            planDown.value = ''
            // Si no se ha seleccionado un satélite, salir del listener
            if (!satId) {
                return;
            }
            // Enviar petición al servidor para obtener los planes del satélite seleccionado
            fetch(`/remotas_plans?SATELITE_ID=${selectSatMA.value}`)
            .then(response => response.json())
            .then(planes => {
                // Agregar nuevas opciones
                planes.forEach(plan => {
                    const option = document.createElement('option');
                    option.value = plan.id;
                    option.text = plan.PLAN_NOMBRE;
                    selectPlanMA.add(option);
                });
            });
        });
        //Propiedades Planes (AGREGAR)
        selectPlanMA.addEventListener('change', () => {
            const planId = selectPlanMA.value
            renta_plan.value = ''
            costo_plan.value = ''
            planUp.value = ''
            planDown.value = ''
            if (!planId) {
                return;
            }
            fetch(`/remotas_plan_properties?PLAN_ID=${planId}`)
                .then(response => response.json())
                .then(properties => {
                    renta_plan.value = properties[0].PLAN_PRECIO
                    costo_plan.value = properties[0].PLAN_COSTO
                    planUp.value = properties[0].PLAN_SUBIDA
                    planDown.value = properties[0].PLAN_BAJADA
                });
        });

        // ALERTA BOTON ELIMINAR
        // function alerta_borrar(){
        //         Swal.fire({
        //             title: 'Esta seguro de eliminar esta Remota',
        //             text: "No podra revertir este cambio",
        //             icon: 'Advertencia',
        //             showCancelButton: true,
        //             confirmButtonColor: '#3085d6',
        //             cancelButtonColor: '#d33',
        //             confirmButtonText: 'Confirmar'
        //         }).then((result) => {
        //             if (result.isConfirmed) {
        //             Swal.fire(
        //             'Eliminada!',
        //             'success'
        //             )
        //         }
        //     })
        // }
    </script>
@stop
