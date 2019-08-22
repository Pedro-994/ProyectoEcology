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
						<th class="text-center" colspan="7">LISTA DE USUARIOS</th>
					</tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Correo</th>
					<th>Contraseña</th>
					<th class="text-center" colspan="2">OPERACIONES</th>
					</tr>
				</thead>
				<tbody>
					<?php
				include("database.php");

				$query="SELECT * FROM usuario";
				$resultado= $conexion->query($query);
				while($row=$resultado->fetch_assoc()){
			?>
					<tr>
						<th scope="row"><?php echo $row['idu']; ?> </th>
						<td><?php echo $row['nombreu']; ?> </td>
						<td><?php echo $row['correou']; ?> </td>
						<td><?php echo $row['contrasenau']; ?> </td>
						<td><a href="modificarusuario.php?idu=<?php echo $row['idu']; ?>">modificar</a></td>
						<td><a href="eliminarusuario.php?idu=<?php echo $row['idu']; ?>">eliminar</a></td>
					</tr>
					<?php
			}
			?>
				</tbody>
			</table>
	</div>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</html>
