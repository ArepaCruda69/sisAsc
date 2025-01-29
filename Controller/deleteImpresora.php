<?php
include '../Model/conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $deleteImpresora = $conexion->prepare("DELETE FROM impresoras WHERE id_impresora = ?");
    if ($deleteImpresora === false) {
        error_log("Error en la preparación de la declaración: " . $conexion->error);
        echo json_encode(array("response" => "Error en la consulta: " . $conexion->error));
        exit();
    }
    $deleteImpresora->bind_param('i', $id);
    if ($deleteImpresora->execute()) {
        echo json_encode(array("response" => "success"));
    } else {
        error_log("Error al ejecutar la declaración: " . $deleteImpresora->error);
        echo json_encode(array("response" => "Error al eliminar la impresora: " . $deleteImpresora->error));
    }
} else {
    echo json_encode(array("response" => "ID no proporcionado."));
}

$conexion->close();
?>
