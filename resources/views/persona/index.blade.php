@extends('adminlte::page')

@section('title')
    Persona
@endsection

@section('content_header')
    <h1>Personas</h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <div class="co col-md-6 float-left">
                                <a href="{{ route('personas.create') }}" class="btn btn-success btn-sm float-left"  data-placement="left" >
                                  {{ __('Agregar') }}
                                  {{-- class="btn btn-success" data-toggle="modal" data-target="#modal-agregar"> --}}
                                </a>
                            </div>
                            <div class="co col-md-6 float-right">
                                <a href={{ route('admin.home') }} class="btn btn-primary btn-sm float-right"  data-placement="left" >
                                    {{ __('Volver') }}
                                    {{-- class="btn btn-success" data-toggle="modal" data-target="#modal-agregar"> --}}
                                  </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <ul class="navbar-nav">
                                <li style="justify-content: start; gap: 4rem;" class="main-navbar navbar nav-item">
                                    <a class="nav-link" href="{{ route('personas.tipo','') }}">Todos</a>
                                    <a class="nav-link" href="{{ route('personas.tipo','Socio') }}">Socio</a>
                                    <a class="nav-link" href="{{ route('personas.tipo','Técnico') }}">Técnico</a>
                                    <a class="nav-link" href="{{ route('personas.tipo','Revendedor') }}">Revendedor</a>
                                </li>
                            </ul>

                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr align="center">
										<th width="32%" >Nombre</th>

										<th>Telefono Princ.</th>
										<th width="28%" >Correo</th>
										<th>Tipo</th>
                                        <th width="18%" >Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($personas as $persona)
                                        <tr>
											<td>{{ $persona->nombre }}</td>
											<td align="center">{{ $persona->telef1 }}</td>
											<td>{{ $persona->correo }}</td>
											<td align="center">{{ $persona->tipo }}</td>

                                            <td align="center">
                                                <form action="{{ route('personas.destroy',$persona->id) }}" method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary " href="{{ route('personas.show',$persona->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a> --}}
                                                    <a class="btn btn-sm" href="{{ route('personas.edit',$persona->id) }}"><i class="fa fa-fw fa-edit" title="Editar"></i></a>
                                                    @if ($persona->tipo == "Técnico")
                                                        <a class="btn btn-sm" href="{{ route('personas.index') }}"><i class="fa fa-map-pin" title="Zona de trabajo"></i></a>
                                                    @endif
                                                    <a class="btn btn-sm" href="{{ route('personas.details',$persona->id) }}"><i class="fa fa-info" title="Detalles"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm">
                                                        <i class="fa fa-fw fa-trash" title ="Eliminar"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6">No hay datos</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $personas->links() !!}
            </div>
        </div>
    </div>
@endsection


