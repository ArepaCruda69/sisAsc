<?php
include '../Model/conexion.php';

$conn = conectarDB("bdd_sisasc");

if (isset($_POST['id_motivop']) && isset($_POST['statusm'])) {
    $idMotivop = $_POST['id_motivop'];
    $statusm = $_POST['statusm'];

    $query = $conn->prepare("UPDATE motivo_preventivo SET status_motivop = ? WHERE id_motivop = ?");
    $query->bind_param('si', $statusm, $idMotivop);
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