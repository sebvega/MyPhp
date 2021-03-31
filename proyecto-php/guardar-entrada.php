<?php 
if (isset($_POST)) {
	require_once 'includes/conexion.php';

	$titulo=isset($_POST['titulo'])? mysqli_real_escape_string($conexion, $_POST['titulo']) : false;
	$descrip=isset($_POST['descrip'])? mysqli_real_escape_string($conexion,$_POST['descrip']) : false;
	$categoria=isset($_POST['descrip'])? (int)$_POST['categoria'] : false;
	$nombre=$_SESSION['usuario']['id'] ;

//validar los datos
	$errores = array();
	if (empty($titulo)) {
		$errores['titulo']= "falto ingresar mas informacion";
	}
	if (empty($descrip)) {
		$errores['descrip']= "falto ingresar mas informacion";
	}
	if (empty($categoria)&& !is_numeric($categoria)) {
		$errores['categoria']= "falto ingresar más informacion";
	}


	if (count($errores)==0) {

//insertar categoria en la base de datos
		$sql="INSERT INTO entradas VALUES(null,'$nombre','$categoria','$titulo','$descrip',CURDATE())";
		$guardar=mysqli_query($conexion, $sql);
		header('Location: index.php');
	}else{
		$_SESSION['errores-entrada']=$errores;
		header('Location: crear-entradas.php');
	}
}

?>