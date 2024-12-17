<?php
include 'conexion.php'; // Asegúrate de ajustar la ruta según tu estructura de carpetas

function getUPSUnits() {
    // Conectar a la segunda base de datos (bd_globales)
    $connGlobales = conectarSegundaDB();
    if ($connGlobales->connect_error) {
        die("La conexión a la base de datos bd_globales falló: " . $connGlobales->connect_error);
    }

    // Consulta a la tabla glo_1unidad en bd_globales
    $sqlGlobales = "SELECT nom_unidad FROM glo_1unidad";
    $resultGlobales = $connGlobales->query($sqlGlobales);
    if ($resultGlobales === false) {
        die("Error en la consulta a bd_globales: " . $connGlobales->error);
    }

    $connGlobales->close();
    return $resultGlobales;
}

function displayStatusMessage() {
    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'success') {
            echo "<div id='popup-message' class='alert alert-success' role='alert'>Registro guardado exitosamente.</div>";
        } elseif ($_GET['status'] == 'error') {
            echo "<div id='popup-message' class='alert alert-danger' role='alert'>Hubo un error al guardar el registro.</div>";
        }
        echo "<script>
            setTimeout(function() {
                var popup = document.getElementById('popup-message');
                if (popup) {
                    popup.style.display = 'none';
                }
            }, 2000);
        </script>";
    }
}
?>
