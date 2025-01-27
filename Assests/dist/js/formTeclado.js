




document.getElementById("btTeclado").addEventListener("click", () => {
    var actionTeclado = "btTeclados";
    var dataTeclado = [];
    


    var txtmodeloteclado = document.getElementById("txtModeloTeclado").value;
    var txtmarcateclado = document.getElementById("txtMarcaTeclado").value;
    var txtserialteclado = document.getElementById("txtSerialTeclado").value;
    var txtpuertoteclado = document.getElementById("txtPuertoTeclado").value;
    var txttipoteclado = document.getElementById("txtTipoTeclado").value;
    
    dataTeclado.push({
        "modeloteclado": txtmodeloteclado,
        "marcateclado": txtmarcateclado,
        "serialteclado": txtserialteclado,
        "puertoteclado": txtpuertoteclado,
        "tipoteclado": txttipoteclado,
    });

  


    if (dataTeclado == ""  ) {
        Swal.fire({
            icon: "warning",
            title: "Campos Vacios",
            text: "El registro de los campos esta vacio, debe seleccionar almenos un item para guardar",
        });
        
    } else if (!dataTeclado == "" ) {
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
                var jsonTecl = JSON.stringify(dataTeclado); 
                
                $.ajax({
                    url: '../Controller/insertMTM.php',
                    type: 'POST',
                    async: true,
                    data: { actionTeclado: actionTeclado, jsonTecl: jsonTecl },
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





