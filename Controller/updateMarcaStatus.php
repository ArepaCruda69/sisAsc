<?php
include '../Model/conexion.php';

if (isset($_POST['id']) && isset($_POST['action'])) {
    $id = $_POST['id'];
    $action = $_POST['action'];
    $status = ($action === 'activar') ? 1 : 0;

    $updateStatus = $conexion->prepare("UPDATE marcas SET status_marca = ? WHERE id_marca = ?");
    if ($updateStatus === false) {
        error_log("Error en la preparación de la declaración: " . $conexion->error);
        echo json_encode(array("response" => "Error en la consulta: " . $conexion->error));
        exit();
    }
    $updateStatus->bind_param('ii', $status, $id);
    if ($updateStatus->execute()) {
        echo json_encode(array("response" => "success"));
    } else {
        error_log("Error al ejecutar la declaración: " . $updateStatus->error);
        echo json_encode(array("response" => "Error al actualizar el estado: " . $updateStatus->error));
    }
} else {
    echo json_encode(array("response" => "ID o acción no proporcionada."));
}
?>
