<?php
include '../conexion.php';

$id_vehiculo = $_POST['id_vehiculo'];

$sql = "DELETE FROM vehiculos WHERE id_vehiculo='".$id_vehiculo."'";
if($datos = mysqli_query($conexion, $sql)){
    echo "Eliminado";
}
else{
echo "No eliminado";
}


?>
