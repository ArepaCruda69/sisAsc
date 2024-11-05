<?php
$servername = "localhost";  // Normalmente es localhost
$username = "root";         // Usuario de MySQL
$password = "";             // Contraseña de MySQL
$dbname = "bdd_sisasc"; // Nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
