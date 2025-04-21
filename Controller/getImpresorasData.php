<?php
include '../Model/conexion.php';

$conn = conectarDB("bdd_sisasc");

$queryTabla = $conn->prepare("SELECT id_impresora, modelo_impresora, marca_impresora, serial_impresora, tipo_impresora, estilo_impresora, puerto_impresora, ancho_impresora, consumible_impresora, estatus_impresora, unidad_impresora, asignado_impresora, observaciones FROM impresoras");
$queryTabla->execute();
$resultTabla = $queryTabla->get_result();

while ($row = $resultTabla->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['modelo_impresora']) . "</td>";
    echo "<td>" . htmlspecialchars($row['marca_impresora']) . "</td>";
    echo "<td>" . htmlspecialchars($row['serial_impresora']) . "</td>";
    echo "<td>" . htmlspecialchars($row['unidad_impresora']) . "</td>";
    echo "<td>" . htmlspecialchars($row['estilo_impresora']) . "</td>";
    echo "<td>
    <button type='button' class='btn btn-warning btn-sm' onclick='editRecord(" . $row['id_impresora'] . ")'>Editar</button>
    <a href='../Model/deleteImpresora.php?id=" . $row['id_impresora'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('¿Estás seguro de eliminar este registro?');\">Eliminar</a>
    </td>";
echo "</tr>";
}

$conn->close();
?>
