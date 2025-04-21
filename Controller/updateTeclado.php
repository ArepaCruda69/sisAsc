<?php
include '../Model/conexion.php';

if ($_POST['actionTeclado'] == "updateTeclado") {
    $dataTeclado = json_decode($_POST['jsonTeclado'], true)[0];

    $idt = $dataTeclado["idTeclado"];
    $modeloTeclado = $dataTeclado["modeloteclado"];
    $marcaTeclado = $dataTeclado["marcateclado"];
    $serialTeclado = $dataTeclado["serialteclado"];
    $puertoTeclado = $dataTeclado["puertoteclado"];
    $tipoTeclado = $dataTeclado["tipoteclado"];
    $asignadoTeclado = $dataTeclado["asignadoteclado"];

    $updatecliTeclado = $conexion->prepare("UPDATE teclados SET modelo_teclado = ?, marca_teclado = ?, serial_teclado = ?, puertos_teclado = ?, tipo_teclado = ?, asignado_teclado = ? WHERE id_teclado = ?");
    if ($updatecliTeclado === false) {
        error_log("Error en la preparación de la declaración: " . $conexion->error);
        echo json_encode(array("response" => 1)); // Error
        exit();
    }
    $updatecliTeclado->bind_param("ssssssi", $modeloTeclado, $marcaTeclado, $serialTeclado, $puertoTeclado, $tipoTeclado, $asignadoTeclado, $idt);
    $executeResult = $updatecliTeclado->execute();

    if (!$executeResult) {
        error_log("Error al ejecutar la declaración: " . $updatecliTeclado->error);
        echo json_encode(array("response" => 1)); // Error
    } else {
        echo json_encode(array("response" => 0)); // Éxito
    }
}
?>
