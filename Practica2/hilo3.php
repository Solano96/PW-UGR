<!doctype html>

<html>

	<head>
		<meta charset="utf-8">
		<title>Foro Libros</title>
		
		<link rel="stylesheet" type="text/css" href="css/main_style.css">
		<link rel="stylesheet" type="text/css" href="css/hilo1.css">

		<link rel="icon" type="image/png" href="imagenes/logo_black.png"/>


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


		<!-- ******************************** NAVBAR******************************** -->		

			<section class="navbar">
			  <a href="mislibros.php">Mis libros</a>
			  <a class="active" href="foro.php">Foro</a>
			  <a href="datospersonales.php">Mis datos</a>
			  <a href="recomendaciones.php">Mis recomendaciones</a>
			</section>

			<section class="row">

				<section class="titulo-hilo">
					Libros de misterio e intriga
				</section>

				<section class="answer">
					<section class="answer-user">
						<img src="imagenes/user2.png">
						<section class="answer-user-data">
							<a href="">Antonio López</a>
							<section class="fecha-hora">Enviado: 21:10 23/03/2019</section>
						</section>
					</section>

					<section class="answer-content">
						Bueno abro este hilo para hablar sobre libros de misterio e intriga. Es uno de mis temas favoritos y me gustaría compartir opiniones
						y libros con vosotros.
					</section>
				</section>

				<section class="answer">
					<section class="answer-user">
						<img src="imagenes/user2.png">
						<section class="answer-user-data">
							<a href="">Francisco Solano</a>
							<section class="fecha-hora">Enviado: 21:15 23/03/2019</section>
						</section>
					</section>

					<section class="answer-content">
						Hola Antonio, me uno a este hilo. A mi también me gustan mucho los libros de misterio.
					</section>
				</section>


				<form id="responder-hilo" action = "" method = "get">
					
					<section class="section_form">
						<h4 class="section_form_title">Responder:</h4>
						<textarea rows="4" cols="80">
						</textarea>
					</section>

					<input type = "submit" value = "Enviar"/>
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
