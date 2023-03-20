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
            <div class="col col-md-6">
                <div class="form-group">
                    <label for="REMOTA_EQUIPO">Equipo</label>
                    <input class="form-control" type="text" value="{{$remota->REMOTA_EQUIPO}}" readonly>
                </div>
            </div>


            <div class="col">
                <div class="form-group">
                    <label for="REMOTA_NODO">Nodo</label>
                    <input class="form-control" type="text" value="{{$remota->REMOTA_NODO}}" readonly>
                </div>
            </div>
        </div>

        <div class="row">


            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Serial</label>
                    <input class="form-control" type="text" value="{{$remota->REMOTA_SERIAL}}" readonly>
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Coordenada</label>
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
                    <label for="REMOTA_LNB_SERIAL">Serial LNB</label>
                    <input class="form-control" type="password" value="{{$remota->REMOTA_LNB_SERIAL}}" readonly>
                  </div>
            </div>

            <div class="col col-md-6">
                <div class="form-group">
                    <label for="REMOTA_LNB">LNB</label>
                    <input class="form-control" type="text" value="{{$remota->REMOTA_LNB}}" readonly>
                </div>
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


    </form>


        <div class="form-group">
            <label for="exampleFormControlSelect1">
                Planes
            </label>
                          <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

</div>

@stop

@section('css')
@stop

@section('js')
    {{-- <script> alert('Hi!'); </script> --}}
@stop
