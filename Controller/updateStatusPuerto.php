<?php
include '../Model/conexion.php';

$conn = conectarDB("bdd_sisasc");

if (isset($_POST['id_puerto']) && isset($_POST['status'])) {
    $idPuerto = $_POST['id_puerto'];
    $status = $_POST['status'];

    $query = $conn->prepare("UPDATE puertos SET status_puertos = ? WHERE id_puerto = ?");
    $query->bind_param('si', $status, $idPuerto); // Usamos 'si' porque status es string (ENUM) e id es integer
    $result = $query->execute();

    if ($result) {
        echo json_encode(array("response" => "success"));
    } else {
        echo json_encode(array("response" => "error"));
    }
} else {
    echo json_encode(array("response" => "invalid data"));
}

$conn->close();
?>