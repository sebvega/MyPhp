<?php 

#ssalidas DE LAS VISTAS AL USUARIO

require_once "controladores/plantilla.controlador.php";
require_once "controladores/formularios.controlador.php";
#require_once "modelos/conexion.php";
require_once "modelos/formularios.modelo.php";


#$conexion=conexion::conectar();

#echo '<pre>'; print_r($conexion); echo '</pre>';


$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();



