var dataDisco = [];
var cant = 0;

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
            var id_row = "row" + cant;
            var fila = '<tr id="' + id_row + '"><td>' + txtmarca + '</td><td>' + txtmodelo + '</td><td>' + txtserial + '</td><td>' + txttipo + '</td><td>' + txtcapacidad + '</td><td>' + txtpuerto + '</td><td><button type="button" class="btn btn-danger" onclick="EliminarRAM(' + cant + ')"><i class="fas fa-solid fa-trash"></i></button></td></tr>';
            
            $("#tbodyDisco").append(fila);

            dataRam.push({
                id: cant,
                modelo: txtmodelo,
                marca: txtmarca,
                serial: txtserial,
                tipo: txttipo,
                capacidad: txtcapacidad,
                puerto: txtpuerto,
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

