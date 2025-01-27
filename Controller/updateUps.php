<?php
include '../Model/conexion.php';

if ($_POST['actionUps'] == "updateUps") {
    $dataUps = json_decode($_POST['jsonUps'], true)[0];

    $id = $dataUps["id"];
    $modeloUps = $dataUps["modeloups"];
    $serialUps = $dataUps["serialups"];
    $unidadUps = $dataUps["unidadups"];
    $fechaUps = $dataUps["fechaups"];
    $cantidadUps = $dataUps["cantidadups"];
    $modelobateriaUps = $dataUps["modelobateriaups"];
    $obserUps = $dataUps["obserups"];

    $updatecliUps = $conexion->prepare("UPDATE ups SET modelo_ups = ?, serial_ups = ?, unidad = ?, fecha_instalacion = ?, cantidad_bateria = ?, modelo_bateria = ?, observaciones_ups = ? WHERE id_ups = ?");
    if ($updatecliUps === false) {
        error_log("Error en la preparación de la declaración: " . $conexion->error);
        echo json_encode(array("response" => 1)); // Error
        exit();
    }
    $updatecliUps->bind_param("ssssissi", $modeloUps, $serialUps, $unidadUps, $fechaUps, $cantidadUps, $modelobateriaUps, $obserUps, $id);
    $executeResult = $updatecliUps->execute();

    if (!$executeResult) {
        error_log("Error al ejecutar la declaración: " . $updatecliUps->error);
        echo json_encode(array("response" => 1)); // Error
    } else {
        echo json_encode(array("response" => 0)); // Éxito
    }
}
?>
