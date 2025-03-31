<?php
include	'conexion.php';

$query = "SELECT * FROM marca";
$resultados = mysqli_query($conexion,$query);


$query = "SELECT * FROM puertos";
$resultadoss = mysqli_query($conexion,$query);


$query = "SELECT * FROM motivo_preventivo";
$resultadosm = mysqli_query($conexion,$query);

$query = "SELECT * FROM motivo_correctivo";
$resultadosc = mysqli_query($conexion,$query);

?>  