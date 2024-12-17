<?php
include '../Model/conexion.php';
$conn = conectarDB();
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Obtener los datos del registro
    $sql = "SELECT * FROM ups WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if (isset($_POST['update'])) {
        $modelo = $_POST['modelo'];
        $serial = $_POST['serial'];
        $unidad = $_POST['unidad'];
        $fecha_instalacion = $_POST['fecha_instalacion'];
        $cantidad_bateria = $_POST['cantidad_bateria'];
        $modelo_bateria = $_POST['modelo_bateria'];
        $observaciones = $_POST['observaciones'];

        // Actualizar el registro
        $sql = "UPDATE ups SET modelo=?, serial=?, unidad=?, fecha_instalacion=?, cantidad_bateria=?, modelo_bateria=?, observaciones=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssssissi', $modelo, $serial, $unidad, $fecha_instalacion, $cantidad_bateria, $modelo_bateria, $observaciones, $id);
        if ($stmt->execute()) {
            header("Location: ups.php?status=success");
        } else {
            echo "Error al actualizar el registro: " . $conn->error;
        }
    }
} else {
    echo "No se proporcionó un ID válido.";
}
?>

<form method="POST">
    <label>Modelo:</label><input type="text" name="modelo" value="<?php echo $row['modelo']; ?>" required><br>
    <label>Serial:</label><input type="text" name="serial" value="<?php echo $row['serial']; ?>" required><br>
    <label>Unidad:</label><input type="text" name="unidad" value="<?php echo $row['unidad']; ?>" required><br>
    <label>Fecha Instalación:</label><input type="date" name="fecha_instalacion" value="<?php echo $row['fecha_instalacion']; ?>" required><br>
    <label>Cantidad Batería:</label><input type="number" name="cantidad_bateria" value="<?php echo $row['cantidad_bateria']; ?>" required><br>
    <label>Modelo Batería:</label><input type="text" name="modelo_bateria" value="<?php echo $row['modelo_bateria']; ?>" required><br>
    <label>Observaciones:</label><input type="text" name="observaciones" value="<?php echo $row['observaciones']; ?>" required><br>
    <button type="submit" name="update">Actualizar</button>
</form>
