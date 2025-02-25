<?php
include '../Model/conexion.php';

$conn = conectarDB("bdd_sisasc");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = $conn->prepare("SELECT modelo_mouse, marca_mouse, serial_mouse, puertos_mouse, tipo_mouse, asignado_mouse FROM mouse WHERE id_mouse = ?");
    $query->bind_param('i', $id);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        error_log("Datos obtenidos: " . json_encode($data)); // Log de depuración
        echo json_encode($data);
    } else {
        echo json_encode(array("response" => "No se encontró el registro."));
    }
} else {
    echo json_encode(array("response" => "ID no proporcionado."));
}

$conn->close();
?>