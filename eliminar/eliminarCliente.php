<?php
include '../conexion.php';

$id_cliente = $_POST['id_cliente'];

$sql = "DELETE FROM cliente WHERE id_cliente='".$id_cliente."'";
if($datos = mysqli_query($conexion, $sql)){
    echo "Eliminado";
}
else{
echo "No eliminado";
}


?>
