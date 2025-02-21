<?php
include '../Model/conexion.php';

$response = array("response" => 1); // Default response is error

if ($_POST['actionMonitor'] == "btMonitor") {
    $dataMonitor = json_decode($_POST['jsonMont'], true)[0];

    $modeloMonitor = $dataMonitor["modelomonitor"];
    $marcaMonitor = $dataMonitor["marcamonitor"];
    $serialMonitor = $dataMonitor["serialmonitor"];
    $puertoMonitor = $dataMonitor["puertomonitor"];
    $panelMonitor = $dataMonitor["panelmonitor"];
    $herciosMonitor = $dataMonitor["herciosmonitor"];
    $asignadoMonitor = $dataMonitor["asignadomonitor"];

    $insertcliMonitor = $conexion->prepare("INSERT INTO monitor (modelo_monitor, marca_monitor, serial_monitor, puertos_monitor, panel_monitor, hercios_monitor, asignado_monitor) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if ($insertcliMonitor === false) {
        error_log("Error en la preparación de la declaración: " . $conexion->error);
        echo json_encode($response); // Error
        exit();
    }
    $insertcliMonitor->bind_param("sssssss", $modeloMonitor, $marcaMonitor, $serialMonitor, $puertoMonitor, $panelMonitor, $herciosMonitor, $asignadoMonitor);
    $executeResult = $insertcliMonitor->execute();

    if (!$executeResult) {
        error_log("Error al ejecutar la declaración: " . $insertcliMonitor->error);
        echo json_encode($response); // Error
        exit();
    } else {
        $response["response"] = 0; // Éxito
    }
}

if ($_POST['actionTeclado'] == "btTeclado") {
    $dataTeclado = json_decode($_POST['jsonTecl'], true)[0];

    $modeloTeclado = $dataTeclado["modeloteclado"];
    $marcaTeclado = $dataTeclado["marcateclado"];
    $serialTeclado = $dataTeclado["serialteclado"];
    $puertoTeclado = $dataTeclado["puertoteclado"];
    $tipoTeclado = $dataTeclado["tipoteclado"];
    $asignadoTeclado = $dataTeclado["asignadoteclado"];

    $insertcliTeclado = $conexion->prepare("INSERT INTO teclados (modelo_teclado, marca_teclado, serial_teclado, puertos_teclado, tipo_teclado, asignado_teclado) VALUES (?, ?, ?, ?, ?, ?)");
    if ($insertcliTeclado === false) {
        error_log("Error en la preparación de la declaración: " . $conexion->error);
        echo json_encode($response); // Error
        exit();
    }
    $insertcliTeclado->bind_param("ssssss", $modeloTeclado, $marcaTeclado, $serialTeclado, $puertoTeclado, $tipoTeclado, $asignadoTeclado);
    $executeResult = $insertcliTeclado->execute();

    if (!$executeResult) {
        error_log("Error al ejecutar la declaración: " . $insertcliTeclado->error);
        echo json_encode($response); // Error
        exit();
    } else {
        $response["response"] = 0; // Éxito
    }
}

if ($_POST['actionMouse'] == "btMouse") {
    $dataMouse = json_decode($_POST['jsonMouse'], true)[0];

    $modeloMouse = $dataMouse["modelomouse"];
    $marcaMouse = $dataMouse["marcamouse"];
    $serialMouse = $dataMouse["serialmouse"];
    $puertoMouse = $dataMouse["puertomouse"];
    $tipoMouse = $dataMouse["tipomouse"];
    $asignadoMouse = $dataMouse["asignadomouse"];

    $insertcliMouse = $conexion->prepare("INSERT INTO mouse (modelo_mouse, marca_mouse, serial_mouse, puertos_mouse, tipo_mouse, asignado_mouse) VALUES (?, ?, ?, ?, ?, ?)");
    if ($insertcliMouse === false) {
        error_log("Error en la preparación de la declaración: " . $conexion->error);
        echo json_encode($response); // Error
        exit();
    }
    $insertcliMouse->bind_param("ssssss", $modeloMouse, $marcaMouse, $serialMouse, $puertoMouse, $tipoMouse, $asignadoMouse);
    $executeResult = $insertcliMouse->execute();

    if (!$executeResult) {
        error_log("Error al ejecutar la declaración: " . $insertcliMouse->error);
        echo json_encode($response); // Error
        exit();
    } else {
        $response["response"] = 0; // Éxito
    }
}

echo json_encode($response); // Final response
?>