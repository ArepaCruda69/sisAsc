
document.getElementById("btMarca").addEventListener("click", () => {
    var actionn = "btMarca";
    


    var txtnombremarca = document.getElementById("txtNombreMarca").value;


    if (txtnombremarca == "" ) {
        Swal.fire({
            icon: "warning",
            title: "Campos Vacios",
            text: "El registro de los campos esta vacio, debe seleccionar almenos un item para guardar",
        });
    } else if (!txtnombremarca == "" ) {
        Swal.fire({
            title: "Atención",
            text: "¿Esta seguro de guardar esta información?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Si, Guardar",
            cancelButtonText: "Cancelar",
        }).then((result) => {
            if (result.isConfirmed) {
                
                $.ajax({
                    url: '../Controller/insert.php',
                    type: 'POST',
                    async: true,
                    data: { actionn: actionn, txtnombremarca:txtnombremarca  },
                    success: function (respoo) {
                        if (respoo == 0) {
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
                            Swal.fire('Error no se activo el registro por valor' + respoo, '', 'error')
                        }
                    },
                    error: function (respoo) {
                        Swal.fire('Error no se activo el registro por funcion' + respoo, '', 'error')
                    }
                });
            }
        });
    }
});





