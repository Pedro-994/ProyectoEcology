<?php

  require "database.php";

  $estadoa='Activo';
  $bloquear='Inactivo';

  if (!empty($_POST['correoadmin']) && !empty($_POST['contrasenaa'])) {
    $records = $conn->prepare('SELECT idadmin, nomadmin,teladmin,correoadmin,contrasenaa,estadoa FROM administrador WHERE correoadmin = :correoadmin');
    $records->bindParam(':correoadmin', $_POST['correoadmin']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $idadmin=$results['idadmin'];
    $message = '';

    if (!strcmp($_POST['correoadmin'], $results['correoadmin'])){

    if (!strcmp($estado, $results['estadoa'])){
    if (!strcmp($_POST['contrasenaa'], $results['contrasenaa'])) {
      
        $_SESSION['user_id'] = $results['id'];
        $_SESSION['intentos']=0;
        header("Location: /admin/index_admin.php");

      } else {
        
        if ($_SESSION['intentos']<3){
          $res=3-$_SESSION['intentos'];
          $message = 'Lo sentimos, esas credenciales no coinciden, Intentos Restantes: ' .$res;
          $_SESSION['intentos'] ++ ; 
        } else {
          $_SESSION['intentos']=0;
          $query="UPDATE administrador SET estadoa='$bloquear' WHERE idadmin='$idadmin' ";
          $resultado= $conexion->query($query);
          $message = 'Tu cuenta ha sido bloqueada, comunicate con el Administrador para poder reactivar tu cuenta';
        }

      }
    } else {

      $message = 'Tu cuenta está bloqueada, comunicate con el Administrador para poder reactivar tu cuenta';

    }
  } else {
    $message = 'Lo sentimos, Esta cuenta no está registrada en nuestra Base de Datos, comunicate con el Administrador';
  }
  }

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
</html>
<?php if(!empty($user)): ?>
     <br> Bienvenido: <?= $user['email']; ?>
     <br>Has iniciado sesión correctamente 
     <a href="PHP/logout.php">
     Salir
     </a> 
 <?php else: ?> 
      <div class="container">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            &times;</button>
        <div class="modal-body modal-body-sub">
          <div class="row">
             <div class="sap_tabs"> 
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                  <ul>
                  <li class="resp-tab-item" aria-controls="tab_item-1"><span>administrador</span></li>
                  </ul>   
                    <div class="facts">
                      <div class="register">
                        <form action="operaciones_guardar.php" method="POST">     
                          <input placeholder="Nombre" name="nomven" type="text" required="">
                          <input placeholder="Apellido Paterno" name="apv" type="text" required="">
                          <input placeholder="Apellido Materno" name="amv" type="text" required="">
                          <input placeholder="Telven" name="telven" type="int" required="">
                          <input placeholder="Estado" name="estadov" type="text" required="">
                          <input placeholder="Contrasenau" name="contrasenau" type="password" required="">  
                          <input placeholder="Confirma la contrasena" name="Passwordvalited" type="password" required="">
                          <div class="sign-up">
                            <input type="submit" value="Entrar"/>
                                                    </div>
                        </form>
                      </div>
                    </div>
                  </div>                                            
                </div>  
                            </div>
                        </div>    
              <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
              <script type="text/javascript">
                $(document).ready(function () {
                  $('#horizontalTab').easyResponsiveTabs({
                    type: 'default',            
                    width: 'auto', 
                    fit: true   
                  });
                });
              </script>
  <script>
    $('#myModal88').modal('show');
  </script>  
  <div class="header" id="home1">
    <div class="container">
      <div class="w3l_login">
        <a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
            </div>
       </div> 
</div>  
<?php endif;?>
<body>
</html>

