<?php
#condiciones

$a = 5;
$b = 10;

if($a > $b){
	echo "a es mayor que b";
}
elseif ($a < $b) {
	echo "b es mayor que a";
}
else{
	echo "a es igual a b";

}
#switch
echo "<br><br>";
$dia="lunes";
switch ($dia) {
	case 'sabado':
		echo "voy a estudiar php";
		break;
	case 'domingo':
		echo "voy a descansar";
		break;
	default:
		echo "voy a trabajar";
		break;
}
echo "<br><br>";


#ciclos

$n=1;
while ($n< 5) {
	$n++;
	echo $n;
}

echo "<br><br>";
#ciclo do while

$p=1;

do{
	echo $p;
	$p++;

}
while ($p<=5);


echo "<br><br>";
#ciclo for

for ($i=1; $i <=5 ; $i++) { 
	echo $i;

}
?>