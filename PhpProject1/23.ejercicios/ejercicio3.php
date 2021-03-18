<?php 
	$respuesta=false;
if (isset($_POST['n1'])&&isset($_POST['n2'])) {
	if (isset($_POST['sumar'])) {
		$respuesta="el resultado es".($_POST['n1'] + $_POST['n2']);
	}elseif (isset($_POST['sumar'])) {
		$respuesta="el resultado es".($_POST['n1'] - $_POST['n2']);
	}elseif (isset($_POST['sumar'])) {
		$respuesta="el resultado es".($_POST['n1'] * $_POST['n2']);
	}elseif (isset($_POST['sumar'])) {
		$respuesta="el resultado es".($_POST['n1'] / $_POST['n2']);
	}

	
}


 ?>


 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>calculadora</title>
 </head>
 <body>
 	<h1>calculadora php</h1>
 	<form action="" method="POST">

	 	
	 	<label for="n1">numero 1</label><br>
	 	<input type="number" name="n1"required="required"><br><br>

	 	<label for="n2">numero 2</label><br>
	 	<input type="number" name="n2"required="required"><br><br>

	 	<input type="submit" value="sumar" name="sumar">
	 	<input type="submit" value="restar" name="restar"> 	
	 	<input type="submit" value="multiplicar" name="multiplicar"> 	
	 	<input type="submit" value="dividir" name="dividir">
	 </form>
	 <?php 
	 if ($respuesta!=false) {
	 	echo "<h2>$respuesta</h2>";
	 }

	  ?>
 </body>
 </html>