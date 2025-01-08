
<?php 
include	'../Model/conexion.php';
 
if ($_POST['action'] == "btCpus") {
    $data = json_decode($_POST['json'], true);
    $data1 = json_decode($_POST['json1'], true);
    $data2 = json_decode($_POST['json2'], true);
    $data3 = json_decode($_POST['json3'], true);
    $data4 = json_decode($_POST['json4'], true);
    $data7 = json_decode($_POST['json7'], true);
    $data5 = json_decode($_POST['json5'], true);
    $data6 = json_decode($_POST['json6'], true);


    foreach ($data as $datos) {
        $nombrecpu = $datos["nombrecpu"];
        $unidadcpu = $datos["unidadcpu"];
        $marcacpu = $datos["marcacpu"];
        $modelocpu = $datos["modelocpu"];

        $insertcli1 = $conexion->prepare("INSERT INTO cpuss (nombre_cpu,unidad,marca_cpu,modelo_cpu) VALUES (?,?,?,?)");
        $insertcli1->bind_param("siis", $nombrecpu, $unidadcpu, $marcacpu, $modelocpu);
        $insertcli1->execute();

        $response1='';

        if (!$insertcli1) {
            $response1 = 1;
            echo json_encode($response1, JSON_UNESCAPED_UNICODE);
        } else if ($insertcli1) {
            $response1 = 0;
            echo json_encode($response1, JSON_UNESCAPED_UNICODE);
        }
    }

    foreach ($data1 as $datos11) {
        $marcamadre = $datos11["marcamadre"];
        $modelomadre = $datos11["modelomadre"];
        $serialmadre = $datos11["serialmadre"];

        $insertcli11 = $conexion->prepare("INSERT INTO tarjeta_madre (marca_madre,modelo_madre,serial_madre) VALUES (?,?,?)");
        $insertcli11->bind_param("iss", $marcamadre, $modelomadre, $serialmadre);
        $insertcli11->execute();

        $response11='';

        if (!$insertcli11 ) {
            $response11= 1;

            echo json_encode($response11, JSON_UNESCAPED_UNICODE);
        } else if ( $insertcli11) {
            $response11 = 0;
            echo json_encode($response11, JSON_UNESCAPED_UNICODE);
        }
    }

    foreach ($data2 as $datos22) {
        $marcaprocesador = $datos22["marcaprocesador"];
        $modeloprocesador = $datos22["modeloprocesador"];
        $generacionprocesador = $datos22["generacionprocesador"];
        $serialprocesador = $datos22["serialprocesador"];
        $herciosprocesador = $datos22["herciosprocesador"];

        $insertcli22 = $conexion->prepare("INSERT INTO procesador (marca_pro,modelo_pro,generacion_pro,serial_pro,hercios_pro) VALUES (?,?,?,?,?)");
        $insertcli22->bind_param("sssss", $marcaprocesador, $modeloprocesador, $generacionprocesador,$serialprocesador,$herciosprocesador);
        $insertcli22->execute();

        $response22='';

        if (!$insertcli22 ) {
            $response22= 1;

            echo json_encode($response22, JSON_UNESCAPED_UNICODE);
        } else if ( $insertcli22) {
            $response22 = 0;
            echo json_encode($response22, JSON_UNESCAPED_UNICODE);
        }
    }


    
    foreach ($data3 as $datos33) {
        $modeloram = $datos33["modeloram"];
        $marcaram = $datos33["marcaram"];
        $serialram = $datos33["serialram"];
        $tiporam = $datos33["tiporam"];
        $capacidadram = $datos33["capacidadram"];
        $velocidadram = $datos33["velocidadram"];

        $insertcli33 = $conexion->prepare("INSERT INTO tarjeta_ram (marca_ram,modelo_ram,serial_ram,tipo_ram,capacidad_ram,velocidad_ram) VALUES (?,?,?,?,?,?)");
        $insertcli33->bind_param("ssssss", $modeloram, $marcaram, $serialram,$tiporam,$capacidadram,$velocidadram);
        $insertcli33->execute();

        $response33='';

        if (!$insertcli33 ) {
            $response33= 1;

            echo json_encode($response33, JSON_UNESCAPED_UNICODE);
        } else if ( $insertcli33) {
            $response33 = 0;
            echo json_encode($response33, JSON_UNESCAPED_UNICODE);
        }
    }


    foreach ($data4 as $datos44) {
        $modelodisco = $datos44["modelodisco"];
        $marcadisco = $datos44["marcadisco"];
        $serialdisco = $datos44["serialdisco"];
        $tipodisco = $datos44["tipodisco"];
        $capacidaddisco = $datos44["capacidaddisco"];
        $puertodisco = $datos44["puertodisco"];

        $insertcli44 = $conexion->prepare("INSERT INTO disco_duro (marca_duro,modelo_duro,serial_duro,tipo_duro,capacidad_duro,puerto_duro) VALUES (?,?,?,?,?,?)");
        $insertcli44->bind_param("ssssss", $modelodisco, $marcadisco, $serialdisco,$tipodisco,$capacidaddisco,$puertodisco);
        $insertcli44->execute();

        $response44='';

        if (!$insertcli44 ) {
            $response44= 1;

            echo json_encode($response44, JSON_UNESCAPED_UNICODE);
        } else if ( $insertcli44) {
            $response44 = 0;
            echo json_encode($response44, JSON_UNESCAPED_UNICODE);
        }
    }

    
    foreach ($data7 as $datos77) {
        $marcapoder = $datos77["marcapoder"];
        $modelopoder = $datos77["modelopoder"];
        $serialpoder = $datos77["serialpoder"];
        $voltajepoder = $datos77["voltajepoder"];
        $tipopoder = $datos77["tipopoder"];

        $insertcli77 = $conexion->prepare("INSERT INTO funete_de_poder (marca_poder,modelo_poder,serial_poder,voltaje_poder,tipo_poder) VALUES (?,?,?,?,?)");
        $insertcli77->bind_param("sssss", $marcapoder, $modelopoder, $serialpoder,$voltajepoder,$tipopoder);
        $insertcli77->execute();

        $response77='';

        if (!$insertcli77 ) {
            $response77= 1;

            echo json_encode($response77, JSON_UNESCAPED_UNICODE);
        } else if ( $insertcli77) {
            $response77 = 0;
            echo json_encode($response77, JSON_UNESCAPED_UNICODE);
        }
    }


    foreach ($data5 as $datos55) {
        $marcalector = $datos55["marcalector"];
        $modelolector = $datos55["modelolector"];
        $seriallector = $datos55["seriallector"];
        $tipolector = $datos55["tipolector"];
        $puertolector = $datos55["puertolector"];

        $insertcli44 = $conexion->prepare("INSERT INTO lector_de_disco (marca_disco,modelo_disco,serial_disco,tipo_disco,puerto_disco) VALUES (?,?,?,?,?)");
        $insertcli44->bind_param("sssss", $marcalector, $modelolector, $seriallector,$tipolector,$puertolector);
        $insertcli44->execute();

        $response44='';

        if (!$insertcli44 ) {
            $response44= 1;

            echo json_encode($response44, JSON_UNESCAPED_UNICODE);
        } else if ( $insertcli44) {
            $response44 = 0;
            echo json_encode($response44, JSON_UNESCAPED_UNICODE);
        }
    }


    foreach ($data6 as $datos66) {
        $marcagrafica = $datos66["marcagrafica"];
        $modelografica = $datos66["modelografica"];
        $serialgrafica = $datos66["serialgrafica"];
        $capacidadgrafica = $datos66["capacidadgrafica"];
        $velocidadgrafica = $datos66["velocidadgrafica"];

        $insertcli55 = $conexion->prepare("INSERT INTO tarjeta_grafica (marca_grafica,modelo_grafica,serial_grafica,capacidad_grafica,velocidad_grafica) VALUES (?,?,?,?,?)");
        $insertcli55->bind_param("sssss", $marcagrafica, $modelografica, $serialgrafica,$capacidadgrafica,$velocidadgrafica);
        $insertcli55->execute();

        $response55='';

        if (!$insertcli55 ) {
            $response55= 1;

            echo json_encode($response55, JSON_UNESCAPED_UNICODE);
        } else if ( $insertcli55) {
            $response55 = 0;
            echo json_encode($response55, JSON_UNESCAPED_UNICODE);
        }
    }


}


?>