<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

include 'upsModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $modelo = $_POST['modelo'];
    $serial = $_POST['serial'];
    $unidad = $_POST['unidad'];
    $fecha_instalacion = $_POST['fecha_instalacion'];
    $cantidad_bateria = $_POST['cantidad_bateria'];
    $modelo_bateria = $_POST['modelo_bateria'];
    $observaciones = $_POST['observaciones'];

    $upsModel = new upsModel();
    if ($upsModel->registrarUPS($modelo, $serial, $unidad, $fecha_instalacion, $cantidad_bateria, $modelo_bateria, $observaciones)) {
        header("Location: ../views/ups.php?status=success"); // Redirigir con el mensaje de éxito
        exit();
    } else {
        header("Location: ../views/ups.php?status=error"); // Redirigir con el mensaje de error
        exit();
    }
}
?>
