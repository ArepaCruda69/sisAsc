
<?php

function conectarDB() {
    $servername = "localhost";
    $username = "root";
    $password = "123456789";
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
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "bd_globales";

    // Crear conexión
    $conn1 = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn1->connect_error) {
        die("Conexión fallida: " . $conn1->connect_error);
    }

    return $conn1;
}
?>


