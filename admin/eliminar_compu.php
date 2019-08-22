<?php

include("database.php");

$id=$_REQUEST['idcompu'];


$query="DELETE FROM computadora WHERE idcompu='$id' ";
$resultado= $conexion->query($query);

if($resultado){
	header("Location: computadoras.php");
	//echo "insercion exitosa";
}
else{
	echo "insercion no exitosa";
}
?>