<?php
	
	require_once('datosObject.class.inc');

	class Usuario extends DataObject{

		protected $datos = array(
	        "Nick" => "", 
	        "Contrasenia" => "", 
	        "Nombre" => "",
	        "Apellidos" => "",
	        "DNI" => "",
	        "Email" => "",
	        "Pais" => "",
	        "FechaNacimiento" => "",
	        "Telefono" => ""
		);

		public static function obtenerUsuario($nick){
			$conexion = parent::conectar();

			$sql = "SELECT * FROM " . TABLA_USUARIOS . " WHERE Nick = :nick";

			try{

				$st = $conexion->prepare($sql);
				
				$st->bindValue(":nick",$nick);
				$st->execute();

				$fila = $st->fetch();

				parent::desconectar($conexion);

				if($fila){
					return new Usuario($fila);
				}

			} catch(PDOException $e){

				parent::desconectar($conexion);
				die("Consulta fallida: ".$e->getMessage());

			}
		}

		public static function insertarUsuario($usuario){
			$conexion = parent::conectar();

			$atributos = "";

			foreach ($usuario as $clave => $valor) {
				$atributos .= ":".$clave.", ";
			}

			$atributos = substr($atributos, 0, -2);

			$sql = "INSERT INTO " . TABLA_USUARIOS . " VALUES(". $atributos . ")";

			try{

				$st = $conexion->prepare($sql);

				foreach ($usuario as $clave => $valor) {
					$st->bindValue(":".$clave, $valor);
				}

				$st->execute();

				parent::desconectar($conexion);

			} catch(PDOException $e){

				parent::desconectar($conexion);
				die("Inserción fallida: ".$e->getMessage());

			}

		}

		public static function validarUsuario($nick, $contrasenia){
			$conexion = parent::conectar();

			$sql = "SELECT * FROM " . TABLA_USUARIOS . " WHERE Nick = :nick AND Contrasenia = :contrasenia";

			try{

				$st = $conexion->prepare($sql);
				$st->bindValue(":nick",$nick);
				$st->bindValue(":contrasenia", $contrasenia);
				$st->execute();

				$fila = $st->fetch();

				if($fila){
					return true;
				}
				else{
					return false;
				}

			} catch(PDOException $e){

				parent::desconectar($conexion);
				die("Validación fallida: ".$e->getMessage());
				
			}
		}


		public static function modificarDatosUsuario($usuario){

			$conexion = parent::conectar();

			$sql = "UPDATE " . TABLA_USUARIOS . " SET Contrasenia = :contrasenia, Nombre = :nombre, Apellidos = :apellidos, DNI = :dni, Email = :email, Pais = :pais, FechaNacimiento = :nacimiento, Telefono = :telefono WHERE Nick = :nick";

			try{

				$st = $conexion->prepare($sql);

				$st->bindValue(":nick", $usuario['nickname']);
				$st->bindValue(":contrasenia", $usuario['contrasenia']);
				$st->bindValue(":nombre", $usuario['nombre']);
				$st->bindValue(":apellidos", $usuario['apellidos']);
				$st->bindValue(":dni", $usuario['dni']);
				$st->bindValue(":email", $usuario['email']);
				$st->bindValue(":pais", $usuario['pais']);
				$st->bindValue(":nacimiento", $usuario['nacimiento']);
				$st->bindValue(":telefono", $usuario['telefono']);

				$st->execute();

				parent::desconectar($conexion);

			} catch(PDOException $e){

				parent::desconectar($conexion);
				die("Inserción fallida: ".$e->getMessage());

			}

		}

	}

?>