<?php 
function mostrarError($errores,$campo){
	$alert='';
if (isset($errores[$campo])&& !empty($campo)) {
	$alert="<div class='alert alert-error'> ".$errores[$campo]."</div>";
}
return $alert;
}

function errorDelete(){
	$_SESSION['errores']=null;
	$borrado=session_unset();
	return $borrado;
}



 ?>

