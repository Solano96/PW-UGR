<?php

	session_start();

	$_SESSION['nick'] = null;

	header("Location: index.php");

	exit;
	
?>