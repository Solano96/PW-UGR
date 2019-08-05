<?php
	
	require_once('datosObject.class.inc');

	class ValoracionLibro extends DataObject{

		protected $datos = array(
	        "Titulo" => "", 
	        "NumeroValoraciones" => "",
	        "NumeroEstrellasAcumuladas" => "",
	        "ValoracionMedia" => ""
		);


		public static function obtenerValoracion($titulo){
			$conexion = parent::conectar();

			$sql = "SELECT * FROM " . TABLA_VALORACIONES . " WHERE Titulo = :titulo";

			try{

				$st = $conexion->prepare($sql);
				$st->bindValue(":titulo",$titulo);
				$st->execute();

				$fila = $st->fetch();

				parent::desconectar($conexion);

				if($fila){
					return new ValoracionLibro($fila);
				}

			} catch(PDOException $e){

				parent::desconectar($conexion);
				die("Consulta fallida: ".$e->getMessage());

			}
		}

		public static function insertarValoracion($libro){			
			$conexion = parent::conectar();

			$sql = "INSERT INTO " . TABLA_VALORACIONES . " (Titulo, NumeroValoraciones, NumeroEstrellasAcumuladas) VALUES(:titulo, :numerovaloraciones, :numeroestrellasacumuladas)";

			try{

				$st = $conexion->prepare($sql);

				$st->bindValue(":titulo", $libro['titulo']);
				$st->bindValue(":numerovaloraciones", 1);

				for($i = 1; $i < 6; $i++){
					if(!empty($libro['star'.$i])){
						$st->bindValue(":numeroestrellasacumuladas", $i);
						$numeroestrellas = $i;
						break;
					}
				}

				$st->execute();

				parent::desconectar($conexion);

			} catch(PDOException $e){

				parent::desconectar($conexion);
				die("Inserción fallida: ".$e->getMessage());

			}

		}

		public static function aniadirValoracion($titulo, $estrellas){

			$valoracionlibro = ValoracionLibro::obtenerValoracion($titulo);

			$numerovaloraciones = $valoracionlibro->devolverValor('NumeroValoraciones') + 1;
			$numeroestrellas = $valoracionlibro->devolverValor('NumeroEstrellasAcumuladas') + $estrellas;

			$conexion = parent::conectar();

			$sql = "UPDATE " . TABLA_VALORACIONES . " SET NumeroValoraciones = :numerovaloraciones, NumeroEstrellasAcumuladas = :numeroestrellas WHERE Titulo = :titulo";

			try{

				$st = $conexion->prepare($sql);

				$st->bindValue(":titulo", $titulo);
				$st->bindValue(":numerovaloraciones", $numerovaloraciones);
				$st->bindValue(":numeroestrellas", $numeroestrellas);


				$st->execute();

				parent::desconectar($conexion);

			} catch(PDOException $e){

				parent::desconectar($conexion);
				die("Inserción fallida: ".$e->getMessage());

			}

		}

		public static function restarValoracion($titulo, $estrellas){

			$valoracionlibro = ValoracionLibro::obtenerValoracion($titulo);

			$numerovaloraciones = $valoracionlibro->devolverValor('NumeroValoraciones') - 1;
			$numeroestrellas = $valoracionlibro->devolverValor('NumeroEstrellasAcumuladas') - $estrellas;

			$conexion = parent::conectar();

			$sql = "UPDATE " . TABLA_VALORACIONES . " SET NumeroValoraciones = :numerovaloraciones, NumeroEstrellasAcumuladas = :numeroestrellas WHERE Titulo = :titulo";

			try{

				$st = $conexion->prepare($sql);

				$st->bindValue(":titulo", $titulo);
				$st->bindValue(":numerovaloraciones", $numerovaloraciones);
				$st->bindValue(":numeroestrellas", $numeroestrellas);


				$st->execute();

				parent::desconectar($conexion);

			} catch(PDOException $e){

				parent::desconectar($conexion);
				die("Inserción fallida: ".$e->getMessage());

			}

		}

	}

?>