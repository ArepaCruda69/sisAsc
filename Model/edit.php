<?php
include 'conexion.php';

$conn = conectarDB();
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $modelo = $_POST['modelo'];
    $serial = $_POST['serial'];
    $unidad = $_POST['unidad'];
    $fecha_instalacion = $_POST['fecha_instalacion'];
    $cantidad_bateria = $_POST['cantidad_bateria'];
    $modelo_bateria = $_POST['modelo_bateria'];
    $observaciones = $_POST['observaciones'];

    $sql = "UPDATE ups SET modelo=?, serial=?, unidad=?, fecha_instalacion=?, cantidad_bateria=?, modelo_bateria=?, observaciones=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssssi', $modelo, $serial, $unidad, $fecha_instalacion, $cantidad_bateria, $modelo_bateria, $observaciones, $id);

    if ($stmt->execute()) {
        header("Location: ../views/ups.php?status=success");
    } else {
        echo "Error al actualizar el registro: " . $stmt->error;
    }
} else if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM ups WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    echo json_encode($data);
} else {
    echo "No se proporcionó un ID válido.";
}
$conn->close();
?>
