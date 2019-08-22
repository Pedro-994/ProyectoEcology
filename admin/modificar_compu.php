<?php
	include('header_admin.php');
?>

<body>
  <?php
				$id=$_REQUEST['idcompu'];
				include("database.php");
				$query="SELECT * FROM computadora WHERE idcompu='$id'";
				$resultado= $conexion->query($query);
				$row=$resultado->fetch_assoc();
      ?>
      <div class="container">
      <p class="mx-auto mt-5 display-3 text-center">Actualizando producto</p>
      </div>
  <div class="container p-4 mt-5">
    <div class="row">
      <div class="col-md-4 mx-auto">
        <div class="card card-body">
          <form action="modificar_compu.php?idcompu=<?php echo $row['idcompu']; ?>" method="POST">
            <div class="form-group">
              <input type="text" REQUIRED name="marca" class="form-control"placeholder="Escribe la marca..."
                value="<?php echo $row['marca']; ?>" />
            </div>
            <div class="form-group">
              <input type="text" REQUIRED name="color" class="form-control"placeholder="Escribe el color..."
                value="<?php echo $row['color']; ?>" />
            </div>
            <div class="form-group">
              <input type="text" REQUIRED name="preciorenta" class="form-control"placeholder="Escribe el precio..."
                value="<?php echo $row['preciorenta']; ?>" />
            </div>
            <div class="form-group">
                <select name="estadoc" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                  <option >Disponible</option>
                  <option >No disponible</option>
                </select> 
            </div>
            <button class="btn-primary" name="aceptar" type="submit">Actualizar</button>
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
if(isset($_POST['aceptar'])){
  $idcompu=$_REQUEST['idcompu'];
  $marca= $_POST['marca'];
  $color= $_POST['color'];
  $preciorenta= $_POST['preciorenta'];
  $estadoc= $_POST['estadoc'];

  $query="UPDATE computadora set marca='$marca',color='$color',preciorenta='$preciorenta',estadoc='$estadoc' WHERE  idcompu='$idcompu'";
  $resultado= mysqli_query($conexion,$query);

  if($resultado){
	  header("Location: Computadoras.php");
	//echo "insercion exitosa";
  }else{
	  echo "insercion no exitosa";
  }
}
?>

