<?php
include '../Model/conexion.php';

$conn = conectarDB("bdd_sisasc");

$queryTabla = $conn->prepare("SELECT id_monitor, modelo_monitor, marca_monitor, serial_monitor, hercios_monitor, asignado_monitor FROM monitor");
$queryTabla->execute();
$resultTabla = $queryTabla->get_result();

while ($row = $resultTabla->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['modelo_monitor']) . "</td>";
    echo "<td>" . htmlspecialchars($row['marca_monitor']) . "</td>";
    echo "<td>" . htmlspecialchars($row['serial_monitor']) . "</td>";
    echo "<td>" . htmlspecialchars($row['hercios_monitor']) . "</td>";
    echo "<td>" . htmlspecialchars($row['asignado_monitor']) . "</td>";
    echo "<td>
        <button type='button' class='btn btn-warning btn-sm' onclick='editRecord(" . $row['id_monitor'] . ")'>Editar</button>
        <a href='../Model/deleteMonitor.php?id=" . $row['id_monitor'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('¿Estás seguro de eliminar este registro?');\">Eliminar</a>
        </td>";
    echo "</tr>";
}

$conn->close();
?>
