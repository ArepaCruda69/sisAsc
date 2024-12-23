<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

include 'marcaModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $codigo = $_POST['codigo'];
    $marca = $_POST['marca'];
    $equipo = $_POST['equipo'];

    $marcaModel = new marcaModel();
    if ($marcaModel->registrarMarca($codigo, $marca, $equipo)) {
        echo "success"; // Cambiamos esto para que sea más claro al usar fetch
    } else {
        echo "error";
    }
}
?>
