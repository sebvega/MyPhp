<?php require_once 'includes/helpers.php'; ?>
<aside id="sidebar">
	<?php if (isset($_SESSION['usuario'])) : ?>
		<div id="userlogin" class="bloque">
			<h3><?= "Bienvenido, ". $_SESSION['usuario']['nombre']. ' ' . $_SESSION['usuario']['apellidos']; ?> </h3>
			<!-- botones -->
			<a href="./sessionclosed.php" class="boton">cerrar sesión</a>
			<a href="./sessionclosed.php" class="boton boton-naranja">Crear entradas</a>
			<a href="./sessionclosed.php" class="boton boton-verde">Crear categoria</a>
			<a href="./sessionclosed.php" class="boton boton-rojo">Mis datos</a>
		</div>
	<?php endif;?>
		<div id="login" class="bloque">		
		<h3>Identificate</h3>
	<?php if (isset($_SESSION['error_login'])) : ?>
		<div id="userlogin" class="alerta alerta-error">
			<h3><?= $_SESSION['error_login']; ?> </h3>
		</div>
	<?php endif;?>
		<form action="login.php" method="POST">
			<label for="email">Email</label>
			<input type="email" name="email">
			<label for="psw">contraseña</label>
			<input type="password" name="psw">
			<input type="submit" value="entrar">
		</form>
	</div>
	<div id="register" class="bloque">
		<h3>Registrate</h3>
			<?php if (isset($_SESSION['completado'])): ?>
				<div class="alerta alerta-exito">
					<?= $_SESSION['completado']?>
				</div>
			<?php elseif(isset($_SESSION['errores']['general'])):?>
		<div class="alerta alerta-error">
			 <?= mostrarError($_SESSION['errores'],'general');?>
		</div>
		<?php endif;?>
		<form action="register.php" method="POST">
			<label for="nombre">nombre</label>
			<input type="text" name="nombre">
			<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'nombre') : ''; ?>
			<label for="apellido">apellido</label>
			<input type="text" name="apellido">
			<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'apellido') : '' ?>
			<label for="email">Email</label>
			<input type="email" name="email">
			<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'email') : '' ?>
			<label for="psw">contraseña</label>
			<input type="password" name="psw">
			<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'password') : '' ?>
			<input type="submit" name="submit" value="registrar">
		</form>
		<?php errorDelete(); ?>
	</div>
</aside>