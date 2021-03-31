<?php require_once 'includes/redireccion.php' ?>
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/barraLateral.php'; ?>



<!-- caja principal -->
<div id="principal">
	<h1>Crear categorias</h1>
<p>Añade nuevas categorias al blog para que los usuarios puedan usarlas al crear sus estados </p>
<br>
<form action="guardar-categoria.php" method="POST">
	<label for="nombre">Nombre de la categoria:</label>
	<input type="text" name="nombre">
	<input type="submit" value="guardar">
</form>


</div><!-- fin principal -->


<?php require_once 'includes/foot.php'; ?>