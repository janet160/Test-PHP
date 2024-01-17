<div class="row mt-2 px-5 mb-3">
<div class="col-8 mx-auto my-auto">
        <div class="card">
            <div class="card-body">
                <p>Vehiculos </p>
                <hr>
                <form action="" method="post"> <!-- FORM-->

                    <div class="row">
                        <div class="col">
                            <label for="matricula" class="form-label" required>Matricula:</label>
                            <input type="text" id="matricula" name="matricula" class="form-control"
                                placeholder="Matricula" />
                        </div>
                    </div>
                        <div class="row">
                        <div class="col">
                        <label for="direccion" class="form-label">Modelo:</label>
                            <input type="number" id="modelo" name="modelo" class="form-control"
                                placeholder="modelo" />
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-lg-4">
                            <label for="color" class="form-label">Color :</label>
                            <input type="text" id="color" name="color" class="form-control"
                                placeholder="Telefono movil" />
                        </div>
                        <div class="col-lg-4">
                            <label for="puertas" class="form-label">Puertas:</label>
                            <input type="number" id="puertas" min="0" name="puertas" class="form-control"
                                placeholder="Correo electronico" />
                        </div>
                        <div class="col-lg-4">
                            <label for="tipo" class="form-label">Tipo:</label>
                            <input type="text" id="tipo" name="tipo" class="form-control"
                                placeholder="Correo electronico" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="id_cliente" class="form-label" required>Cliente:</label>
                            <select class="form-control" name="id_cliente" id="id_cliente">
                                <option value="" select>- SELECCIONA -</option>
                            </select>
                            
                        </div>
                    </div>

                    <br>

                    <div class="row ">
                        <div class="col-lg-6 ">
                            <button class="btn btn-primary mb-2">Guardar</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>