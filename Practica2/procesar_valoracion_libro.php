<?php

	session_start();

	require_once("valoracionlibro.class.inc");
	require_once("opinionlibro.class.inc");

	$nombre = $_SESSION['nick'];
	$opinion = $_POST['opinion'];

	$titulo = $_GET["titulo"];

	$estrellas = 0;

	for($i = 1; $i < 6; $i++){
		if(!empty($_POST['star'.$i])){
			$estrellas = $i;
			break;
		}
	}

	$opinionPersona = OpinionLibro::obtenerOpinion($titulo, $nombre);

	if($opinionPersona == False){
		OpinionLibro::insertarOpinion($titulo, $nombre, $opinion, $estrellas);
	}
	else{
		
		OpinionLibro::modificarOpinion($titulo, $nombre, $opinion, $estrellas);

		$estrellasquerestar = $opinionPersona->devolverValor('Valoracion');

		ValoracionLibro::restarValoracion($titulo, $estrellasquerestar);
	}

	ValoracionLibro::aniadirValoracion($titulo, $estrellas);

	
	header("Location: libro.php?libro=" . $titulo);
	exit;

?>