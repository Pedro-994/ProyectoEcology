<?php
	include('header_admin.php');
?>
<head>
	<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<script src="js/bootstrap-datetimepicker.min.js"></script>
</head>


<?php
	$id=$_REQUEST['idrenta'];
	include("database.php");
	$query="SELECT * FROM renta WHERE idrenta='$id'";
	$resultado= $conexion->query($query);
	$row=$resultado->fetch_assoc();
?>

<div class="container">
      <p class="mx-auto mt-5 display-3 text-center">Actualiza renta</p>
      </div>
  <div class="container p-4 mt-5">
    <div class="row">
      <div class="col-md-4 mx-auto">
        <div class="card card-body">
		  <form action="modificarenta.php?idrenta=<?php echo $row['idrenta']; ?>" method="POST">
            <div class="form-group">
			<input class="form-control" type="text" REQUIRED name="estador" placeholder="Estado..." value="<?php echo $row['estador']; ?>" />
            </div>
            <div class="form-group">
			<input class="form-control" type="text" REQUIRED name="fechain" placeholder="Fecha inicio..." value="<?php echo $row['fechain']; ?>"
			 />
            </div>
            <div class="form-group">
			<input class="form-control" type="text" REQUIRED name="fechafin" placeholder="Fecha fin..." value="<?php echo $row['fechafin']; ?>"
			 />
			</div>
			<div class="form-group">
			<input class="form-control" type="text" REQUIRED name="tiempo" placeholder="Tiempo renta..." value="<?php echo $row['tiemporenta']; ?>"
			 />
			</div>
			<div class="form-group">
			<input class="form-control" type="text" REQUIRED name="costo" placeholder="Costo total.." value="<?php echo $row['costototal']; ?>"
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
	$id=$_REQUEST['idrenta'];
	$estado= $_POST['estador'];
	$fechain= $_POST['fechain'];
	$fechafin= $_POST['fechafin'];
	$tiempo= $_POST['tiempo'];
	$costo= $_POST['costo'];

	$query="UPDATE renta set estador = '$estado', fechain = '$fechain',fechafin ='$fechafin',tiemporenta = '$tiempo', costototal = '$costo' WHERE  idrenta='$id'";
	$resultado= mysqli_query($conexion,$query);

	if($resultado){
		header("Location: rentas.php");
	}else{
		echo "insercion no exitosa";
	}
}
?>