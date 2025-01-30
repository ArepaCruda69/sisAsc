<?php
include '../Model/conexion.php';
$conn = conectarDB("bd_globales");

$query = "SELECT nom_unidad FROM glo_1unidad";
$result = mysqli_query($conn, $query);

$unidades = array();

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $unidades[] = $row;
    }
}

$conn->close();

echo json_encode($unidades);
?>
