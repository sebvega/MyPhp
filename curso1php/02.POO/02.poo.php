<?php
#CLASE
#modelo usado para crear objetos que comparten un mismo comportamiento, estado e identidad

class Automovil{

	#propiedades:   son las caracteristicas que pueden tener un objeto	
	public $marca;
	public $modelo;

	#metodo   es un algoritmo asosiado a un objeto aque indica la capacidad de lo que este puede hacer

	public function mostrar(){
		echo "<p>Hola! soy un $this->marca, modelo $this->modelo";
	}

}


#objeto  entidad provista de metodos o mensajes a los cuales responde propiedades con valors concretos

$a= new Automovil();
$a -> marca = "toyota";
$a -> modelo = "corolla";
$a -> mostrar();

$b= new Automovil();
$b -> marca = "hyundai";
$b -> modelo = "i10 ";
$b -> mostrar();


?>