<?php
include '../Model/conexion.php';

class cpuModel {
    public $conn;

    public function __construct() {
        $this->conn = conectarDB();
    }

    public function registrarCpu($id_cpu, $nombre_cpu, $unidad, $marca_cpu, $modelo_cpu, $fecha_registro) {
        $sql = "INSERT INTO cpu (id_cpu, nombre_cpu, unidad, marca_cpu, modelo_cpu, fecha_registro) 
                VALUES (?, ?, ?, ?, ?, ?)";
        
        $stmt = $this->conn->prepare($sql);
        if ($stmt === false) {
            error_log("Error en la preparación de la declaración: " . $this->conn->error);
            return false;
        }

        $stmt->bind_param("isssss", $id_cpu, $nombre_cpu, $unidad, $marca_cpu, $modelo_cpu, $fecha_registro);
        if ($stmt->execute() === false) {
            error_log("Error en la ejecución de la declaración: " . $stmt->error);
            return false;
        }

        return true;
    }

    public function __destruct() {
        $this->conn->close();
    }
}
?>


<?php
include '../Model/conexion.php';

class TarjetaMadreModel {
    public $conn;

    public function __construct() {
        $this->conn = conectarDB();
    }

    public function registrarTarjetaMadre($id_tarjeta_madre, $marca_madre, $modelo_madre, $serial_madre) {
        $sql = "INSERT INTO tarjeta_madre (id_tarjeta_madre, marca_madre, modelo_madre, serial_madre) 
                VALUES (?, ?, ?, ?)";
        
        $stmt = $this->conn->prepare($sql);
        if ($stmt === false) {
            error_log("Error en la preparación de la declaración: " . $this->conn->error);
            return false;
        }

        $stmt->bind_param("isss", $id_tarjeta_madre, $marca_madre, $modelo_madre, $serial_madre);
        if ($stmt->execute() === false) {
            error_log("Error en la ejecución de la declaración: " . $stmt->error);
            return false;
        }

        return true;
    }

    public function __destruct() {
        $this->conn->close();
    }
}
?>
