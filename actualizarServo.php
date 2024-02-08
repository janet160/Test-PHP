
<?php
 include 'conexion.php';
$Id_servo= $_POST['Id_servo'];
$query = "SELECT * FROM servomotor WHERE Id_servo='".$Id_servo."'";
$ejecutar = $conexion->query($query);
while($result=$ejecutar->fetch_array()){
?>

<script src="scripts/js/funciones.js"></script>
<script src="scripts/js/jquery.min.js"></script>
<div class="row mt-2 px-2 mb-3">
    <div class="col mx-auto my-auto">
        <div class="card">
            <div class="card-body">
            <h3>Servo No.<b><?php echo $result['Id_servo']?></b></h3>
<hr>
                 <form id="frmServos" name="frmServos" method="POST"> <!-- FORM-->
                    <div class="row">
                        <div class="col">
                            <label for="descripcion" class="form-label" required>Descripcion:</label>
                            <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="Nombre" value="<?php echo $result['descripcion'];?>"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="grados" class="form-label">Grados:</label>
                            <input type="number" id="grados" name="grados" class="form-control"
                                placeholder="Nombre" value="<?php echo $result['grados'];?>"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="estatus" class="form-label">Estatus:</label>
                            <input type="boolean" id="estatus" name="estatus" class="form-control"
                                placeholder="Nombre" value="<?php echo $result['estatus'];?>" />
                        </div>
                    </div>

                    <br>

                    <div class="row ">
                        <div class="col-lg-6 ">
                        <a href='#' class="btn btn-warning mb-2" onclick="cancelarOperacion();">Cancelar</a>
                            <input class="btn btn-primary mb-2" onclick="modificarServo(<?php echo $Id_servo?>)" type="submit" value="guardar"></input>
                        </div>
                    </div>
                </form>
            </div>    
    
        </div>
    </div>
</div>

<?php }?>