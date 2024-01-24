<?php
include 'conexion.php';

$id_vehiculo = $_POST['id_vehiculo'];
$id_cajon = $_POST['id_cajon'];
$id_tarifa = $_POST['id_tarifa'];


$stmt = $conexion->prepare("INSERT INTO registro (id_vehiculo, id_cajon, id_tarifa, correo) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nombre, $direccion, $telefono, $correo);

$result = $stmt->execute();

if ($result) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();
?>
