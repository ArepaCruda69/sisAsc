
document.addEventListener('DOMContentLoaded', function() {
    let editingg = false;
    let editinggId = null;


document.getElementById("btMouse").addEventListener("click", () => {
    var actionMouse = editingg ?  "updateMouse" :"btMouse";
    var dataMouse = [];
    


    var txtmodelomouse = document.getElementById("txtModeloMouse").value;
    var txtmarcamouse = document.getElementById("txtMarcaMouse").value;
    var txtserialmouse = document.getElementById("txtSerialMouse").value;
    var txtpuertomouse = document.getElementById("txtPuertoMouse").value;
    var txttipomouse = document.getElementById("txtTipoMouse").value;
    var txtasignadomouse = document.getElementById("txtAsignadoMouse").value;
    
    dataMouse.push({
        "idmouse": editinggId,
        "modelomouse": txtmodelomouse,
        "marcamouse": txtmarcamouse,
        "serialmouse": txtserialmouse,
        "puertomouse": txtpuertomouse,
        "tipomouse": txttipomouse,
        "asignadomouse": txtasignadomouse,
    });

  


    if (dataMouse.length === 0) {
        Swal.fire({
            icon: "warning",
            title: "Campos Vacios",
            text: "El registro de los campos esta vacio, debe seleccionar almenos un item para guardar",
        });
        
    } else {
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
                    url: editingg ? '../Controller/updateMouse.php' :'../Controller/insertMTM.php',
                    type: 'POST',
                    async: true,
                    data: { actionMouse: actionMouse, jsonMouse: jsonMouse },
                    success: function (respo) {
                        var responsee = JSON.parse(respo);
                        if (responsee.responsee === 0) {
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


function cargarMarcas() {
    $.ajax({
        url: '../Controller/getMarcas.php',
        type: 'GET',
        success: function(data) {
            const marcas = JSON.parse(data);
            const selectMarca = document.getElementById("txtMarcaMouse");
            selectMarca.innerHTML = "<option value=''>Seleccione...</option>";
            marcas.forEach(marca => {
                const option = document.createElement("option");
                option.value = marca.marca_marca;
                option.textContent = marca.marca_marca;
                selectMarca.appendChild(option);
            });
        },
        error: function() {
            Swal.fire('Error', 'No se pudo cargar las marcas.', 'error');
        }
    });
}


function actualizarTabla() {
    $.ajax({
        url: '../Controller/getMouseData.php',
        type: 'GET',
        success: function (html) {
            document.querySelector('#example4 tbody').innerHTML = html;
            agregarEventosEliminar(); // Añadir eventos de eliminación
            agregarEventosEditar(); // Añadir eventos de edición
        },
        error: function () {
            Swal.fire('Error al actualizar la tabla', '', 'error');
        }
    });
}

function agregarEventosEliminar() {
    document.querySelectorAll('.btn-danger').forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            var id = this.getAttribute('href').split('=')[1];
            Swal.fire({
                title: '¿Estás seguro?',
                text: "No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '../Model/deleteMouse.php?idmouse=' + id,
                        type: 'GET',
                        success: function (respo) {
                            var response = JSON.parse(respo);
                            if (response.response === 'success') {
                                Swal.fire('Eliminado!', 'El registro ha sido eliminado.', 'success');
                                actualizarTabla(); // Actualizar la tabla
                            } else {
                                Swal.fire('Error', response.response, 'error');
                            }
                        },
                        error: function () {
                            Swal.fire('Error', 'No se pudo eliminar el registro.', 'error');
                        }
                    });
                }
            });
        });
    });
}


function agregarEventosEditar() {
    document.querySelectorAll('.btn-warning').forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            var id = this.getAttribute('onclick').split('(')[1].split(')')[0];
            editarRegistro(id);
        });
    });
}

function editarRegistro(id) {
    $.ajax({
        url: '../Controller/getMouseById.php',
        type: 'GET',
        data: { id: id },
        success: function (respo) {
            var dattaas = JSON.parse(respo);
            document.getElementById("txtModeloMouse").value = dattaas.modelo_teclado;
            document.getElementById("txtMarcaMouse").value = dattaas.marca_teclado;
            document.getElementById("txtSerialMouse").value = dattaas.serial_teclado;
            document.getElementById("txtPuertoMouse").value = dattaas.puertos_teclado;
            document.getElementById("txtTipoMouse").value = dattaas.tipo_teclado;
            document.getElementById("txtAsignadoMouse").value = dattaas.asignado_teclado;

            editingg = true;
            editinggId = id;
            document.getElementById("btMouse").textContent = "Actualizar"; // Cambiar el texto del botón
        },
        error: function () {
            Swal.fire('Error', 'No se pudo cargar el registro.', 'error');
        }
    });
}


cargarMarcas();
actualizarTabla(); 




});

