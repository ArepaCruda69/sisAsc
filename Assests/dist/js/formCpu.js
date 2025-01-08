var dataRam = [];
var cant = 0;

document.getElementById("btRam").addEventListener("click", () => {
        var txtmodeloram = document.getElementById("txtModeloRam").value;
        var txtmarcaram = document.getElementById("txtMarcaRam").value;
        var txtserialram = document.getElementById("txtSerialRam").value;
        var txttiporam = document.getElementById("txtTipoRam").value;
        var txtcapacidadram = document.getElementById("txtCapacidadRam").value;
        var txtvelocidadram = document.getElementById("txtVelocidadRam").value;
        
        if (txtmodeloram === "" || txtmarcaram === "" || txtserialram === "" || txtcapacidadram === "") {
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "warning",
                text: "Debe seleccionar el modelo, marca, serial y la capacidad"
            });
        } else {
            var id_row = "row" + cant;
            var fila = '<tr id="' + id_row + '"><td>' + txtmarcaram + '</td><td>' + txtmodeloram + '</td><td>' + txtserialram + '</td><td>' + txttiporam + '</td><td>' + txtcapacidadram + '</td><td>' + txtvelocidadram + '</td><td><button type="button" class="btn btn-danger" onclick="EliminarRAM(' + cant + ')"><i class="fas fa-solid fa-trash"></i></button></td></tr>';
            
            $("#tbodyRam").append(fila);

            dataRam.push({
                "id": cant,
                "modeloram": txtmodeloram,
                "marcaram": txtmarcaram,
                "serialram": txtserialram,
                "tiporam": txttiporam,
                "capacidadram": txtcapacidadram,
                "velocidadram": txtvelocidadram,
            });
            cant++;
            document.getElementById("txtModeloRam").value = "";
            document.getElementById("txtMarcaRam").value = "";
            document.getElementById("txtSerialRam").value = "";
            document.getElementById("txtTipoRam").value = "";
            document.getElementById("txtCapacidadRam").value = "";
            document.getElementById("txtVelocidadRam").value = "";
        }
});

function EliminarRAM(row) {
    $("#row" + row).remove();
    var index = dataRam.findIndex(item => item.id === row);
    if (index !== -1) {
        dataRam.splice(index, 1);
    }

    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 1000,
        timerProgressBar: true,
    });
    Toast.fire({
        icon: "success",
        title: "Registro Eliminado"
    });
}




var dataDisco = [];
var cantt = 0;

document.getElementById("btDisco").addEventListener("click", () => {
        var txtmodelodisco = document.getElementById("txtModeloDisco").value;
        var txtmarcadisco = document.getElementById("txtMarcaDisco").value;
        var txtserialdisco = document.getElementById("txtSerialDisco").value;
        var txttipodisco = document.getElementById("txtTipoDisco").value;
        var txtcapacidaddisco = document.getElementById("txtCapacidadDisco").value;
        var txtpuertodisco = document.getElementById("txtPuertoDisco").value;
        
        if (txtmodelodisco === "" || txtmarcadisco === "" || txtserialdisco === "" || txtcapacidaddisco === "") {
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "warning",
                text: "Debe seleccionar el modelo, marca, serial y la capacidad"
            });
        } else {
            var id_row = "row" + cantt;
            var fila = '<tr id="' + id_row + '"><td>' + txtmarcadisco + '</td><td>' + txtmodelodisco + '</td><td>' + txtserialdisco + '</td><td>' + txttipodisco + '</td><td>' + txtcapacidaddisco + '</td><td>' + txtpuertodisco + '</td><td><button type="button" class="btn btn-danger" onclick="EliminarDisco(' + cantt + ')"><i class="fas fa-solid fa-trash"></i></button></td></tr>';
            
            $("#tbodyDisco").append(fila);

            dataDisco.push({
                "id": cant,
                "modelodisco": txtmodelodisco,
                "marcadisco": txtmarcadisco,
                "serialdisco": txtserialdisco,
                "tipodisco": txttipodisco,
                "capacidaddisco": txtcapacidaddisco,
                "puertodisco": txtpuertodisco,
            });
            cant++;
            document.getElementById("txtModeloDisco").value = "";
            document.getElementById("txtMarcaDisco").value = "";
            document.getElementById("txtSerialDisco").value = "";
            document.getElementById("txtTipoDisco").value = "";
            document.getElementById("txtCapacidadDisco").value = "";
            document.getElementById("txtPuertoDisco").value = "";
        }
});

function EliminarDisco(row) {
    $("#row" + row).remove();
    var index = dataDisco.findIndex(item => item.id === row);
    if (index !== -1) {
        dataDisco.splice(index, 1);
    }

    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 1000,
        timerProgressBar: true,
    });
    Toast.fire({
        icon: "success",
        title: "Registro Eliminado"
    });
}






