<?php

	session_start();

	require_once("usuario.class.inc");

	Usuario::modificarDatosUsuario($_POST);
	
	header("Location: datospersonales.php");
	exit;

?>