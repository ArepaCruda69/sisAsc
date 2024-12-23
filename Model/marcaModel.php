<?php
include 'conexion.php';

class marcaModel {
    public $conn;

    public function __construct() {
        $this->conn = conectarDB();
    }

    public function registrarMarca($codigo, $marca, $equipo) {
        $sql = "INSERT INTO marca (codigo, marca, equipo) VALUES (?, ?, ?)";
        
        $stmt = $this->conn->prepare($sql);
        if ($stmt === false) {
            error_log("Error en la preparación de la declaración: " . $this->conn->error);
            return false;
        }

        $stmt->bind_param("iss", $codigo, $marca, $equipo);
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
