<dir class="d-flex justify-content-center text-center">

	<form class="p-5 gb-light" method="post">
		

		<div class="form-group">
			<label for="email">Email:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-envelope"></i></span>
				</div>

				<input type="email" class="form-control" placeholder="Ingrese correo" id="email" name="ingresoEmail">
			</div>
		</div>

		<div class="form-group">
			<label for="pwd">Password:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-lock"></i></span>
				</div>
				<input type="password" class="form-control" placeholder="Ingrese password" id="pwd" name="ingresoPassword">
			</div>

		</div>

		<?php 

			$ingreso = new ControladorFormularios();
			$ingreso -> ctrIngreso();

			
		 ?>


		<button type="submit" class="btn btn-primary">Ingresar</button>
	</form>
</dir>