<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../Model/conexion.php';  // Asegúrate de que la ruta sea correcta

$conn = conectarDB("bdd_sisasc");  // Conectar a la base de datos bdd_sisasc
if ($conn->connect_error) {
    echo json_encode(array("response" => "La conexión falló: " . $conn->connect_error));
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    error_log("ID recibido para eliminación: " . $id);  // Log de depuración

    // Eliminar el registro
    $sql = "DELETE FROM impresoras WHERE id_impresora = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        error_log("Error en la preparación de la declaración: " . $conn->error);  // Log de depuración
        echo json_encode(array("response" => "Error en la consulta: " . $conn->error));
        exit();
    }
    $stmt->bind_param('i', $id);
    if ($stmt->execute()) {
        echo json_encode(array("response" => "success"));
    } else {
        error_log("Error al ejecutar la declaración: " . $stmt->error);  // Log de depuración
        echo json_encode(array("response" => "Error al eliminar el registro: " . $stmt->error));
    }
    $stmt->close();
} else {
    echo json_encode(array("response" => "No se proporcionó un ID válido."));
}

$conn->close();
?>