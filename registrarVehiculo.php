<?php
include 'conexion.php';

$matricula = $_POST['matricula'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$puertas = $_POST['puertas'];
$tipo = $_POST['tipo'];
$Id_cliente = $_POST['Id_cliente'];

$stmt = $conexion->prepare("INSERT INTO vehiculos (matricula, modelo, color, puertas, tipo, Id_cliente) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $matricula, $modelo, $color, $puertas, $tipo, $Id_cliente);

$result = $stmt->execute();

if ($result) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();
?>
