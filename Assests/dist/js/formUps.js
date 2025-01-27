document.addEventListener('DOMContentLoaded', function() {
    document.getElementById("btUps").addEventListener("click", () => {
        var actionUps = "btUpss";
        var dataUps = [];
        
        var txtmodeloups = document.getElementById("txtModeloUps").value;
        var txtserialups = document.getElementById("txtSerialUps").value;
        var txtunidadups = document.getElementById("txtUnidadUps").value;
        var txtfechaups = document.getElementById("txtfechaUps").value;
        var txtcantidadups = document.getElementById("txtCantidadUps").value;
        var txtmodelobateriaups = document.getElementById("txtModeloBateriaUps").value;
        var txtobserups = document.getElementById("txtObserUps").value;
        
        dataUps.push({
            "modeloups": txtmodeloups,
            "serialups": txtserialups,
            "unidadups": txtunidadups,
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
                        url: '../Controller/insertUps.php',
                        type: 'POST',
                        async: true,
                        data: { actionUps: actionUps, jsonUps: jsonUps },
                        success: function (respo) {
                            // Interpretar la respuesta JSON correctamente
                            var response = JSON.parse(respo);
                            if (response.response === 0) {
                                Swal.fire({
                                    title: 'Correcto',
                                    text: "Registrado Correctamente",
                                    icon: 'success',
                                    confirmButtonColor: '#3085d6',
                                    confirmButtonText: 'Ok'
                                }).then(() => {
                                    document.getElementById("upsForm").reset(); // Limpiar el formulario
                                    actualizarTabla(); // Actualizar la tabla
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

    function actualizarTabla() {
        $.ajax({
            url: '../Controller/getUpsData.php',
            type: 'GET',
            success: function (html) {
                document.querySelector('#example1 tbody').innerHTML = html;
                agregarEventosEliminar(); // Añadir eventos de eliminación
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

    actualizarTabla(); // Añadir eventos al cargar la página
});
