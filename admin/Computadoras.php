<?php
  include('header_admin.php');
  if(!isset($_SESSION['nomadmin'])){
    echo "<script>window.open('index.php','_self')</script>";
}

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
						<th class="text-center" colspan="7">LISTA DE COMPUTADORAS</th>
					</tr>
					<th>ID</th>
					<th>Marca</th>
					<th>Color</th>
					<th>Precio</th>
					<th>Estado</th>
					<th class="text-center" colspan="2">OPERACIONES</th>
					</tr>
				</thead>
				<tbody>
					<?php
						include("database.php");
						$query="SELECT * FROM computadora";
						$resultado= $conexion->query($query);
						while($row=$resultado->fetch_assoc()){
					?>
					<tr>
						<th scope="row"><?php echo $row['idcompu']; ?> </th>
						<td><?php echo $row['marca']; ?> </td>
						<td><?php echo $row['color']; ?> </td>
						<td> $ <?php echo $row['preciorenta']; ?> </td>
						<td><?php echo $row['estadoc']; ?> </td>
						<td><a href="modificar_compu.php?idcompu=<?php echo $row['idcompu']; ?>">Modificar</a></td>
						<td><a href="eliminar_compu.php?idcompu=<?php echo $row['idcompu']; ?>">Eliminar</a></td>
					</tr>
<?php
	}	
?>
				</tbody>
			</table>
		</div>
	</div>

	<?php
		include('insertacompu.php')
	?>
</body>

</html>


