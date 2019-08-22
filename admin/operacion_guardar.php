<?php

include("conexion.php");

$nombre= $_POST['nombreu'];
$correo= $_POST['correou'];
$query="INSERT INTO usuario (nombreu, correou) VALUES('$nombre','$correo')";
$resultado= $conexion->query($query);

if($resultado){
	header("Location: tabla.php");
}
else{
	echo "insercion no exitosa";
}
?>