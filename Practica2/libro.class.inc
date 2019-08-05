<?php
	
	require_once('datosObject.class.inc');

	class Libro extends DataObject{

		protected $datos = array(
	        "Titulo" => "", 
	        "Autor" => "", 
	        "Editorial" => "",
	        "Anio" => "",
	        "Edicion" => "",
	        "Descripcion" => "",
	        "PersonaQueDaDeAlta" => ""
		);

		public static function obtenerLibrosSubidosPor($nick){			
			$conexion = parent::conectar();

			$sql = "SELECT * FROM " . TABLA_LIBROS . " WHERE PersonaQueDaDeAlta = :nick";

			try{

				$st = $conexion->prepare($sql);
				$st->bindValue(":nick",$nick);
				$st->execute();

				$libros[] = array();

		        foreach ( $st->fetchAll() as $fila ) {
		          $libros[] = new Libro( $fila );
		        }

				parent::desconectar($conexion);

				return $libros;

			} catch(PDOException $e){

				parent::desconectar($conexion);
				die("Consulta fallida: ".$e->getMessage());

			}
		}

		public static function obtenerUltimosLibrosSubidos($num_libros){	
			$conexion = parent::conectar();

			$sql = "SELECT * FROM " . TABLA_LIBROS;

			try{

				$st = $conexion->prepare($sql);
				$st->execute();

				$libros[] = array();

				$i = 0;

		        foreach ( $st->fetchAll() as $fila ) {
		          $libros[] = new Libro( $fila );
		          $i++;

		          if($i >= $num_libros)
		          	break;
		        }

				parent::desconectar($conexion);

				return $libros;

			} catch(PDOException $e){

				parent::desconectar($conexion);
				die("Consulta fallida: ".$e->getMessage());

			}
		}

		public static function obtenerLibroAnterior($titulo){
			$conexion = parent::conectar();

			$sql = "SELECT * FROM " . TABLA_LIBROS;

			try{

				$st = $conexion->prepare($sql);
				$st->execute();

				$libros = $st->fetchAll();

				$num_libros = count($libros);

				$indice = -1;

				for($i = 0; $i < $num_libros; $i++){
					$libro = new Libro($libros[$i]);

					if($libro->devolverValor('Titulo') == $titulo){
						$indice = ($i-1+$num_libros)%$num_libros;
						break;
					}
				}

				parent::desconectar($conexion);

				return new Libro($libros[$indice]);				

			} catch(PDOException $e){

				parent::desconectar($conexion);
				die("Consulta fallida: ".$e->getMessage());

			}
		}

		public static function obtenerLibroSiguiente($titulo){
			$conexion = parent::conectar();

			$sql = "SELECT * FROM " . TABLA_LIBROS;

			try{

				$st = $conexion->prepare($sql);
				$st->execute();

				$libros = $st->fetchAll();

				$num_libros = count($libros);

				$indice = -1;

				for($i = 0; $i < $num_libros; $i++){
					$libro = new Libro($libros[$i]);

					if($libro->devolverValor('Titulo') == $titulo){
						$indice = ($i+1+$num_libros)%$num_libros;
						break;
					}
				}

				parent::desconectar($conexion);

				return new Libro($libros[$indice]);				

			} catch(PDOException $e){

				parent::desconectar($conexion);
				die("Consulta fallida: ".$e->getMessage());

			}
		}

		public static function obtenerLibro($titulo){
			$conexion = parent::conectar();

			$sql = "SELECT * FROM " . TABLA_LIBROS . " WHERE Titulo = :titulo";

			try{

				$st = $conexion->prepare($sql);
				$st->bindValue(":titulo",$titulo);
				$st->execute();

				$fila = $st->fetch();

				parent::desconectar($conexion);

				if($fila){
					return new Libro($fila);
				}

			} catch(PDOException $e){

				parent::desconectar($conexion);
				die("Consulta fallida: ".$e->getMessage());

			}
		}


		public static function insertarLibro($libro){
			$conexion = parent::conectar();

			$sql = "INSERT INTO " . TABLA_LIBROS . " VALUES(:titulo, :autor, :editorial, :anio, :edicion, :descripcion, :personaquedadealta)";

			$titulo = $libro['titulo'];
			$numeroestrellas = 0;			

			try{

				$st = $conexion->prepare($sql);

				$st->bindValue(":titulo", $libro['titulo']);
				$st->bindValue(":autor", $libro['autor']);
				$st->bindValue(":editorial", $libro['editorial']);
				$st->bindValue(":anio", $libro['anio']);
				$st->bindValue(":edicion", $libro['edicion']);
				$st->bindValue(":descripcion", $libro['descripcion']);
				$st->bindValue(":personaquedadealta", $_SESSION['nick']);

				$st->execute();

				parent::desconectar($conexion);

			} catch(PDOException $e){

				parent::desconectar($conexion);
				die("Inserción fallida: ".$e->getMessage());

			}

		}

	}

?>