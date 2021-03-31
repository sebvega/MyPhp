<?php require_once './includes/redireccion.php'; ?>
<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php 
	$entradaact=conseguirentrada($conexion,$_GET['id']); 
	if (!isset($entradaact['id'])) {
		header('Location: index.php');
	}

?>
<?php require_once 'includes/header.php';?>
<?php require_once 'includes/barraLateral.php'; ?>

<div id="principal">
	<h1>editar entradas</h1>
<p>
    edita tu entrada <?=$entradaact['titulo'] ?>
</p>
<br>
<form action="guardar-entrada.php?editar=<?=$entradaact['id'] ?>" method="POST">



	<label for="titulo">Titulo:</label>
	<input type="text" name="titulo" value="<?=$entradaact['titulo'] ?>">

	<?php echo isset($_SESSION['errores-entrada']) ? mostrarError($_SESSION['errores-entrada'],'titulo') : ''; ?>

	<label for="descrip">contenido:</label>
	<textarea name="descrip" id="" cols="30" rows="10" ><?=$entradaact['descripcion'] ?></textarea>
	<?php echo isset($_SESSION['errores-entrada']) ? mostrarError($_SESSION['errores-entrada'],'descrip') : ''; ?>

	<label for="categoria">Categoria:</label>
	<select name="categoria" id="">
		<?php 
			$categorias=conseguircategorias($conexion); 
			if (!empty($categorias)) :
			while ($categoria=mysqli_fetch_assoc($categorias)):
		?>
		<option value="<?=$categoria['id']  ?>"<?= $categoria['id']==$entradaact['categorias_id'] ? 'selected="selected"': '' ?>>
        
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

<!-- fin principal -->

<?php require_once 'includes/foot.php'; ?>