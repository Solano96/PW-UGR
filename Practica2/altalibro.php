<!doctype html>

<html>

	<head>
		<meta charset="utf-8">
		<title>Foro Libros</title>
		
		<link rel="stylesheet" type="text/css" href="css/main_style.css">
		<link rel="stylesheet" type="text/css" href="css/altalibro.css">

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


		<!-- ******************************** NAVBAR******************************** -->		

		<section class="navbar">
		  <a href="mislibros.php">Mis libros</a>
		  <a href="foro.php">Foro</a>
		  <a href="datospersonales.php">Mis datos</a>
		  <a href="recomendaciones.php">Mis recomendaciones</a>
		</section>
	
		<section class="row">

			<section class="centrar">
				<form id="alta_libro" action = "procesar_altalibro.php" name="formulario_altalibro" method = "POST" onsubmit="return validar_altalibro();">


					<h1 id="titulo_alta_libro">Dar de alta libro</h1>
					<section class="datos_libro">							
						<a href="">
							<img src="imagenes/upload_photo.png">
						</a>
							<section class="container">
								<section class="formulario">
									<section class="linea_formulario">
										<label class="linea_etiqueta">Título:</label>
										<input type="text" name="titulo" class="linea_input">
									</section>

									<section class="linea_formulario">
										<label class="linea_etiqueta">Autor:</label>
										<input type="text" name="autor" class="linea_input">
									</section>

									<section class="linea_formulario">
										<label class="linea_etiqueta">Editorial:</label>

										<select class="select_editorial" name="editorial">
											<option value="alfaguara">Alfaguara</option>
											<option value="atalanta">Atalanta</option>
											<option value="planeta">Planeta</option>
											<option value="salamandra">Salamandra</option>
										</select>
									</section>

									<section class="linea_formulario">
										<label class="linea_etiqueta">Año:</label>
										<input type="text" name="anio" class="linea_input">
									</section>

									<section class="linea_formulario">
										<label class="linea_etiqueta">Edición:</label>
										<input type="text" name="edicion" class="linea_input">
									</section>
								</section>
							</section>
					</section>

					<section class="section_form">
						<h4 class="section_form_title">Descripción</h4>
						<textarea rows="4" cols="60" name="descripcion"></textarea>
					</section>

					<section class="section_form">
						<h4 class="section_form_title">Opinión</h4>
						<textarea rows="4" cols="60" name="opinion"></textarea>
					</section>

					<section class="section_form">							
						<h4 class="section_form_title">Mi valoración:</h4>
						<section class="stars">							
						    <input class="star star-5" id="star-5" type="radio" name="star5"/>
						    <label class="star star-5" for="star-5"></label>
						    <input class="star star-4" id="star-4" type="radio" name="star4"/>
						    <label class="star star-4" for="star-4"></label>
						    <input class="star star-3" id="star-3" type="radio" name="star3"/>
						    <label class="star star-3" for="star-3"></label>
						    <input class="star star-2" id="star-2" type="radio" name="star2"/>
						    <label class="star star-2" for="star-2"></label>
						    <input class="star star-1" id="star-1" type="radio" name="star1"/>
						    <label class="star star-1" for="star-1"></label>
						</section>
					</section>

					<input id="dar_alta_libro" type = "submit" value = "Dar de alta libro"/>
				</form>
			</section>
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
