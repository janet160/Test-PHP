<?php
include '../conexion.php';

$id_tarifa = $_POST['id_tarifa'];

$sql = "DELETE FROM tarifa WHERE id_tarifa='".$id_tarifa."'";
if($datos = mysqli_query($conexion, $sql)){
    echo "Eliminado";
}
else{
echo "No eliminado";
}


?>
