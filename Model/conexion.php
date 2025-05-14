<?php

if (!function_exists('conectarDB')) {
    function conectarDB($dbname) {
        $conn = new mysqli("localhost", "root", "12345678", $dbname);
        if ($conn->connect_error) {
            die("Conexión fallida a $dbname: " . $conn->connect_error);
        }
        return $conn;
    }
}

if (!function_exists('conectarSegundaDB')) {
    function conectarSegundaDB() {
        return conectarDB("bd_globales");
    }
}

$conexion = mysqli_connect("localhost", "root", "12345678", "bdd_sisasc");
?>




