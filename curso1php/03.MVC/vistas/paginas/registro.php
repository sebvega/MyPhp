
<dir class="d-flex justify-content-center text-center">

	<form class="p-5 gb-light" method="post">

		<div class="form-group">
			<label for="nombre">Nombre:</label>

			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-user"></i></span>
				</div>
				<input type="text" class="form-control" placeholder="Ingrese nombre" id="nombre" name="registroNombre">
			</div>
		</div>

		<div class="form-group">
			<label for="email">Email:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-envelope"></i></span>
				</div>

				<input type="email" class="form-control" placeholder="Ingrese correo" id="email" name="registroEmail">
			</div>
		</div>

		<div class="form-group">
			<label for="pwd">Password:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-lock"></i></span>
				</div>
				<input type="password" class="form-control" placeholder="Ingrese password" id="pwd" name="registroPassword">
			</div>

		</div>

		<?php 
		/*=============================================
		forma de instanciar la clase de un metodo no estatico
		=============================================*/
		
		
			//$registro = new ControladorFormularios();
			//$registro -> ctrRegistro();
		/*=============================================
		forma de instanciar la clase de un metodo estatico
		=============================================*/
			$registro = ControladorFormularios::ctrRegistro();
			
			if ($registro== "ok") {

				echo "<script>
				if (window.history.replaceState){
					window.history.replaceState( null, null, window.location.href)
				}

				</script>";
				echo '<div class="alert alert-success">usuario registrado</div>';
			}
		 ?>


		<button type="submit" class="btn btn-primary">enviar</button>
	</form>
</dir>