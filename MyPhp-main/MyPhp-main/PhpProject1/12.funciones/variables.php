<?php 

$frase="ni los genios son tan genios, ni los mediocres son tan mediocres";
echo $frase."<br>";

function holamundo(){
	global $frase;
	echo "<h1>$frase</h1>";
	$year=2021;
	echo "<h1>$year</h1>";
	return $year;
}
;
echo "<h1>".holamundo()."</h1>"; 	


// funciones variables

function saludo(){
	return "hola, buenos dias";
}

function conversacion(){
	return "como has estado";
}

function despedida(){
	return "hasta luego";
}

$horario="despedida";

echo $horario();


$year=2021;
echo strlen($horario);


echo "<br>";
$frase="la vida es bella es";
echo strpos($frase, "es");

 ?>


