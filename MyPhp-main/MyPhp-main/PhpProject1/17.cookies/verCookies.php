<?php 

//para mostrar el valor de las cookies se debe usar $_COOKIE, es una variable superglobal, es un array asosiativo

if (isset($_COOKIE['monsterkookie'])) {
	echo "<h1>".$_COOKIE['monsterkookie']."</h1>";
}else{
	echo "no existe la cookie";
}
if (isset($_COOKIE['alAnio'])) {
	echo "<h1>".$_COOKIE['alAnio']."</h1>";
}else{
	echo "no existe la cookie";
}

 ?>
 <a href="borrarCokkies.php">comer las galletas</a>