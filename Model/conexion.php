
<?php



function conectarSegundaDB() {
    $servername = "localhost";
    $username = "root";
    $password = "123456789";
    $dbname = "bd_globales";

    $conn1 = new mysqli($servername, $username, $password, $dbname);


    if ($conn1->connect_error) {
        die("Conexión fallida: " . $conn1->connect_error);
    }

    return $conn1;
}
 $conexion = mysqli_connect("localhost","root","123456789","bdd_sisasc")

?>




