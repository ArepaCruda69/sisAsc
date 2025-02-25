<?php 
include '../Model/conexion.php';


// Monitor
if ($_POST['actionMonitor'] == "btMonitorr") {
    $dataMonitor = json_decode($_POST['jsonMonitor'], true);
    $responseMonitor ='';

    foreach ($dataMonitor as $dataMonitorr) {
        $modeloMonitor = $dataMonitorr["modelomonitor"];
        $marcaMonitor = $dataMonitorr["marcamonitor"];
        $serialMonitor = $dataMonitorr["serialmonitor"];
        $puertoMonitor = $dataMonitorr["puertomonitor"];
        $panelMonitor = $dataMonitorr["panelmonitor"];
        $herciosMonitor = $dataMonitorr["herciosmonitor"];
        $asignadoMonitor = $dataMonitorr["asignadomonitor"];

        $insertcliMonitor = $conexion->prepare("INSERT INTO monitor (modelo_monitor, marca_monitor, serial_monitor, puertos_monitor, panel_monitor, hercios_monitor, asignado_monitor) VALUES (?, ?, ?, ?, ?, ?, ?)");
        if ($insertcliMonitor === false) {
            error_log("Error en la preparación de la declaración: " . $conexion->error);
            echo json_encode(array("response" => 1)); // Error
            exit();
        }
        $insertcliMonitor->bind_param("sssssss", $modeloMonitor, $marcaMonitor, $serialMonitor,$puertoMonitor, $panelMonitor, $herciosMonitor, $asignadoMonitor);
        $executeResult = $insertcliMonitor->execute();

        if (!$executeResult) {
            error_log("Error al ejecutar la declaración: " . $insertcliMonitor->error);
            echo json_encode(array("response" => 1)); // Error
            exit();
        } else {
            $responseMonitor = 0; // Éxito
        }
    }

    echo json_encode(array("response" => $responseMonitor));
}

// Teclado
if ($_POST['actionTeclado'] == "btTecladoss") {
    $dataTeclado = json_decode($_POST['jsonTeclado'], true);
    $responseTeclado ='';

    foreach ($dataTeclado as $dataTecladoo) {
        $modeloTeclado = $dataTecladoo["modeloteclado"];
        $marcaTeclado = $dataTecladoo["marcateclado"];
        $serialTeclado = $dataTecladoo["serialteclado"];
        $puertoTeclado = $dataTecladoo["puertoteclado"];
        $tipoTeclado = $dataTecladoo["tipoteclado"];
        $asignadoTeclado = $dataTecladoo["asignadoteclado"];

        $insertcliTeclado = $conexion->prepare("INSERT INTO teclados (modelo_teclado, marca_teclado, serial_teclado, puertos_teclado, tipo_teclado, asignado_teclado) VALUES (?, ?, ?, ?, ?, ?)");
        if ($insertcliTeclado === false) {
            error_log("Error en la preparación de la declaración: " . $conexion->error);
            echo json_encode(array("response" => 1)); // Error
            exit();
        }
        $insertcliTeclado->bind_param("ssssss", $modeloTeclado, $marcaTeclado, $serialTeclado,$puertoTeclado, $tipoTeclado, $asignadoTeclado);
        $executeResult = $insertcliTeclado->execute();

        if (!$executeResult) {
            error_log("Error al ejecutar la declaración: " . $insertcliTeclado->error);
            echo json_encode(array("response" => 1)); // Error
            exit();
        } else {
            $responseTeclado = 0; // Éxito
        }
    }

    echo json_encode(array("response" => $responseTeclado));
}

// Mouse
?>
