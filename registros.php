<div class="row mt-2 px-2 mb-3">
<div class="col mx-auto my-auto">
        <div class="card">
            <div class="card-body">
                <p>Registro</p>
                <hr>
                <form action="" method="post"> <!-- FORM-->

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="id_vehiculo" class="form-label" required>Vehiculo:</label>
                            <select class="form-control" name="id_vehiculo" id="id_vehiculo">
                                <option value="" select>- SELECCIONA -</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="id_cajon" class="form-label" required>Cajon :</label>
                            <select class="form-control" name="id_cajon" id="id_cajon">
                                <option value="" select>- SELECCIONA -</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-lg-6">
                            <label for="fechaIngreso" class="form-label">Fecha de ingreso</label>
                            <input type="date" id="fechaIngreso" name="fechaIngreso" class="form-control"
                                placeholder="Usuario o correo" />
                        </div>
                        <div class="col-lg-6">
                            <label for="horaIngreso" class="form-label">Hora de ingreso</label>
                            <input type="date" id="horaIngreso" name="horaIngreso" class="form-control"
                                placeholder="Usuario o correo" />
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-lg-6">
                            <label for="fechaSalida" class="form-label">Fecha de salida</label>
                            <input type="date" id="fechaSalida" name="fechaSalida" class="form-control"
                                placeholder="Usuario o correo" />
                        </div>
                        <div class="col-lg-6">
                            <label for="horaSalida" class="form-label">Hora de salida</label>
                            <input type="date" id="horaSalida" name="horaSalida" class="form-control"
                                placeholder="Usuario o correo" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="id_tarifa" class="form-label" required>Tarifa:</label>
                            <select class="form-control" name="id_tarifa" id="id_tarifa">
                                <option value="" select>- SELECCIONA -</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="id_empleado" class="form-label" required>Empleado:</label>
                            <select class="form-control" name="id_empleado" id="id_empleado">
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