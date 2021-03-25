<?php 

$error='faltan_valores';

if (!empty($_POST['nombres'])&&!empty($_POST['apellidos'])&&!empty($_POST['edad'])&&!empty($_POST['email'])&&!empty($_POST['pass'])) {
	$error='ok';
	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$edad=(int)$_POST['edad'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];

	//validar nombres
	if (!is_string($nombres) || preg_match("/[0-9]+/", $nombres)) {
		$error='nombres';
	}
	if (!is_string($apellidos) || preg_match("/[0-9]+/", $apellidos)) {
		$error='apellidos';
	}
	if (!is_int($edad) || !filter_var($edad,FILTER_VALIDATE_INT)) {
		$error='edad';
	}
	if (!is_string($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error='email';
	}
	if (empty($pass) || strlen($pass)<5) {
		$error='pass';
	}

/*var_dump($_POST);
var_dump($error);
die();
*/

	}
	if ($error !='ok') {
		header("location:index.php?error=$error");
	}


 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>procesar</title>
</head>
<body>
	<?php 
	if ($error=='ok') {?>
		<h1>datos validados </h1>
		<p><?=$nombres?></p>
		<p><?=$apellidos?></p>
		<p><?=$edad?></p>
		<p><?=$email?></p>

	
	<?php } ?>
</body>
</html>