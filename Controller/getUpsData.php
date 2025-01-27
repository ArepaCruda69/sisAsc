<?php
include '../Model/conexion.php';

$conn = conectarDB("bdd_sisasc");

$queryTabla = $conn->prepare("SELECT id_ups, modelo_ups, serial_ups, unidad, fecha_instalacion, modelo_bateria FROM ups");
$queryTabla->execute();
$resultTabla = $queryTabla->get_result();

while ($row = $resultTabla->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['modelo_ups']) . "</td>";
    echo "<td>" . htmlspecialchars($row['serial_ups']) . "</td>";
    echo "<td>" . htmlspecialchars($row['unidad']) . "</td>";
    echo "<td>" . htmlspecialchars($row['fecha_instalacion']) . "</td>";
    echo "<td>" . htmlspecialchars($row['modelo_bateria']) . "</td>";
    echo "<td>
        <button type='button' class='btn btn-warning btn-sm' onclick='editRecord(" . $row['id_ups'] . ")'>Editar</button>
        <a href='../Model/delete.php?id=" . $row['id_ups'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('¿Estás seguro de eliminar este registro?');\">Eliminar</a>
        </td>";
    echo "</tr>";
}

$conn->close();
?>
