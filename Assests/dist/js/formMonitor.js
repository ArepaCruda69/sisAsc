document.addEventListener('DOMContentLoaded', function() {
    let editingMonitor = false;
    let editingMonitorId = null;

    document.getElementById("btMonitor").addEventListener("click", () => {
        var actionMonitor = editingMonitor ? "updateMonitor" : "btMonitorr";
        var dataMonitor = [];

        var txtModeloMonitor = document.getElementById("txtModeloMonitor").value;
        var txtMarcaMonitor = document.getElementById("txtMarcaMonitor").value;
        var txtSerialMonitor = document.getElementById("txtSerialMonitor").value;
        var txtPuertoMonitor = document.getElementById("txtPuertoMonitor").value;
        var txtPanelMonitor = document.getElementById("txtPanelMonitor").value;
        var txtHerciosMonitor = document.getElementById("txtHerciosMonitor").value;
        var txtAsignadoMonitor = document.getElementById("txtAsignadoMonitor").value;

        dataMonitor.push({
            "id": editingMonitorId,
            "modelomonitor": txtModeloMonitor,
            "marcamonitor": txtMarcaMonitor,
            "serialmonitor": txtSerialMonitor,
            "puertomonitor": txtPuertoMonitor,
            "panelmonitor": txtPanelMonitor,
            "herciosmonitor": txtHerciosMonitor,
            "asignadomonitor": txtAsignadoMonitor,
        });

        if (dataMonitor.length === 0) {
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
                    var jsonMont = JSON.stringify(dataMonitor);

                    $.ajax({
                        url: editingMonitor ? '../Controller/updateMonitor.php' : '../Controller/insertMTM.php',
                        type: 'POST',
                        async: true,
                        data: { actionMonitor: actionMonitor, jsonMont: jsonMont },
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
                const selectMarca = document.getElementById("txtMarcaMonitor");
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

    function actualizarTablaMonitor() {
        $.ajax({
            url: '../Controller/getMonitorData.php',
            type: 'GET',
            success: function (html) {
                document.querySelector('#example2 tbody').innerHTML = html;
                agregarEventosEliminarMonitor(); // Añadir eventos de eliminación
                agregarEventosEditarMonitor(); // Añadir eventos de edición
            },
            error: function () {
                Swal.fire('Error al actualizar la tabla', '', 'error');
            }
        });
    }

    function agregarEventosEliminarMonitor() {
        document.querySelectorAll('.btn-danger').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                var id = this.getAttribute('href').split('=')[1];
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
                            url: '../Model/deleteMonitor.php?id=' + id,
                            type: 'GET',
                            success: function (respo) {
                                var response = JSON.parse(respo);
                                if (response.response === 'success') {
                                    Swal.fire('Eliminado!', 'El registro ha sido eliminado.', 'success');
                                    actualizarTablaMonitor(); // Actualizar la tabla
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

    function agregarEventosEditarMonitor() {
        document.querySelectorAll('.btn-warning').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                var id = this.getAttribute('onclick').split('(')[1].split(')')[0];
                editarRegistroMonitor(id);
            });
        });
    }

    function editarRegistroMonitor(id) {
        $.ajax({
            url: '../Controller/getMonitorById.php',
            type: 'GET',
            data: { id: id },
            success: function (respo) {
                try {
                    var datas = JSON.parse(respo);

                    if (datas.response) {
                        Swal.fire('Error', datas.response, 'error');
                        return;
                    }

                    document.getElementById("txtModeloMonitor").value = datas.modelo_monitor || '';
                    document.getElementById("txtMarcaMonitor").value = datas.marca_monitor || '';
                    document.getElementById("txtSerialMonitor").value = datas.serial_monitor || '';
                    document.getElementById("txtPuertoMonitor").value = datas.puertos_monitor || '';
                    document.getElementById("txtPanelMonitor").value = datas.panel_monitor || '';
                    document.getElementById("txtHerciosMonitor").value = datas.hercios_monitor || '';
                    document.getElementById("txtAsignadoMonitor").value = datas.asignado_monitor || '';

                    editingMonitor = true;
                    editingMonitorId = id;
                    document.getElementById("btMonitor").textContent = "Actualizar"; // Cambiar el texto del botón
                } catch (error) {
                    Swal.fire('Error', 'No se pudo cargar el registro.', 'error');
                }
            },
            error: function () {
                Swal.fire('Error', 'No se pudo cargar el registro.', 'error');
            }
        });
    }

    cargarMarcas();
    actualizarTablaMonitor(); // Añadir eventos al cargar la página
});