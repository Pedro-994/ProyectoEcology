<?php

include("database.php");

$id=$_REQUEST['idu'];


$query="DELETE FROM usuario WHERE idu='$id' ";
$resultado= $conexion->query($query);

if($resultado){
	header("Location: usuarios.php");
	//echo "insercion exitosa";
}
else{
	echo "insercion no exitosa";
}
?>