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
                id: cant,
                modelo: txtmodelo,
                marca: txtmarca,
                serial: txtserial,
                tipo: txttipo,
                capacidad: txtcapacidad,
                velocidad: txtvelocidad,
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

