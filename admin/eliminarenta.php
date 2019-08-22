<?php

include("database.php");

$id=$_REQUEST['idrenta'];


$query="DELETE FROM renta WHERE idrenta='$id' ";
$resultado= $conexion->query($query);

if($resultado){
	header("Location: rentas.php");
	//echo "insercion exitosa";
}
else{
	echo "insercion no exitosa";
}
?>