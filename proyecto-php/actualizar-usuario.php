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

	$guardar_usuario=false;
	if (count($errores)==0) {

		$guardar_usuario=true;
		

//comprobar si ya hay usuario

		$usuario=$_SESSION['usuario'];/*
$sql="SELECT id,email FROM usuarios WHERE email = '$email'";
$isset_email=mysqli_query($conexion,$sql);
$isset_user=mysqli_fetch_assoc($isset_email);*/

//if ($isset_user['id']==$usuario['id']||empty($isset_user)) {
	//actualizar usuario en la base de datos
		$sql="UPDATE usuarios SET nombre='$nombre',apellidos='$apellido',email='$email' WHERE id=".$_SESSION['usuario']['id'];

		$guardar=mysqli_query($conexion, $sql);
		if ($guardar) {
			$_SESSION['usuario']['nombre']=$nombre;
			$_SESSION['usuario']['apellidos']=$apellido;
			$_SESSION['usuario']['email']=$email;
			$_SESSION['completado']=" se ha actualizado con exito";
		}else{
			$_SESSION['errores']['general']="fallo al modificar el usuario";
		}
//}
	}else{
		$_SESSION['errores']=$errores;
	}
}
header('Location: mis-datos.php');
 ?>