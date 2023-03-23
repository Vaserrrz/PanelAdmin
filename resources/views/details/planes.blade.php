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
    <form>
        <div class="row">
            <div class="col col-md-7">
                <div class="form-group">
                    <label for="plan_CORREO">Nombre</label>
                    <input class="form-control" type="text" value="" readonly>
                  </div>
            </div>


            <div class="co col-md-5">
                <div class="form-group">
                    <label for="ZONA_TRABAJO">Subida</label>
                    <input class="form-control" type="text" value="" readonly>
                </div>
            </div>

            <div class="col col-md-7">
                <div class="form-group">
                    <label for="plan_CORREO">Bajada</label>
                    <input class="form-control" type="text" value="" readonly>
                </div>
            </div>

            <div class="col col-md-5">
                <div class="form-group">
                    <label for="plan_CORREO">Contencion</label>
                    <input class="form-control" type="text" value="" readonly>
                </div>
            </div>

            <div class="form-group col-md-5">
                <label for="inputState">Proveedor</label>
                <select id="inputState" class="form-control">
                    <option selected>Escoga el Proveedor...</option>
                    @forelse($proveedor as $proveedor)
                        <option value="{{$proveedor->id}}">{{$proveedor->RAZON}}</option>
                    @empty
                    @endforelse
                </select>
            </div>
        </div>
    </form>
</div>

@stop

@section('css')
@stop

@section('js')
    {{-- <script> alert('Hi!'); </script> --}}
@stop
