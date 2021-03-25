<?php 


$color="rojoa";
if ($color=="rojo") {
	echo "el color es rojo";
}else{
	echo "el color no es rojo";
}



$nombre="david";
$edad=42;
$mayoria_edad=18;
$ciudad="armenia";

if ($edad>=$mayoria_edad) {
	if ($ciudad=="armenia") {
	echo "$nombre es mayor de edad";
	echo "y es de armenia";

	}else{
		echo "$nombre no es de armenia";
	}

}else{
	echo "$nombre no es mayor de edad";
}


$dia=3;

if ($dia==1) {
	echo "es lunes";
}elseif ($dia==2) {
	echo "es martes";
}elseif ($dia==3) {
	echo "es miercoles";
}




$edad1=18;
$edad2=64;
$edad_oficial=20;

if ($edad_oficial>=$edad1&&$edad_oficial<=$edad2) {
	echo "se cumple el margen";
}else{
	echo "no cumple los requisitos";
}
echo "<hr>";
$dia=4;

switch ($dia) {
	case 1:
		echo "1";
		break;
	case 2:
		echo "2";
		break;
		case 4:
			echo "4";
			break;
	default:
		echo "es otro numero";
		break;
}


//GOTO
GOTO marca;

echo "<h3>instruccion 1</h3>";
echo "<h3>instruccion 2</h3>";
echo "<h3>instruccion 3</h3>";
echo "<h3>instruccion 4</h3>";

marca:
echo "me salte 4 echo";

 ?>