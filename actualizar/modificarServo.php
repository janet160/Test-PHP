<?php
include '../conexion.php';
$descripcion = $_POST['descripcion'];
$grados = $_POST['grados'];
$estatus = $_POST['estatus'];

$stmt =$conexion->prepare( "UPDATE servomotor SET descripcion= '".$descripcion."', grados = '".$grados."', estatus = '".$estatus."' WHERE Id_servo ='".$Id_servo."'");

$result = $stmt->execute();
if ($result) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();

?>