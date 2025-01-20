
document.getElementById("btPuertos").addEventListener("click", () => {
    var actiooon = "btPuertos";
    


    var txtnombrepuertos = document.getElementById("txtNombrePuertos").value;


    if (txtnombrepuertos == "" ) {
        Swal.fire({
            icon: "warning",
            title: "Campos Vacios",
            text: "El registro de los campos esta vacio, debe seleccionar almenos un item para guardar",
        });
    } else if (!txtnombrepuertos == "" ) {
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
                    data: { actiooon: actiooon, txtnombrepuertos: txtnombrepuertos  },
                    success: function (resoo) {
                        if (resoo == 0) {
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
                            Swal.fire('Error no se activo el registro por valor' + resoo, '', 'error')
                        }
                    },
                    error: function (resoo) {
                        Swal.fire('Error no se activo el registro por funcion' + resoo, '', 'error')
                    }
                });
            }
        });
    }
});





