<?php

  require '../PHP/database.php';

  if (!empty($_POST['nombre']) && !empty($_POST['genero']) && !empty($_POST['clasificacion']) && !empty($_POST['desarrollador'])){
    $sql = "INSERT INTO juegos (nombre,genero,clasificacion,desarrollador) VALUES (:nombre,:genero,:clasificacion,:desarrollador)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':genero', $_POST['genero']);
    $stmt->bindParam(':clasificacion', $_POST['clasificacion']);
    $stmt->bindParam(':desarrollador', $_POST['desarrollador']);

    if ($stmt->execute()) {
      $message = 'Registro exitoso!';
      header('Location: /admin/registro_juego.php');
    } else {
      $message = 'Lo sentimos, debe haber habido un problema al crear tu cuenta';
    }
  }
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Onexgplay | Nuevo juego</title>
    <link rel="shortcut icon" href="../favicon.png">
    <link rel="stylesheet" href="../CSS/registro.css">
    <link rel="stylesheet" href="../CSS/fonts.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
  </head>
  <body>

  <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <div class="contenedor">

      <header>
        <div class="sesgoabajo"></div>
      </header>
      <div class="login">
        <article class="fondo">
          <img src="../IMG/register.png" alt="Register">
          <h3>Nuevo Juego</h3>

          <form action="registro_juego.php" method="POST">
            <input class="inp" type="text" name="nombre" value="" placeholder="Nombre"><br>
            <input class="inp" type="text" name="genero" value="" placeholder="Genero"><br>
            <input class="inp" type="text" name="clasificacion" value="" placeholder="Clasificacion"><br>
            <input class="inp" type="text" name="desarrollador" value="" placeholder="Desarrollador"><br>
            <input class="boton" type="submit" name="registro" value="Insertar Juego">
            <input class="boton" type="closew" name="cerrar" value="Cerrar Ventana" onclick="window.close();">
          </form>
          
        </article>
      </div>
    </div>
    <footer>
    </footer>
  </body>
</html>
