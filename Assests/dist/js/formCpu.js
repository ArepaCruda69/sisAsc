var dataRam = [];
var cant = 0;

document.getElementById("btRam").addEventListener("click", () => {
        var txtmodelo = document.getElementById("txtModeloRam").value;
        var txtmarca = document.getElementById("txtMarcaRam").value;
        var txtserial = document.getElementById("txtSerialRam").value;
        var txttipo = document.getElementById("txtTipoRam").value;
        var txtcapacidad = document.getElementById("txtCapacidadRam").value;
        var txtvelocidad = document.getElementById("txtVelocidadRam").value;
        
        if (txtmodelo === "" || txtmarca === "" || txtserial === "" || txtcapacidad === "") {
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
            var fila = '<tr id="' + id_row + '"><td>' + txtmarca + '</td><td>' + txtmodelo + '</td><td>' + txtserial + '</td><td>' + txttipo + '</td><td>' + txtcapacidad + '</td><td>' + txtvelocidad + '</td><td><button type="button" class="btn btn-danger" onclick="EliminarRAM(' + cant + ')"><i class="fas fa-solid fa-trash"></i></button></td></tr>';
            
            $("#tbodyRam").append(fila);

            dataRam.push({
                "id": cant,
                "modelo": txtmodelo,
                "marca": txtmarca,
                "serial": txtserial,
                "tipo": txttipo,
                "capacidad": txtcapacidad,
                "velocidad": txtvelocidad,
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
        var txtmodelo = document.getElementById("txtModeloDisco").value;
        var txtmarca = document.getElementById("txtMarcaDisco").value;
        var txtserial = document.getElementById("txtSerialDisco").value;
        var txttipo = document.getElementById("txtTipoDisco").value;
        var txtcapacidad = document.getElementById("txtCapacidadDisco").value;
        var txtpuerto = document.getElementById("txtPuertoDisco").value;
        
        if (txtmodelo === "" || txtmarca === "" || txtserial === "" || txtcapacidad === "") {
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
            var fila = '<tr id="' + id_row + '"><td>' + txtmarca + '</td><td>' + txtmodelo + '</td><td>' + txtserial + '</td><td>' + txttipo + '</td><td>' + txtcapacidad + '</td><td>' + txtpuerto + '</td><td><button type="button" class="btn btn-danger" onclick="EliminarDisco(' + cantt + ')"><i class="fas fa-solid fa-trash"></i></button></td></tr>';
            
            $("#tbodyDisco").append(fila);

            dataRam.push({
                "id": cant,
                "modelo": txtmodelo,
                "marca": txtmarca,
                "serial": txtserial,
                "tipo": txttipo,
                "capacidad": txtcapacidad,
                "puerto": txtpuerto,
            });
            cant++;
            document.getElementById("txtModeloDisco").value = "";
            document.getElementById("txtMarcaDisco").value = "";
            document.getElementById("txtSerialDisco").value = "";
            document.getElementById("txtTipoDiscoDisco").value = "";
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



document.getElementById("guardarCpus").addEventListener("click", () => {
    var action = "guardarCpu";

    if (datasintomas == "") {
        Swal.fire({
            icon: "warning",
            title: "Campos Vacios",
            text: "El registro de sintomas esta vacio, debe seleccionar almenos un item para guardar",
        });
    } else if (!datasintomas == "") {
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
                var json = JSON.stringify(datasintomas);
                $.ajax({
                    url: '/Controller/inserts.php',
                    type: 'POST',
                    async: true,
                    data: { action: action, json: json },
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
                            Swal.fire('Error no se activo el registro' + respo, '', 'error')
                        }
                    },
                    error: function (respo) {
                        Swal.fire('Error no se activo el registro' + respo, '', 'error')
                    }
                });
            }
        });
    }
});


document.getElementById("btCpu").addEventListener("click", () => {
    var action = "btCpus";
    var dataCpu = [];


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

    if (datasintomas == "") {
        Swal.fire({
            icon: "warning",
            title: "Campos Vacios",
            text: "El registro de sintomas esta vacio, debe seleccionar almenos un item para guardar",
        });
    } else if (!datasintomas == "") {
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
                var json = JSON.stringify(datasintomas);
                $.ajax({
                    url: '../PHP/Controllers/inserts.php',
                    type: 'POST',
                    async: true,
                    data: { action: action, json: json },
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
                            Swal.fire('Error no se activo el registro' + respo, '', 'error')
                        }
                    },
                    error: function (respo) {
                        Swal.fire('Error no se activo el registro' + respo, '', 'error')
                    }
                });
            }
        });
    }
});





