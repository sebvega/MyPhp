<?php 

//kookies: se almacena en el usuario que visita la web con el fin de recojer datos o rastrear datos del usuario en la web

//crear kookies

//setcookie("name","valor que solo puede ser txt",caducidad, ruta, dominio);


//kookie basica
setcookie("monsterkookie","valor de la kookie");

//cookie con expiracion

setcookie("alAnio","valor de mi kookie de 365 dias",time()+(60*60*24*365));




 ?>
 <a href="verCookies.php">ver las galletas</a>