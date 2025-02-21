document.addEventListener('DOMContentLoaded', function() {
    let editingTeclado = false;
    let editingTecladoId = null;

    document.getElementById("btTeclado").addEventListener("click", () => {
        var actionTeclado = editingTeclado ? "updateTeclado" : "btTeclado";
        var dataTeclado = [];

        var txtModeloTeclado = document.getElementById("txtModeloTeclado").value;
        var txtMarcaTeclado = document.getElementById("txtMarcaTeclado").value;
        var txtSerialTeclado = document.getElementById("txtSerialTeclado").value;
        var txtPuertoTeclado = document.getElementById("txtPuertoTeclado").value;
        var txtTipoTeclado = document.getElementById("txtTipoTeclado").value;
        var txtAsignadoTeclado = document.getElementById("txtAsignadoTeclado").value;

        dataTeclado.push({
            "id": editingTecladoId,
            "modeloteclado": txtModeloTeclado,
            "marcateclado": txtMarcaTeclado,
            "serialteclado": txtSerialTeclado,
            "puertoteclado": txtPuertoTeclado,
            "tipoteclado": txtTipoTeclado,
            "asignadoteclado": txtAsignadoTeclado,
        });

        if (dataTeclado.length === 0) {
            Swal.fire({
                icon: "warning",
                title: "Campos Vacíos",
                text: "El registro de los campos está vacío, debe completar todos los campos",
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
                    var jsonTecl = JSON.stringify(dataTeclado);

                    $.ajax({
                        url: editingTeclado ? '../Controller/updateTeclados.php' : '../Controller/insertMTM.php',
                        type: 'POST',
                        async: true,
                        data: { actionTeclado: actionTeclado, jsonTecl: jsonTecl },
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

    function actualizarTablaTeclado() {
        $.ajax({
            url: '../Controller/getTecladoData.php',
            type: 'GET',
            success: function (html) {
                document.querySelector('#example3 tbody').innerHTML = html;
                agregarEventosEliminarTeclado(); // Añadir eventos de eliminación
                agregarEventosEditarTeclado(); // Añadir eventos de edición
            },
            error: function () {
                Swal.fire('Error al actualizar la tabla', '', 'error');
            }
        });
    }

    function agregarEventosEliminarTeclado() {
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
                            url: '../Model/deleteTeclado.php?iid=' + id,
                            type: 'GET',
                            success: function (respo) {
                                    var response = JSON.parse(respo);
                                    if (response.response === 'success') {
                                        Swal.fire('Eliminado!', 'El registro ha sido eliminado.', 'success');
                                        actualizarTablaTeclado(); // Actualizar la tabla
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

    function agregarEventosEditarTeclado() {
        document.querySelectorAll('.btn-warning').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                var id = this.getAttribute('onclick').split('(')[1].split(')')[0];
                editarRegistroTeclado(id);
            });
        });
    }

    function editarRegistroTeclado(id) {
        $.ajax({
            url: '../Controller/getTecladoById.php',
            type: 'GET',
            data: { id: id },
            success: function (respo) {
                try {
                    var dattaas = JSON.parse(respo);

                    if (dattaas.response) {
                        Swal.fire('Error', dattaas.response, 'error');
                        return;
                    }

                    document.getElementById("txtModeloTeclado").value = dattaas.modelo_teclado ;
                    document.getElementById("txtMarcaTeclado").value = dattaas.marca_teclado ;
                    document.getElementById("txtSerialTeclado").value = dattaas.serial_teclado ;
                    document.getElementById("txtPuertoTeclado").value = dattaas.puertos_teclado ;
                    document.getElementById("txtTipoTeclado").value = dattaas.tipo_teclado ;
                    document.getElementById("txtAsignadoTeclado").value = dattaas.asignado_teclado ;

                    editingTeclado = true;
                    editingTecladoId = id;
                    document.getElementById("btTeclado").textContent = "Actualizar"; // Cambiar el texto del botón
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
    actualizarTablaTeclado(); // Añadir eventos al cargar la página
});