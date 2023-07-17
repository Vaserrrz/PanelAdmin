@extends('adminlte::page')

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
                             <div class="float-right">
                                <a href="{{ route('personas.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left" >
                                  {{ __('Agregar') }}
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
										<th width="32%" >Nombre</th>
										<th>Cedula</th>
										<th>Telefono Principal</th>
										<th width="30%" >Correo</th>
										<th>Tipo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personas as $persona)
                                        <tr>
											<td>{{ $persona->nombre }}</td>
											<td>{{ $persona->cedula }}</td>
											<td>{{ $persona->telef1 }}</td>
											<td>{{ $persona->correo }}</td>
											<td>{{ $persona->tipo }}</td>

                                            <td>
                                                <form action="{{ route('personas.destroy',$persona->id) }}" method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary " href="{{ route('personas.show',$persona->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a> --}}
                                                    <a class="btn btn-sm btn-success" href="{{ route('personas.edit',$persona->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    {{-- @csrf --}}
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm">
                                                        <i class="fa fa-fw fa-trash"></i>
                                                    {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
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
