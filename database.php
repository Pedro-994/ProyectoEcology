<?php
$server = 'localhost';

$username = 'root';

$password = '';

$database = 'ecologycomputerbase';


$conexion =mysqli_connect($server, $username, $password, $database);
if (!$conexion){
	die("conexion falled: " . mysql_connect_error());
}
?>

