<!doctype html>

<html>

	<head>
		<meta charset="utf-8">
		<title>Foro Libros</title>
		
		<link rel="stylesheet" type="text/css" href="css/main_style.css">
		<link rel="stylesheet" type="text/css" href="css/foro.css">
		<link rel="stylesheet" type="text/css" href="css/altalibro.css">

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
				<section class="foro-section">

					<table class="tg">
						<colgroup>
							<col style="width: 323px">
							<col style="width: 126px">
							<col style="width: 256px">
						</colgroup>
						<tr>
							<th class="tg-j8c8">Tema</th>
							<th class="tg-j8c8-answers">Respuestas</th>
							<th class="tg-j8c8">Últimos mensajes</th>
						</tr>
						<tr>
							<td class="tg-xldj">
								<a href="hilo1.php">¿Qué libro me recomendais?</a>
								<p>Autor: Francisco Solano</p> 
							</td>
							<td class="tg-xldj-answers">45</td>
							<td class="tg-xldj">
								<p>23/03/2019</p>
								<p>Autor: Fernando Pérez</p>
							</td>
						</tr>
						<tr>
							<td class="tg-xldj">
								<a href="hilo2.php">Cuál creeis que ha sido el mejor libro publicado en 2018</a>
								<p>Autor: Forero23</p>
							</td>
							<td class="tg-xldj-answers">85</td>
							<td class="tg-xldj">
								<p>23/03/2019</p>
								<p>Autor: Daniel García</p>
							</td>
					  	</tr>
						<tr>
							<td class="tg-xldj">
								<a href="hilo3.php">Libros de misterio e intriga</a>
								<p>Autor: Antonio López</p>  
							</td>
							<td class="tg-xldj-answers">42</td>
							<td class="tg-xldj">
								<p>23/03/2019</p>
								<p>Autor: Francisco Solano</p>
							</td>
						</tr>
					</table>
				</section>

				<section class="centrar">
					<form id="alta_libro" action = "" method = "get">

						<section class="section_form">
							<h4 class="section_form_title">Título del hilo</h4>
							<textarea rows="1" cols="60"></textarea>
						</section>

						<section class="section_form">
							<h4 class="section_form_title">Descripción</h4>
							<textarea rows="4" cols="60"></textarea>
						</section>

						<input id="dar_alta_libro" type = "submit" value = "Crear hilo"/>
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
