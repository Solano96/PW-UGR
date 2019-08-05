<?php

	session_start();

	require_once("libro.class.inc");
	require_once("valoracionlibro.class.inc");
	require_once("opinionlibro.class.inc");

	Libro::insertarLibro($_POST);
	ValoracionLibro::insertarValoracion($_POST);

	$estrellas = 0;

	for($i = 1; $i < 6; $i++){
		if(!empty($_POST['star'.$i])){
			$estrellas = $i;
			break;
		}
	}

	OpinionLibro::insertarOpinion($_POST['titulo'], $_SESSION['nick'], $_POST['opinion'], $estrellas);
	
	header("Location: mislibros.php?libroleido.php?libro=" . $_POST['titulo']);
	exit;

?>