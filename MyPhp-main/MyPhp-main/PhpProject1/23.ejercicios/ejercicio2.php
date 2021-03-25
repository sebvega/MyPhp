<?php 

function validarcorreo($email){

$var_base_datos='sebastian@gmail.com';
$status="no valido";
if (!empty($email)&&filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$status="valido";
}else{
}
return $status;
}


if (isset($_GET['email'])) {
	echo validarcorreo($_GET['email']);
}else{
	echo "pasa por get un email";
}

 ?>
