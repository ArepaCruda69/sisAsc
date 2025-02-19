<?php
include '../Model/conexion.php';

$conn = conectarDB("bdd_sisasc");

$queryTabla = $conn->prepare("SELECT id_teclado, modelo_teclado, marca_teclado, serial_teclado, puertos_teclado, tipo_teclado,asignado_teclado FROM teclados");
$queryTabla->execute();
$resultTabla = $queryTabla->get_result();

while ($row = $resultTabla->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['modelo_teclado']) . "</td>";
    echo "<td>" . htmlspecialchars($row['marca_teclado']) . "</td>";
    echo "<td>" . htmlspecialchars($row['serial_teclado']) . "</td>";
    echo "<td>" . htmlspecialchars($row['tipo_teclado']) . "</td>";
    echo "<td>" . htmlspecialchars($row['asignado_teclado']) . "</td>";
    echo "<td>
        <button type='button' class='btn btn-warning btn-sm' onclick='editRecord(" . $row['id_teclado'] . ")'>Editar</button>
        <a href='../Model/deleteTeclados.php?id=" . $row['id_teclado'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('¿Estás seguro de eliminar este registro?');\">Eliminar</a>
        </td>";
    echo "</tr>";
}

$conn->close();
?>
