

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
        $insertcliImpr->bind_param("ssssssssssss", $modeloImpresora, $marcaImpresora, $serialImpresora, $tipoImpresora,$estiloImpresora,$puertoImpresora,$anchoImpresora,$consumibleImpresora,$estatusImpresora,$unidadImpresora,$asignadoImpresora,$obsImpresora);
        $insertcliImpr->execute();

       

        if (!$insertcliImpr) {
            $responseImp = 1;
           
        } else if ($insertcliImpr) {
            $responseImp = 0;
           
        }
    }

 
    



}


 

?>