
<?php 
 include '../Model/conexion.php';

 
if ($_POST['action'] == "btCpus") {
    $data = json_decode($_POST['json'], true);
    foreach ($data as $datos) {
        $nombrecpu = $datos["nombrecpu"];
        $unidadcpu = $datos["unidadcpu"];
        $marcacpu = $datos["marcacpu"];
        $modelocpu = $datos["modelocpu"];

        $insertcli1 = $conn->prepare("INSERT INTO cpuss (nombre_cpu,unidad,marca_cpu,modelo_cpu) VALUES (?,?,?,?)");
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
}


?>