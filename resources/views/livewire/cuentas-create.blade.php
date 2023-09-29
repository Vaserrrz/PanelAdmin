<div>
    <button  type="button" class="btn btn-success float-right mr-4" data-toggle="modal" data-target="#ModalAgregar">
        Crear Remota
    </button>

    <div class="modal fade" id="ModalAgregar"  tabindex="-1"  aria-labelledby="ModalAgregar" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalAgregar">Agregar - Remota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  action="{{ route('remotas.store') }}"  method="POST" lang="es" id="Form_MA">
                        @csrf


                        <div class="row">
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <label for="correo">Correo</label>
                                    <input type="text" value="{{old('correo')}}" class="form-control" id="correo" placeholder="Ingrese su correo electrónico" name="correo">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <label for="cedula">Cedula</label>
                                    <input type="text" value="{{old('cedula')}}" class="form-control" id="cedula" placeholder="Ingrese su número de cédula" name="cedula">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <label for="direccion">Direccion</label>
                                    <input type="text" value="{{old('direccion')}}" class="form-control" id="direccion" placeholder="Ingrese su dirección" name="direccion">
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
</div>
