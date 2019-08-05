<?php
	
	require_once('datosObject.class.inc');

	class OpinionLibro extends DataObject{

		protected $datos = array(
	        "Titulo" => "", 
	        "PersonaQueOpina" => "",
	        "Opinion" => "",
	        "Valoracion" => ""
		);

		public static function obtenerOpinionesLibro($titulo){	
			$conexion = parent::conectar();

			$sql = "SELECT * FROM " . TABLA_OPINIONES . " WHERE Titulo = :titulo";

			try{

				$st = $conexion->prepare($sql);

				$st->bindValue(":titulo",$titulo);

				$st->execute();

				$opiniones[] = array();

		        foreach ( $st->fetchAll() as $fila ) {
		          $opiniones[] = new OpinionLibro( $fila );
		        }

				parent::desconectar($conexion);

				return $opiniones;

			} catch(PDOException $e){

				parent::desconectar($conexion);
				die("Consulta fallida: ".$e->getMessage());

			}
		}


		public static function obtenerOpinion($titulo, $nombre){
			$conexion = parent::conectar();

			$sql = "SELECT * FROM " . TABLA_OPINIONES . " WHERE Titulo = :titulo AND PersonaQueOpina = :nombre";

			try{

				$st = $conexion->prepare($sql);
				$st->bindValue(":titulo",$titulo);
				$st->bindValue(":nombre",$nombre);				
				$st->execute();

				$fila = $st->fetch();

				parent::desconectar($conexion);

				if($fila){
					return new OpinionLibro($fila);
				}
				else{
					return false;
				}

			} catch(PDOException $e){

				parent::desconectar($conexion);
				die("Consulta fallida: ".$e->getMessage());

			}
		}

		public static function insertarOpinion($titulo, $nombre, $opinion, $estrellas){			
			$conexion = parent::conectar();

			$sql = "INSERT INTO " . TABLA_OPINIONES . " VALUES(:titulo, :nombre, :opinion, :estrellas)";

			try{

				$st = $conexion->prepare($sql);

				$st->bindValue(":titulo", $titulo);
				$st->bindValue(":nombre", $nombre);
				$st->bindValue(":opinion", $opinion);
				$st->bindValue(":estrellas", $estrellas);

				$st->execute();

				parent::desconectar($conexion);

			} catch(PDOException $e){

				parent::desconectar($conexion);
				die("Inserción fallida: ".$e->getMessage());

			}

		}


		public static function modificarOpinion($titulo, $nombre, $opinion, $estrellas){			
			$conexion = parent::conectar();
		
			$sql = "UPDATE " . TABLA_OPINIONES . " SET Opinion = :opinion, Valoracion = :estrellas WHERE Titulo = :titulo AND PersonaQueOpina = :nombre";

			try{

				$st = $conexion->prepare($sql);

				$st->bindValue(":titulo", $titulo);
				$st->bindValue(":nombre", $nombre);
				$st->bindValue(":opinion", $opinion);
				$st->bindValue(":estrellas", $estrellas);

				$st->execute();

				parent::desconectar($conexion);

			} catch(PDOException $e){

				parent::desconectar($conexion);
				die("Inserción fallida: ".$e->getMessage());

			}

		}




	}

?>