<?php
include '../Model/conexion.php';

$conn = conectarDB("bdd_sisasc");

$query = $conn->prepare("SELECT id_puerto, nombre_puerto FROM puertos WHERE status_puertos = '1'");
$query->execute();
$result = $query->get_result();

$puertos = array();
while ($row = $result->fetch_assoc()) {
    $puertos[] = $row;
}

$conn->close();

echo json_encode($puertos);
?>