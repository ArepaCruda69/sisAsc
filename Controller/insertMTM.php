

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
        if ($insertcliMont === false) {
            error_log("Error en la preparación de la declaración: " . $conexion->error);
            echo json_encode(array("response" => 1)); // Error
            exit();
        }
        $insertcliMont->bind_param("sssssss", $modeloMonitor, $marcaMonitor, $serialMonitor, $puertoMonitor, $panelMonitor, $herciosMonitor, $asignadoMonitor);
        $executeResult = $insertcliMont->execute();

        if (!$executeResult) {
            error_log("Error al ejecutar la declaración: " . $insertcliMont->error);
            echo json_encode(array("response" => 1)); // Error
            exit();
        } else {
            $responseMont = 0; // Éxito
        }
    }

    echo json_encode(array("response" => $responseMont));
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
        if ($insertcliTecl === false) {
            error_log("Error en la preparación de la declaración: " . $conexion->error);
            echo json_encode(array("response" => 1)); // Error
            exit();
        }
        $insertcliTecl->bind_param("ssssss", $modeloTeclado, $marcaTeclado, $serialTeclado, $puertoTeclado, $tipoTeclado, $asignadoTeclado);
        $executeResult = $insertcliTecl->execute();

        if (!$executeResult) {
            error_log("Error al ejecutar la declaración: " . $insertcliTecl->error);
            echo json_encode(array("response" => 1)); // Error
            exit();
        } else {
            $responseTecl = 0; // Éxito
        }
    }

    echo json_encode(array("response" => $responseTecl));
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

        $insertcliMous = $conexion->prepare("INSERT INTO mouse (modelo_mouse,marca_mouse,serial_mouse,puertos_mouse,tipo_mouse,asignado_mouse) VALUES (?,?,?,?,?,?)");
        if ($insertcliMous === false) {
            error_log("Error en la preparación de la declaración: " . $conexion->error);
            echo json_encode(array("response" => 1)); // Error
            exit();
        }
        $insertcliMous->bind_param("ssssss", $modeloMouse, $marcaMouse, $serialMouse, $puertoMouse, $tipoMouse, $asignadoMouse);
        $executeResult = $insertcliMous->execute();

        if (!$executeResult) {
            error_log("Error al ejecutar la declaración: " . $insertcliMous->error);
            echo json_encode(array("response" => 1)); // Error
            exit();
        } else {
            $responseMouse = 0; // Éxito
        }
    }

    echo json_encode(array("response" => $responseMouse));
}



?>