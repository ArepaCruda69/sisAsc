<?php
include '../Model/conexion.php';

if ($_POST['actionTeclado'] == "updateTeclado") {
    $dataTeclado = json_decode($_POST['jsonTecl'], true)[0];

    $id = $dataTeclado["id"];
    $modeloTeclado = $dataTeclado["modeloteclado"];
    $marcaTeclado = $dataTeclado["marcateclado"];
    $serialTeclado = $dataTeclado["serialteclado"];
    $puerToteclado = $dataTeclado["puertoteclado"];
    $tipoTeclado = $dataTeclado["tipoteclado"];
    $asignadoTeclado = $dataTeclado["asignadoteclado"];

    $updatecliTecl = $conexion->prepare("UPDATE teclados SET modelo_teclado = ?, marca_teclado = ?, serial_teclado = ?, puertos_teclado = ?, tipo_teclado = ?, asignado_teclado = ? WHERE id_teclado = ?");
    if ($updatecliTecl === false) {
        error_log("Error en la preparación de la declaración: " . $conexion->error);
        echo json_encode(array("response" => 1)); // Error
        exit();
    }
    $updatecliTecl->bind_param("ssssssi", $modeloTeclado, $marcaTeclado, $serialTeclado, $puerToteclado, $tipoTeclado, $asignadoTeclado, $id);
    $executeResult = $updatecliTecl->execute();

    if (!$executeResult) {
        error_log("Error al ejecutar la declaración: " . $updatecliTecl->error);
        echo json_encode(array("response" => 1)); // Error
    } else {
        echo json_encode(array("response" => 0)); // Éxito
    }
}
?>
