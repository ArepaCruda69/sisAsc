<?php
include 'conexion.php';  // Incluye la conexión a la base de datos

$codigo = $_POST['codigo'];
$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$serial = $_POST['serial'];
$tipo = $_POST['tipo'];
$estilo = $_POST['estilo'];
$puerto = $_POST['puerto'];
$ip = $_POST['ip'];
$ancho = $_POST['ancho'];
$consumibles = $_POST['consumibles'];
$estatus = $_POST['estatus'];
$unidad = $_POST['unidad'];
$asignado_a = $_POST['asignado_a'];
$pc = $_POST['pc'];
$frecuencia_mantenimiento = $_POST['frecuencia_mantenimiento'];
$ultimo_mantenimiento = $_POST['ultimo_mantenimiento'];
$observaciones = $_POST['observaciones'];

$sql = "INSERT INTO impresoras (codigo, modelo, marca, serial, tipo, estilo, puerto, ip, ancho, consumibles, estatus, unidad, asignado_a, pc, frecuencia_mantenimiento, ultimo_mantenimiento, observaciones) VALUES ('$codigo', '$modelo', '$marca', '$serial', '$tipo', '$estilo', '$puerto', '$ip', '$ancho', '$consumibles', '$estatus', '$unidad', '$asignado_a', '$pc', '$frecuencia_mantenimiento', '$ultimo_mantenimiento', '$observaciones')";

if ($conn->query($sql) === TRUE) {
    echo "Impresora registrada exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();  // Cierra la conexión
?>
