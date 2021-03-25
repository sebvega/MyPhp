<?php
$numero = 5;
#variable numerica
echo $numero;

echo "esto es una variablenumero $numero<br>";
var_dump($numero); 

#variable de texto
$palabra = "palabra";
echo "<br><br>";# salto de linea
echo "esto es una variable texto: $palabra "; 
var_dump($palabra);
echo "<br><br>";



#variables boleana
$boleana= true;
echo "esto es una variable boleana: $boleana "; 
var_dump($boleana);
echo "<br><br>";

#variables Arreglo
$colores= array("rojo","amarillo");
echo "esto es una variable de cadena: $colores[0] "; 
var_dump($colores);
echo "<br><br>";

#variables Arreglo con propiedades
$verduras= array("verdura1"=>"lechuga","verdura2"=>"remolacha");
echo "esto es una variable de cadena con propiedades: $verduras[verdura1] "; 
var_dump($verduras);
echo "<br><br>";

#variables objeto
$frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana"];
echo "esto es una variable objeto: $frutas->fruta1"; 
var_dump($frutas);
echo "<br><br>";





?>