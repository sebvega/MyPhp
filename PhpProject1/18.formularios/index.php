
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formularios php y html</title>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<!--============================================
plugins js
=============================================-->


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Lastest compiled fontawesome 08/02/2021 -->
<script src="https//kit.fontawesome.com/e632f1f723.js"crossoring="anonymous"></script>


</head>
<body>
	<h1>formulario</h1>
	<div class="container-fluid">

		<div class="container py-4">
			<form action="/action_page.php">
				<div class="form-group">
					<label for="nombre">nombre:</label>
					<input type="nombre" class="form-control" placeholder="ingrese nombre" id="email"autofocus="autofocus">
				</div>
				<div class="form-group">
					<label for="apellido">apellido:</label>
					<input type="apellido" class="form-control" placeholder="ingrese apellido" id="pwd">
				</div>

				<div class="form-group">
					<label for="boton">boton:</label>
					<input type="button" class="form-contro" name="boton" value="botonaco">
				</div>

				<div class="form-group">
					<label for="sexo">sexo:</label>
					<label for="sexo">hombre:</label>
					<input type="checkbox" class="form-control" name="hombre" value="hombre">
					<label for="sexo">mujer:</label>
					<input type="checkbox" class="form-control" name="mujer" value="mujer">
				</div>

				<div class="form-group">
					<label for="color">color:</label>
					<input type="color" name="color">
				</div>

				<div class="form-group">
					<label for="apellido">apellido:</label>
					<input type="apellido" class="form-control" placeholder="ingrese apellido" id="pwd">
				</div>

				<div class="form-group form-check">

				</div>
				<button type="enviar" class="btn btn-primary">enviar</button>

				<textarea name="" id="" cols="30" rows="10"></textarea>

				peliculas:
				<select name="peliculas" id="">
					<option value="spiderman">spiderman</option>
					<option value="la calabera de cristal">la calabera de cristal</option>
					<option value="batman">batman</option>
					<option value="gran torino">gran torino</option>
					<br>
				</select>

			</form>
		</div>
	</div>
</body>
</html>


<?php 



 ?>