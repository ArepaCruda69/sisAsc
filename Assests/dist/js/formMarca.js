
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
                                    window.location.reload();
                                   }
                                });
                            }
                            else {
                                Swal.fire('Error no se activó el registro: ' + respoo, '', 'error');
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

