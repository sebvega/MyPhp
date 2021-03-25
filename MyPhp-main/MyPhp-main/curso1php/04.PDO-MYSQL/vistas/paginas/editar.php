<?php 

if (isset($_GET["id"])) {

	$item = "id";
	$valor= $_GET["id"];
	$usuario =ControladorFormularios::ctrSeccionarRegistros($item, $valor);

}
?>


<dir class="d-flex justify-content-center text-center">

	<form class="p-5 gb-light" method="post">

		<div class="form-group">


			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-user"></i></span>
				</div>
				<input type="text" class="form-control" value="<?php print_r($usuario["nombre"]); ?>" placeholder="Ingrese nombre" id="nombre" name="actualizarNombre">
			</div>
		</div>

		<div class="form-group">

			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-envelope"></i></span>
				</div>

				<input type="email" class="form-control" value="<?php print_r($usuario["correo"]); ?>"  placeholder="Ingrese correo" id="email" name="actualizarCorreo">
			</div>
		</div>

		<div class="form-group">

			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-lock"></i></span>
				</div>
				<input type="password" class="form-control"  placeholder="Ingrese password" id="pwd" name="actualizarPassword">
				<input type="hidden" name="passwordActual" value="<?php print_r($usuario["password"]); ?>">
				<input type="hidden" name="idUsuario" value="<?php print_r($usuario["id"]); ?>">
			</div>

		</div>
		<?php
		$actualizar =  ControladorFormularios::ctrActualizarRegirstro();

		if ($actualizar=="ok") {
			echo "<script>
			if (window.history.replaceState){
				window.history.replaceState( null, null, window.location.href)
			}

			</script>";
			echo '<div class="alert alert-success">usuario registrado</div>
			<script> 
			setTimeout(function(){

				window.location ="index.php?pagina=inicio";



				},2000);
				</script>';
			}
			
			?>

			<button type="submit" class="btn btn-primary">Actualizar</button>
		</form>
	</dir>