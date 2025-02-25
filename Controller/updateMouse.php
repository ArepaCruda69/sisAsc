<?php
include '../Model/conexion.php';

if ($_POST['actionMouse'] == "updateMouse") {
    $dataMouse = json_decode($_POST['jsonMouse'], true)[0];

    $idmo = $dataMouse["idmouse"];
    $modeloMouse = $dataMouse["modelomouse"];
    $marcaMouse = $dataMouse["marcamouse"];
    $serialMouse = $dataMouse["serialmouse"];
    $puertoMouse = $dataMouse["puertomouse"];
    $tipoMouse = $dataMouse["tipomouse"];
    $asignadoMouse = $dataMouse["asignadomouse"];

    $updatecliMouse = $conexion->prepare("UPDATE mouse SET modelo_mouse = ?, marca_mouse = ?, serial_mouse = ?, puertos_mouse = ?, tipo_mouse = ?, asignado_mouse = ? WHERE id_mouse = ?");
    if ($updatecliMouse === false) {
        error_log("Error en la preparación de la declaración: " . $conexion->error);
        echo json_encode(array("response" => 1)); // Error
        exit();
    }
    $updatecliMouse->bind_param("ssssssi", $modeloMouse, $marcaMouse, $serialMouse, $puertoMouse, $tipoMouse, $asignadoMouse, $idmo);
    $executeResult = $updatecliMouse->execute();

    if (!$executeResult) {
        error_log("Error al ejecutar la declaración: " . $updatecliMouse->error);
        echo json_encode(array("response" => 1)); // Error
    } else {
        echo json_encode(array("response" => 0)); // Éxito
    }
}
?>
