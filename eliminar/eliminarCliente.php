<?php
include '../conexion.php';

$id_cliente = $_POST['id_cliente'];


$stmt = $conexion->prepare("DELETE FROM cliente WHERE id_cliente='".$id_cliente."'");
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

