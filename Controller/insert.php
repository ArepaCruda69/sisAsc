<?php 
include '../Model/conexion.php';

if ($_POST['action'] == "btCpus") {
    $data = json_decode($_POST['json'], true);
    $data1 = json_decode($_POST['json1'], true);
    $data2 = json_decode($_POST['json2'], true);
    $data3 = json_decode($_POST['json3'], true);
    $data4 = json_decode($_POST['json4'], true);
    $data7 = json_decode($_POST['json7'], true);
    $data5 = json_decode($_POST['json5'], true);
    $data6 = json_decode($_POST['json6'], true);
    $data8 = json_decode($_POST['json8'], true);

    $response1 = '';
    $response11 = '';
    $response22 = '';
    $response33 = '';
    $response44 = '';
    $response77 = '';
    $response444 = '';
    $response555 = '';
    $response8 = '';
    $respuestaFinal = '';

    // Insert CPU data and get the id_cpu
    foreach ($data as $datos) {
        $nombrecpu = $datos["nombrecpu"];
        $unidadcpu = $datos["unidadcpu"];
        $marcacpu = $datos["marcacpu"];
        $modelocpu = $datos["modelocpu"];

        $insertcli1 = $conexion->prepare("INSERT INTO cpuss (nombre_cpu, unidad, marca_cpu, modelo_cpu) VALUES (?, ?, ?, ?)");
        $insertcli1->bind_param("ssss", $nombrecpu, $unidadcpu, $marcacpu, $modelocpu);
        $insertcli1->execute();

        if ($insertcli1) {
            $id_cpu = $conexion->insert_id; // Get the auto-incremented id_cpu
            $response1 = 0;
        } else {
            $response1 = 1;
        }
    }

    // Insert related components using $id_cpu
    foreach ($data1 as $datos11) {
        $marcamadre = $datos11["marcamadre"];
        $modelomadre = $datos11["modelomadre"];
        $serialmadre = $datos11["serialmadre"];

        $insertcli11 = $conexion->prepare("INSERT INTO tarjeta_madre (id_cpu, marca_madre, modelo_madre, serial_madre) VALUES (?, ?, ?, ?)");
        $insertcli11->bind_param("isss", $id_cpu, $marcamadre, $modelomadre, $serialmadre);
        $insertcli11->execute();

        $response11 = $insertcli11 ? 0 : 1;
    }

    foreach ($data2 as $datos22) {
        $marcaprocesador = $datos22["marcaprocesador"];
        $modeloprocesador = $datos22["modeloprocesador"];
        $generacionprocesador = $datos22["generacionprocesador"];
        $serialprocesador = $datos22["serialprocesador"];
        $herciosprocesador = $datos22["herciosprocesador"];

        $insertcli22 = $conexion->prepare("INSERT INTO procesador (id_cpu, marca_pro, modelo_pro, generacion_pro, serial_pro, hercios_pro) VALUES (?, ?, ?, ?, ?, ?)");
        $insertcli22->bind_param("isssss", $id_cpu, $marcaprocesador, $modeloprocesador, $generacionprocesador, $serialprocesador, $herciosprocesador);
        $insertcli22->execute();

        $response22 = $insertcli22 ? 0 : 1;
    }

    foreach ($data3 as $datos33) {
        $marcaram = $datos33["marcaram"];
        $modeloram = $datos33["modeloram"];
        $serialram = $datos33["serialram"];
        $tiporam = $datos33["tiporam"];
        $capacidadram = $datos33["capacidadram"];
        $velocidadram = $datos33["velocidadram"];

        $insertcli33 = $conexion->prepare("INSERT INTO tarjeta_ram (id_cpu, marca_ram, modelo_ram, serial_ram, tipo_ram, capacidad_ram, velocidad_ram) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $insertcli33->bind_param("issssss", $id_cpu, $marcaram, $modeloram, $serialram, $tiporam, $capacidadram, $velocidadram);
        $insertcli33->execute();

        $response33 = $insertcli33 ? 0 : 1;
    }

    foreach ($data4 as $datos44) {
        $marcadisco = $datos44["marcadisco"];
        $modelodisco = $datos44["modelodisco"];
        $serialdisco = $datos44["serialdisco"];
        $tipodisco = $datos44["tipodisco"];
        $capacidaddisco = $datos44["capacidaddisco"];
        $puertodisco = $datos44["puertodisco"];

        $insertcli44 = $conexion->prepare("INSERT INTO disco_duro (id_cpu, marca_duro, modelo_duro, serial_duro, tipo_duro, capacidad_duro, puerto_duro) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $insertcli44->bind_param("issssss", $id_cpu, $marcadisco, $modelodisco, $serialdisco, $tipodisco, $capacidaddisco, $puertodisco);
        $insertcli44->execute();

        $response44 = $insertcli44 ? 0 : 1;
    }

    foreach ($data7 as $datos77) {
        $marcapoder = $datos77["marcapoder"];
        $modelopoder = $datos77["modelopoder"];
        $serialpoder = $datos77["serialpoder"];
        $voltajepoder = $datos77["voltajepoder"];
        $tipopoder = $datos77["tipopoder"];

        $insertcli77 = $conexion->prepare("INSERT INTO fuente_de_poder (id_cpu, marca_poder, modelo_poder, serial_poder, voltaje_poder, tipo_poder) VALUES (?, ?, ?, ?, ?, ?)");
        $insertcli77->bind_param("isssss", $id_cpu, $marcapoder, $modelopoder, $serialpoder, $voltajepoder, $tipopoder);
        $insertcli77->execute();

        $response77 = $insertcli77 ? 0 : 1;
    }

    foreach ($data5 as $datos55) {
        $marcalector = $datos55["marcalector"];
        $modelolector = $datos55["modelolector"];
        $seriallector = $datos55["seriallector"];
        $tipolector = $datos55["tipolector"];
        $puertolector = $datos55["puertolector"];

        $insertcli444 = $conexion->prepare("INSERT INTO lector_de_disco (id_cpu, marca_disco, modelo_disco, serial_disco, tipo_disco, puerto_disco) VALUES (?, ?, ?, ?, ?, ?)");
        $insertcli444->bind_param("isssss", $id_cpu, $marcalector, $modelolector, $seriallector, $tipolector, $puertolector);
        $insertcli444->execute();

        $response444 = $insertcli444 ? 0 : 1;
    }

    foreach ($data6 as $datos66) {
        $marcagrafica = $datos66["marcagrafica"];
        $modelografica = $datos66["modelografica"];
        $serialgrafica = $datos66["serialgrafica"];
        $capacidadgrafica = $datos66["capacidadgrafica"];
        $velocidadgrafica = $datos66["velocidadgrafica"];

        $insertcli55 = $conexion->prepare("INSERT INTO tarjeta_grafica (id_cpu, marca_grafica, modelo_grafica, serial_grafica, capacidad_grafica, velocidad_grafica) VALUES (?, ?, ?, ?, ?, ?)");
        $insertcli55->bind_param("isssss", $id_cpu, $marcagrafica, $modelografica, $serialgrafica, $capacidadgrafica, $velocidadgrafica);
        $insertcli55->execute();

        $response555 = $insertcli55 ? 0 : 1;
    }

    foreach ($data8 as $datos88) {
        $obscomponentes = $datos88["obscomponentes"];

        $insertcli8 = $conexion->prepare("INSERT INTO otros_componentes (id_cpu, observaciones_com) VALUES (?, ?)");
        $insertcli8->bind_param("is", $id_cpu, $obscomponentes);
        $insertcli8->execute();

        $response8 = $insertcli8 ? 0 : 1;
    }

    if ($response1 == 1 || $response11 == 1 || $response22 == 1 || $response33 == 1 || $response44 == 1 || $response77 == 1 || $response444 == 1 || $response555 == 1 || $response8 == 1) {
        $respuestaFinal = $response1 . '' . $response11 . '' . $response22 . '' . $response33 . '' . $response44 . '' . $response77 . '' . $response444 . '' . $response555 . '' . $response8;
        echo json_encode($respuestaFinal, JSON_UNESCAPED_UNICODE);
    } else if ($response1 == 0 && $response11 == 0 && $response22 == 0 && $response33 == 0 && $response44 == 0 && $response77 == 0 && $response444 == 0 && $response555 == 0 && $response8 == 0) {
        $respuestaFinal = 0;
        echo json_encode($respuestaFinal, JSON_UNESCAPED_UNICODE);
    }
}

if ($_POST['actionImp'] == "btImpresora") {
    $dataImp = json_decode($_POST['jsonImp'], true);

    $responseImp = '';

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

        $insertcliImpr = $conexion->prepare("INSERT INTO impresoras (modelo_impresora, marca_impresora, serial_impresora, tipo_impresora, estilo_impresora, puerto_impresora, ancho_impresora, consumible_impresora, estatus_impresora, unidad_impresora, asignado_impresora, observaciones) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $insertcliImpr->bind_param("ssssssisssss", $modeloImpresora, $marcaImpresora, $serialImpresora, $tipoImpresora, $estiloImpresora, $puertoImpresora, $anchoImpresora, $consumibleImpresora, $estatusImpresora, $unidadImpresora, $asignadoImpresora, $obsImpresora);
        $insertcliImpr->execute();

        $responseImp = $insertcliImpr ? 0 : 1;
    }
}



if ($_POST['actionn'] == "btMarca") {
    $nombreMarca = $_POST['txtnombremarca'];

    $insertclM = $conexion->prepare("INSERT INTO marca (marca_marca, status_marca) VALUES (?, '1')");
    $insertclM->bind_param("s", $nombreMarca);
    $result = $insertclM->execute();

    if ($result) {
        echo 0; // Éxito
    } else {
        echo 1; // Error
    }
}

if ($_POST['actiooon'] == "btPuertos") {
    $nombrePuerto = $_POST['txtnombrepuertos'];

    $insertPuerto = $conexion->prepare("INSERT INTO puertos (nombre_puerto, status_puertos) VALUES (?, '1')");
    $insertPuerto->bind_param("s", $nombrePuerto);
    $result = $insertPuerto->execute();

    if ($result) {
        echo 0; // Éxito
    } else {
        echo 1; // Error
    }
}

?>