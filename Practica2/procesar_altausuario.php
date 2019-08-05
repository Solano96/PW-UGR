<?php

	session_start();

	require_once("usuario.class.inc");

	Usuario::insertarUsuario($_POST);
	
	header("Location: index.php?registrado=1");
	exit;

?>