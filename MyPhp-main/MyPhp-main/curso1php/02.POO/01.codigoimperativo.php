<?php

#codigo imperativo

$automovil1=(object)["marca"=>"toyota","modelo"=>"corolla"];
$automovil2=(object)["marca"=>"hyundai","modelo"=>"i10"];

function ver($automovil){
	echo "<p>hola! soy un $automovil->marca, modelo $automovil->modelo</p>";
}

ver($automovil1); 
ver($automovil2); 

?>