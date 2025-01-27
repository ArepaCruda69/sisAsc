




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

  


    if (dataUps == ""  ) {
        Swal.fire({
            icon: "warning",
            title: "Campos Vacios",
            text: "El registro de los campos esta vacio, debe seleccionar almenos un item para guardar",
        });
        
    } else if (!dataUps == "" ) {
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
                var jsonUps = JSON.stringify(dataUps); 
                
                $.ajax({
                    url: '../Controller/insertUps.php',
                    type: 'POST',
                    async: true,
                    data: { actionUps: actionUps, jsonUps: jsonUps },
                    success: function (respo) {
                        if (respo == 0) {
                            Swal.fire({
                                title: 'Correcto',
                                text: "Registrado Correctamente",
                                icon: 'success',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'Ok'
                            })
                        }
                        else {
                            Swal.fire('Error no se activo el registro por valor' + respo, '', 'error')
                        }
                    },
                    error: function (respo) {
                        Swal.fire('Error no se activo el registro por funcion' + respo, '', 'error')
                    }
                });
            }
        });
    }
});





