<?php 

$cantantes=['2pac','drake','jennifer lopez','alfredo'];


// ordenar
asort($cantantes);
sort($cantantes);
var_dump($cantantes);
 

 // añadir elementos
$cantantes[]='iglesias';
array_push($cantantes, "waor");
array_pop($cantantes);//quita el ultimo
unset($cantantes[4]);// elimina elementos array 
array_rand($cantantes);//aleatorio del array

// dar la vuelta 
array_reverse($cantantes);

//buscar dentro del array
echo "<hr>";

$quien=array_search('2pac', $cantantes);
 var_dump( $quien) ;

//contar numero de elementos
 count($cantantes);
 sizeof($cantantes);

 ?>