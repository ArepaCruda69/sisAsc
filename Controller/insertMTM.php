

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
        $asignadoMonitor = $dataMonts["asignadomonitor"];

        $insertcliMont = $conexion->prepare("INSERT INTO monitor (modelo_monitor,marca_monitor,serial_monitor,puertos_monitor,panel_monitor,hercios_monitor,asignado_monitor) VALUES (?,?,?,?,?,?,?)");
        $insertcliMont->bind_param("sssssss", $modeloMonitor, $marcaMonitor, $serialMonitor, $puertoMonitor,$panelMonitor,$herciosMonitor,$asignadoMonitor);
        $insertcliMont->execute();

       

        if (!$insertcliMont) {
            $responseMont = 1;
           
        } else if ($insertcliMont) {
            $responseMont = 0;
           
        }
    }

 

}




if ($_POST['actionTeclado'] == "btTeclados") {
    $dataTecl = json_decode($_POST['jsonTecl'], true);

    $responseTecl='';



    foreach ($dataTecl as $dataTecls) {
        $modeloTeclado = $dataTecls["modeloteclado"];
        $marcaTeclado = $dataTecls["marcateclado"];
        $serialTeclado = $dataTecls["serialteclado"];
        $puertoTeclado = $dataTecls["puertoteclado"];
        $tipoTeclado = $dataTecls["tipoteclado"];
        $asignadoTeclado = $dataTecls["asignadoteclado"];


        $insertcliTecl = $conexion->prepare("INSERT INTO teclados (modelo_teclado,marca_teclado,serial_teclado,puertos_teclado,tipo_teclado,asignado_teclado) VALUES (?,?,?,?,?,?)");
        $insertcliTecl->bind_param("ssssss", $modeloTeclado, $marcaTeclado, $serialTeclado, $puertoTeclado,$tipoTeclado,$asignadoTeclado);
        $insertcliTecl->execute();

       

        if (!$insertcliTecl) {
            $responseTecl = 1;
           
        } else if ($insertcliTecl) {
            $responseTecl = 0;
           
        }
    }

 
    



}



if ($_POST['actionMouse'] == "btMouse") {
    $dataMouse = json_decode($_POST['jsonMouse'], true);

    $responseMouse='';



    foreach ($dataMouse as $dataMouses) {
        $modeloMouse = $dataMouses["modelomouse"];
        $marcaMouse = $dataMouses["marcamouse"];
        $serialMouse = $dataMouses["serialmouse"];
        $puertoMouse = $dataMouses["puertomouse"];
        $tipoMouse = $dataMouses["tipomouse"];
        $asignadoMouse = $dataMouses["asignadomouse"];


        $insertcliMouse = $conexion->prepare("INSERT INTO mouse (modelo_mouse,marca_mouse,serial_mouse,puertos_mouse,tipo_mouse,asignado_mouse) VALUES (?,?,?,?,?,?)");
        $insertcliMouse->bind_param("ssssss", $modeloMouse, $marcaMouse, $serialMouse, $puertoMouse,$tipoMouse, $asignadoMouse);
        $insertcliMouse->execute();

       

        if (!$insertcliMouse) {
            $responseMouse = 1;
           
        } else if ($insertcliMouse) {
            $responseMouse = 0;
           
        }
    }

 
    



}



 

?>