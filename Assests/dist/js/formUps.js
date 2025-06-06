document.addEventListener('DOMContentLoaded', function() {
    let editing = false;
    let editingId = null;

    document.getElementById("btUps").addEventListener("click", () => {
        var actionUps = editing ? "updateUps" : "btUpss";
        var dataUps = [];

        var txtmodeloups = document.getElementById("txtModeloUps").value;
        var txtserialups = document.getElementById("txtSerialUps").value;
        var txtunidadups = document.getElementById("txtUnidadUps").value;
        var txtmarcaups = document.getElementById("txtMarcaUps").value;
        var txtfechaups = document.getElementById("txtfechaUps").value;
        var txtcantidadups = document.getElementById("txtCantidadUps").value;
        var txtmodelobateriaups = document.getElementById("txtModeloBateriaUps").value;
        var txtobserups = document.getElementById("txtObserUps").value;

        dataUps.push({
            "id": editingId,
            "modeloups": txtmodeloups,
            "serialups": txtserialups,
            "unidadups": txtunidadups,
            "marcaups": txtmarcaups,
            "fechaups": txtfechaups,
            "cantidadups": txtcantidadups,
            "modelobateriaups": txtmodelobateriaups,
            "obserups": txtobserups,
        });

        if (dataUps.length === 0) {
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
                    var jsonUps = JSON.stringify(dataUps);

                    $.ajax({
                        url: editing ? '../Controller/updateUps.php' : '../Controller/insertUps.php',
                        type: 'POST',
                        async: true,
                        data: { actionUps: actionUps, jsonUps: jsonUps },
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
                const selectMarca = document.getElementById("txtMarcaUps");
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
            url: '../Controller/getUpsData.php',
            type: 'GET',
            success: function (html) {
                document.querySelector('#example1 tbody').innerHTML = html;
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
                            url: '../Model/delete.php?id=' + id,
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
            url: '../Controller/getUpsById.php',
            type: 'GET',
            data: { id: id },
            success: function (respo) {
                var data = JSON.parse(respo);
                console.log("Datos recibidos:", data); // Log para depuración
                document.getElementById("txtModeloUps").value = data.modelo_ups;
                document.getElementById("txtSerialUps").value = data.serial_ups;
                document.getElementById("txtUnidadUps").value = data.unidad;
                document.getElementById("txtMarcaUps").value = data.marca_ups;
                document.getElementById("txtfechaUps").value = data.fecha_instalacion;
                document.getElementById("txtCantidadUps").value = data.cantidad_bateria;
                document.getElementById("txtModeloBateriaUps").value = data.modelo_bateria;
                document.getElementById("txtObserUps").value = data.observaciones_ups;

                // Actualizar los select
                console.log("Actualizando select Unidad con valor:", data.unidad); // Log para depuración
                $('#txtUnidadUps').val(data.unidad).trigger('change');
                console.log("Actualizando select Marca con valor:", data.marca_ups); // Log para depuración
                $('#txtMarcaUps').val(data.marca_ups).trigger('change');

                editing = true;
                editingId = id;
                document.getElementById("btUps").textContent = "Actualizar"; // Cambiar el texto del botón
            },
            error: function () {
                Swal.fire('Error', 'No se pudo cargar el registro.', 'error');
            }
        });
    }

    cargarMarcas();
    actualizarTabla(); // Añadir eventos al cargar la página
});