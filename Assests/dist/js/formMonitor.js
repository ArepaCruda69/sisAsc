




document.getElementById("btMonitor").addEventListener("click", () => {
    var actionMonitor = "btMonitors";
    var dataMonitor = [];
    


    var txtmodelomonitor = document.getElementById("txtModeloMonitor").value;
    var txtmarcamonitor = document.getElementById("txtMarcaMonitor").value;
    var txtserialmonitor = document.getElementById("txtSerialMonitor").value;
    var txtpuertomonitor = document.getElementById("txtPuertoMonitor").value;
    var txtpanelmonitor = document.getElementById("txtPanelMonitor").value;
    var txtherciosmonitor = document.getElementById("txtHerciosMonitor").value;
    
    dataMonitor.push({
        "modelomonitor": txtmodelomonitor,
        "marcamonitor": txtmarcamonitor,
        "serialmonitor": txtserialmonitor,
        "puertomonitor": txtpuertomonitor,
        "panelmonitor": txtpanelmonitor,
        "herciosmonitor": txtherciosmonitor,
    });

  


    if (dataMonitor == ""  ) {
        Swal.fire({
            icon: "warning",
            title: "Campos Vacios",
            text: "El registro de los campos esta vacio, debe seleccionar almenos un item para guardar",
        });
        
    } else if (!dataMonitor == "" ) {
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
                var jsonMont = JSON.stringify(dataMonitor); 
                
                $.ajax({
                    url: '../Controller/insertMTM.php',
                    type: 'POST',
                    async: true,
                    data: { actionMonitor: actionMonitor, jsonMont: jsonMont },
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





