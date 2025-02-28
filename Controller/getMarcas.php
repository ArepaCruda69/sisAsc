<?php
include '../Model/conexion.php';

$conn = conectarDB("bdd_sisasc");

$query = $conn->prepare("SELECT id_marca, marca_marca FROM marca WHERE status_marca = 1");
$query->execute();
$result = $query->get_result();

$marca = array();
while ($row = $result->fetch_assoc()) {
    $marca[] = $row;
}

$conn->close();

echo json_encode($marca);
?>