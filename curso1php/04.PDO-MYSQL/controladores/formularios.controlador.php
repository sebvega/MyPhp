<?php 

class ControladorFormularios{

	/*  registro  */
	static public function ctrRegistro(){

		if (isset($_POST["registroNombre"])) {


			$tabla="registros";
			$datos=array("nombre"=>$_POST["registroNombre"],
				"correo"=>$_POST["registroEmail"],
				"password"=>$_POST["registroPassword"]);

			$respuesta=ModeloFormularios::mdlRegistro($tabla, $datos);

			return $respuesta;
		}

	}

	/*  seleccionar registros  */

	static public function ctrSeccionarRegistros($item, $valor){

		$tabla= "registros";

		$respuesta=ModeloFormularios::mdlSeleccionarRegistro($tabla, $item, $valor);
		return $respuesta;

	}
	/* ingreso */


	public function ctrIngreso(){

		if (isset($_POST["ingresoEmail"])) {
			$tabla="registros";
			$item="correo";
			$valor=$_POST["ingresoEmail"];

			$respuesta=ModeloFormularios::mdlSeleccionarRegistro($tabla, $item, $valor);
			if ($respuesta["correo"]==$_POST["ingresoEmail"] && $respuesta["password"]==$_POST["ingresoPassword"]) {

				$_SESSION["validarIngreso"]="ok";

				echo '<script>
				if (window.history.replaceState){
					window.history.replaceState( null, null, window.location.href);
				}

				window.location ="index.php?pagina=inicio";

				</script>';

			}else{

				echo '<script>
				if (window.history.replaceState){
					window.history.replaceState( null, null, window.location.href);
				}

				</script>';
				echo '<div class="alert alert-danger">usuario o contraseña equivocado(a)</div>';

			}


		}
	}

	/* actualizar registro */
static public function ctrActualizarRegirstro(){

	if (isset($_POST["actualizarNombre"])) {

		if ($_POST["actualizarPassword"]!="") {
			$password=$_POST["actualizarPassword"];
		}else{
			$password=$_POST["passwordActual"];
		}

			$tabla="registros";
			$datos=array("id"=>$_POST["idUsuario"],
						 "nombre"=>$_POST["actualizarNombre"],
						 "correo"=>$_POST["actualizarCorreo"],
						 "password"=>$password);

			$respuesta=ModeloFormularios::mdlActualizarRegistro($tabla, $datos);
			return $respuesta;
			
			}
			
		}
			/* eliminar registro */
public function ctrEliminarRegistro(){

	if (isset($_POST["eliminarRegistro"])) {

		$tabla= "registros";
		$valor= $_POST["eliminarRegistro"];
		$respuesta=ModeloFormularios::mdlEliminarRegistro($tabla, $valor);

		if ($respuesta=="ok") {
			echo '<script>
				if (window.history.replaceState){
					window.history.replaceState( null, null, window.location.href);
				}

				window.location ="index.php?pagina=inicio";

			</script>';
		}
	}

}
}





?>