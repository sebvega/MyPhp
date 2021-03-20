<?php 

session_start();

if (isset($_POST['submit'])) {
	$nombre =isset($_POST['nombre']) ? $_POST['nombre'] : false;
	$apellido=isset($_POST['apellido']) ? $_POST['apellido'] : false;
	$email=isset($_POST['email']) ? $_POST['email'] : false;
	$password=isset($_POST['psw']) ? $_POST['psw']: false;

//array de errores

	$errores=array();

	//validar los datos
	if (!empty($nombre) && !is_numeric($nombre) && !preg_match("[0-9]", $nombre)) {
		echo "el nombre es valido";
		$nombre_validate=true;
	}else{
		$nombre_validate=false;
		$errores['nombre']= "el campo no puede tener numeros";
	}

	if (!empty($apellido) && !is_numeric($apellido) && !preg_match("[0-9]", $apellido)) {
		echo "el apellido es valido";
		$apellido_validate=true;
	}else{
		$apellido_validate=false;
		$errores['apellido']= "el campo no puede tener numeros";
	}

	if (!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)) {
		echo "el email es valido";
		$email_validate=true;
	}else{
		$email_validate=false;
		$errores['email']= "el email no es valido";
	}

	if (!empty($password)) {
		echo "contraseña validada";
		$password_validate=true;
	}else{
		$errores['password']= "la contraseña esta vacia";
	}
	$guardar_usuario=false;
	if (count($errores)==0) {
		$guardar_usuario=true;
		//insertar usuario en la base de datos

	}else{
		$_SESSION['errores']=$errores;
		header('Location: index.php');
	}
}





 ?>