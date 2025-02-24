document.addEventListener('DOMContentLoaded', function() {
    let editing = false;
    let editingId = null;

    document.getElementById("btMonitor").addEventListener("click", () => {
        var actionMonitor = editing ? "updateMonitor" : "btMonitorr";
        var dataMonitor = [];

        var txtmodelomonitor = document.getElementById("txtModeloMonitor").value;
        var txtmarcamonitor = document.getElementById("txtMarcaMonitor").value;
        var txtserialmonitor = document.getElementById("txtSerialMonitor").value;
        var txtpuertomonitor = document.getElementById("txtPuertoMonitor").value;
        var txtpanelmonitor = document.getElementById("txtPanelMonitor").value;
        var txtherciosmonitor = document.getElementById("txtHerciosMonitor").value;
        var txtasignadomonitor = document.getElementById("txtAsignadoMonitor").value;

        dataMonitor.push({
            "idmonitor": editingId,
            "modelomonitor": txtmodelomonitor,
            "marcamonitor": txtmarcamonitor,
            "serialmonitor": txtserialmonitor,
            "puertomonitor": txtpuertomonitor,
            "panelmonitor": txtpanelmonitor,
            "herciosmonitor": txtherciosmonitor,
            "asignadomonitor": txtasignadomonitor,
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
                    var jsonMonitor = JSON.stringify(dataMonitor);

                    $.ajax({
                        url: editing ? '../Controller/updateMonitor.php' : '../Controller/insertMTM.php',
                        type: 'POST',
                        async: true,
                        data: { actionMonitor: actionMonitor, jsonMonitor: jsonMonitor },
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

    function actualizarTabla() {
        $.ajax({
            url: '../Controller/getMonitorData.php',
            type: 'GET',
            success: function (html) {
                document.querySelector('#examplemonitor tbody').innerHTML = html;
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
                var idd = this.getAttribute('href').split('=')[1];
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
                            url: '../Model/deleteMonitor.php?id=' + idd,
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
            url: '../Controller/getMonitorById.php',
            type: 'GET',
            data: { id: id }, // Corregir 'datam' a 'data'
            success: function (respo) {
                var datam = JSON.parse(respo);
                document.getElementById("txtModeloMonitor").value = datam.modelo_monitor;
                document.getElementById("txtMarcaMonitor").value = datam.marca_monitor;
                document.getElementById("txtSerialMonitor").value = datam.serial_monitor;
                document.getElementById("txtPuertoMonitor").value = datam.puertos_monitor;
                document.getElementById("txtPanelMonitor").value = datam.panel_monitor;
                document.getElementById("txtHerciosMonitor").value = datam.hercios_monitor;
                document.getElementById("txtAsignadoMonitor").value = datam.asignado_monitor;

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