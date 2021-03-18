<?php 
if (isset($_SESSION["validarIngreso"])) {
	if ($_SESSION["validarIngreso"]!="ok") {
		echo '<script>window.location ="index.php?pagina=ingreso";</script>';
	}
}else{
	echo '<script>window.location ="index.php?pagina=ingreso";</script>';
}
$usuarios =ControladorFormularios::ctrSeccionarRegistros(null, null);






?>

<h1>inicio</h1>
<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Fecha</th>
			<th>Acciones</th>
		</tr>
	</thead>

	<tbody>

		<?php foreach ($usuarios as $key => $value): ?>
			<tr>
				<td><?php echo ($key+1); ?></td>
				<td><?php echo $value["nombre"]; ?></td>
				<td><?php echo $value["correo"]; ?></td>
				<td><?php echo $value["fecha"]; ?></td>
				<td>

					<div class="btn-group">
						<div class="px-1">
							<a href="index.php?pagina=editar&id=<?php echo $value["id"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
						</div>
						<div class="px-1">
							<form method="post">
								<input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistro">
								<button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
								<?php 

									$eliminar = new ControladorFormularios();
									$eliminar ->ctrEliminarRegistro();
								 ?>
							</form>
						</div>
					</div>
				</td>
			</tr>	
		<?php endforeach ?>


	</tr>
</tbody>
</table>

