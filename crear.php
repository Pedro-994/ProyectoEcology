<?php

include("database.php");

$nombreu=$_POST['nombreu'];
$correou=$_POST['correou'];
$contrasenau=$_POST['contrasenau'];
$Passwordvalited=$_POST['Passwordvalited'];

if($contrasenau==$Passwordvalited){

$sql="INSERT INTO usuario VALUES(NULL,'$nombreu','$correou','$contrasenau')";
		$resultado= $conexion->query($sql);

		$sacar_ID="SELECT * FROM usuario WHERE correou='$correou'";
		$resultado=mysqli_query($conexion, $sacar_ID);
		$row=$resultado->fetch_assoc();
		$id=$row['idu'];

		if($resultado){
			echo "<script>
                alert('Cuenta Creada Correctamente, Bienvenido $nombre');
                location= 'index.php?idu=$idu'
	</script>";
		}
	else{
		echo "insercion no exitosa";
    }
    
}else{
    echo "<script>
                alert('La contraseña es Incorrecta');
                location= 'index.php'
	</script>";
		}

mysqli_free_result($resultado);
?>