<?php 


if (isset($_COOKIE['alAnio'])) {
	unset($_COOKIE['alAnio']);
	setcookie('alAnio','',time()-100);
}

header('location:verCookies.php')

 ?>