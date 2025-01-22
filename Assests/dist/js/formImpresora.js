




document.getElementById("btImpresora").addEventListener("click", () => {
    var actionImp = "btImpresoras";
    var dataImpresora = [];
    


    var txtmodeloimpresora = document.getElementById("txtModeloImpresora").value;
    var txtmarcaimpresora = document.getElementById("txtMarcaImpresora").value;
    var txtserialimpresora = document.getElementById("txtSerialImpresora").value;
    var txttipoimpresora = document.getElementById("txtTipoImpresora").value;
    var txtestiloimpresora = document.getElementById("txtEstiloImpresora").value;
    var txtpuertoimpresora = document.getElementById("txtPuertoImpresora").value;
    var txtanchoimpresora = document.getElementById("txtAnchoImpresora").value;
    var txtconsumibleimpresora = document.getElementById("txtConsumibleImpresora").value;
    var txtestatusimpresora = document.getElementById("txtEstatusImpresora").value;
    var txtunidadimpresora = document.getElementById("txtUnidadImpresora").value;
    var txtasignadoimpresora = document.getElementById("txtAsignadoImpresora").value;
    var txtobsimpresora = document.getElementById("txtObsImpresora").value;
    
    dataImpresora.push({
        "modeloImpresora": txtmodeloimpresora,
        "marcaImpresora": txtmarcaimpresora,
        "serialImpresora": txtserialimpresora,
        "tipoImpresora": txttipoimpresora,
        "estiloImpresora": txtestiloimpresora,
        "puertoImpresora": txtpuertoimpresora,
        "anchoImpresora": txtanchoimpresora,
        "consumibleImpresora": txtconsumibleimpresora,
        "estatusImpresora": txtestatusimpresora,
        "unidadImpresora": txtunidadimpresora,
        "asignadoImpresora": txtasignadoimpresora,
        "obsImpresora": txtobsimpresora,
    });

  


    if (dataImpresora == ""  ) {
        Swal.fire({
            icon: "warning",
            title: "Campos Vacios",
            text: "El registro de los campos esta vacio, debe seleccionar almenos un item para guardar",
        });
        
    } else if (!dataImpresora == "" ) {
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
                var jsonImp = JSON.stringify(dataImpresora); 
                
                $.ajax({
                    url: '../Controller/insertImpresora.php',
                    type: 'POST',
                    async: true,
                    data: { actionImp: actionImp, jsonImp: jsonImp },
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





