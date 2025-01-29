document.addEventListener('DOMContentLoaded', function() {
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

    function actualizarTabla() {
        $.ajax({
            url: '../Controller/getImpresorasData.php',
            type: 'GET',
            success: function(html) {
                document.querySelector('#tablaImpresora tbody').innerHTML = html;
                agregarEventosEliminar();
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
                                if (respo.response === 'success') {
                                    Swal.fire('Eliminado!', 'La impresora ha sido eliminada.', 'success');
                                    actualizarTabla();
                                } else {
                                    Swal.fire('Error', respo.response, 'error');
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

    // Llamadas a las funciones de carga
    cargarMarcas();
    cargarPuertos();

    document.getElementById("btImpresora").addEventListener("click", () => {
        var actionImp = "btImpresoras";
        var dataImp = [];

        var txtModeloImpresora = document.getElementById("txtModeloImpresora").value;
        var txtMarcaImpresora = document.getElementById("txtMarcaImpresora").value;
        var txtSerialImpresora = document.getElementById("txtSerialImpresora").value;
        var txtTipoImpresora = document.getElementById("txtTipoImpresora").value;
        var txtEstiloImpresora = document.getElementById("txtEstiloImpresora").value;
        var txtPuertoImpresora = document.getElementById("txtPuertoImpresora").value;
        var txtAnchoImpresora = document.getElementById("txtAnchoImpresora").value;
        var txtConsumibleImpresora = document.getElementById("txtConsumibleImpresora").value;
        var txtEstatusImpresora = document.getElementById("txtEstatusImpresora").value;
        var txtUnidadImpresora = document.getElementById("txtUnidadImpresora").value;
        var txtAsignadoImpresora = document.getElementById("txtAsignadoImpresora").value;
        var txtObsImpresora = document.getElementById("txtObsImpresora").value;

        dataImp.push({
            "modeloImpresora": txtModeloImpresora,
            "marcaImpresora": txtMarcaImpresora,
            "serialImpresora": txtSerialImpresora,
            "tipoImpresora": txtTipoImpresora,
            "estiloImpresora": txtEstiloImpresora,
            "puertoImpresora": txtPuertoImpresora,
            "anchoImpresora": txtAnchoImpresora,
            "consumibleImpresora": txtConsumibleImpresora,
            "estatusImpresora": txtEstatusImpresora,
            "unidadImpresora": txtUnidadImpresora,
            "asignadoImpresora": txtAsignadoImpresora,
            "obsImpresora": txtObsImpresora
        });

        if (!txtModeloImpresora || !txtMarcaImpresora || !txtSerialImpresora || !txtAnchoImpresora || !txtConsumibleImpresora) {
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
                        url: '../Controller/insertImpresora.php',
                        type: 'POST',
                        async: true,
                        data: { actionImp: actionImp, jsonImp: jsonImp },
                        success: function(respo) {
                            if (respo == 0) {
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
                                Swal.fire('Error no se activó el registro: ' + respo, '', 'error');
                            }
                        },
                        error: function(respo) {
                            Swal.fire('Error no se activó el registro: ' + respo, '', 'error');
                        }
                    });
                }
            });
        }
    });

    actualizarTabla(); // Añadir eventos al cargar la página
});
