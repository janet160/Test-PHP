<?php
include 'conexion.php';
$Id_cliente=$_POST['Id_cliente'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];

$query="UPDATE cliente SET nombre='".$nombre"',
direccion='".$direccion"', telefono= '".$telefono"',
correo= '".$correo"' WHERE Id_cliente= '".$Id_cliente"'";

if($datos=mysqli_query($conexion, $query)){
    echo "Datos actualizados";
}else{
    echo "Error al actualizar";
    echi $query;
}
?>

