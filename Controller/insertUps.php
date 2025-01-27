

<?php 
include	'../Model/conexion.php';


if ($_POST['actionUps'] == "btUpss") {
    $dataUps = json_decode($_POST['jsonUps'], true);

    $responseUps='';



    foreach ($dataUps as $dataUpsS) {
        $modeloUps = $dataUpsS["modeloups"];
        $serialUps = $dataUpsS["serialups"];
        $unidadUps = $dataUpsS["unidadups"];
        $fechaUps = $dataUpsS["fechaups"];
        $cantidadUps = $dataUpsS["cantidadups"];
        $modelobateriaUps = $dataUpsS["modelobateriaups"];
        $obserUps = $dataUpsS["obserups"];

        $insertcliUps = $conexion->prepare("INSERT INTO ups (modelo_ups,serial_ups,unidad,fecha_instalacion,cantidad_bateria,modelo_bateria,observaciones_ups) VALUES (?,?,?,?,?,?,?)");
        $insertcliUps->bind_param("sssdiss", $modeloUps, $serialUps, $unidadUps, $fechaUps,$cantidadUps,$modelobateriaUps,$obserUps);
        $insertcliUps->execute();

       

        if (!$insertcliUps) {
            $responseUps = 1;
           
        } else if ($insertcliUps) {
            $responseUps = 0;
           
        }
    }

 
    



}


 

?>