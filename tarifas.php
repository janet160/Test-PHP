<div class="row mt-2 px-5">
    <div class="col-8 mx-auto my-auto"> <!-- Ajusta la clase col-4 según tus necesidades -->
        <div class="card">
            <div class="card-body">
            <p>Tarifas</p>
                <hr>
                <form action="" method="post"> <!-- FORM-->
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="tarifa" class="form-label" required>Tarifa:</label>
                            <select class="form-control" name="tarifa" id="tarifa">
                                <option value="" select>- SELECCIONA -</option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <label for="monto" class="form-label">Monto</label>
                            <select class="form-control" name="monto" id="monto">
                                <option value="" select>- SELECCIONA -</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <button class="btn btn-primary mb-2">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
