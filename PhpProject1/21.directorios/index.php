<?php 


//crear
if (!is_dir('mi_carpeta')) {

mkdir('mi_carpeta', 0777) or die("no se puede crear la carpeta");
}else{echo "ya existe la carpeta";}

//eliminar
//rmdir('mi_carpeta');
echo "<br>";
if ($gestor=opendir('./mi_carpeta')) {
	
	while (false!= ($archivo=readdir($gestor))) {if ($archivo !='.'&&$archivo!='..') {
		echo $archivo.'<br>';
	}
		
	}
}

 ?>