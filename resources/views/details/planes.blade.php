@extends('adminlte::page')

@section('title', 'planes')

@section('content_header')
    <h1>planes</h1>
@stop

@section('content')

<div class="container">

    <div class="row">
        <div class="col col-md-12">
            <div class="card">
                <div class="card-header">
                    {{$plan->PLAN_NOMBRE}}
                </div>
                <div class="card-body">
                  <h5 class="card-title">Informacion planes</h5>
                </div>
          </div>
       </div>
    </div>

    <div class="row">
        <div class="col col-md-12 col-lg-12 w-100">
            <div class="card p-5">
                <form>
                    <div class="row">
                        <div class="col col-md-7">
                            <div class="form-group">
                                <label for="plan_CORREO">Nombre</label>
                                <input class="form-control" type="text" value="{{$plan->PLAN_NOMBRE}}" readonly>
                              </div>
                        </div>

                        <div class="col col-md-5">
                            <div class="form-group">
                                <label for="PLAN_CONTENCION">Contencion</label>
                                <input class="form-control" type="text" value="{{$plan->PLAN_CONTENCION}}" readonly>
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="co col-md-5">
                            <div class="form-group">
                                <label for="PLAN_SUBIDA">Subida</label>
                                <input class="form-control" type="text" value="{{$plan->PLAN_SUBIDA}}" readonly>
                            </div>
                        </div>

                        <div class="col col-md-7">
                            <div class="form-group">
                                <label for="PLAN_BAJADA">Bajada</label>
                                <input class="form-control" type="text" value="{{$plan->PLAN_BAJADA}}" readonly>
                            </div>
                        </div>
                     </div>

                     <div class="row">
                        <div class="co col-md-5">
                            <div class="form-group">
                                <label for="PLAN_COSTO">Costo</label>
                                <input class="form-control" type="text" value="{{$plan->PLAN_COSTO}}" readonly>
                            </div>
                        </div>

                        <div class="col col-md-7">
                            <div class="form-group">
                                <label for="PLAN_PRECIO">Precio</label>
                                <input class="form-control" type="text" value="{{$plan->PLAN_PRECIO}}" readonly>
                            </div>
                        </div>
                     </div>


                     <div class="row">
                        <div class="col col-md-6">
                            <div class="form-group">
                                <label for="inputState">Proveedor ID</label>
                                <select id="inputState" class="form-control" disabled>
                                    <option selected>Escoga el Proveedor...</option>
                                    @forelse($proveedor as $proveedor)
                                        <option selected value="{{$proveedor->id}}">{{$proveedor->RAZON}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <div class="form-group">
                                <label for="inputState">Revendedor ID</label>
                                <select id="inputState" class="form-control" disabled>
                                    <option selected>Escoga el Revendedor...</option>
                                    @forelse($revendedor as $revendedor)
                                        <option selected value="{{$revendedor->id}}">{{$revendedor->NOMBRE_RESELLER}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>
                     </div>
                </form>
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
