<?php
include '../conexion.php';

$id_empleado = $_POST['id_empleado'];

$sql = "DELETE FROM empleados WHERE id_empleado='".$id_empleado."'";
if($datos = mysqli_query($conexion, $sql)){
    echo "Eliminado";
}
else{
echo "No eliminado";
}


?>
