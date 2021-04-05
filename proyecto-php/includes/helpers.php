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
		$borrado=true;
	}
	if (isset($_SESSION['completado'])) {
		$_SESSION['completado']=null;
		$borrado=true;
	}
	if (isset($_SESSION['errores-entrada'])) {
		$_SESSION['errores-entrada']=null;
		$borrado=true;
	}
	return $borrado;
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

function conseguircategoria($conexion,$id){
	$qsql= "SELECT * FROM categorias WHERE id=$id ";
	$result=array();
	$categorias=mysqli_query($conexion,$qsql);
	if ($categorias && mysqli_num_rows($categorias)>=1) {
		$result=mysqli_fetch_assoc($categorias);
	}
	return $result;
}


function conseguirent($conexion, $limit=null, $categoria=null,$busqueda =null){
	$qsql="SELECT e.*, c.nombre AS 'categoria' FROM entradas e INNER JOIN categorias c on e.categorias_id=c.id   ";
	if (!empty($categoria) && is_int((int)$categoria)) {
		$qsql .= "WHERE e.categorias_id = $categoria ";
	}
	if (!empty($busqueda)) {
		$qsql .= " WHERE e.titulo LIKE '%$busqueda%' ";
	}
	$qsql .=" ORDER BY e.id DESC ";
	if ($limit) {
		$qsql .="LIMIT 4";
	}
	$entradas=mysqli_query($conexion,$qsql);
	$result=array();
	if ($entradas && mysqli_num_rows($entradas)>=1) {

		$result=$entradas;
	}
	return $result;

}


function conseguirentrada($conexion,$id){
	$qsql="SELECT u.id AS artista ,e.*, c.nombre AS 'categoria' , CONCAT(u.nombre,' ',u.apellidos) AS creador 	FROM entradas e INNER JOIN categorias c ON e.categorias_id=c.id INNER JOIN usuarios u ON e.usuarios_id=u.id WHERE e.id=$id";
	$entrada=mysqli_query($conexion,$qsql);
	$result=array();
	if ($entrada && mysqli_num_rows($entrada)>=1) {
		$result=mysqli_fetch_assoc($entrada);
	}
	return $result;
}


 ?>

