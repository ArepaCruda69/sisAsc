<?php
include '../Model/conexion.php';

$conn = conectarDB("bdd_sisasc");

$queryTabla = $conn->prepare("SELECT id_marca, marca_marca, status_marca FROM marca");
$queryTabla->execute();
$resultTabla = $queryTabla->get_result();

while ($row = $resultTabla->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['id_marca']) . "</td>";
    echo "<td>" . htmlspecialchars($row['marca_marca']) . "</td>";
    echo "<td>";
    if ($row['status_marca'] == 1) {
        echo "<button class='btn btn-danger' href='../Model/updateMarcaStatus.php?id=" . $row['id_marca'] . "&status=0'>Desactivar</button>";
    } else {
        echo "<button class='btn btn-success' href='../Model/updateMarcaStatus.php?id=" . $row['id_marca'] . "&status=1'>Activar</button>";
    }
    echo "</td>";
    echo "</tr>";
}

$conn->close();
?>
