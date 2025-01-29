<?php
include '../Model/conexion.php';

$conn = conectarDB("bdd_sisasc");

$queryTabla = $conn->prepare("SELECT id_impresora, modelo_impresora, marca_impresora, serial_impresora, tipo_impresora, estilo_impresora, puerto_impresora, ancho_impresora, consumible_impresora, estatus_impresora, unidad_impresora, asignado_impresora FROM impresoras");
$queryTabla->execute();
$resultTabla = $queryTabla->get_result();

while ($row = $resultTabla->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['id_impresora']) . "</td>";
    echo "<td>" . htmlspecialchars($row['modelo_impresora']) . "</td>";
    echo "<td>" . htmlspecialchars($row['marca_impresora']) . "</td>";
    echo "<td>" . htmlspecialchars($row['serial_impresora']) . "</td>";
    echo "<td>" . htmlspecialchars($row['tipo_impresora']) . "</td>";
    echo "<td>" . htmlspecialchars($row['estilo_impresora']) . "</td>";
    echo "<td>" . htmlspecialchars($row['puerto_impresora']) . "</td>";
    echo "<td>" . htmlspecialchars($row['ancho_impresora']) . "</td>";
    echo "<td>" . htmlspecialchars($row['consumible_impresora']) . "</td>";
    echo "<td>" . htmlspecialchars($row['estatus_impresora']) . "</td>";
    echo "<td>" . htmlspecialchars($row['unidad_impresora']) . "</td>";
    echo "<td>" . htmlspecialchars($row['asignado_impresora']) . "</td>";
    echo "<td>" . htmlspecialchars($row['observaciones']) . "</td>";
    echo "<td>";
    echo "<button class='btn btn-danger' href='../Model/deleteImpresora.php?id=" . $row['id_impresora'] . "'>Eliminar</button>";
    echo "</td>";
    echo "</tr>";
}

$conn->close();
?>
