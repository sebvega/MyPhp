<?php require_once 'includes/helpers.php'; ?>

<aside id="sidebar">
	<div id="login" class="bloque">
		<h3>Identificate</h3>
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