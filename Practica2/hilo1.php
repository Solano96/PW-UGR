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
					¿Qué libro me recomendais?
				</section>

				<section class="answer">
					<section class="answer-user">
						<img src="imagenes/user2.png">
						<section class="answer-user-data">
							<a href="">Francisco Solano</a>
							<section class="fecha-hora">Enviado: 21:10 23/03/2019</section>
						</section>
					</section>

					<section class="answer-content">
						Me gustaría empezar a leer un nuevo libro, pero no se cual. Si podeis recomendarme alguno que os haya gustado 
						mucho o que sea interesante decidmelo por favor.
					</section>
				</section>

				<section class="answer">
					<section class="answer-user">
						<img src="imagenes/user2.png">
						<section class="answer-user-data">
							<a href="">Jose Molina</a>
							<section class="fecha-hora">Enviado: 21:15 23/03/2019</section>
						</section>
					</section>

					<section class="answer-content">
						Buenas Fran, pues la verdad es que no sabría decirte ninguno en particular, hay muchisimos libros que me gustan,
						pero no se de que género quieres. ¿Qué tipo de libros estas buscando?
					</section>
				</section>

				<section class="answer">
					<section class="answer-user">
						<img src="imagenes/user2.png">
						<section class="answer-user-data">
							<a href="">Francisco Solano</a>
							<section class="fecha-hora">Enviado: 21:23 23/03/2019</section>
						</section>
					</section>

					<section class="answer-content">
						Pues la verdad no me importa el género, pero suelo leer libros de fantasía y ciencia ficción. Aunque estoy abierto
						a cualquier libro.
					</section>
				</section>

				<section class="answer">
					<section class="answer-user">
						<img src="imagenes/user2.png">
						<section class="answer-user-data">
							<a href="">Fernando Pérez</a>
							<section class="fecha-hora">Enviado: 21:35 23/03/2019</section>
						</section>
					</section>

					<section class="answer-content">
						¿Has probado a mirar alguno de los libros que te aparece en el apartado de "Mis recomendaciones" en este mismo foro?
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
