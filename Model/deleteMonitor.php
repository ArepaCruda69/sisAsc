<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'conexion.php';  // Asegúrate de que la ruta sea correcta

$conn = conectarDB("bdd_sisasc");  // Conectar a la base de datos bdd_sisasc
if ($conn->connect_error) {
    die(json_encode(array("response" => "La conexión falló: " . $conn->connect_error)));
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    error_log("ID recibido para eliminación: " . $id);  // Log de depuración

    // Eliminar el registro
    $sql = "DELETE FROM monitor WHERE id_monitor = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        error_log("Error en la preparación de la declaración: " . $conn->error);  // Log de depuración
        die(json_encode(array("response" => "Error en la consulta: " . $conn->error)));
    }
    $stmt->bind_param('i', $id);
    if ($stmt->execute()) {
        echo json_encode(array("response" => "success"));
    } else {
        error_log("Error al ejecutar la declaración: " . $stmt->error);  // Log de depuración
        die(json_encode(array("response" => "Error al eliminar el registro: " . $stmt->error)));
    }
} else {
    die(json_encode(array("response" => "No se proporcionó un ID válido.")));
}

$conn->close();
?>
