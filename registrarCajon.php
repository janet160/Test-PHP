<?php
include 'conexion.php';

$numero = $_POST['numero'];
$estatus = $_POST['estatus'];

$stmt = $conexion->prepare("INSERT INTO cajones (numero, estatus) VALUES (?, ?)");
$stmt->bind_param("ss", $numero, $estatus);

$result = $stmt->execute();

if ($result) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();
?>
