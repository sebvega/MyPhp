<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>validación de formularios PHP</title>
</head>
<body>

	<?php 

	if (isset($_GET['error'])) {
		$error=$_GET['error'];
		if ($error=='nombres') {
			echo '<strong style="color:red"> introduce bien el nombre del formulario </strong>';
		}
		if ($error=='apellidos') {
			echo '<strong style="color:red"> introduce bien el apellido del formulario </strong>';
		}
		if ($error=='edad') {
			echo '<strong style="color:red"> introduce bien la edad del formulario </strong>';
		}
		if ($error=='email') {
			echo '<strong style="color:red"> introduce el email del formulario </strong>';
		}
		if ($error=='pass') {
			echo '<strong style="color:red"> introduce bien la contraseña del formulario </strong>';
		}

	}
	 ?>
	 <h1>validar formularios en php</h1>
	 <form action="procesar_validacion.php" method="POST">

	 	<label for="nombres">nombres</label><br>
	 	<input type="text" name="nombres" required="required" pattern="[A-Za-z ]+"><br>

	 	<label for="apellidos">apellidos</label><br>
	 	<input type="text" name="apellidos" required="required" pattern="[A-Za-z ]+"><br>

	 	<label for="edad">edad</label><br>
	 	<input type="number" name="edad"required="required" pattern="[0-9]+"><br>

	 	<label for="email">email</label><br>
	 	<input type="email" name="email"required="required"><br>

	 	<label for="pass">contraseña</label><br>
	 	<input type="password" name="pass"required="required"><br>

	 	<input type="submit" name="enviar">
	 </form>
</body>
</html>