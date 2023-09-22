@extends('adminlte::page')

@section('title', 'Remotas')
@section('content_header')

@stop

@section('content')
    <div class="py-5">
        @livewire('remota-index')
    </div>
@stop

@section('css')
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    </script>

    <script>

        //CONSTANTES MODAL AGREGAR
        const ModalAgregar = document.getElementById('ModalAgregar');
        const BtnGuardarMA = document.getElementById('BOTON_GUARDAR_MA');
        const Form_MA = document.getElementById('Form_MA');

        const proveedorSelectMA = document.getElementById('SELECT_PROVEEDOR_MA');
        const selectSatMA = document.getElementById('SELECT_SAT_MA');
        const selectPlanMA = document.getElementById('SELECT_PLAN_MA');
        const clienteSelectMA = document.getElementById('SELECT_CLIENTE_MA');
        const encargadoSelectMA = document.getElementById('SELECT_ENCARGADO_MA');
        //PROPIEDADES PLAN (AGREGAR)
        const renta_plan = document.getElementById('REMOTA_RENTA');
        const costo_plan = document.getElementById('REMOTA_COSTO_PLAN');
        const planUp = document.getElementById('REMOTA_PLANUP');
        const planDown = document.getElementById('REMOTA_PLANDOWN');


        // CONSTANTES MODAL EDITAR
        const SelectClientesME = document.querySelectorAll('.select_cliente');
        const SelectEncargadosME = document.querySelectorAll('.select_encargado')
        const selectProveedoresME = document.querySelectorAll('.select_proveedor');
        const selectSatelitesME = document.querySelectorAll('.select_satelite');
        const selectPlanesME = document.querySelectorAll('.select_plan');
        //PROPIEDADES PLAN (EDITAR)
        const renta_planesME = document.querySelectorAll('.select_renta_plan');
        const costo_planesME = document.querySelectorAll('.select_costo_plan');
        const planesUpME = document.querySelectorAll('.select_planUp');
        const planesDownME = document.querySelectorAll('.select_planDown');


        //MODAL EDITAR
        //Clientes y Encargados
        SelectClientesME.forEach(select_cliente => {
            select_cliente.addEventListener('change', function() {
                SelectEncargadosME.forEach(select_encargado => {
                    actualizarEncargados(select_cliente, select_encargado);
                });
            });
        });
        function actualizarEncargados(select_cliente, select_encargado) {
            select_encargado.innerHTML = '<option value="">Seleccione un encargado</option>';
            select_encargado.disabled = false;
            const clienteIdME = select_cliente.value
            if (!clienteIdME) {
                return;
            }
            fetch(`/remotas_encargados?CLIENTE_ID=${clienteIdME}`)
            .then(response => response.json())
            .then(encargados => {
                    // console.log(states);
                select_encargado.disabled = false;
                encargados.forEach(encargado => {
                    // console.log(encargado);
                    const option = document.createElement('option');
                    option.value = encargado.id;
                    option.textContent = encargado.ENCARGADO_NOMBRE;
                    select_encargado.appendChild(option);
                });
            });
        }
        //Proveedores y Satelites
        selectProveedoresME.forEach(select_proveedor => {
            select_proveedor.addEventListener('change', function() {
                selectSatelitesME.forEach(select_satelite => {
                    actualizarSatelites(select_proveedor,select_satelite)
                });
                //Limpiar Plan al cambio de Proveedor
                selectPlanesME.forEach(select_plan => {
                    select_plan.innerHTML = '<option value="">Seleccione un Plan</option>';
                    renta_planesME.forEach
                });
                //Limpiando Propiedades de Plan al cambio de Proveedor
                renta_planesME.forEach(renta => {
                    renta.value = ''
                });
                costo_planesME.forEach(costo => {
                    costo.value = ''
                });
                planesUpME.forEach(up => {
                    up.value = ''
                });
                planesDownME.forEach(down => {
                    down.value = ''
                });
            });
        });
        function actualizarSatelites(select_proveedor,select_satelite) {
            select_satelite.innerHTML = '<option value="">Seleccione un Satelite</option>';

            select_satelite.disabled = false;
            const proveedorIdME = select_proveedor.value
            if (!proveedorIdME) {
                return;
            }
            fetch(`/remotas_satelites?PROVEEDOR_ID=${proveedorIdME}`)
            .then(response => response.json())
            .then(satelites => {
                select_satelite.disabled = false;
                satelites.forEach(satelite => {
                    const option = document.createElement('option')
                    option.value = satelite.id;
                    option.textContent = satelite.SAT_NOMBRE;
                    select_satelite.appendChild(option);
                });
            });

        }
        //Satelites y Planes
        selectSatelitesME.forEach(select_satelite => {
            select_satelite.addEventListener('change', function() {
                selectPlanesME.forEach(select_plan => {
                    actualizarPlanes(select_satelite,select_plan)
                });
                //Limpiar Plan al cambio de Proveedor
                selectPlanesME.forEach(select_plan => {
                    select_plan.innerHTML = '<option value="">Seleccione un Plan</option>';
                    renta_planesME.forEach
                });
                //Limpiando Propiedades de Plan al cambio de Proveedor
                // renta_planesME.forEach(renta => {
                //     renta.value = ''
                // });
                // costo_planesME.forEach(costo => {
                //     costo.value = ''
                // });
                // planesUpME.forEach(up => {
                //     up.value = ''
                // });
                // planesDownME.forEach(down => {
                //     down.value = ''
                // });
            });
        });
        function actualizarPlanes(select_satelite,select_plan) {
            select_plan.innerHTML = '<option value="">Seleccione un Plan</option>';
            select_plan.disabled = false;
            const sateliteIdME = select_satelite.value
            if (!sateliteIdME) {
                return;
            }
            fetch(`/remotas_plans?SATELITE_ID=${sateliteIdME}`)
            .then(response => response.json())
            .then(planes => {
                select_plan.disabled = false;
                planes.forEach(plan => {
                    const option = document.createElement('option')
                    option.value = plan.id;
                    option.textContent = plan.plan_NOMBRE;
                    select_plan.appendChild(option);
                });
            });
        }
        //Propiedades Planes (EDITAR)
        selectPlanesME.forEach(select_plan => {
            select_plan.addEventListener('change', function() {
                //Limpiando Propiedades de Plan al cambio de Proveedor
                renta_planesME.forEach(renta => {
                    renta.value = ''
                });
                costo_planesME.forEach(costo => {
                    costo.value = ''
                });
                planesUpME.forEach(up => {
                    up.value = ''
                });
                planesDownME.forEach(down => {
                    down.value = ''
                });
                const planIdME = select_plan.value
                if (!planIdME) {
                    return;
                }
                fetch(`/remotas_plan_properties?PLAN_ID=${planIdME}`)
                .then(response => response.json())
                .then(properties => {
                    // console.log(properties);
                    renta_planesME.forEach(renta => {
                        renta.value = properties[0].plan_PRECIO
                    });
                    costo_planesME.forEach(costo => {
                        costo.value = properties[0].plan_COSTO
                    });
                    planesUpME.forEach(up => {
                        up.value = properties[0].plan_SUBIDA
                    });
                    planesDownME.forEach(down => {
                        down.value = properties[0].plan_BAJADA
                    });
                });
            });
        });

        //MODAL AGREGAR

        //Clientes y Encargados
        clienteSelectMA.addEventListener('change', () => {
            const clienteId = clienteSelectMA.value;
            // Limpiar opciones anteriores
            encargadoSelectMA.innerHTML = '<option value="">Seleccione un Encargado</option>';
            // Si no se ha seleccionado un cliente, salir del listener
            if (!clienteId) {
                return;
            }
            // Enviar petición al servidor para obtener los encargados del cliente seleccionado
            fetch(`/remotas_encargados?CLIENTE_ID=${clienteId}`)
            .then(response => response.json())
            .then(encargados => {
                // Agregar nuevas opciones
                encargados.forEach(encargado => {
                    const option = document.createElement('option');
                    option.value = encargado.id;
                    option.text = encargado.ENCARGADO_NOMBRE;
                    encargadoSelectMA.add(option);
                    console.log(encargado)
                });
            });
        });
        //Proveedores y Satelites
        proveedorSelectMA.addEventListener('change', () => {
            const proveedorId = proveedorSelectMA.value;

            fetch(`/remotas_satelites?PROVEEDOR_ID=${proveedorId}`)
            .then(response => response.json())
            .then(satelites => {

                // Limpiar opciones anteriores
                selectSatMA.innerHTML = '<option value="">Seleccione un Satelite</option>';
                selectPlanMA.innerHTML = '<option value="">Seleccione un Plan</option>';
                renta_plan.value = ''
                costo_plan.value = ''
                planUp.value = ''
                planDown.value = ''

                // Si no se ha seleccionado un satélite, salir del listener
                if (!proveedorId) {
                    return;
                }
                // Agregar nuevas opciones
                satelites.forEach(sat => {
                    const option = document.createElement('option');
                    option.value = sat.id;
                    option.text = sat.SAT_NOMBRE;
                    selectSatMA.add(option);
                });
            });
        });
        //Satelites y Planes
        selectSatMA.addEventListener('change', () => {
            const satId = selectSatMA.value;
            // Limpiar opciones anteriores
            selectPlanMA.innerHTML = '<option value="">Seleccione un Plan</option>';
            renta_plan.value = ''
            costo_plan.value = ''
            planUp.value = ''
            planDown.value = ''
            // Si no se ha seleccionado un satélite, salir del listener
            if (!satId) {
                return;
            }
            // Enviar petición al servidor para obtener los planes del satélite seleccionado
            fetch(`/remotas_plans?SATELITE_ID=${selectSatMA.value}`)
            .then(response => response.json())
            .then(planes => {
                // Agregar nuevas opciones
                planes.forEach(plan => {
                    const option = document.createElement('option');
                    option.value = plan.id;
                    option.text = plan.plan_NOMBRE;
                    selectPlanMA.add(option);
                });
            });
        });
        //Propiedades Planes (AGREGAR)
        selectPlanMA.addEventListener('change', () => {
            const planId = selectPlanMA.value
            renta_plan.value = ''
            costo_plan.value = ''
            planUp.value = ''
            planDown.value = ''
            if (!planId) {
                return;
            }
            fetch(`/remotas_plan_properties?PLAN_ID=${planId}`)
                .then(response => response.json())
                .then(properties => {
                    renta_plan.value = properties[0].plan_PRECIO
                    costo_plan.value = properties[0].plan_COSTO
                    planUp.value = properties[0].plan_SUBIDA
                    planDown.value = properties[0].plan_BAJADA
                });
        });

    </script>
@stop
