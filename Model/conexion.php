
<?php

function conectarDB() {
    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "bdd_sisasc";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    return $conn;
}


?>


<?php
function conectarSegundaDB() {
    $servername = "localhost"; // Cambia esto
    $username = "root"; // Cambia esto
    $password = "12345678"; // Cambia esto
    $dbname = "bd_global"; // Cambia esto

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("La conexión a la segunda base de datos falló: " . $conn->connect_error);
    }
    return $conn;
}
?>

