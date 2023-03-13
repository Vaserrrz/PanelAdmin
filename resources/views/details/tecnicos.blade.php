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
    <form>
        <div class="row">
                        <div class="col col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">IP</label>
                                <input class="form-control" type="text" placeholder="IP Mikrotik" readonly>
                              </div>
                        </div>


                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Serial</label>
                                <input class="form-control" type="text" placeholder="IP Mikrotik" readonly>
                              </div>
                        </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Identity</label>
                    <input class="form-control" type="text" placeholder="IP Mikrotik" readonly>
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Modelo</label>
                    <input class="form-control" type="text" placeholder="IP Mikrotik" readonly>
                </div>
            </div>
        </div>

        <div class="row">
                <div class="col col-md-3">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">USER (VPN)</label>
                        <input class="form-control" type="text" placeholder="IP Mikrotik" readonly>
                      </div>
                </div>

                <div class="col col-md-3">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">PASSWORD (VPN)</label>
                        <input class="form-control" type="password" placeholder="IP Mikrotik" readonly>
                      </div>
                </div>

                <div class="col col-md-6">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">SERVER (VPN)</label>
                        <input class="form-control" type="text" placeholder="IP Mikrotik" readonly>
                      </div>
                </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlInput1">ETHRCORTE1</label>
                    <input class="form-control" type="password" placeholder="ETHRCORTE" readonly>
                  </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlInput1">ETHRCORTE2</label>
                    <input class="form-control" type="password" placeholder="ETHRCORTE2" readonly>
                  </div>
            </div>
       </div>

       <div class="row">
        <div class="col col-md-6">
            <div class="form-group">
                <label for="exampleFormControlInput1">Usuario</label>
                <input class="form-control" type="text" placeholder="IP Mikrotik" readonly>
              </div>
        </div>


        <div class="col">
            <div class="form-group">
                <label for="exampleFormControlInput1">Contraseña</label>
                <input class="form-control" type="password" placeholder="IP Mikrotik" readonly>
              </div>
        </div>
       </div>

       <div class="row">
        <div class="col col-md-2">
            <div class="form-group">
                <label for="exampleFormControlInput1">Puerto</label>
                <input class="form-control" type="text" placeholder="IP Mikrotik" readonly>
              </div>
        </div>

        <div class="col col-md-4">
            <div class="form-group">
                <label for="exampleFormControlInput1">Protocolo</label>
                <input class="form-control" type="text" placeholder="IP Mikrotik" readonly>
              </div>
        </div>

        <div class="col">
            <div class="form-group">
                <label for="exampleFormControlInput1">ID-Remota Satelital</label>
                <input class="form-control" type="text" placeholder="IP Mikrotik" readonly>
              </div>
        </div>
</div>


        <div class="form-group">
                          <label for="exampleFormControlSelect1">Planes</label>
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
    </form>
</div>

@stop

@section('css')
@stop

@section('js')
    {{-- <script> alert('Hi!'); </script> --}}
@stop
