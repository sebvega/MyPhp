<?php 

$archivo = $_FILES['archivo'];

$nombre= $archivo['name'];
$tipo = $archivo['type'];

if ($tipo =="image/jpg"||$tipo=="image/jpeg"||$tipo=="image/png"||$tipo=="image/gif") {


	if (!is_dir('imagenes')) {

		mkdir('imagenes', 0777) or die("no se puede crear la carpeta");
	}
move_uploaded_file($archivo['tmp_name'], 'imagenes/'.$nombre);

header("Refresh:5; URL=index.php");
echo "imagen subida correctamente";

}else{
	header("Refresh:5; URL=index.php");
	echo "<h2>sube una imagen con un formato correcto, por favor...</h2>";
}


 ?>