<?php 
//conected to DB

$conexion=mysqli_connect("localhost","root","","phpmysql");

//comprobar si la conexion es correcta

if (mysqli_connect_errno()) {
	echo "la conexion con la base de datos ha fallado:".mysqli_connect_errno();
	}else{
		echo "conexión exitosa";
	}

//hacer una consulta para configurar la codificacion de caracteres

mysqli_query($conexion,"SET NAMES 'utf8'");

//consulta select desde php

$query=mysqli_query($conexion,"SELECT * FROM notas");

while ($notas=mysqli_fetch_assoc($query)) {
	//var_dump($notas);
	echo "<h2>".$notas['titulo']."</h2>";
	echo $notas['descripccion']."<br>";
}


//insertar en la base de datos desde php

$qsql="INSERT INTO notas VALUES(NULL, 'Nota desde PHP', 'Esto es una nota desde PHP', 'green')";
$insert=mysqli_query($conexion,$qsql);

if ($insert) {
	echo "datos insertados correctamente";
}else{
	echo "error:".mysqli_error($conexion);
}

 ?>