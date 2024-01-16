<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
  echo '<script language="javascript">alert("Debes de iniciar sesión"); window.location.href="index.php"; </script>';
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/estilos.css" rel="stylesheet">
  <script src="scripts/js/funciones.js"></script>
  <script src="scripts/js/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body class="px-4">
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="/imagenes/icons/" alt="">
      Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      <li class="nav-item">
      <span class="nav-link">|</span>
    </li>
        <li class="nav-item">
          
          <a class="nav-link active" aria-current="page" href="#">Registros</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Cajones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Vehiculos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tarifas</a>
        </li>
        <li class="nav-item">
      <span class="nav-link"  >|</span>
    </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Otros
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Reportes</a></li>
            <li><a class="dropdown-item" href="logout.php">Salir</a></li>
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>

<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo esse corrupti cum earum ipsum architecto quisquam laborum ut distinctio provident sunt, quas, consequuntur repellat ipsam eos autem veniam aspernatur excepturi.</p>
<script src="scripts/js/bootstrap.bundle.min.js"></script>
</body>

</html>