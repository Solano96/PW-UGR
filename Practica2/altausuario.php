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

		
		<section class="row">

			<form id="formulario-alta" action="procesar_altausuario.php" method="post" name="formulario_altausuario" onsubmit="return validar_altausuario();">
				<section class="data-title">Datos de la cuenta</section>
					<section class="column">
					<p><label>Nick Usuario:*</label><input type="text" name="nickname"></p>
					<p><label>Contraseña:*</label><input type="password" name="contrasenia"></p>
					<p><label>Nombre:*</label><input type="text" name="nombre"></p>
					<p><label>Apellidos:</label><input type="text" name="apellidos"></p>
					<p><label>DNI:</label><input type="text" name="dni"></p>
				</section>

				<section class="column">
					<p><label>Email:*</label><input type="text" name="email"></p><p>
						<label>País:</label>

						<select class="elegir-pais" name="pais">
							<option value="España">España</option>
							<option value="Francia">Francia</option>
							<option value="Alemania">Alemania</option>
							<option value="Italia">Italia</option>
							<option value="Grecia">Grecia</option>
						</select>
					</p>
					<p><label>Año nacimiento:*</label><input type="text" name="nacimiento"></p>
					<p><label>Teléfono:</label><input type="text" name="telefono"></p>
				</section>

				<input class="subir-datos" type = "submit" value = "Registrar"/>
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
