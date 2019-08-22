<?php
	include('header_admin.php');
?>


<?php
	$id=$_REQUEST['idu'];
	include("database.php");
	$query="SELECT * FROM usuario WHERE idu='$id'";
	$resultado= $conexion->query($query);
	$row=$resultado->fetch_assoc();
?>

<div class="container">
      <p class="mx-auto mt-5 display-3 text-center">Actualiza usuario</p>
      </div>
  <div class="container p-4 mt-5">
    <div class="row">
      <div class="col-md-4 mx-auto">
        <div class="card card-body">
		  <form action="modificarusuario.php?idu=<?php echo $row['idu']; ?>" method="POST">
            <div class="form-group">
			<input class="form-control" type="text" REQUIRED name="nombreu" placeholder="Escribe el nombre..." value="<?php echo $row['nombreu']; ?>" />
            </div>
            <div class="form-group">
			<input class="form-control" type="text" REQUIRED name="correou" placeholder="Escribe el correo..." value="<?php echo $row['correou']; ?>"
			 />
            </div>
            <div class="form-group">
			<input class="form-control" type="text" REQUIRED name="password" placeholder="Escribe el correo..." value="<?php echo $row['contrasenau']; ?>"
			 />
            </div>
            <button class="btn-primary" name="modificar" type="submit">Actualizar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>


<?php

include("database.php");
global $conexion;
if(isset($_POST['modificar'])){
$id=$_REQUEST['idu'];
$nombreu= $_POST['nombreu'];
$correou= $_POST['correou'];
$pass= $_POST['password'];

$query="CALL actualiza('$id','$nombreu','$correou','$pass')";
$resultado= mysqli_query($conexion,$query);

if($resultado){
	header("Location: usuarios.php");
	//echo "insercion exitosa";
}
else{
	echo "insercion no exitosa";
}
}
?>