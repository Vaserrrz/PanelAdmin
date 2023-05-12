@extends('adminlte::page')

@section('title', 'Planes')

@section('content_header')
    <h1>Planes</h1>
@stop

@section('content')



<div class="container">
    <div class="row">
        <div class="col col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-agregar">
                           Agregar
                        </button>

                        <!-- MODAL AGREGAR -->
                        <div class="modal fade" id="modal-agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Agregar - PLan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <form  action="{{ route('planes.store') }}"  method="POST">
                                            @csrf


                                            <div class="row">
                                                <div class="col col-md-4">
                                                    <div class="form-group">
                                                        <label for="PLAN_NOMBRE">Nombre</label>
                                                        <input type="text" class="form-control" id="PLAN_NOMBRE" placeholder="Ingrese el Nombre del Plan" name="PLAN_NOMBRE">
                                                    </div>
                                                </div>
                                                <div class="col col-md-4">
                                                    <div class="form-group">
                                                        <label for="PLAN_SUBIDA">Subida</label>
                                                        <input type="TEXT" class="form-control" id="PLAN_SUBIDA" placeholder="Ingrese la Subida del plan" name="PLAN_SUBIDA">
                                                    </div>
                                                </div>
                                                <div class="col col-md-4">
                                                    <div class="form-group">
                                                        <label for="plan_TELF">Bajada</label>
                                                        <input type="text" class="form-control" id="PLAN_BAJADA" placeholder="Ingrese la Bajada del plan" name="PLAN_BAJADA">
                                                        </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col col-md-4">
                                                    <div class="form-group">
                                                        <label for="plan_TELF2">Contencion</label>
                                                        <input type="text" class="form-control" id="PLAN_CONTENCION" placeholder="Ingrese el telefono secundario del plan" name="PLAN_CONTENCION">
                                                    </div>
                                                </div>
                                                <div class="col col-md-4">
                                                    <div class="form-group">
                                                        <label for="PLAN_COSTO">Costo</label>
                                                        <input type="text" class="form-control" id="PLAN_COSTO" placeholder="Ingrese el Costo del plan" name="PLAN_COSTO">
                                                    </div>
                                                </div>
                                                <div class="col col-md-4">
                                                    <div class="form-group">
                                                        <label for="PLAN_PRECIO">Precio</label>
                                                        <input type="text" class="form-control" id="PLAN_PRECIO" placeholder="Ingrese EL Precio del Plan" name="PLAN_PRECIO">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col col-md-4">

                                                </div>
                                                <div class="col col-md-4">

                                                </div>
                                                <div class="col col-md-4">

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="SATELITE">Proveedor</label>
                                                <select id="SELECT_SATELITE" name="SELECT_SATELITE" class="form-control">
                                                    <option selected>Escoga el Satelite...</option>
                                                    @forelse($proveedores as $proveedor)
                                                        <option value="{{$proveedor->id}}">{{$proveedor->RAZON}}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="SATELITE">Satelite</label>
                                                <select id="SELECT_SATELITE" name="SELECT_SATELITE" class="form-control">
                                                    <option selected>Escoga el Satelite...</option>
                                                    @forelse($satelites as $satelite)
                                                        <option value="{{$satelite->id}}">{{$satelite->SAT_NOMBRE}}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="REVENDEDOR">Revendedor</label>
                                                <select id="SELECT_REVENDEDOR" name="SELECT_REVENDEDOR" class="form-control">
                                                    <option selected>Escoga el Revendedor...</option>
                                                    @forelse($revendedores as $revendedor)
                                                        <option value="{{$revendedor->id}}">{{$revendedor->NOMBRE_RESELLER}}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
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
                                <th scope="col">Nombre</th>
                                <th scope="col">Subida</th>
                                <th scope="col">Bajada</th>
                                <th scope="col">Contencion</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($planes as $plan)
                                    <tr>
                                        <th scope="row">{{ $plan->id  }}</th>

                                        <td>
                                            <a href="{{route('planes.details', $plan->id)}}"> {{ $plan->PLAN_NOMBRE }}</a>
                                        </td>
                                        <td>{{ $plan->PLAN_SUBIDA }}</td>
                                        <td>{{ $plan->PLAN_BAJADA }}</td>
                                        <td>{{ $plan->PLAN_CONTENCION }}</td>
                                        <td>{{ $plan->PLAN_PRECIO   }}</td>
                                        <td>
                                            {{-- EDITAR  --}}
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-editar-{{ $plan->id  }}">
                                                Editar
                                            </button>
                                            {{-- MODAL EDITAR --}}
                                            <div class="modal fade" id="modal-editar-{{ $plan->id  }}"        aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Editar - plan</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form  action="{{route('planes.update',$plan->id ) }}"  method="POST">
                                                                @csrf
                                                                @method('PUT')

                                                                <div class="row">
                                                                    {{-- NOMBRE --}}
                                                                    <div class="col col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="PLAN_NOMBRE">Nombre</label>
                                                                            <input type="text" class="form-control" id="PLAN_NOMBRE" placeholder="Ingrese el Nombre del Plan" name="PLAN_NOMBRE" value="{{$plan->PLAN_NOMBRE}}">
                                                                        </div>
                                                                    </div>
                                                                    {{-- SUBIDA --}}
                                                                    <div class="col col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="PLAN_SUBIDA">Subida</label>
                                                                            <input type="text" class="form-control" id="PLAN_SUBIDA" placeholder="Ingrese la Subida del plan" name="PLAN_SUBIDA" value="{{$plan->PLAN_SUBIDA}}">
                                                                        </div>
                                                                    </div>
                                                                    {{-- BAJADA --}}
                                                                    <div class="col col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="plan_TELF">Bajada</label>
                                                                            <input type="text" class="form-control" id="PLAN_BAJADA" placeholder="Ingrese la Bajada del plan" name="PLAN_BAJADA" value="{{$plan->PLAN_BAJADA}}">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    {{-- CONTENCION --}}
                                                                    <div class="col col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="plan_TELF2">Contencion</label>
                                                                            <input type="text" class="form-control" id="PLAN_CONTENCION" placeholder="Ingrese el telefono secundario del plan" name="PLAN_CONTENCION" value="{{$plan->PLAN_CONTENCION}}">
                                                                        </div>
                                                                    </div>
                                                                    {{-- COSTO --}}
                                                                    <div class="col col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="PLAN_COSTO">Costo</label>
                                                                            <input type="text" class="form-control" id="PLAN_COSTO" placeholder="Ingrese el Costo del plan" name="PLAN_COSTO" value="{{$plan->PLAN_COSTO}}">
                                                                        </div>
                                                                    </div>
                                                                    {{-- PRECIO --}}
                                                                    <div class="col col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="PLAN_PRECIO">Precio</label>
                                                                            <input type="text" class="form-control" id="PLAN_PRECIO" placeholder="Ingrese EL Precio del Plan" name="PLAN_PRECIO" value="{{$plan->PLAN_PRECIO}}">
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="row">
                                                                    {{-- PROVEEDOR --}}
                                                                    <div class="col col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="PROVEEDOR">Proveedor ID</label>
                                                                            <select id="SELECT_PROVEEDOR" class="form-control select_proveedor">
                                                                                <option selected>Escoga el Proveedor...</option>
                                                                                @forelse($proveedores as $proveedor)
                                                                                    @if ($plan->PROVEEDOR_ID == $proveedor->id)
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
                                                                    {{-- SATELITE --}}
                                                                    <div class="col col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="SATELITES">Satelites</label>
                                                                            <select id="SELECT_SATELITE" name="SELECT_SATELITE" class="form-control select_satelite">
                                                                                <option selected>Escoga el Satelite...</option>

                                                                                @php $satelites = App\Models\Satelite::where('PROVEEDOR_ID',$plan->PROVEEDOR_ID)->get();@endphp

                                                                                @forelse($satelites as $satelite)
                                                                                    @if ($plan->SATELITE_ID == $satelite->id)
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
                                                                    {{-- REVENDEDOR --}}
                                                                    <div class="col col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="REVENDEDOR">Revendedor ID</label>
                                                                            <select id="SELECT_REVENDEDOR" class="form-control">
                                                                                <option selected>Escoga el Revendedor...</option>
                                                                                @forelse($revendedores as $revendedor)
                                                                                    <option selected value="{{$revendedor->id}}">{{$revendedor->NOMBRE_RESELLER}}</option>
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
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


                                            {{-- Eliminar --}}
                                            {{-- form destroy --}}
                                            <form action="{{ route('planes.destroy', $plan) }}" method="POST">
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
        const proveedorSelect = document.getElementById('SELECT_PROVEEDOR');
        const sateliteSelect = document.getElementById('SELECT_SATELITE');
        const proveedorSelects = document.querySelectorAll(".select_proveedor");
        const sateliteSelects = document.querySelectorAll(".select_satelite");


        proveedorSelect.addEventListener('change', function() {
            sateliteSelect.innerHTML = '<option value="">Selecciona un satelite</option>';
            sateliteSelect.disabled = false;

            if (!proveedorSelect.value) {
                return;
            }

            fetch(`/planes_satelites?PROVEEDOR_ID=${proveedorSelect.value}`)
                .then(response => response.json())
                .then(states => {
                    sateliteSelect.disabled = false;

                    states.forEach(satelite => {
                        console.log(satelite);
                        const option = document.createElement('option');
                        option.value = satelite.id;
                        option.textContent = satelite.SAT_NOMBRE;
                        sateliteSelect.appendChild(option);
                    });
                });
        });

        proveedorSelects.forEach(proveedorSelect => {
            proveedorSelect.addEventListener('change', function() {
                sateliteSelects.forEach(sateliteSelect => {
                    actualizarSatelites(proveedorSelect,sateliteSelect);
                });
            });
        });

        function actualizarSatelites(proveedorSelect,sateliteSelect) {
            sateliteSelect.innerHTML = '<option value="">Seleccione un satelite</option>';
            sateliteSelect.disabled = false;

            if (!proveedorSelect.value) {
                return;
            }

            fetch(`/planes_satelites?PROVEEDOR_ID=${proveedorSelect.value}`)
            .then(response => response.json())
            .then(states => {
                sateliteSelect.disabled = false;

                states.forEach(satelite => {})
            })
        }
        // proveedorSelects.forEach(proveedorSelect => {
        //     proveedorSelect.addEventListener('change', function() {
        //         sateliteSelects.forEach(sateliteSelect => {
        //             actualizarSatelites(proveedorSelect, sateliteSelect);
        //         });
        //     });
        // });
        // function actualizarSatelites(proveedorSelect, sateliteSelect) {
        //     sateliteSelect.innerHTML = '<option value="">Seleccione un satelite</option>';
        //     sateliteSelect.disabled = false;

        //     if (!proveedorSelect.value) {
        //         return;
        //     }

        //     fetch(`/planes_satelites?PROVEEDOR_ID=${proveedorSelect.value}`)
        //     .then(response => response.json())
        //     .then(states => {
        //         // console.log(states);
        //         sateliteSelect.disabled = false;

        //         states.forEach(satelite => {
        //             // console.log(satelite);
        //             const option = document.createElement('option');
        //             option.value = satelite.id;
        //             option.textContent = satelite.SAT_NOMBRE;
        //             sateliteSelect.appendChild(option);
        //         });

        //     });
        // }

    </script>
@stop
