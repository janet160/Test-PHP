<h1>Dashboard</h1>

<?php
include 'conexion.php';
$query = "SELECT id_cajon, numero, estatus FROM cajones ORDER BY numero";
$ejecutar =  $conexion->query($query);
echo "<div class='row'>";
while ($result = $ejecutar->fetch_array()) {
    echo "<div class='col-sm-3'>
        <div class='card' style='width:18rem;'>
            <img src='imagenes/logo_trial.png' class='card-img-top' alt='imagen'>
            <div class='card-body'>
                <h5 class='card-title'> Cajon " . $result['numero'] . "</h5>";
    if ($result['estatus'] == 1) {
        $query2 = "SELECT * FROM registro INNER JOIN vehiculos ON 
        vehiculos.Id_vehiculo = registro.Id_vehiculo INNER JOIN cajones ON 
        cajones.Id_cajon = registro.Id_cajon INNER JOIN tarifa ON 
        tarifa.Id_tarifa = registro.Id_tarifa INNER JOIN empleados ON
        empleados.Id_empleado = registro.Id_empleado WHERE registro.Id_cajon = " . $result['id_cajon'] . "";
        $ejecutar2 = $conexion->query($query2);
        while ($result2 = $ejecutar2->fetch_array()) {
            echo "<p>Matricula:" . $result2['matricula'] . "</h4>";
            echo "<p>Fecha de ingreso:" . $result2['fechaIngreso'] . " " . $result2['horaIngreso'] . "</p>";
            echo "<p>Tarifa:" . $result2['tarifa'] . "</p>";
            echo "<p>Nombre:" . $result2['nombre'] . "</p>";
            echo "<a href='#' class='btn btn-warning' onclick='cerrarModal(" . $result['id_cajon'] . ")' >Salir</a>";
        }
    } else {
        echo "<p class='card-text'>No existe un vehiculo ocupando este cajon</p>";
        echo "<a href='#' class='btn btn-warning' onclick='abrirModal(" . $result['id_cajon'] . ")' >Ocupar</a>";

    }
    echo "</div></div></div>";
}
echo "</div>";
?>

<div class="modal" id="modalPromociones">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Registrar uso de estacionamiento
            </h4>
            
            <button type="button" class="close" data-dismiss="modal" onclick="cerrarModal()">X</button>
                </div>
            <div class="modal-body">
            <form action="" method="post"> <!-- FORM-->
            <div class="row">
            <div class="col-lg-6">
        <label for="id_cajon" class="form-label" required>Cajon :</label>
        <input type="text" class="form-control" name="id_cajon" id="id_cajon" class="form-control">
        </input>
        </div>
                <div class="col-lg-6">
                <label for="id_vehiculo" class="form-label" required>Vehiculo:</label>
                <select class="form-control" name="id_vehiculo" id="id_vehiculo">
            <option value="" select>- SELECCIONA -</option>
            <?php
            include 'conexion.php';
                $query = "SELECT id_vehiculo, matricula FROM vehiculos";
                $ejecutar = $conexion->query($query);
                while($resultado = $ejecutar->fetch_array()){
                    echo "<option value='".$resultado['id_vehiculo']."'>".$resultado['matricula']."</option>";
                }
            ?>
        </select>
    </div>
   

<div class="row">
    <div class="col-lg-6">
        <label for="id_tarifa" class="form-label" required>Tarifa:</label>
        <select class="form-control" name="id_tarifa" id="id_tarifa">
            <option value="" select>- SELECCIONA -</option>
            <?php
            include 'conexion.php';
                $query = "SELECT id_tarifa, tarifa FROM tarifa";
                $ejecutar = $conexion->query($query);
                while($resultado = $ejecutar->fetch_array()){
                    echo "<option value='".$resultado['id_tarifa']."'>".$resultado['tarifa']."</option>";
                }
            ?>
        </select>
    </div>

</div>
<br>

<div class="row ">
    <div class="col-lg-6 ">
        <input class="btn btn-primary mb-2" onclick="registrarRegistro();" type="button" value="Guardar"></input>
    </div>
</div>
</div>
</form>
            </div>
        </div>
    </div>
</div>
