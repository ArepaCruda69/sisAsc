function agregar() {
    if (confirm("¿Estás seguro de que deseas agregar?")) {
        const form = document.getElementById('marcaForm');
        if (form.checkValidity() === false) {
            form.classList.add('was-validated');
            return;
        }

        const formData = new FormData(form);
        fetch('../Model/registrarMarca.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            if (data.trim() === "success") {
                console.log("Elemento agregado");
                form.reset();
                form.classList.remove('was-validated');
                const messageDiv = document.getElementById('message');
                messageDiv.style.display = 'block';
                setTimeout(() => {
                    messageDiv.style.display = 'none';
                }, 2000);
                alert("Elemento agregado correctamente.");
            } else {
                alert("Hubo un problema al agregar el elemento.");
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    } else {
        console.log("Acción de agregar cancelada");
    }
}
