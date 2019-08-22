<?php

  require '../PHP/database.php';

  if (!empty($_POST['nomadmin']) && !empty($_POST['teleadmin']) && !empty($_POST['correoadmin']) && !empty($_POST['contrasenaa']) && !empty($_POST['estadoa'])) {
    $activo='Activo';
    $sql = "INSERT INTO administrador (nomadmin,teleadmin,correoadmin,contrasenaa,estadoa) VALUES (:nomadmin,:teleadmin,:correoadmin,:contrasenaa,:estadoa)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nomadmin', $_POST['nomadmin']);
    $stmt->bindParam(':teleadmin', $_POST['teleadmin']);
    $stmt->bindParam(':correoadmin', $_POST['correoadmin']);
    $stmt->bindParam(':contrasenaa', $_POST['contrasenaa']);
     //$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
     //$stmt->bindParam(':password', $password);
     //$stmt->bindParam(':password', $_POST['password']);
     //$pass=password_hash($contra, PASSWORD_DEFAULT);
    $stmt->bindparam(':estadoa',$activo);

    if ($stmt->execute()) {
      $message = 'Registro exitoso!';
      header('Location: /admin/registro_admin.php');
    } else {
      $message = 'Lo sentimos, debe haber habido un problema al crear tu cuenta';
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
<body>
</body>
</html>
