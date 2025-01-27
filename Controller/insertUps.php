<?php 
include '../Model/conexion.php';

if ($_POST['actionUps'] == "btUpss") {
    $dataUps = json_decode($_POST['jsonUps'], true);
    $responseUps = 1; // Por defecto, 1 es el valor de error

    foreach ($dataUps as $dataUpsS) {
        $modeloUps = $dataUpsS["modeloups"];
        $serialUps = $dataUpsS["serialups"];
        $unidadUps = $dataUpsS["unidadups"];
        $fechaUps = $dataUpsS["fechaups"];
        $cantidadUps = $dataUpsS["cantidadups"];
        $modelobateriaUps = $dataUpsS["modelobateriaups"];
        $obserUps = $dataUpsS["obserups"];

        $insertcliUps = $conexion->prepare("INSERT INTO ups (modelo_ups, serial_ups, unidad, fecha_instalacion, cantidad_bateria, modelo_bateria, observaciones_ups) VALUES (?, ?, ?, ?, ?, ?, ?)");
        if ($insertcliUps === false) {
            error_log("Error en la preparación de la declaración: " . $conexion->error);
            echo json_encode(array("response" => 1)); // Error
            exit();
        }
        $insertcliUps->bind_param("ssssiss", $modeloUps, $serialUps, $unidadUps, $fechaUps, $cantidadUps, $modelobateriaUps, $obserUps);
        $executeResult = $insertcliUps->execute();

        if (!$executeResult) {
            error_log("Error al ejecutar la declaración: " . $insertcliUps->error);
            echo json_encode(array("response" => 1)); // Error
            exit();
        } else {
            $responseUps = 0; // Éxito
        }
    }

    echo json_encode(array("response" => $responseUps));
}
?>
