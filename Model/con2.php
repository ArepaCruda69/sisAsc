
<?php
function conectarSegundaDB() {
    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "bd_globales";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    return $conn;
}
?>
