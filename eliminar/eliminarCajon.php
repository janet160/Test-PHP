<?php
include '../conexion.php';

$id_cajon = $_POST['id_cajon'];

$sql = "DELETE FROM cajones WHERE id_cajon='".$id_cajon."'";
if($datos = mysqli_query($conexion, $sql)){
    echo "Cajon eliminado";
}
else{
echo "Cajon eliminadod";
}


?>
