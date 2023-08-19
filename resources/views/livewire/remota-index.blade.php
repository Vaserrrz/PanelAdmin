<div class="max-w-7x1 mx-auto px-4 sm:px-6 lg:pg-8 py-12">
    <div class="container">
        <div class="row">
            <div class="col col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Remotas Satelital</h1>


                        {{--Agregar Remota--}}
                        @livewire('create-remota')

                        <div class="card-body">
                            <div class="px-6 py-4 flex items-center">
                                {{-- //Barra de búsqueda// --}}
                                <input class="form-control flex-1" type="text" id="search-remotas" placeholder="Ingrese el nombre de la Remota a buscar" wire:model="search" />
                            </div>

                            @if ($remotas->count())
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="cursor: pointer" wire:click="order('id')">
                                                ID

                                                {{-- SORT --}}
                                                @if ($sort == 'id')

                                                    @if ($direction == 'asc')
                                                        <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                                    @else
                                                        <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                                    @endif
                                                @else
                                                    <i class="fas fa-sort float-right mt-1"></i>
                                                @endif
                                            </th>
                                            <th scope="col" style="cursor: pointer" wire:click="order('REMOTA_EQUIPO')">
                                                Equipo

                                                {{-- SORT --}}
                                                @if ($sort == 'REMOTA_EQUIPO')

                                                    @if ($direction == 'asc')
                                                        <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                                    @else
                                                        <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                                    @endif
                                                @else
                                                    <i class="fas fa-sort float-right mt-1"></i>
                                                @endif

                                            </th>
                                            <th scope="col" style="cursor: pointer" wire:click="order('CLIENTE_ID')">
                                                Cliente

                                                {{-- SORT --}}
                                                @if ($sort == 'CLIENTE_ID')

                                                    @if ($direction == 'asc')
                                                        <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                                    @else
                                                        <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                                    @endif
                                                @else
                                                    <i class="fas fa-sort float-right mt-1"></i>
                                                @endif
                                            </th>

                                            <th scope="col">
                                                Serial
                                            </th>
                                            <th scope="col">
                                                IP
                                            </th>
                                            <th scope="col">
                                                Acciones
                                            </th>
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
                                                                                                <option value="{{$socio->id}}" selected>{{$socio->nombre}}</option>
                                                                                            @else
                                                                                                <option value="{{$socio->id}}">{{$socio->nombre}}</option>
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
                                                                                                <option selected value="{{$proveedor->id}}">{{$proveedor->razon}}</option>
                                                                                            @else
                                                                                                <option value="{{$proveedor->id}}">{{$proveedor->razon}}</option>
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
                                                                                        <option> Seleccione un plan ... </option>
                                                                                        @php $planes = App\Models\Plan::where('SATELITE_ID', $remota->SATELITE_ID)->get();@endphp
                                                                                        @forelse($planes as $plan)
                                                                                            @if ($remota->PLAN_ID == $plan->id)
                                                                                                <option selected value="{{$plan->id}}">{{$plan->plan_NOMBRE}}</option>
                                                                                            @else
                                                                                                <option value="{{$plan->id}}">{{$plan->plan_NOMBRE}}</option>
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
                            @else
                                No hay remotas registradas
                            @endif
                            {{-- Tabla de datos --}}



                            <div class="card-footer">
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
