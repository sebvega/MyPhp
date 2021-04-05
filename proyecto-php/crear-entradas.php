<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/barraLateral.php'; ?>



<!-- caja principal -->
<div id="principal">
	<h1>Crear entradas</h1>
<p>Añade nuevas entradas al blog para que los usuarios puedan leerlas al crear su contenido </p>
<br>
<form action="guardar-entrada.php" method="POST">



	<label for="titulo">Titulo:</label>
	<input type="text" name="titulo">

	<?php echo isset($_SESSION['errores-entrada']) ? mostrarError($_SESSION['errores-entrada'],'titulo') : ''; ?>

	<label for="descrip">contenido:</label>
	<textarea name="descrip" id="" cols="30" rows="10"></textarea>
	<?php echo isset($_SESSION['errores-entrada']) ? mostrarError($_SESSION['errores-entrada'],'descrip') : ''; ?>

	<label for="categoria">Categoria:</label>
	<select name="categoria" id="">
		<?php 
			$categorias=conseguircategorias($conexion); 
			if (!empty($categorias)) :
			while ($categoria=mysqli_fetch_assoc($categorias)):
		?>
		<option value="<?=$categoria['id']  ?> ">
			<?=$categoria['nombre']  ?>

		</option>


	<?php 
		endwhile;
		endif; 
	?>
	 </select>
	 <?php echo isset($_SESSION['errores-entrada']) ? mostrarError($_SESSION['errores-entrada'],'categoria') : ''; ?>

	<input type="submit" value="guardar">
</form>
<?php errorDelete(); ?>

</div><!-- fin principal -->


<?php require_once 'includes/foot.php'; ?>