<?php
include '../Model/conexion.php';

$conn = conectarDB("bdd_sisasc");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = $conn->prepare("SELECT modelo_teclado, marca_teclado, serial_teclado, puertos_teclado, tipo_teclado, asignado_teclado FROM teclados WHERE id_teclado = ?");
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
