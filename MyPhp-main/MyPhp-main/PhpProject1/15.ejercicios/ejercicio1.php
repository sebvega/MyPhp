<?php 

$numeros= [4,3,7,1,4,9,10,2];

echo "<h3>mostrar</h3>";
for ($i=0; $i <count($numeros) ; $i++) { 
	echo "$numeros[$i] <br>";
}

echo "<hr>";
$numeros1=sort($numeros);
foreach ($numeros as $numeros1) {
	echo "$numeros1 <br>";
}

	var_dump($numeros1);
echo "count($numeros1)<hr>";


if (isset($_GET['numero'])) {
	$busqueda=$_GET['numero'];
	$quien=array_search($busqueda, $numeros);
if (empty($quien)) {
	echo $busqueda;
}
var_dump( $quien) ;
}

 ?>