document.getElementById("btActividadp").addEventListener("click", () => {
    var actionact = "btActividadp";
    var txtactividadp = document.getElementById("txtActividadp").value;

    if (txtactividadp == "") {
        Swal.fire({
            icon: "warning",
            title: "Campos Vacíos",
            text: "El registro de los campos está vacío, debe seleccionar al menos un ítem para guardar",
        });
    } else if (txtactividadp !== "") {
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
                    data: { actionact: actionact, txtactividadp: txtactividadp },
                    success: function (respoo) {
                        if (respoo == 0) { // Cambiado response.response a respoo
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