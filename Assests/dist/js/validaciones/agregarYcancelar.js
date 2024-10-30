function agregar() {
    if (validarTodoFormulario()) {
        // Aquí iría la acción de agregar, por ejemplo:
        alert('Formulario válido y datos agregados.');
        // Puedes agregar tu lógica aquí, como enviar los datos a un servidor
    } else {
        alert('Por favor, completa todos los campos obligatorios.');
    }
}

function cancelar() {
    // Acción para el botón cancelar, por ejemplo, limpiar el formulario:
    document.getElementById('miFormulario').reset();
    alert('Acción cancelada.');
}
