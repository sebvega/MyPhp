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