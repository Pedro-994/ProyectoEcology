<?php
  include('header_admin.php');
?>

<body>
	<br><br>
	<div class="container">
		<a class="row">
			<table class="table">
				<thead class="thead-dark">
					<tr>
					<tr>
						</th>
						<th class="text-center" colspan="8">LISTA DE RENTAS</th>
					</tr>
					<th>ID</th>
					<th>Estado</td>
					<th>Fecha Inicio</td>
                    <th>Fecha fin</td>
                    <th>Tiempo renta</td>
                    <th>Costo</th>
                    <th class="text-center" colspan="2">OPERACIONES</th>
					</tr>
				</thead>
				<tbody>
					<?php
				include("database.php");
				$query="SELECT * FROM renta";
				$resultado= $conexion->query($query);
				while($row=$resultado->fetch_assoc()){
			?>
					<tr>
                        <th scope="row"><?php echo $row['idrenta']; ?> </th>     
						<td><?php echo $row['estador']; ?> </td>
						<td><?php echo $row['fechain']; ?> </td>
						<td><?php echo $row['fechafin']; ?> </td>
                        <td><?php echo $row['tiemporenta']; ?> </td>
                        <td>$ <?php echo $row['costototal']; ?> </td>
                        <td><a href="modificarenta.php?idrenta=<?php echo $row['idrenta']; ?>">modificar</a></td>
						<td><a href="eliminarenta.php?idrenta=<?php echo $row['idrenta']; ?>">eliminar</a></td>
					</tr>
					<?php
			}
			?>
				</tbody>
			</table>
	</div>
	</div>
</body>

</html>
