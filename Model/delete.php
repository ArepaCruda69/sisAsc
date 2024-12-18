<?php
include 'conexion.php';  // Asegúrate de que la ruta sea correcta

$conn = conectarDB();
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    error_log("ID recibido para eliminación: " . $id);  // Log de depuración

    // Eliminar el registro
    $sql = "DELETE FROM ups WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        error_log("Error en la preparación de la declaración: " . $conn->error);  // Log de depuración
    }
    $stmt->bind_param('i', $id);
    if ($stmt->execute()) {
        header("Location: ../Views/ups.php?delete_status=success");
        exit();
    } else {
        error_log("Error al ejecutar la declaración: " . $stmt->error);  // Log de depuración
        echo "Error al eliminar el registro: " . $conn->error;
    }
} else {
    echo "No se proporcionó un ID válido.";
}

$conn->close();
?>
