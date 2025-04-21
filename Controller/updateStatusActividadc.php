<?php
include '../Model/conexion.php';

$conn = conectarDB("bdd_sisasc");

if (isset($_POST['id_actividadc']) && isset($_POST['statusactc'])) {
    $idActividadc = $_POST['id_actividadc'];
    $statusactc = $_POST['statusactc'];

    $query = $conn->prepare("UPDATE actividad_correctivo SET status_actividadc = ? WHERE id_actividadc = ?");
    $query->bind_param('si', $statusactc, $idActividadc);
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