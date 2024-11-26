<?php
include 'conexion.php';

class upsModel {
    public $conn;

    public function __construct() {
        $this->conn = conectarDB();
    }

    public function registrarUPS($nombre, $modelo, $serial, $unidad, $fecha_instalacion, $cantidad_bateria, $modelo_bateria) {
        $sql = "INSERT INTO ups (nombre, modelo, serial, unidad, fecha_instalacion, cantidad_bateria, modelo_bateria) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $this->conn->prepare($sql);
        if ($stmt === false) {
            error_log("Error en la preparación de la declaración: " . $this->conn->error);
            return false;
        }

        $stmt->bind_param("sssssis", $nombre, $modelo, $serial, $unidad, $fecha_instalacion, $cantidad_bateria, $modelo_bateria);
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
