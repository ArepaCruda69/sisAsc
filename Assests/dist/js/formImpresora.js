
document.addEventListener('DOMContentLoaded', function() {
    let editingg = false;
    let editingIid = null;

    document.getElementById("btImpresora").addEventListener("click", () => {
        var actionImp = editingg ? "updateImpresora" : "btImpresoras";
        var dataImp = [];

        var txtmodeloimpresora = document.getElementById("txtModeloImpresora").value;
        var txtmarcaimpresora = document.getElementById("txtMarcaImpresora").value;
        var txtseiialImpresora = document.getElementById("txtSerialImpresora").value;
        var txttipoimpresora = document.getElementById("txtTipoImpresora").value;
        var txtestiloimpresora = document.getElementById("txtEstiloImpresora").value;
        var txtpuertoimpresora = document.getElementById("txtPuertoImpresora").value;
        var txtanchoimpresora = document.getElementById("txtAnchoImpresora").value;
        var txtconsumibleimpresora = document.getElementById("txtConsumibleImpresora").value;
        var txtestatusimpresora = document.getElementById("txtEstatusImpresora").value;
        var txtunidadimpresora = document.getElementById("txtUnidadImpresora").value;
        var txtasignadoimpresora = document.getElementById("txtAsignadoImpresora").value;
        var txtobsimpresora = document.getElementById("txtObsImpresora").value;

        dataImp.push({
            "id": editingIid,
            "modeloImpresora": txtmodeloimpresora,
            "marcaImpresora": txtmarcaimpresora,
            "serialImpresora": txtseiialImpresora,
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

        if (dataImp.length === 0) {
            Swal.fire({
                icon: "warning",
                title: "Campos Vacíos",
                text: "Por favor, complete todos los campos obligatorios.",
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
                    var jsonImp = JSON.stringify(dataImp);

                    $.ajax({
                        url: editingg ? '../Controller/updateImpresora.php' :'../Controller/insertImpresora.php',
                        type: 'POST',
                        async: true,
                        data: { actionImp: actionImp, jsonImp: jsonImp },
                        success: function(respo) {
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
                        error: function(xhr, status, error) {
                            Swal.fire('Error no se activó el registro: ' + error, '', 'error');
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
                const selectMarca = document.getElementById("txtMarcaImpresora");
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
            url: '../Controller/getImpresorasData.php',
            type: 'GET',
            success: function(html) {
                document.querySelector('#tablaImpresora tbody').innerHTML = html;
                agregarEventosEliminar();// Añadir eventos de eliminación
                agregarEventosEditar();// Añadir eventos de edición
            },
            error: function() {
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
                    text: "Esta acción no se puede deshacer!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '../Model/deleteImpresora.php?id=' + id,
                            type: 'GET',
                            success: function(respo) {
                                var response = JSON.parse(respo);
                                if (response.response === 'success') {
                                    Swal.fire('Eliminado!', 'La impresora ha sido eliminada.', 'success');
                                    actualizarTabla();
                                } else {
                                    Swal.fire('Error', response.response, 'error');
                                }
                            },
                            error: function() {
                                Swal.fire('Error', 'No se pudo eliminar la impresora.', 'error');
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
            url: '../Controller/getImpresoraById.php',
            type: 'GET',
            data: { id: id },
            success: function (respo) {
                var dataa = JSON.parse(respo);
                document.getElementById("txtModeloImpresora").value = dataa.modelo_impresora;
                document.getElementById("txtMarcaImpresora").value = dataa.marca_impresora;
                document.getElementById("txtSerialImpresora").value = dataa.serial_impresora;
                document.getElementById("txtTipoImpresora").value = dataa.tipo_impresora;
                document.getElementById("txtEstiloImpresora").value = dataa.estilo_impresora;
                document.getElementById("txtPuertoImpresora").value = dataa.puerto_impresora;
                document.getElementById("txtAnchoImpresora").value = dataa.ancho_impresora;
                document.getElementById("txtConsumibleImpresora").value = dataa.consumible_impresora;
                document.getElementById("txtEstatusImpresora").value = dataa.estatus_impresora;
                document.getElementById("txtUnidadImpresora").value = dataa.unidad_impresora;
                document.getElementById("txtAsignadoImpresora").value = dataa.asignado_impresora;
                document.getElementById("txtObsImpresora").value = dataa.observaciones;

                editingg = true;
                editingIid = id;
                document.getElementById("btImpresora").textContent = "Actualizar"; // Cambiar el texto del botón
            },
            error: function () {
                Swal.fire('Error', 'No se pudo cargar el registro.', 'error');
            }
        });
    }


    
    function cargarPuertos() {
        $.ajax({
            url: '../Controller/getPuertos.php',
            type: 'GET',
            success: function(data) {
                const puertos = JSON.parse(data);
                const selectPuerto = document.getElementById("txtPuertoImpresora");
                selectPuerto.innerHTML = "<option value=''>Seleccione...</option>";
                puertos.forEach(puerto => {
                    const option = document.createElement("option");
                    option.value = puerto.nombre_puerto;
                    option.textContent = puerto.nombre_puerto;
                    selectPuerto.appendChild(option);
                });
            },
            error: function() {
                Swal.fire('Error', 'No se pudo cargar los puertos.', 'error');
            }
        });
    }

    
    cargarPuertos();
    cargarMarcas();
    actualizarTabla(); // Añadir eventos al cargar la página


});
