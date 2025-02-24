<?php
include '../Model/conexion.php';

if ($_POST['actionMonitor'] == "updateMonitor") {
    $dataMonitor = json_decode($_POST['jsonMonitor'], true)[0];

    $idm = $dataMonitor["idmonitor"];
    $modeloMonitor = $dataMonitor["modelomonitor"];
    $marcaMonitor = $dataMonitor["marcamonitor"];
    $serialMonitor = $dataMonitor["serialmonitor"];
    $puertoMonitor = $dataMonitor["puertomonitor"];
    $panelMonitor = $dataMonitor["panelmonitor"];
    $herciosMonitor = $dataMonitor["herciosmonitor"];
    $asignadoMonitor = $dataMonitor["asignadomonitor"];

    $updatecliMonitor = $conexion->prepare("UPDATE monitor SET modelo_monitor = ?, marca_monitor = ?, serial_monitor = ?, puertos_monitor = ?, panel_monitor = ?, hercios_monitor = ?, asignado_monitor = ? WHERE id_monitor = ?");
    if ($updatecliMonitor === false) {
        error_log("Error en la preparación de la declaración: " . $conexion->error);
        echo json_encode(array("response" => 1)); // Error
        exit();
    }
    $updatecliMonitor->bind_param("sssssssi", $modeloMonitor, $marcaMonitor, $serialMonitor, $puertoMonitor, $panelMonitor, $herciosMonitor, $asignadoMonitor, $idm);
    $executeResult = $updatecliMonitor->execute();

    if (!$executeResult) {
        error_log("Error al ejecutar la declaración: " . $updatecliMonitor->error);
        echo json_encode(array("response" => 1)); // Error
    } else {
        echo json_encode(array("response" => 0)); // Éxito
    }
}
?>
