<?php 



$i=0;

while ($i <= 100) {
	echo "$i";
	$i++;
}
echo "<hr>";

//ejemplo

if (isset($_GET["numero"])) {
	//cambiar tipo de dato
	$numero=(int)$_GET["numero"];
}else{
	$numero=1;
}
var_dump($numero);


echo "tabla de multiplicar de $numero<br>";

$contador=0;
while ($contador <= 10) {
	echo "$numero x $contador =".($numero * $contador)."<br>";
	$contador++;
}

//do while
echo "<hr>";
$edad=15;
$contador=1;

do {
	echo "tienes acceso al alcohol $contador <br>";
	$contador++;
} while ($edad >= 18 &&$contador<=10);






 ?>