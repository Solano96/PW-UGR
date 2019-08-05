<!doctype html>

<html>

	<head>
		<meta charset="utf-8">
		<title>Foro Libros</title>
		
		<link rel="stylesheet" type="text/css" href="css/main_style.css">
		<link rel="stylesheet" type="text/css" href="css/datospersonales.css">

		<link rel="icon" type="image/png" href="imagenes/logo_black.png"/>
		<script type="text/javascript" src="./validar_formulario.js"></script>


	</head>

	<body>	
			
			<?php
			    session_start();

			    require_once('usuario.class.inc');

			    $usuario = Usuario::obtenerUsuario($_SESSION['nick']);

			    $nick = $usuario->devolverValor('Nick');
			    $contrasenia = $usuario->devolverValor('Contrasenia');
			    $nombre = $usuario->devolverValor('Nombre');
			    $apellidos = $usuario->devolverValor('Apellidos');
			    $dni = $usuario->devolverValor('DNI');
			    $email = $usuario->devolverValor('Email');
			    $pais = $usuario->devolverValor('Pais');
			    $fechaNacimiento = $usuario->devolverValor('FechaNacimiento');
			    $telefono = $usuario->devolverValor('Telefono');
			?>

		<!-- ******************************** CABECERA ******************************** -->

		<header>
			<a id="logo-header href="index.php"">
				<img src='imagenes/logo.png' alt = 'Imagen'  height="85" width="110"/>
			</a> <!-- / #logo-header -->

	 		<h1 id="NombreForo">ForoLibro</h1>

			<?php 
	 			require_once('login_logout.php');
	 			login_logout_function();
	 		?>
	 
		</header>


		<!-- ******************************** NAVBAR******************************** -->		

		<section class="navbar">
		  <a href="mislibros.php">Mis libros</a>
		  <a href="foro.php">Foro</a>
		  <a class="active" href="datospersonales.php">Mis datos</a>
		  <a href="recomendaciones.php">Mis recomendaciones</a>
		</section>
	
		<section class="row">
			<form id="formulario-alta" action="procesar_datospersonales.php" method="post" name="formulario_altausuario" onsubmit="return validar_altausuario();">
				<section class="data-title">Datos de la cuenta</section>
				<section class="column">
					<p><label>Nick Usuario:</label><input type="text" name="nickname" value="<?php echo $nick ?>"></p>
					<p><label>Contraseña:</label><input type="password" name="contrasenia" value="<?php echo $contrasenia ?>"></p>
					<p><label>Nombre:</label><input type="text" name="nombre" value="<?php echo $nombre ?>"></p>
					<p><label>Apellidos:</label><input type="text" name="apellidos" value="<?php echo $apellidos ?>"></p>
					<p><label>DNI:</label><input type="text" name="dni" value="<?php echo $dni ?>"></p>
				</section>

				<section class="column">
					<p><label>Email:</label><input type="text" name="email" value="<?php echo $email ?>"></p>
					<p>
						<label>País:</label>

						<select class="elegir-pais" name="pais">
							<?php

								if($pais == "España"){
									echo '<option selected="selected" value="España">España</option>';
								}
								else{
									echo '<option value="España">España</option>';
								}


								if($pais == "Francia"){
									echo '<option selected="selected" value="Francia">Francia</option>';
								}
								else{
									echo '<option value="Francia">Francia</option>';
								}

								
								if($pais == "Alemania"){
									echo '<option selected="selected" value="Alemania">Alemania</option>';
								}
								else{
									echo '<option value="Alemania">Alemania</option>';
								}

								
								if($pais == "Italia"){
									echo '<option selected="selected" value="Italia">Italia</option>';
								}
								else{
									echo '<option value="Italia">Italia</option>';
								}

								
								if($pais == "Grecia"){
									echo '<option selected="selected" value="Grecia">Grecia</option>';
								}
								else{
									echo '<option value="Grecia">Grecia</option>';
								}

							?>

						</select>
					</p>
					<p><label>Año nacimiento:</label><input type="text" name="nacimiento" value="<?php echo $fechaNacimiento ?>"></p>
					<p><label>Teléfono:</label><input type="text" name="telefono" value="<?php echo $telefono ?>"></p>
				</section>
			<input class="subir-datos" type = "submit" value = "Modificar"/>
			</form>
		</section>

		<footer class="myfooter">
			<section class="column_footer">
					<h5 class="title_box">Contacto</h5>
					<section class="footerbar">
					  <a href="https://github.com/Solano96">Desarrollador</a>
					  <a href="./Documentacion/como_se_hizo.pdf">Como se hizo</a>
					  <a href="">Acerca de ForoLibro</a>
					</section>
			</section>
		</footer>

	</body>

<html/>
