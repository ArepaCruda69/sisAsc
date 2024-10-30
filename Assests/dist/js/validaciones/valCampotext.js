function validarCampo(campoId) {
    var campo = document.getElementById(campoId);
    if (campo.value === '') {
        campo.classList.add('is-invalid');
        return false;
    } else {
        campo.classList.remove('is-invalid');
        campo.classList.add('is-valid');
        return true;
    }
}

function validarTodoFormulario() {
    var esValido = true;

    // Lista de IDs de los campos
    var campos = ['txtcliente', 'txtdescripcion', 'txtdescripcion2', 'txtip', 'txtancho', 'txtconsumibles', 'txtasignado', 'txtfrecuencia'];

    campos.forEach(function(campoId) {
        if (!validarCampo(campoId)) {
            esValido = false;
        }
    });

    return esValido;
}
