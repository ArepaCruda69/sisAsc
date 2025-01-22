

<?php 
include	'../Model/conexion.php';


if ($_POST['actionMonitor'] == "btMonitors") {
    $dataMont = json_decode($_POST['jsonMont'], true);

    $responseMont='';



    foreach ($dataMont as $dataMonts) {
        $modeloMonitor = $dataMonts["modelomonitor"];
        $marcaMonitor = $dataMonts["marcamonitor"];
        $serialMonitor = $dataMonts["serialmonitor"];
        $puertoMonitor = $dataMonts["puertomonitor"];
        $panelMonitor = $dataMonts["panelmonitor"];
        $herciosMonitor = $dataMonts["herciosmonitor"];

        $insertcliMont = $conexion->prepare("INSERT INTO monitor (modelo_monitor,marca_monitor,serial_monitor,puertos_monitor,panel_monitor,hercios_monitor) VALUES (?,?,?,?,?,?)");
        $insertcliMont->bind_param("ssssss", $modeloMonitor, $marcaMonitor, $serialMonitor, $puertoMonitor,$panelMonitor,$herciosMonitor);
        $insertcliMont->execute();

       

        if (!$insertcliMont) {
            $responseMont = 1;
           
        } else if ($insertcliMont) {
            $responseMont = 0;
           
        }
    }

 

}




if ($_POST['actionMonitor'] == "btMonitors") {
    $dataMont = json_decode($_POST['jsonMont'], true);

    $responseMont='';



    foreach ($dataMont as $dataMonts) {
        $modeloMonitor = $dataMonts["modelomonitor"];
        $marcaMonitor = $dataMonts["marcamonitor"];
        $serialMonitor = $dataMonts["serialmonitor"];
        $puertoMonitor = $dataMonts["puertomonitor"];
        $panelMonitor = $dataMonts["panelmonitor"];
        $herciosMonitor = $dataMonts["herciosmonitor"];

        $insertcliMont = $conexion->prepare("INSERT INTO monitor (modelo_monitor,marca_monitor,serial_monitor,puertos_monitor,panel_monitor,hercios_monitor) VALUES (?,?,?,?,?,?)");
        $insertcliMont->bind_param("ssssss", $modeloMonitor, $marcaMonitor, $serialMonitor, $puertoMonitor,$panelMonitor,$herciosMonitor);
        $insertcliMont->execute();

       

        if (!$insertcliMont) {
            $responseMont = 1;
           
        } else if ($insertcliMont) {
            $responseMont = 0;
           
        }
    }

 
    



}



if ($_POST['actionMonitor'] == "btMonitors") {
    $dataMont = json_decode($_POST['jsonMont'], true);

    $responseMont='';



    foreach ($dataMont as $dataMonts) {
        $modeloMonitor = $dataMonts["modelomonitor"];
        $marcaMonitor = $dataMonts["marcamonitor"];
        $serialMonitor = $dataMonts["serialmonitor"];
        $puertoMonitor = $dataMonts["puertomonitor"];
        $panelMonitor = $dataMonts["panelmonitor"];
        $herciosMonitor = $dataMonts["herciosmonitor"];

        $insertcliMont = $conexion->prepare("INSERT INTO monitor (modelo_monitor,marca_monitor,serial_monitor,puertos_monitor,panel_monitor,hercios_monitor) VALUES (?,?,?,?,?,?)");
        $insertcliMont->bind_param("ssssss", $modeloMonitor, $marcaMonitor, $serialMonitor, $puertoMonitor,$panelMonitor,$herciosMonitor);
        $insertcliMont->execute();

       

        if (!$insertcliMont) {
            $responseMont = 1;
           
        } else if ($insertcliMont) {
            $responseMont = 0;
           
        }
    }

 
    



}



 

?>