<?php 

//conexion
$server="localhost";
$username="root";
$password="";
$DataBase="blog_master";

$conexion=mysqli_connect($server,$username,$password,$DataBase);

mysqli_query($conexion,"SET NAMES 'utf8'");

//iniciar la sesion
session_start();

 ?>