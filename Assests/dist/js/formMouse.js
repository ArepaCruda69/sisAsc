document.addEventListener('DOMContentLoaded', function() {
    let editing = false;
    let editingId = null;

    document.getElementById("btMouse").addEventListener("click", () => {
        var actionMouse = editing ? "updateMouse" : "btMousee";
        var dataMouse = [];

        var txtmodelomouse = document.getElementById("txtModeloMouse").value;
        var txtmarcamouse = document.getElementById("txtMarcaMouse").value;
        var txtserialmouse = document.getElementById("txtSerialMouse").value;
        var txtpuertomouse = document.getElementById("txtPuertoMouse").value;
        var txttipomouse = document.getElementById("txtTipoMouse").value;
        var txtasignadomouse = document.getElementById("txtAsignadoMouse").value;

        dataMouse.push({
            "idmouse": editingId,
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
                title: "Campos Vacíos",
                text: "El registro de los campos está vacío, debe seleccionar al menos un ítem para guardar",
            });
        } else {
            Swal.fire({
                title: "Atención",
                text: "¿Está seguro de guardar esta información?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, Guardar",
                cancelButtonText: "Cancelar",
            }).then((result) => {
                if (result.isConfirmed) {
                    var jsonMouse = JSON.stringify(dataMouse);

                    $.ajax({
                        url: editing ? '../Controller/updateMouse.php' : '../Controller/insertMTM.php',
                        type: 'POST',
                        async: true,
                        data: { actionMouse: actionMouse, jsonMouse: jsonMouse },
                        success: function (respo) {
                            var response = JSON.parse(respo);
                            if (response.response === 0) {
                                Swal.fire({
                                    title: 'Correcto',
                                    text: "Registrado Correctamente",
                                    icon: 'success',
                                    confirmButtonColor: '#3085d6',
                                    confirmButtonText: 'Ok'
                                }).then(() => {
                                    location.reload(); // Refrescar la página
                                });
                            } else {
                                Swal.fire('Error no se activó el registro: ' + response.response, '', 'error');
                            }
                        },
                        error: function (respo) {
                            Swal.fire('Error no se activó el registro por función: ' + respo, '', 'error');
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
                document.querySelector('#examplemouse tbody').innerHTML = html;
                agregarEventosEliminar(); // Añadir eventos de eliminación
                agregarEventosEditarMo(); // Añadir eventos de edición
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
                var idmo = this.getAttribute('href').split('=')[1];
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
                            url: '../Model/deleteMouse.php?id=' + idmo,
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

    function agregarEventosEditarMo() {
        document.querySelectorAll('.btn-warning').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                var id = this.getAttribute('onclick').split('(')[1].split(')')[0];
                editarRegistroMo(id);
            });
        });
    }

    function editarRegistroMo(id) {
        $.ajax({
            url: '../Controller/getMouseById.php',
            type: 'GET',
            data: { id: id }, // Corregir 'datam' a 'data'
            success: function (respo) {
                var datamo = JSON.parse(respo);
                document.getElementById("txtModeloMouse").value = datamo.modelo_mouse;
                document.getElementById("txtMarcaMouse").value = datamo.marca_mouse;
                document.getElementById("txtSerialMouse").value = datamo.serial_mouse;
                document.getElementById("txtPuertoMouse").value = datamo.puertos_mouse;
                document.getElementById("txtTipoMouse").value = datamo.tipo_mouse;
                document.getElementById("txtAsignadoMouse").value = datamo.asignado_mouse;

                editing = true;
                editingId = id;
                document.getElementById("btMouse").textContent = "Actualizar"; // Cambiar el texto del botón
            },
            error: function () {
                Swal.fire('Error', 'No se pudo cargar el registro.', 'error');
            }
        });
    }

    cargarMarcas();
    actualizarTabla(); // Añadir eventos al cargar la página
});
