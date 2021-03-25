<?php 

//function nombreDeLaFuncion (){    } 

function mostrarNombres(){

	echo "sebastian sanchez<br>";
	echo "laura mancilla<br>";
	echo "hector david<br>";
}


//invocar funcion

//mostrarNombres();

/*
function tabla($numero,$){

	echo "<h3> tabla de multiplicar de $numero<br>";
	for ($i=1; $i <=10 ; $i++) { 
		echo "$numero X $i = ".$numero*$i."<br>";
	}


}



if (isset($_GET['numero'])) {
	
	tabla($_GET['numero']);
}else{
	echo "no hay numero para multiplicar";
}
*/

/*
function calculadora($numero1,$numero2,$negrita=false){

	$suma=$numero1+$numero2;
	$resta=$numero1-$numero2;
	$multipli=$numero1*$numero2;
	$divi=$numero1/$numero2;

	$cadena="";

if ($negrita!=false) {
	$cadena.="<h1>";
}
	
	$cadena.= "suma:$suma<br>";
	$cadena.= "resta:$resta<br>";
	$cadena.= "multiplicacion:$multipli<br>";
	$cadena.= "divicion:$divi<br>";

$cadena.= "<hr>";
if ($negrita!=false) {
	$cadena.= "</h1>";
}
//var_dump($cadena);
return $cadena; 
} 


echo calculadora(10,20, true);


echo "<hr>";

function devuelveNombre($nombre){

return "el nombre es: $nombre"; 

}
echo devuelveNombre("sebastian sanchez");

*/

function getNombre($nombre){

$texto="el nombre es: $nombre";
return $texto;
}

function getApellido($apellido){

$texto="los apellidos: $apellido";
return $texto;
}



function devuelveNombre($nombre,$apellido){

	$texto= getNombre($nombre)." <br> ".getApellido($apellido); 

	return $texto;
}

echo devuelveNombre("juan sebastian","sanchez vega");


 ?>
