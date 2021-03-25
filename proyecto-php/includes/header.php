<?php require_once 'conexion.php'; ?>
<?php require_once 'helpers.php' ?>

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
		<?php 
			$categorias=conseguircategorias($conexion);
			while ($categoria=mysqli_fetch_assoc($categorias)): ?>
		
		<li>
			<a href="categoria.php?=<?= $categoria['id']  ?> "><?= $categoria['nombre']?> </a>
		</li>


		<?php endwhile; ?>
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
	