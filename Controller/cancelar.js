function cancelar() {
    if (confirm("¿Estás seguro de que deseas cancelar?")) {
        console.log("Acción cancelada");
        alert("Acción cancelada correctamente.");
    } else {
        console.log("Acción no cancelada");
    }
}

