@extends('adminlte::page')

@section('title', 'Mikrotiks')

@section('content_header')
    <h1>Remotas Satelital</h1>
@stop

@section('content')

<div class="container">

    <div class="row">
        <div class="col col-md-12">
            <div class="card">
                <div class="card-header">
                    {{$remota->REMOTA_EQUIPO}}
                </div>
                <div class="card-body">
                  <h5 class="card-title">Especificaciones Remota</h5>
                </div>
          </div>
       </div>
    </div>

    <form>
        <div class="row">
            <div class="col col-md-5">
                <div class="form-group">
                    <label for="REMOTA_EQUIPO">Equipo</label>
                    <input class="form-control" type="text" value="{{$remota->REMOTA_EQUIPO}}" readonly>
                </div>
            </div>

            {{--<div class="col">
                <div class="form-group">
                    <label for="REMOTA_NODO">Nodo</label>
                    <input class="form-control" type="text" value="{{$remota->REMOTA_NODO}}" readonly>
                </div>
            </div>--}}

                <div class="form-group col-md-3">
                    <label for="SOCIO">Socio</label>
                    <select id="SELECT_SOCIO" name="SELECT_SOCIO" class="form-control">
                        <option selected>Escoga el socio...</option>
                        @forelse($socio as $socio)
                            <option value="{{$socio->id}}">{{$socio->SOCIO_NOMBRE}}</option>
                        @empty
                        @endforelse
                    </select>
                </div>


            <div class="form-group col-md-4">
                <label for="CLIENTE">Cliente</label>
                <select id="SELECT_CLIENTE" name="SELECT_CLIENTE" class="form-control">
                    <option selected>Escoga el cliente...</option>
                    @forelse($cliente as $cliente)
                        <option value="{{$cliente->id}}">{{$cliente->CLIENTE_RAZON}}</option>
                    @empty
                    @endforelse
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col col-md-4">
                <div class="form-group">
                    <label for="SERIAL">Serial</label>
                    <input class="form-control" type="text" value="{{$remota->REMOTA_SERIAL}}" readonly>
                </div>
            </div>

            <div class="col col-md-4">
                <div class="form-group">
                    <label for="REMOTA_NODO">Nodo</label>
                    <input class="form-control" type="text" value="{{$remota->REMOTA_NODO}}" readonly>
                </div>
            </div>

            <div class="col col-md-4">
                <div class="form-group">
                    <label for="COORDENADA">Coordenada</label>
                    <input class="form-control" type="text" value="{{$remota->REMOTA_COORDENADA}}" readonly>
                </div>
            </div>


        </div>

        <div class="row">
            <div class="col col-md-6">
                <div class="form-group">
                    <label for="REMOTA_BUC">BUC</label>
                    <input class="form-control" type="text" value="{{$remota->REMOTA_BUC}}" readonly>
                </div>
            </div>

            <div class="col col-md-6">
                <div class="form-group">
                    <label for="REMOTA_BUC_SERIAL">Serial BUC</label>
                    <input class="form-control" type="TEXT" value="{{$remota->REMOTA_BUC_SERIAL}}" readonly>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col col-md-6">
                <div class="form-group">
                    <label for="REMOTA_LNB">LNB</label>
                    <input class="form-control" type="text" value="{{$remota->REMOTA_LNB}}" readonly>
                </div>
            </div>

            <div class="col col-md-6">
                <div class="form-group">
                    <label for="REMOTA_LNB_SERIAL">Serial LNB</label>
                    <input class="form-control" type="password" value="{{$remota->REMOTA_LNB_SERIAL}}" readonly>
                </div>
            </div>
       </div>

       <div class="row">

            <div class="form-group col-md-4">
                <label for="inputState">Proveedor</label>
                <select id="SELECT_PROVEEDOR" name="SELECT_PROVEEDOR" class="form-control">
                    <option selected>Escoga el Proveedor...</option>
                    @forelse($proveedor as $proveedor)
                        <option value="{{$proveedor->id}}">{{$proveedor->RAZON}}</option>
                    @empty
                    @endforelse
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="REVENDEDOR">Revendedor</label>
                <select id="SELECT_REVENDEDOR" name="SELECT_REVENDEDOR" class="form-control">
                    <option selected>Escoga el Revendedor...</option>
                    @forelse($revendedor as $revendedor)
                        <option value="{{$revendedor->id}}">{{$revendedor->NOMBRE_RESELLER}}</option>
                    @empty
                    @endforelse
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="ENCARGADO">Encargado</label>
                <select id="SELECT_ENCARGADO" name="SELECT_ENCARGADO" class="form-control">
                    <option selected>Escoga el encargado...</option>
                    @forelse($encargado as $encargado)
                        <option value="{{$encargado->id}}">{{$encargado->ENCARGADO_NOMBRE}}</option>
                    @empty
                    @endforelse
                </select>
            </div>
       </div>

       <div class="row">
            <div class="form-group col-md-6">
                <label for="PLAN">Plan</label>
                <select id="SELECT_PLAN" name="SELECT_NAME" class="form-control">
                    <option selected>Escoga el plan...</option>
                    @forelse($plan as $plan)
                        <option value="{{$plan->id}}">{{$plan->PLAN_NOMBRE}}</option>
                    @empty
                    @endforelse
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="SATELITE">Satelite</label>
                <select id="SELECT_SATELITE" name="SELECT_SATELITE" class="form-control">
                    <option selected>Escoga el satelite...</option>
                    @forelse($satelite as $satelite)
                        <option value="{{$satelite->id}}">{{$satelite->SAT_NOMBRE}}</option>
                    @empty
                    @endforelse
                </select>
            </div>
       </div>

       <div class="row">
            <div class="col col-md-6">
                <div class="form-group">
                    <label for="REMOTA_PLANUP">Plan Up</label>
                    <input class="form-control" type="text" value="{{$remota->REMOTA_PLANUP}}" readonly>
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="REMOTA_PLANDOWN">Plan Down</label>
                    <input class="form-control" type="text" value="{{$remota->REMOTA_PLANDOWN}}" readonly>
                </div>
            </div>
       </div>

        <div class="row">
            <div class="col col-md-6">
                <div class="form-group">
                    <label for="REMOTA_RENTA">Renta</label>
                    <input class="form-control" type="text" value="{{$remota->REMOTA_RENTA}}" readonly>
                </div>
            </div>
            <div class="col col-md-6">
                <div class="form-group">
                    <label for="REMOTA_COSTO_PLAN">Costo Plan</label>
                    <input class="form-control" type="text" value="{{$remota->REMOTA_COSTO_PLAN}}" readonly>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col col-md-6">
                <label for="REMOTA_DIA_ACTIVACION">Dia de Activacion</label>
                <input class="form-control" type="text" value="{{$remota->REMOTA_DIA_ACTIVACION}}" readonly>
            </div>
            <div class="col col-md-6">
                <div class="form-group">
                    <label for="REMOTA_DIA_CORTE">Dia de Corte</label>
                    <input class="form-control" type="text" value="{{$remota->REMOTA_DIA_CORTE}}" readonly>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col col-md-6">
                <label for="REMOTA_DETALLE">Detalle</label>
                <input class="form-control" type="text" value="REMOTA_DETALLE" readonly>
            </div>

            <div class="col col-md-6">
                <label for="REMOTA_PLATO">Plato</label>
                <input class="form-control" type="text" value="{{$remota->REMOTA_PLATO}}" readonly>
            </div>

        </div>


        <div class="row">
            <div class="col col-md-6">
                <label for="REMOTA_IP_GESTION">IP Gestion</label>
                <input class="form-control" type="text" value="{{$remota->REMOTA_IP_GESTION}}" readonly>
            </div>

            <div class="col col-md-6">
                <label for="REMOTA_IP_MODEM">IP Modem</label>
                <input class="form-control" type="text" value="{{$remota->REMOTA_IP_MODEM}}" readonly>
            </div>
        </div>

        <div class="row">
            <div class="col col-md-6">
                <label for="REMOTA_BONDA">Bonda</label>
                <input class="form-control" type="text" value="{{$remota->REMOTA_BONDA}}" readonly>
            </div>

            <div class="col col-md-6">
                <label for="REMOTA_STATUS">Status</label>
                <input class="form-control" type="text" value="{{$remota->REMOTA_STATUS}}" readonly>
            </div>
        </div>

</div>

@stop

@section('css')
@stop

@section('js')
    {{-- <script> alert('Hi!'); </script> --}}
@stop
