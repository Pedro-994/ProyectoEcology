<?php
  include('database.php');
?>

<?php 
  if(!empty($user)){
    echo" <br> Bienvenido ?>
    <br>Has iniciado sesión correctamente
    <a href='logout.php'>
      Salir
    </a>";
  }?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Admin</title>
  <title>Document</title>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top mr-auto">
      <a class="navbar-brand mx-auto" href="#"><img src="../IMG/Ecologicomputer.png" class="rounded"
          style="width: 100px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="usuarios.php">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Computadoras.php">Computadoras</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rentas.php">Rentas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Administradores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Backup base de datos</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</body>

</html>