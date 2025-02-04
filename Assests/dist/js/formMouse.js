




document.getElementById("btMouse").addEventListener("click", () => {
    var actionMouse = "btMouse";
    var dataMouse = [];
    


    var txtmodelomouse = document.getElementById("txtModeloMouse").value;
    var txtmarcamouse = document.getElementById("txtMarcaMouse").value;
    var txtserialmouse = document.getElementById("txtSerialMouse").value;
    var txtpuertomouse = document.getElementById("txtPuertoMouse").value;
    var txttipomouse = document.getElementById("txtTipoMouse").value;
    
    dataMouse.push({
        "modelomouse": txtmodelomouse,
        "marcamouse": txtmarcamouse,
        "serialmouse": txtserialmouse,
        "puertomouse": txtpuertomouse,
        "tipomouse": txttipomouse,
    });

  


    if (dataMouse == ""  ) {
        Swal.fire({
            icon: "warning",
            title: "Campos Vacios",
            text: "El registro de los campos esta vacio, debe seleccionar almenos un item para guardar",
        });
        
    } else if (!dataMouse == "" ) {
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
                var jsonMouse = JSON.stringify(dataMouse); 
                
                $.ajax({
                    url: '../Controller/insertMTM.php',
                    type: 'POST',
                    async: true,
                    data: { actionMouse: actionMouse, jsonMouse: jsonMouse },
                    success: function (respo) {
                        if (respo == 0) {
                            Swal.fire({
                                title: 'Correcto',
                                text: "Registrado Correctamente",
                                icon: 'success',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'Ok'
                            }).then(() => {
                                location.reload(); // Refrescar la página
                            });

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





