<?php

include("database.php");

$sql="INSERT INTO renta VALUES(NULL,'Procesando',CURDATE(),(SELECT DATE_ADD(CURDATE(), INTERVAL 7 DAY)),'7 DIAS',100,1)";
		$resultado= $conexion->query($sql);
		if($resultado){
			echo "<script>
                alert('Exito');
    </script>";
    echo "<script>window.open('productos.php', '_self')</script>"; 
		}
?>