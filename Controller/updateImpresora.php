<?php
include '../Model/conexion.php';

if ($_POST['actionImp'] == "updateImpresora") {
    $dataImp = json_decode($_POST['jsonImp'], true)[0];
    
    $idi = $dataImp["id"];
    $modeloImpresora = $dataImp["modeloImpresora"];
    $marcaImpresora = $dataImp["marcaImpresora"];
    $serialImpresora = $dataImp["serialImpresora"];
    $tipoImpresora = $dataImp["tipoImpresora"];
    $estiloImpresora = $dataImp["estiloImpresora"];
    $puertoImpresora = $dataImp["puertoImpresora"];
    $anchoImpresora = $dataImp["anchoImpresora"];
    $consumibleImpresora = $dataImp["consumibleImpresora"];
    $estatusImpresora = $dataImp["estatusImpresora"];
    $unidadImpresora = $dataImp["unidadImpresora"];
    $asignadoImpresora = $dataImp["asignadoImpresora"];
    $obsImpresora = $dataImp["obsImpresora"];

    $updatecliImp = $conexion->prepare("UPDATE impresoras SET modelo_impresora = ?, marca_impresora = ?, serial_impresora = ?, tipo_impresora = ?, estilo_impresora = ?, puerto_impresora = ?, ancho_impresora = ?, consumible_impresora = ?, estatus_impresora = ?, unidad_impresora = ?, asignado_impresora = ?, observaciones = ?  WHERE id_impresora = ?");
    if ($updatecliImp === false) {
        error_log("Error en la preparación de la declaración: " . $conexion->error);
        echo json_encode(array("response" => "Error en la preparación de la declaración: " . $conexion->error)); // Error
        exit();
    }
    $updatecliImp->bind_param("ssssssssssssi", $modeloImpresora, $marcaImpresora, $serialImpresora, $tipoImpresora, $estiloImpresora, $puertoImpresora, $anchoImpresora, $consumibleImpresora, $estatusImpresora, $unidadImpresora, $asignadoImpresora, $obsImpresora, $idi);
    $executeResult = $updatecliImp->execute();

    if (!$executeResult) {
        error_log("Error al ejecutar la declaración: " . $updatecliImp->error);
        echo json_encode(array("response" => "Error al ejecutar la declaración: " . $updatecliImp->error)); // Error
    } else {
        echo json_encode(array("response" => 0)); // Éxito
    }
}
?>