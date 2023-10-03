<div>
    <button  type="button" class="btn btn-success" data-bs-toggle="modal" data-target="#ModalAgregar">
        Crear Remota
    </button>

    <div class="modal fade" id="ModalAgregar"  tabindex="-1"  aria-labelledby="ModalAgregar" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalAgregar">Agregar - Remota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  action="{{ route('remotas.create') }}"  method="POST" lang="es" id="Form_MA">
                        @csrf

                        <div class="row">
                            <div class="col col-md-8">
                                <div class="form-group">
                                    <label for="REMOTA_NODO_MA">NODO</label>
                                    <input type="text" value="{{old('REMOTA_NODO_MA')}}" class="form-control" id="REMOTA_NODO_MA" wire:model='title' placeholder="Ingrese el Nodo de la Remota" name="REMOTA_NODO_MA">
                                    {{$title}}
                                    @error('REMOTA_NODO_MA')
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
                                    <label for="SELECT_CLIENTE_MA">Cliente</label>
                                    <select id="SELECT_CLIENTE_MA" name="SELECT_CLIENTE_MA" class="form-control">
                                        <option value="">Escoga el cliente...</option>
                                        @forelse($clientes as $cliente)
                                            <option value="{{$cliente->id}}">{{$cliente->CLIENTE_RAZON}}</option>
                                        @empty
                                            <option>No hay clientes registrados</option>
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
                                    <input type="text" value="{{old('REMOTA_EQUIPO')}}" class="form-control" id="REMOTA_EQUIPO_MA" placeholder="Ingrese el Equipo de la Remota" name="REMOTA_EQUIPO_MA">
                                    @error('REMOTA_EQUIPO_MA')
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
                                    <label for="SELECT_ENCARGADO_MA">Encargado</label>
                                    <select id="SELECT_ENCARGADO_MA" name="SELECT_ENCARGADO_MA" class="form-control select_encargado">
                                        <option selected>Seleccione un Encargado...</option>
                                        @forelse($encargados as $encargado)
                                            <option value="{{$encargado->id}}">{{$encargado->ENCARGADO_NOMBRE}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                    @error('SELECT_ENCARGADO_MA')
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
                                    <label for="descripcion">Serial Modem/Router</label>
                                    <input type="text" value="{{old('REMOTA_SERIAL_MA')}}" class="form-control" id="REMOTA_SERIAL_MA" placeholder="Ingrese el Serial de la Remota" name="REMOTA_SERIAL_MA">
                                    @error('REMOTA_SERIAL_MA')
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
                                    <label for="REMOTA_COORDENADA_MA">Coordenadas</label>
                                    <input type="text" value="{{old('REMOTA_COORDENADA_MA')}}" class="form-control" id="REMOTA_COORDENADA_MA" placeholder="Ingrese las Coordenadas de la Remota" name="REMOTA_COORDENADA">
                                    @error('REMOTA_COORDENADA_MA')
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
                                    <label for="SELECT_SOCIO_MA">Socio</label>
                                    <select id="SELECT_SOCIO_MA" name="SELECT_SOCIO_MA" class="form-control select_socio">
                                        <option selected>Seleccione el Socio...</option>
                                        @forelse($socios as $socio)
                                            <option value="{{$socio->id}}">{{$socio->nombre}}</option>
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
                                    <label for="REMOTA_ANTENA_SERIAL">Serial Antena </label>
                                    <input type="text" value="{{old('REMOTA_ANTENA_SERIAL')}}" class="form-control" id="REMOTA_ANTENA_SERIAL" placeholder="Ingrese el Serial de la Remota" name="REMOTA_ANTENA_SERIAL">
                                    @error('REMOTA_ANTENA_SERIAL')
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
                                    <label for="REMOTA_KIT_SERIAL">Serial Kit</label>
                                    <input type="text" value="{{old('REMOTA_KIT_SERIAL')}}" class="form-control" id="REMOTA_KIT_SERIAL" placeholder="Ingrese el Serial de la Remota" name="REMOTA_KIT_SERIAL">
                                    @error('REMOTA_KIT_SERIAL')
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
                                    <label for="REMOTA_DIA_ACTIVACION_MA">Dia Activacion</label>
                                    <input type="date" value="{{old('REMOTA_DIA_ACTIVACION_MA')}}" class="form-control" id="REMOTA_DIA_ACTIVACION_MA" placeholder="Ingrese el Dia de Activacion de la Remota" name="REMOTA_DIA_ACTIVACION_MA">
                                </div>
                            </div>
                            <div class="col col-md-4">
                                <div class="form-group">
                                    <label for="REMOTA_DIA_CORTE_MA">Dia de Corte</label>
                                    <input type="date" value="{{old('REMOTA_DIA_CORTE_MA')}}" class="form-control" id="REMOTA_DIA_CORTE_MA" placeholder="Ingrese el dia de corte de la Remota" name="REMOTA_DIA_CORTE_MA">
                                </div>
                            </div>
                            <div class="col col-md-4">
                                <div class="form-group">
                                    <label for="REMOTA_FECHA_CUENTA">Fecha Cuenta</label>
                                    <input type="DATE" value="{{old('REMOTA_FECHA_CUENTA')}}" class="form-control" id="REMOTA_FECHA_CUENTA" name="REMOTA_FECHA_CUENTA">
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
                                    <label for="SELECT_PROVEEDOR_MA">Proveedores</label>
                                    <select id="SELECT_PROVEEDOR_MA" name="SELECT_PROVEEDOR_MA" class="form-control">
                                        <option value="" value="">Seleccione un Proveedor...</option>
                                        @forelse($proveedores as $proveedor)
                                            <option value="{{$proveedor->id}}">{{$proveedor->razon}}</option>
                                        @empty
                                            No hay Satelites registrados
                                        @endforelse
                                    </select>
                                    @error('SELECT_PROVEEDOR_MA')
                                        <br>
                                        <small>
                                            *{{$message}}
                                        </small>
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
                                    <label for="SELECT_SAT_MA">Satelites</label>
                                    <select id="SELECT_SAT_MA" name="SELECT_SAT_MA" class="form-control" >
                                        <option value="">Seleccione el Satelite...</option>
                                    </select>
                                    @error('SELECT_SAT_MA')
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
                                    <label for="SELECT_PLAN_MA">Plan</label>
                                    <select id="SELECT_PLAN_MA" name="SELECT_PLAN_MA" class="form-control">
                                        <option value="">Seleccione un plan . . . </option>
                                    </select>
                                    @error('SELECT_PLAN_MA')
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
                            <button type="submit" id="BOTON_GUARDAR_MA" class="btn btn-primary">Guardar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Crear Remota</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form  action="{{ route('remotas.create') }}"  method="POST" lang="es" id="Form_MA">
                        @csrf

                        <div class="row">
                            <div class="col col-md-8">
                                <div class="form-group">
                                    <label for="REMOTA_NODO_MA">NODO</label>
                                    <input type="text" value="{{old('REMOTA_NODO_MA')}}" class="form-control" id="REMOTA_NODO_MA" wire:model='title' placeholder="Ingrese el Nodo de la Remota" name="REMOTA_NODO_MA">
                                    {{$title}}
                                    @error('REMOTA_NODO_MA')
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
                                    <label for="SELECT_CLIENTE_MA">Cliente</label>
                                    <select id="SELECT_CLIENTE_MA" name="SELECT_CLIENTE_MA" class="form-control">
                                        <option value="">Escoga el cliente...</option>
                                        @forelse($clientes as $cliente)
                                            <option value="{{$cliente->id}}">{{$cliente->CLIENTE_RAZON}}</option>
                                        @empty
                                            <option>No hay clientes registrados</option>
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
                                    <input type="text" value="{{old('REMOTA_EQUIPO')}}" class="form-control" id="REMOTA_EQUIPO_MA" placeholder="Ingrese el Equipo de la Remota" name="REMOTA_EQUIPO_MA">
                                    @error('REMOTA_EQUIPO_MA')
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
                                    <label for="SELECT_ENCARGADO_MA">Encargado</label>
                                    <select id="SELECT_ENCARGADO_MA" name="SELECT_ENCARGADO_MA" class="form-control select_encargado">
                                        <option selected>Seleccione un Encargado...</option>
                                        @forelse($encargados as $encargado)
                                            <option value="{{$encargado->id}}">{{$encargado->ENCARGADO_NOMBRE}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                    @error('SELECT_ENCARGADO_MA')
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
                                    <label for="descripcion">Serial Modem/Router</label>
                                    <input type="text" value="{{old('REMOTA_SERIAL_MA')}}" class="form-control" id="REMOTA_SERIAL_MA" placeholder="Ingrese el Serial de la Remota" name="REMOTA_SERIAL_MA">
                                    @error('REMOTA_SERIAL_MA')
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
                                    <label for="REMOTA_COORDENADA_MA">Coordenadas</label>
                                    <input type="text" value="{{old('REMOTA_COORDENADA_MA')}}" class="form-control" id="REMOTA_COORDENADA_MA" placeholder="Ingrese las Coordenadas de la Remota" name="REMOTA_COORDENADA">
                                    @error('REMOTA_COORDENADA_MA')
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
                                    <label for="SELECT_SOCIO_MA">Socio</label>
                                    <select id="SELECT_SOCIO_MA" name="SELECT_SOCIO_MA" class="form-control select_socio">
                                        <option selected>Seleccione el Socio...</option>
                                        @forelse($socios as $socio)
                                            <option value="{{$socio->id}}">{{$socio->nombre}}</option>
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
                                    <label for="REMOTA_ANTENA_SERIAL">Serial Antena </label>
                                    <input type="text" value="{{old('REMOTA_ANTENA_SERIAL')}}" class="form-control" id="REMOTA_ANTENA_SERIAL" placeholder="Ingrese el Serial de la Remota" name="REMOTA_ANTENA_SERIAL">
                                    @error('REMOTA_ANTENA_SERIAL')
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
                                    <label for="REMOTA_KIT_SERIAL">Serial Kit</label>
                                    <input type="text" value="{{old('REMOTA_KIT_SERIAL')}}" class="form-control" id="REMOTA_KIT_SERIAL" placeholder="Ingrese el Serial de la Remota" name="REMOTA_KIT_SERIAL">
                                    @error('REMOTA_KIT_SERIAL')
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
                                    <label for="REMOTA_DIA_ACTIVACION_MA">Dia Activacion</label>
                                    <input type="date" value="{{old('REMOTA_DIA_ACTIVACION_MA')}}" class="form-control" id="REMOTA_DIA_ACTIVACION_MA" placeholder="Ingrese el Dia de Activacion de la Remota" name="REMOTA_DIA_ACTIVACION_MA">
                                </div>
                            </div>
                            <div class="col col-md-4">
                                <div class="form-group">
                                    <label for="REMOTA_DIA_CORTE_MA">Dia de Corte</label>
                                    <input type="date" value="{{old('REMOTA_DIA_CORTE_MA')}}" class="form-control" id="REMOTA_DIA_CORTE_MA" placeholder="Ingrese el dia de corte de la Remota" name="REMOTA_DIA_CORTE_MA">
                                </div>
                            </div>
                            <div class="col col-md-4">
                                <div class="form-group">
                                    <label for="REMOTA_FECHA_CUENTA">Fecha Cuenta</label>
                                    <input type="DATE" value="{{old('REMOTA_FECHA_CUENTA')}}" class="form-control" id="REMOTA_FECHA_CUENTA" name="REMOTA_FECHA_CUENTA">
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
                                    <label for="SELECT_PROVEEDOR_MA">Proveedores</label>
                                    <select id="SELECT_PROVEEDOR_MA" name="SELECT_PROVEEDOR_MA" class="form-control">
                                        <option value="" value="">Seleccione un Proveedor...</option>
                                        @forelse($proveedores as $proveedor)
                                            <option value="{{$proveedor->id}}">{{$proveedor->razon}}</option>
                                        @empty
                                            No hay Satelites registrados
                                        @endforelse
                                    </select>
                                    @error('SELECT_PROVEEDOR_MA')
                                        <br>
                                        <small>
                                            *{{$message}}
                                        </small>
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
                                    <label for="SELECT_SAT_MA">Satelites</label>
                                    <select id="SELECT_SAT_MA" name="SELECT_SAT_MA" class="form-control" >
                                        <option value="">Seleccione el Satelite...</option>
                                    </select>
                                    @error('SELECT_SAT_MA')
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
                                    <label for="SELECT_PLAN_MA">Plan</label>
                                    <select id="SELECT_PLAN_MA" name="SELECT_PLAN_MA" class="form-control">
                                        <option value="">Seleccione un plan . . . </option>
                                    </select>
                                    @error('SELECT_PLAN_MA')
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
                            <button type="submit" id="BOTON_GUARDAR_MA" class="btn btn-primary">Guardar</button>
                        </div>

                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</div>
