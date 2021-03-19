<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="assets/css/estilos.css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog de videojuegos</title>
</head>
<body>
	<!-- cabecera -->

<header id="header">
	<!-- logo -->
	<div id="logo">
		<a href="index.php">
			Blog de videojuegos
		</a>
	</div>
	<!-- menu -->

<nav id="menu">
	<ul>
		<li>
			<a href="index.php">Inicio</a>
		</li>
		<li>
			<a href="index.php">Categoria 1</a>
		</li>
		<li>
			<a href="index.php">Categoria 2</a>
		</li>
		<li>
			<a href="index.php">Categoria 3</a>
		</li>
		<li>
			<a href="index.php">Categoria 4</a>
		</li>
		<li>
			<a href="index.php">Sobre mi</a>
		</li>
		<li>
			<a href="index.php">Contacto</a>
		</li>
	</ul>
</nav>

<div class="clearfix"></div>
</header>

<div id="container">
	<!-- sidebar -->
	<aside id="sidebar">
		<div id="login" class="bloque">
			<h3>Identificate</h3>
			<form action="login.php" method="POST">
				<label for="nombre">nombre</label>
				<input type="text" name="nombre">
				<label for="apellido">apellido</label>
				<input type="text" name="apellido">

				<label for="email">Email</label>
				<input type="email" name="email">
				<label for="psw">contraseña</label>
				<input type="password" name="psw">
				<input type="submit" value="registrar">
			</form>
		</div>

		<div id="register" class="bloque">
			<h3>registrate</h3>
			<form action="register.php" method="POST">
				<label for="email">Email</label>
				<input type="email" name="email">
				<label for="psw">contraseña</label>
				<input type="password" name="psw">
				<input type="submit" value="entrar">
			</form>
		</div>

	</aside>



	<!-- contenido principal -->
	<div id="principal">
		<h1>ultimas entradas</h1>
		<article class="entrada">
			<a href="">
				<h2>Titulo de mi entrada</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dapibus ante ac felis tristique, non malesuada libero mattis. Cras lectus justo, aliquam vel facilisis vel, euismod id orci. Nunc sed mi pellentesque, mattis tortor sed, lobortis tortor. Duis vitae elit vitae ante pellentesque feugiat. Cras at cursus est. Proin maximus fringilla facilisis. Pellentesque mi elit, pellentesque in vestibulum id, euismod non odio. Pellentesque vel fermentum massa. Aenean eget tortor euismod nulla dignissim commodo sed sed ipsum
				</p>
			</a>
		</article>
		<article class="entrada">
			<a href="">
				<h2>Titulo de mi entrada</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dapibus ante ac felis tristique, non malesuada libero mattis. Cras lectus justo, aliquam vel facilisis vel, euismod id orci. Nunc sed mi pellentesque, mattis tortor sed, lobortis tortor. Duis vitae elit vitae ante pellentesque feugiat. Cras at cursus est. Proin maximus fringilla facilisis. Pellentesque mi elit, pellentesque in vestibulum id, euismod non odio. Pellentesque vel fermentum massa. Aenean eget tortor euismod nulla dignissim commodo sed sed ipsum
				</p>
			</a>
		</article>
		<article class="entrada">
			<a href="">
				<h2>Titulo de mi entrada</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dapibus ante ac felis tristique, non malesuada libero mattis. Cras lectus justo, aliquam vel facilisis vel, euismod id orci. Nunc sed mi pellentesque, mattis tortor sed, lobortis tortor. Duis vitae elit vitae ante pellentesque feugiat. Cras at cursus est. Proin maximus fringilla facilisis. Pellentesque mi elit, pellentesque in vestibulum id, euismod non odio. Pellentesque vel fermentum massa. Aenean eget tortor euismod nulla dignissim commodo sed sed ipsum
				</p>
			</a>
		</article>
		<article class="entrada">
			<a href="">
				<h2>Titulo de mi entrada</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dapibus ante ac felis tristique, non malesuada libero mattis. Cras lectus justo, aliquam vel facilisis vel, euismod id orci. Nunc sed mi pellentesque, mattis tortor sed, lobortis tortor. Duis vitae elit vitae ante pellentesque feugiat. Cras at cursus est. Proin maximus fringilla facilisis. Pellentesque mi elit, pellentesque in vestibulum id, euismod non odio. Pellentesque vel fermentum massa. Aenean eget tortor euismod nulla dignissim commodo sed sed ipsum
				</p>
			</a>
		</article>
		<div id="ver-todas">
			<a href="">ver todas las entradas</a>
		</div>
	</div>
	<div class="clearfix">
		
	</div>
</div><!-- fin principal -->


	<!-- pie de pagina -->
	<footer id="foot">
		<p>
			Desarrollado por sebastian sanchez &copy; 2021
		</p>

	</footer>
</body>
</html>


<?php 



 ?>