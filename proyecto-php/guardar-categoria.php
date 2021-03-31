<?php 
if (isset($_POST)) {
	require_once 'includes/conexion.php';

	$nombre=isset($_POST['nombre'])? mysqli_real_escape_string($conexion, $_POST['nombre']) : false;

//validar los datos
	if (!empty($nombre) && !is_numeric($nombre) && !preg_match("[0-9]", $nombre)) {
		$nombre_validate=true;
	}else{
		$nombre_validate=false;
		$errores['nombre']= "el campo no puede tener numeros";
	}

	if (count($errores)==0) {
//insertar categoria en la base de datos
		$sql="INSERT INTO categorias VALUES(null,'$nombre')";
		$guardar=mysqli_query($conexion, $sql);
	}
}
header('Location: index.php');
?>