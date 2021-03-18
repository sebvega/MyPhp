<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Subir archivos con php</title>
</head>
<body>
	<h1>subir archivos</h1>
	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="archivo">
		<input type="submit" value="enviar">

	</form>

	<h1>listado de ficheros</h1>
	<?php 




	if ($gestor= opendir('imagenes/')) :

		while (($entrada=readdir($gestor))!=false) :

			if ($entrada!='.'&&$entrada!='..') :
				echo "<img src='imagenes/$entrada' width='200px'><br>";
			endif;
		endwhile;
	endif;
	
	 ?>
</body>
</html>