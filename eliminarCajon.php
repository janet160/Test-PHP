<?php
include 'conexion.php';
$id_cajon= $_POST['id_cajon'];

$sql="DELETE FROM cajon WHERE Id_cajon='".$id_cajon."'";

if ($datos = mysqli_query($conexion, $sql)){
    echo "Cajón eliminado correctamente";
}else{
    echo "Error al eliminar";
}
?>