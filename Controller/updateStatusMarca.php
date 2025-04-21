<?php
include '../Model/conexion.php';

$conn = conectarDB("bdd_sisasc");

if (isset($_POST['id_marca']) && isset($_POST['statuss'])) {
    $idMarca = $_POST['id_marca'];
    $statuss = $_POST['statuss'];

    $query = $conn->prepare("UPDATE marca SET status_marca = ? WHERE id_marca = ?");
    $query->bind_param('si', $statuss, $idMarca);
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