<?php

include("PHP/database.php");

$correou=$_POST['correou'];
$contrasenau=$_POST['contrasenau'];


    $sacar_ID="SELECT * FROM usuario WHERE correou='$correou' and contrasenau='$contrasenau'";
    $resultado=mysqli_query($conexion, $sacar_ID);
    $filas=mysqli_num_rows($resultado);
    $row=$resultado->fetch_assoc();
    $id=$row['idu'];

    if($filas>0){
      echo "<script>
                alert('Inicio Sesion Correctamente');
                location= 'index.php?id=$id'
  </script>";
}else{
    echo "<script>
                alert('La contraseña es Incorrecta');
                location= 'index.php'
  </script>";
    }

mysqli_free_result($resultado);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
<title>Ecology Computer</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
  function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/jquery.countdown.css" />
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script> 
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
          <h3>Nuevo Usuario</h3>

          <form action="registro_usuario.php" method="POST">
          <input class="inp" type="text" name="apodo" value="" placeholder="Apodo"><br>
            <input class="inp" type="text" name="nombre" value="" placeholder="Nombre"><br>
            <input class="inp" type="text" name="ap" value="" placeholder="Apellido Paterno"><br>
            <input class="inp" type="text" name="am" value="" placeholder="Apellido Materno"><br>
            <input class="inp" type="text" name="email" value="" placeholder="Correo Electrónico"><br>
            <input class="inp" type="password" name="password" value="" placeholder="Contraseña"><br>
            <input class="inp" type="password" name="passvalited" value="" placeholder="Validar Contraseña"><br>
            <input class="boton" type="submit" name="registro" value="Crear Usuario">
            <input class="boton" type="closew" name="cerrar" value="Cerrar Ventana" onclick="window.close();">"
          </form>
          
        </article>
      </div>
    </div>
    <footer>
    </footer>
  </body>
</html>
