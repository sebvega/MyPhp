<?php 

$cadena=array('accion'=>array('GTA' ,'COD','PUBG' ),
			  'aventura' =>array( 'ASSASSINS','CRASH','Pince of Persia' ),
			  'deportes'=> array('FIFA 19','PES 19','MOTO GP 19'));

$categorias=array_keys($cadena);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table border="1">
		<?php require_once "includes5/encabezados.php"; ?>
		<?php require_once "includes5/primera.php";?>
		<?php require_once "includes5/segunda.php"; ?>
		<?php require_once "includes5/tercera.php"; ?>
</table>
</body>
</html>