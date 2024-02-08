<?php
include 'conexion.php'
?>
<script src="scripts/js/funciones.js"></script>
<script src="scripts/js/jquery.min.js"></script>
<div class="row mt-2 px-2 mb-3">
    <div class="col mx-auto my-auto">
        <div class="card">
            <div class="card-body">
                <p>Servos</p>
                <hr>
                <form method="POST"> <!-- FORM-->
                    <div class="row">
                        <div class="col">
                            <label for="id_servo" class="form-label" required>Descripcion:</label>
                            <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="Descripcion" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="grados" class="form-label">Grados:</label>
                            <input type="number" id="grados" name="grados" class="form-control"
                                placeholder="Grados" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="estatus" class="form-label">Estatus:</label>
                            <input type="number" id="estatus" name="estatus" class="form-control"
                                placeholder="1-0" />
                        </div>
                    </div>

                    <br>

                    <div class="row ">
                        <div class="col-lg-6 ">
                            <input class="btn btn-primary mb-2" onclick="registrarServo()" type="button" value="guardar"></input>
                        </div>
                    </div>
                </form>
            </div>    
    
        </div>
    </div>
</div>
<div class="container" id="result">
    <?php
    include 'consultarServo.php'
    ?>
</div>