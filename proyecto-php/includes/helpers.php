<?php 
function mostrarError($errores,$campo){
	$alert='';
if (isset($errores[$campo])&& !empty($campo)) {
	$alert="<div class='alerta alerta-error'> ".$errores[$campo]."</div>";
}
return $alert;
}

function errorDelete(){
	$borrado=false;
	if (isset($_SESSION['errores'])) {
		$_SESSION['errores']=null;
		unset($_SESSION['errores']);
	}
	if (isset($_SESSION['completado'])) {
		$_SESSION['completado']=null;
		unset($_SESSION['completado']);
	}
	if (isset($_SESSION['errores-entrada'])) {
		$_SESSION['errores-entrada']=null;
		unset($_SESSION['errores-entrada']);
	}
}


function conseguircategorias($conexion){
	$qsql= "SELECT * FROM categorias ORDER BY id ASC";
	$result=array();
	$categorias=mysqli_query($conexion,$qsql);
	if ($categorias && mysqli_num_rows($categorias)>=1) {
		$result=$categorias;
	}
	return $result;
}


function conseguirultent($conexion){
	$qsql="SELECT e.*, c.nombre AS 'categoria' FROM entradas e INNER JOIN categorias c on e.categorias_id=c.id ORDER BY e.id DESC LIMIT 4";
	$entradas=mysqli_query($conexion,$qsql);
	if ($entradas && mysqli_num_rows($entradas)>=1) {
		$result=$entradas;
	}
	return $result;

}



 ?>

