<?php

	session_start();

	require_once("usuario.class.inc");

	$usuarioCorrecto = Usuario::validarUsuario($_POST['user'], $_POST['password']);

	if($usuarioCorrecto){
		$_SESSION['nick'] = $_POST['user'];
		header("Location: index.php");
		exit;
	}
	else{
		header("Location: index.php?incorrectLogin=1");
		exit;
	}

?>