

document.getElementById("Addsintomas").addEventListener("click", () => {
    var txtcedula = document.getElementById("txtcedula").value;
    var txtsintomas = document.getElementById("txtsintomas").value;
    var txtnumerocita = document.getElementById("txtnumerocita").value;
    var txtsintomastexto = $("#txtsintomas").find('option:selected').text();
    if (txtcedula == "" || txtsintomas == "") {
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
            text: "Debe seleccionar la Cedula y un Sintoma"
        });
    } else {
        var id_row = "row" + cant;
        var fila = '<tr id=' + id_row + '><td style="text-align: center;" hidden>' + txtsintomas + '</td><td style="text-align: center;">' + txtsintomastexto + '</td><td style="text-align: center;"><button type="button" class="btn btn-danger" onclick="EliminarSintoma(' + cant + ')"><i class="zmdi zmdi-delete"></i></button></td></tr>'
        $("#tbodysintomas").append(fila);

        datasintomas.push({
            'id': cant,
            "txtnumerocita": txtnumerocita,
            "txtcedula": txtcedula,
            "txtsintomas": txtsintomas,
        });
        cant++;
        document.getElementById("txtsintomas").value = "--Seleccionar--";
    }
});



function EliminarSintoma(row) {
    $("#row" + row).remove();
    var i = 0;
    var pos = 0;
    for (x of datasintomas) {
        if (x.id == row) {
            pos = i;
        }
        i++
    }
    datasintomas.splice(pos, 1);

    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 999,
        timerProgressBar: true,
    });
    Toast.fire({
        icon: "success",
        title: "Registro Eliminado"
    });
}





document.getElementById("guardarsintomas").addEventListener("click", () => {
    var action = "guardarsintoma";

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





