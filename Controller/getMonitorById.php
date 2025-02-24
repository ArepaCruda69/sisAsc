<?php
include '../Model/conexion.php';

$conn = conectarDB("bdd_sisasc");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = $conn->prepare("SELECT modelo_monitor, marca_monitor, serial_monitor, puertos_monitor, panel_monitor, hercios_monitor, asignado_monitor FROM monitor WHERE id_monitor = ?");
    $query->bind_param('i', $id);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
        echo json_encode($result->fetch_assoc());
    } else {
        echo json_encode(array("response" => "No se encontró el registro."));
    }
} else {
    echo json_encode(array("response" => "ID no proporcionado."));
}

$conn->close();
?>
