<?php require_once 'includes/redireccion.php' ?>
<?php require_once 'includes/header.php';?>
<?php require_once 'includes/barraLateral.php'; ?> 

<div id="principal">
	<h1>Crear categorias</h1>
<p>Agrega </p>
	<form action="guardar-categoria.php" method="POST">
		<label for="nombre">Nombre de la categoria:</label>
		<input type="text" name="nombre">
		<input type="submit" value="guardar">
	</form>
</div><!-- fin principal -->

<?php require_once 'includes/foot.php'; ?>