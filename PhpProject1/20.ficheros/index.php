<?php 


/*

//abrir
$abrir_archivo= fopen("fichero_texto.txt", "a+");
while (!feof($abrir_archivo)) {
//leer contenido
$contenido=fgets($abrir_archivo);
echo $contenido.'<br>';
}

//escrivir
fwrite($abrir_archivo, "soy un texto desde php");



//cerrar
fclose($abrir_archivo);
*/

/*
//copiar
copy('fichero_texto.txt', 'fichero_copiado.txt') or die("error al copiar");
*/

//renombrar
//rename('fichero_copiado.txt', 'archivo_ver2.txt');

//eliminar
//unlink('archivo_ver2.txt') or die("error al borrar");


if (file_exists('fichero_texto.txt')) {
	echo "el archivo existe";
}else{echo "el archivo no existe";}

 ?>