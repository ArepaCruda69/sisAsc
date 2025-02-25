document.addEventListener('DOMContentLoaded', function() {
    let editing = false;
    let editingId = null;

    document.getElementById("btTeclados").addEventListener("click", () => {
        var actionTeclado = editing ? "updateTeclado" : "btTecladoss";
        var dataTeclado = [];

        var txtmodeloteclado = document.getElementById("txtModeloTeclado").value;
        var txtmarcateclado = document.getElementById("txtMarcaTeclado").value;
        var txtserialteclado = document.getElementById("txtSerialTeclado").value;
        var txtpuertoteclado = document.getElementById("txtPuertoTeclado").value;
        var txttipoteclado = document.getElementById("txtTipoTeclado").value;
        var txtasignadoteclado = document.getElementById("txtAsignadoTeclado").value;

        dataTeclado.push({
            "idTeclado": editingId,
            "modeloteclado": txtmodeloteclado,
            "marcateclado": txtmarcateclado,
            "serialteclado": txtserialteclado,
            "puertoteclado": txtpuertoteclado,
            "tipoteclado": txttipoteclado,
            "asignadoteclado": txtasignadoteclado,
        });

        if (dataTeclado.length === 0) {
            Swal.fire({
                icon: "warning",
                title: "Campos Vacíos",
                text: "El registro de los campos está vacío, debe seleccionar al menos un ítem para guardar",
            });
        } else {
            Swal.fire({
                title: "Atención",
                text: "¿Está seguro de guardar esta información?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, Guardar",
                cancelButtonText: "Cancelar",
            }).then((result) => {
                if (result.isConfirmed) {
                    var jsonTeclado = JSON.stringify(dataTeclado);

                    $.ajax({
                        url: editing ? '../Controller/updateTeclado.php' : '../Controller/insertMTM.php',
                        type: 'POST',
                        async: true,
                        data: { actionTeclado: actionTeclado, jsonTeclado: jsonTeclado },
                        success: function (respo) {
                            var response = JSON.parse(respo);
                            if (response.response === 0) {
                                Swal.fire({
                                    title: 'Correcto',
                                    text: "Registrado Correctamente",
                                    icon: 'success',
                                    confirmButtonColor: '#3085d6',
                                    confirmButtonText: 'Ok'
                                }).then(() => {
                                    location.reload(); // Refrescar la página
                                });
                            } else {
                                Swal.fire('Error no se activó el registro: ' + response.response, '', 'error');
                            }
                        },
                        error: function (respo) {
                            Swal.fire('Error no se activó el registro por función: ' + respo, '', 'error');
                        }
                    });
                }
            });
        }
    }); 

    function cargarMarcas() {
        $.ajax({
            url: '../Controller/getMarcas.php',
            type: 'GET',
            success: function(data) {
                const marcas = JSON.parse(data);
                const selectMarca = document.getElementById("txtMarcaTeclado");
                selectMarca.innerHTML = "<option value=''>Seleccione...</option>";
                marcas.forEach(marca => {
                    const option = document.createElement("option");
                    option.value = marca.marca_marca;
                    option.textContent = marca.marca_marca;
                    selectMarca.appendChild(option);
                });
            },
            error: function() {
                Swal.fire('Error', 'No se pudo cargar las marcas.', 'error');
            }
        });
    }

    function actualizarTabla() {
        $.ajax({
            url: '../Controller/getTecladoData.php',
            type: 'GET',
            success: function (html) {
                document.querySelector('#exampleteclado tbody').innerHTML = html;
                agregarEventosEliminar(); // Añadir eventos de eliminación
                agregarEventosEditar(); // Añadir eventos de edición
            },
            error: function () {
                Swal.fire('Error al actualizar la tabla', '', 'error');
            }
        });
    }

    function agregarEventosEliminar() {
        document.querySelectorAll('.btn-danger').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                var idt = this.getAttribute('href').split('=')[1];
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "No podrás revertir esto!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '../Model/deleteTeclado.php?id=' + idt,
                            type: 'GET',
                            success: function (respo) {
                                var response = JSON.parse(respo);
                                if (response.response === 'success') {
                                    Swal.fire('Eliminado!', 'El registro ha sido eliminado.', 'success');
                                    actualizarTabla(); // Actualizar la tabla
                                } else {
                                    Swal.fire('Error', response.response, 'error');
                                }
                            },
                            error: function () {
                                Swal.fire('Error', 'No se pudo eliminar el registro.', 'error');
                            }
                        });
                    }
                });
            });
        });
    }
  
    function agregarEventosEditar() {
        document.querySelectorAll('.btn-warning').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                var id = this.getAttribute('onclick').split('(')[1].split(')')[0];
                editarRegistro(id);
            });
        });
    } 

    function editarRegistro(id) {
        $.ajax({
            url: '../Controller/getTecladoById.php',
            type: 'GET',
            data: { id: id }, 
            success: function (respo) {
                var datat = JSON.parse(respo);
                document.getElementById("txtModeloTeclado").value = datat.modelo_teclado;
                document.getElementById("txtMarcaTeclado").value = datat.marca_teclado;
                document.getElementById("txtSerialTeclado").value = datat.serial_teclado;
                document.getElementById("txtPuertoTeclado").value = datat.puertos_teclado;
                document.getElementById("txtTipoTeclado").value = datat.tipo_teclado;
                document.getElementById("txtAsignadoTeclado").value = datat.asignado_teclado;
                editing = true;
                editingId = id;
                document.getElementById("btMonitor").textContent = "Actualizar"; // Cambiar el texto del botón
            },
            error: function () {
                Swal.fire('Error', 'No se pudo cargar el registro.', 'error');
            }
        });
    }

    cargarMarcas();
    actualizarTabla(); // Añadir eventos al cargar la página
});