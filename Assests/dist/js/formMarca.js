document.addEventListener('DOMContentLoaded', function() {
    document.getElementById("btMarca").addEventListener("click", () => {
        var actionn = "btMarca";
        var txtnombremarca = document.getElementById("txtNombreMarca").value;

        if (txtnombremarca == "") {
            Swal.fire({
                icon: "warning",
                title: "Campos Vacíos",
                text: "El registro de los campos está vacío, debe seleccionar al menos un ítem para guardar",
            });
        } else if (txtnombremarca !== "") {
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
                    
                    $.ajax({
                        url: '../Controller/insert.php',
                        type: 'POST',
                        async: true,
                        data: { actionn: actionn, txtnombremarca: txtnombremarca },
                        success: function (respoo) {
                            var response = JSON.parse(respoo);
                            if (response.response === 0) {
                                Swal.fire({
                                    title: "Guardado Correctamente",
                                    text: "Presiona ok para continuar",
                                    icon: "success",
                                    showCancelButton: false,
                                    confirmButtonColor: "#3085d6",
                                    confirmButtonText: "Ok"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        document.getElementById("marcaForm").reset(); // Limpiar el formulario
                                        actualizarTabla(); // Actualizar la tabla
                                    }
                                });
                            }
                            else {
                                Swal.fire('Error no se activó el registro: ' + response.response, '', 'error');
                            }
                        },
                        error: function (respoo) {
                            Swal.fire('Error no se activó el registro por función: ' + respoo, '', 'error');
                        }
                    });
                }
            });
        }
    });

    function actualizarTabla() {
        $.ajax({
            url: '../Controller/getMarcasData.php',
            type: 'GET',
            success: function (html) {
                document.querySelector('#tablaMarca tbody').innerHTML = html;
                agregarEventosAcciones(); // Añadir eventos para desactivar/activar
            },
            error: function () {
                Swal.fire('Error al actualizar la tabla', '', 'error');
            }
        });
    }

    function agregarEventosAcciones() {
        document.querySelectorAll('.btn-danger, .btn-success').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                var id = this.getAttribute('href').split('=')[1];
                var action = this.classList.contains('btn-danger') ? 'desactivar' : 'activar';
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: `¿Desea ${action} esta marca?`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, ' + action,
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '../Controller/updateMarcaStatus.php',
                            type: 'POST',
                            data: { id: id, action: action },
                            success: function (respo) {
                                var response = JSON.parse(respo);
                                if (response.response === 'success') {
                                    Swal.fire('Actualizado', `La marca ha sido ${action}ada.`, 'success');
                                    actualizarTabla(); // Actualizar la tabla
                                } else {
                                    Swal.fire('Error', response.response, 'error');
                                }
                            },
                            error: function () {
                                Swal.fire('Error', 'No se pudo actualizar el estado de la marca.', 'error');
                            }
                        });
                    }
                });
            });
        });
    }

    actualizarTabla(); // Añadir eventos al cargar la página
});
