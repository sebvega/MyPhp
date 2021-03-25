<?php 

//iniciar la sesion y la conexion a BD
require_once 'includes/conexion.php';

//recojer datos del formulario

$email=trim($_POST['email']);
$password=trim($_POST['psw']);
			if (isset($_SESSION['error_login'])) {
				unset($_SESSION['error_login']);
			}
if (isset($email)&&isset($password)) {
	//consulta para comprobar las credenciales del usuario
	$sql="SELECT * FROM usuarios WHERE email ='$email'";
	$login = mysqli_query($conexion, $sql);
//consulta para comprobar las credenciales del usuario
	if ($login && mysqli_num_rows($login)==1) {
		$usuario=mysqli_fetch_assoc($login);

		$password_entrada= password_hash($password, PASSWORD_DEFAULT,['cost'=>4]);
		//comprobar la contraseña
		$verify=password_verify($password, $usuario['password']);
		if ($verify) {
//utilizar una sesion para guardar los datos del usuario logeado
			$_SESSION['usuario']=$usuario;
		}else{
//si algo falla enviar una sesion con el fallo
			$_SESSION['error_login']="login incorrecto";
		}
	}else{
		$_SESSION['error_login']="login incorrecto";
	}
}
//redirigir al index
header('Location: index.php');








 ?>