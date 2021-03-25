<?php 

$pelicula='batman';
$peliculas = array('batman','spiderman', 'lord of rings');
$personas=['jua,','fonseca','lopez'];
var_dump($peliculas[0]);
var_dump($personas);

echo "listado de peliculas";

echo "<ul>";
for ($i=0; $i <count($peliculas) ; $i++) { 
	echo "<li>".$peliculas[$i]."</li>";
}
echo "</ul>";

//recorrer con foreach
foreach ($personas as $individuo ) {
	echo $individuo;}



	//arrays con multidimencionales

	$contactos=array(array('nombre'=>'antonio',
						   'email'=>'antonio@gmail.com'),
					array('nombre'=>'federico',
						  'email'=>'federico@gmail.com'));
	var_dump($contactos);
echo "<hr>";
	echo $contactos[1]['email'];

 ?>