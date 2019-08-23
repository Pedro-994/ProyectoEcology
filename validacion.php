<?php

include("database.php");

$correou=$_POST['correou'];
$contrasenau=$_POST['contrasenau'];


		$sacar_ID="SELECT * FROM usuario WHERE correou='$correou' and contrasenau='$contrasenau'";
		$resultado=mysqli_query($conexion, $sacar_ID);
		$filas=mysqli_num_rows($resultado);
		$row=$resultado->fetch_assoc();
		$id=$row['idu'];

		if($filas){
			$_SESSION['correou']=$correou;
			echo "<script>
                alert('Inicio Sesion Correctamente');
                location= 'index.php'
	</script>";
}else{
    echo "<script>
                alert('La contraseña es Incorrecta');
                location= 'index.php'
	</script>";
		}

mysqli_free_result($resultado);
?>