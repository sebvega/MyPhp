<?php 

session_start();


if (!isset($_SESSION["valor"])) {
	$_SESSION['valor']=0; 
}
if (isset($_GET['counter'])&&$_GET['counter']==1) {
	$_SESSION['valor']++;
}
if (isset($_GET['counter'])&&$_GET['counter']==0) {
	$_SESSION['valor']--;
}

 ?>
<h1>el valor de la sesion numero es: <?=$_SESSION['valor'] ?></h1>
 <a href="ejercicio1.php?counter=1">aumentar valor</a><br>
  <a href="ejercicio1.php?counter=0">disminuir valor</a>