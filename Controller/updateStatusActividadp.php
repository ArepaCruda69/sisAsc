<?php
include '../Model/conexion.php';

$conn = conectarDB("bdd_sisasc");

if (isset($_POST['id_actividadp']) && isset($_POST['statusact'])) {
    $idActividadp = $_POST['id_actividadp'];
    $statusact = $_POST['statusact'];

    $query = $conn->prepare("UPDATE actividad_preventivo SET status_actividadp = ? WHERE id_actividadp = ?");
    $query->bind_param('si', $statusact, $idActividadp);
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