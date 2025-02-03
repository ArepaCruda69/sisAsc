
<?php 
include	'../Model/conexion.php';


if ($_POST['actionImp'] == "btImpresoras") {
    $dataImp = json_decode($_POST['jsonImp'], true);
    $responseImp='';



    foreach ($dataImp as $dataImps) {
        $modeloImpresora = $dataImps["modeloImpresora"];
        $marcaImpresora = $dataImps["marcaImpresora"];
        $serialImpresora = $dataImps["serialImpresora"];
        $tipoImpresora = $dataImps["tipoImpresora"];
        $estiloImpresora = $dataImps["estiloImpresora"];
        $puertoImpresora = $dataImps["puertoImpresora"];
        $anchoImpresora = $dataImps["anchoImpresora"];
        $consumibleImpresora = $dataImps["consumibleImpresora"];
        $estatusImpresora = $dataImps["estatusImpresora"];
        $unidadImpresora = $dataImps["unidadImpresora"];
        $asignadoImpresora = $dataImps["asignadoImpresora"];
        $obsImpresora = $dataImps["obsImpresora"];

        $insertcliImpr = $conexion->prepare("INSERT INTO impresoras (modelo_impresora,marca_impresora,serial_impresora,tipo_impresora,estilo_impresora,puerto_impresora,ancho_impresora,consumible_impresora,estatus_impresora,unidad_impresora,asignado_impresora,observaciones) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
        if ($insertcliImpr === false) {
            error_log("Error en la preparación de la declaración: " . $conexion->error);
            echo json_encode(array("response" => 1)); // Error
            exit();
        }
        $insertcliImpr->bind_param("ssssssssssss", $modeloImpresora, $marcaImpresora, $serialImpresora, $tipoImpresora,$estiloImpresora,$puertoImpresora,$anchoImpresora,$consumibleImpresora,$estatusImpresora,$unidadImpresora,$asignadoImpresora,$obsImpresora);
        $executeResult = $insertcliImpr->execute();

        if (!$executeResult) {
            error_log("Error al ejecutar la declaración: " . $insertcliImpr->error);
            echo json_encode(array("response" => 1)); // Error
            exit();
        } else {
            $responseImp = 0; // Éxito
        }
    }


    echo json_encode(array("response" => $responseImp));
}
?>



