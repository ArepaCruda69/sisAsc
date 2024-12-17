<?php
include '../Model/conexion.php';

$conn = conectarDB();
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar el registro
    $sql = "DELETE FROM ups WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    if ($stmt->execute()) {
        header("Location: ups.php?status=success");
    } else {
        echo "Error al eliminar el registro: " . $conn->error;
    }
} else {
    echo "No se proporcionó un ID válido.";
}
?>
