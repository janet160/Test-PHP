<?php
include '../conexion.php';

$id_registro = $_POST['id_registro'];

$stmt = $conexion->prepare("DELETE FROM registro WHERE id_registro='".$id_registro."'");
// $stmt->bind_param("ss", $tarifa, $monto);
$result = $stmt->execute();
if ($result) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();

?>
