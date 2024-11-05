<?php
include 'C:\AppServ\www\sisAsc\Model\conexion.php';  // Incluye la conexión a la base de datos

if ($conn) {
    echo "Conexión exitosa a la base de datos.";
} else {
    echo "Error al conectar a la base de datos: " . $conn->connect_error;
}

$conn->close();  // Cierra la conexión
?>
