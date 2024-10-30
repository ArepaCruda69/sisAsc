function agregar() {
    if (confirm("¿Estás seguro de que deseas agregar?")) {
        console.log("Elemento agregado");
        alert("Elemento agregado correctamente.");
    } else {
        console.log("Acción de agregar cancelada");
    }
}
