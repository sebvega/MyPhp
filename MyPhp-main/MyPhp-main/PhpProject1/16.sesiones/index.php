<?php 

/*
sesion: almacena y persiste los datos de un usuario mientras navega por el sitio web hasta que cierra el navegador o la sesion
*/

//paso 1: iniciar sesion

session_start();

//variable local
$variable_x="soy una variable x";

//variable de sesion
$_SESSION['variable persistente']="soy una sesion activa";

echo $variable_x."<br>";
echo $_SESSION['variable persistente'];

 ?>