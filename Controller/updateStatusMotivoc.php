<?php
include '../Model/conexion.php';

$conn = conectarDB("bdd_sisasc");

if (isset($_POST['id_motivoc']) && isset($_POST['statusc'])) {
    $idMotivoc = $_POST['id_motivoc'];
    $statusc = $_POST['statusc'];

    $query = $conn->prepare("UPDATE motivo_correctivo SET status_motivoc = ? WHERE id_motivoc = ?");
    $query->bind_param('si', $statusc, $idMotivoc);
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