<?php 
require_once 'includes/conexion.php';

if (isset($_POST['submit'])) {
	$nombre =isset($_POST['nombre']) ? mysqli_real_escape_string($conexion,$_POST['nombre']): false;
	$apellido=isset($_POST['apellido']) ? mysqli_real_escape_string($conexion,$_POST['apellido']) : false;
	$email=isset($_POST['email']) ? mysqli_real_escape_string($conexion,trim($_POST['email'])) : false;
	$password=isset($_POST['psw']) ? mysqli_real_escape_string($conexion,trim($_POST['psw'])): false;

//array de errores

	$errores=array();

	//validar los datos
	if (!empty($nombre) && !is_numeric($nombre) && !preg_match("[0-9]", $nombre)) {
		$nombre_validate=true;
	}else{
		$nombre_validate=false;
		$errores['nombre']= "el campo no puede tener numeros";
	}

	if (!empty($apellido) && !is_numeric($apellido) && !preg_match("[0-9]", $apellido)) {
		$apellido_validate=true;
	}else{
		$apellido_validate=false;
		$errores['apellido']= "el campo no puede tener numeros";
	}

	if (!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$email_validate=true;
	}else{
		$email_validate=false;
		$errores['email']= "el email no es valido";
	}

	if (!empty($password)) {
		$password_validate=true;
	}else{
		$errores['password']= "la contraseña esta vacia";
	}
	$guardar_usuario=false;
	if (count($errores)==0) {
		$guardar_usuario=true;
		//cifrar la contraseña importane
		$password_segura= password_hash($password, PASSWORD_DEFAULT,['cost'=>4]);//cifro la contraseña 4veces


		//insertar usuario en la base de datos
		$sql="INSERT INTO usuarios VALUES(null,'$nombre','$apellido','$email','$password_segura',CURDATE())";

		$guardar=mysqli_query($conexion, $sql);
		if ($guardar) {
			$_SESSION['completado']="el registro se ha completado con exito";
		}else{
			$_SESSION['errores']['general']="fallo al guardar el usuario";
		}


	}else{
		$_SESSION['errores']=$errores;
	}
}
header('Location: index.php');





 ?>