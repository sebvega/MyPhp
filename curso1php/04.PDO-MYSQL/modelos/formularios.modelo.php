<?php 

require_once "conexion.php";


class ModeloFormularios{

	static public function mdlRegistro($tabla, $datos){

		$stmt= conexion::conectar()-> prepare("INSERT INTO $tabla(nombre, correo, password) VALUES (:nombre, :correo, :password)");

		$stmt->bindparam(":nombre", $datos["nombre"],PDO::PARAM_STR);
		$stmt->bindparam(":correo", $datos["correo"],PDO::PARAM_STR);
		$stmt->bindparam(":password", $datos["password"],PDO::PARAM_STR);

		if ($stmt->execute()) {
			return "ok";
		}else{

			print_r(conexion::conectar()->errorInfo());
		}
		$stmt->close();
		$stmt=null;

	}


	/*  seleccionar registros  */

	static public function mdlSeleccionarRegistro($tabla, $item, $valor){

		if ($item ==null && $valor==null) {
			$stmt= conexion::conectar()-> prepare("SELECT *, DATE_FORMAT(fecha,'%d/%m/%Y') AS fecha FROM $tabla ORDER BY id DESC");

			$stmt->execute();

			return $stmt->fetchAll();
		}else{

			$stmt= conexion::conectar()-> prepare("SELECT * FROM $tabla WHERE $item= :$item");
			$stmt->bindparam(":".$item, $valor,PDO::PARAM_STR);
			$stmt->execute();

			return $stmt->fetch();
		}

		
		$stmt->close();
		$stmt=null;
	}

	/*  actualizar registros  */
	static public function mdlActualizarRegistro($tabla, $datos){
	$stmt= conexion::conectar()-> prepare("UPDATE $tabla SET nombre=:nombre,correo=:correo,password=:password WHERE id=:id");

		$stmt->bindparam(":id", $datos["id"],PDO::PARAM_INT);
		$stmt->bindparam(":nombre", $datos["nombre"],PDO::PARAM_STR);
		$stmt->bindparam(":correo", $datos["correo"],PDO::PARAM_STR);
		$stmt->bindparam(":password", $datos["password"],PDO::PARAM_STR);

		if ($stmt->execute()) {
			return "ok";
		}else{

			print_r(conexion::conectar()->errorInfo());
		}
		$stmt->close();
		$stmt=null;
	}
	/*  eliminar registros  */
	static public function mdlEliminarRegistro($tabla, $valor){

		$stmt= conexion::conectar()-> prepare("DELETE FROM $tabla WHERE id=:id");

		$stmt->bindparam(":id", $valor,PDO::PARAM_INT);


		if ($stmt->execute()) {
			return "ok";
		}else{

			print_r(conexion::conectar()->errorInfo());
		}
		$stmt->close();
		$stmt=null;
	}

}

 ?>