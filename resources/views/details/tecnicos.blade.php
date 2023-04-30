 @extends('adminlte::page')

@section('title', 'Tecnicos')

@section('content_header')
    <h1>Tecnicos</h1>
@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col col-md-12">
            <div class="card">
                <div class="card-header">
                    {{$tecnico->TECNICO_NOMBRE}}
                </div>
                <div class="card-body">
                  <h5 class="card-title">Informacion Tecnicos</h5>
                </div>
          </div>
       </div>
    </div>

    <div class="row">
        <div class="col col-lg-12 w-100">
            <div class="card p-5">
                <form>
                    <div class="row">
                                    <div class="col col-md-7">
                                        <div class="form-group">
                                            <label for="TECNICO_CORREO">Correo</label>
                                            <input class="form-control" type="text" value="{{$tecnico->TECNICO_CORREO}}" readonly>
                                          </div>
                                    </div>


                                    <div class="co col-md-5">
                                        <div class="form-group">
                                            <label for="ZONA_TRABAJO">Zona de Trabajo</label>
                                            <input class="form-control" type="text" value="{{$tecnico->ZONA_TRABAJO}}" readonly>
                                          </div>
                                    </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="TECNICO_TELF">Telefono</label>
                                <input class="form-control" type="text" value="{{$tecnico->TECNICO_TELF}}" readonly>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="TECNICO_TELF2">Telefono Secundario</label>
                                <input class="form-control" type="text" value="{{$tecnico->TECNICO_TELF2}}"  readonly>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-12">
                        <div class="form-group">
                            <label for="INCIDENCIA">Incidencias</label>
                            <textarea class="form-control" type="text "id="INCIDENCIA" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="REEMPLAZO">Reemplazos</label>
                            <textarea class="form-control" type="text "id="REEMPLAZO" rows="3" readonly></textarea>
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