document.getElementById("btCpu").addEventListener("click", () => {
    var action = "btCpus";
    var dataCpu = [];
    var dataMadre = [];
    var dataProcesador = [];
    var dataFuentePoder = [];
    var dataLecturaDisco = [];
    var dataTarjetaGrafica = [];
    


    var txtnombrecpu = document.getElementById("txtNombreCpu").value;
    var txtunidadcpu = document.getElementById("txtUnidadCpu").value;
    var txtmarcacpu = document.getElementById("txtMarcaCpu").value;
    var txtmodelcpu = document.getElementById("txtModeloCpu").value;
    
    dataCpu.push({
        "nombrecpu": txtnombrecpu,
        "unidadcpu": txtunidadcpu,
        "marcacpu": txtmarcacpu,
        "modelocpu": txtmodelcpu,
    });

    
    var txtmarcamadre = document.getElementById("txtMarcaMadre").value;
    var txtmodelomadre = document.getElementById("txtModeloMadre").value;
    var txtserialmadre= document.getElementById("txtSerialMadre").value;
    
    dataMadre.push({
        "marcamadre": txtmarcamadre,
        "modelomadre": txtmodelomadre,
        "serialmadre": txtserialmadre,
    });

    var txtmarcaprocesador = document.getElementById("txtMarcaProcesador").value;
    var txtmodeloprocesador = document.getElementById("txtModeloProcesador").value;
    var txtgeneracionprocesador= document.getElementById("txtGeneracionProcesador").value;
    var txtserialprocesador= document.getElementById("txtSerialProcesador").value;
    var txtherciosprocesador= document.getElementById("txtHerciosProcesador").value;
    
    dataProcesador.push({
        "marcaprocesador": txtmarcaprocesador,
        "modeloprocesador": txtmodeloprocesador,
        "generacionprocesador": txtgeneracionprocesador,
        "serialprocesador": txtserialprocesador,
        "herciosprocesador": txtherciosprocesador,
    });

    
   

    var txtmarcapoder = document.getElementById("txtMarcaPoder").value;
    var txtmodelopoder = document.getElementById("txtModeloPoder").value;
    var txtserialpoder= document.getElementById("txtSerialPoder").value;
    var txtvoltajepoder= document.getElementById("txtVoltajePoder").value;
    var txttipopoder= document.getElementById("txtTipoPoder").value;
    
    dataFuentePoder.push({
        "marcapoder": txtmarcapoder,
        "modelopoder": txtmodelopoder,
        "serialpoder": txtserialpoder,
        "voltajepoder": txtvoltajepoder,
        "tipopoder": txttipopoder,
    });

    var txtmarcalector = document.getElementById("txtMarcaLector").value;
    var txtmodelolector = document.getElementById("txtModeloLector").value;
    var txtseriallector= document.getElementById("txtSerialLector").value;
    var txttipolector= document.getElementById("txtTipoLector").value;
    var txtpuertolector= document.getElementById("txtPuertoLector").value;
    
    dataLecturaDisco.push({
        "marcalector": txtmarcalector,
        "modelolector": txtmodelolector,
        "seriallector": txtseriallector,
        "tipolector": txttipolector,
        "puertolector": txtpuertolector,
    });

    


    var txtmarcagrafica = document.getElementById("txtMarcaGrafica").value;
    var txtmodelografica = document.getElementById("txtModeloGrafica").value;
    var txtserialgrafica= document.getElementById("txtSerialGrafica").value;
    var txtcapacidadgrafica= document.getElementById("txtCapacidadGrafica").value;
    var txtvelocidadgrafica= document.getElementById("txtVelocidadGrafica").value;
    
    dataTarjetaGrafica.push({
        "marcagrafica": txtmarcagrafica,
        "modelografica": txtmodelografica,
        "serialgrafica": txtserialgrafica,
        "capacidadgrafica": txtcapacidadgrafica,
        "velocidadgrafica": txtvelocidadgrafica,
    });



    if (dataCpu == "" || dataMadre == "" || dataProcesador == ""   || dataRam == "" || dataDisco == "" || dataFuentePoder == ""|| dataLecturaDisco == "" || dataTarjetaGrafica == "" ) {
        Swal.fire({
            icon: "warning",
            title: "Campos Vacios",
            text: "El registro de los campos esta vacio, debe seleccionar almenos un item para guardar",
        });
    } else if (!dataCpu == "" || !dataMadre == "" || !dataProcesador == "" || !dataRam == "" || !dataDisco == "" || !dataFuentePoder == "" || !dataLecturaDisco == "" || !dataTarjetaGrafica == "") {
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
                var json = JSON.stringify(dataCpu); 
                var json1 = JSON.stringify(dataMadre); 
                var json2 = JSON.stringify(dataProcesador);
                var json3= JSON.stringify(dataRam);
                var json4 = JSON.stringify(dataDisco);
                var json7= JSON.stringify(dataFuentePoder);
                var json5 = JSON.stringify(dataLecturaDisco);
                var json6 = JSON.stringify(dataTarjetaGrafica);
                
                $.ajax({
                    url: '../Controller/insert.php',
                    type: 'POST',
                    async: true,
                    data: { action: action, json: json, json1: json1, json2: json2, json3: json3,json4: json4, json7: json7, json5: json5, json6: json6 },
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





