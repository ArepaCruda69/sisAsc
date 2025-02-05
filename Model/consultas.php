<?php
include	'conexion.php';

$query = "SELECT * FROM marca";
$resultados = mysqli_query($conexion,$query);


$query = "SELECT * FROM puertos";
$resultadoss = mysqli_query($conexion,$query);

?>