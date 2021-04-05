<?php require_once 'includes/redireccion.php' ?>
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/barraLateral.php'; ?>



<!-- caja principal -->
<div id="principal">
	<h1>Cambiar información personal</h1>
<p>Añade nuevas categorias al blog para que los usuarios puedan usarlas al crear sus estados </p>
<br>
		

		<?php if (isset($_SESSION['completado'])): ?>
				<div class="alerta alerta-exito">
					<?= $_SESSION['completado']?>
				</div>
			<?php elseif(isset($_SESSION['errores']['general'])):?>
		<div class="alerta alerta-error">
			 <?= mostrarError($_SESSION['errores'],'general');?>
		</div>
		<?php endif;?>
		<form action="actualizar-usuario.php" method="POST">
			<label for="nombre">nombre</label>
			<input type="text" name="nombre" value="<?=$_SESSION['usuario']['nombre']?>">
			<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'nombre') : ''; ?>
			<label for="apellido">apellido</label>
			<input type="text" name="apellido" value="<?=$_SESSION['usuario']['apellidos']?>">
			<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'apellido') : '' ?>
			<label for="email">Email</label>
			<input type="email" name="email" value="<?=$_SESSION['usuario']['email']?>">
			<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'email') : '' ?>

			<input type="submit" name="submit" value="Actualizar">
		</form>
		<?php errorDelete(); ?>


</div><!-- fin principal -->


<?php require_once 'includes/foot.php'; ?>