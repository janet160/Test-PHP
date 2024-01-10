<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Bienvenido al sistema de estacionamiento</title>
</head>

<body>
    <section class="h-100 gradient-form" style="background-color:#eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center aling-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <img src="img/logo.png" alt="Logo" style="width: 185px;">
                                        <h4 class="mt-1 mb-5 pb-1">Bienvenido al sistema</h4>
                                    </div>
                                    <form action="">
                                        <p>Ingresa los datos de tu cuenta.</p>
                                        <div class="form-outline mb-4">
                                        <label for="usuario" class="form-label">Usuario</label>
                                            <input type="email" name="email" id="usuario" class="form-control" placeholder="usuario ó correo">
                                            <label for="contrasena" class="form-label">Contraseña</label>
                                            <input type="password" name="contrasena" id="contrasena" class="form-control" placeholder="********">
                                        </div>
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg-gradient-custom-2 mb-3" type="button">Ingresar</button>
                                            <a href="#!" class="text-muted">Olvidaste tu contraseña?</a>
                                        </div>
                                        <div class="d-flex aling-items-center justify-content-center ph-4">
                                            <p class="mb-0 me-2">No tienes cuenta</p>
                                            <button type="button" class="btn btn-outline-danger">Crea una</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">  Bienvenido al sistema de control de estacionamiento. </h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit accusamus culpa inventore vero? Sed possimus reiciendis quisquam ea, vitae nostrum officia alias ducimus porro dolorem consequuntur maiores. Perspiciatis, harum dolore. 
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi quo praesentium nemo sapiente totam ex omnis deleniti consectetur voluptatem aliquid! Ipsam nulla asperiores accusamus? Accusantium cum molestiae voluptatibus nam excepturi?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="./scripts/js/bootstrap.bundle.min.js"></script>
</body>
</html>