<div>
    <div class="max-w-7x1 mx-auto px-4 sm:px-6 lg:pg-8 py-12">
        <div class="container">
            <div class="row">
                <div class="col col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Cuentas Starlink</h1>
                        </div>

                        <div class="card-body">

                            @livewire('cuentas-create')

                            {{-- //Modal Editar// --}}
                            <div class="px-6 py-4 flex items-center">
                                {{-- //Barra de búsqueda// --}}
                                <input class="form-control flex-1" type="text" id="search-remotas" placeholder="Ingrese el nombre de la Remota a buscar" wire:model.live="search">
                            </div>

                            @if ($cuentas->count())
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
                                        <th scope="col">Correo</th>
                                        <th scope="col">Direccion</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($cuentas as $cuenta)
                                            <tr>
                                                <th scope="row">{{ $cuenta->id  }}</th>
                                                <td>{{ $cuenta->correo}}</td>
                                                <td>{{$cuenta->direccion}}</td>
                                                <td>

                                                    {{-- Buton editar  --}}
                                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-editar-{{ $cuenta->id  }}">
                                                        Editar
                                                    </button>

                                                        {{-- Buton eliminar  --}}
                                                        <button class="btn btn-danger btn-sm">
                                                            Eliminar
                                                        </button>
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
                                <div class="alert alert-warning" role="alert">
                                    No hay datos
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
