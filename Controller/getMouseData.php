<?php
include '../Model/conexion.php';

$conn = conectarDB("bdd_sisasc");

$queryTabla = $conn->prepare("SELECT id_mouse, modelo_mouse, marca_mouse, serial_mouse, puertos_mouse, tipo_mouse, asignado_mouse FROM mouse");
$queryTabla->execute();
$resultTabla = $queryTabla->get_result();

while ($row = $resultTabla->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['modelo_mouse']) . "</td>";
    echo "<td>" . htmlspecialchars($row['marca_mouse']) . "</td>";
    echo "<td>" . htmlspecialchars($row['serial_mouse']) . "</td>";
    echo "<td>" . htmlspecialchars($row['tipo_mouse']) . "</td>";
    echo "<td>" . htmlspecialchars($row['asignado_mouse']) . "</td>";
    echo "<td>
        <button type='button' class='btn btn-warning btn-sm' onclick='editRecord(" . $row['id_mouse'] . ")'>Editar</button>
        <a href='../Model/deleteMouse.php?id=" . $row['id_mouse'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('¿Estás seguro de eliminar este registro?');\">Eliminar</a>
        </td>";
    echo "</tr>";
}

$conn->close();
?>