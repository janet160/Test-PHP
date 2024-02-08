<?php
include '../conexion.php';
session_start();
$id_empleado=$_SESSION['id'];
$id_vehiculo = $_POST['id_vehiculo'];
$id_cajon = $_POST['id_cajon'];
$id_tarifa = $_POST['id_tarifa'];
date_default_timezone_set('America/Mexico_City');           
$fechaIngreso = date("Y-m-d");
$horaIngreso = date("H:i:s");




$stmt = $conexion->prepare("INSERT INTO registro (id_vehiculo, id_cajon,fechaIngreso, horaIngreso, id_empleado, id_tarifa) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $id_vehiculo, $id_cajon, $fechaIngreso, $horaIngreso, $id_empleado, $id_tarifa);

//$result = $stmt->execute();

if ($datos =mysqli_query($conexion, $sql)) {
   $query="UPDATE cajones SET estatus='1' WHERE Id_cajon='".$idcajon."'";
   if($datos2=mysqli_query($conexion, $sql)){
    echo "Registro exitoso";
   }
} else {
    echo "error";
}
else{
    echo "No se guardo correctamente"
}

$stmt->close();
$conexion->close();
?>
