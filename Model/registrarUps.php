<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

include 'upsModel.php'; // Ajusta la ruta según tu estructura de carpetas

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $modelo = $_POST['modelo'];
    $serial = $_POST['serial'];
    $unidad = $_POST['unidad'];
    $fecha_instalacion = $_POST['fecha_instalacion'];
    $cantidad_bateria = $_POST['cantidad_bateria'];
    $modelo_bateria = $_POST['modelo_bateria'];

    $upsModel = new upsModel();
    if ($upsModel->registrarUPS($nombre, $modelo, $serial, $unidad, $fecha_instalacion, $cantidad_bateria, $modelo_bateria)) {
        echo "Nuevo registro creado con éxito" . $upsModel->conn->error;
    } else {
        echo "Error al registrar el UPS";
    }
}

?>
