<!doctype html>

<html>

	<head>
		<meta charset="utf-8">
		<title>Foro Libros</title>
		
		<link rel="stylesheet" type="text/css" href="css/main_style.css">			
		<link rel="stylesheet" type="text/css" href="css/libroleido.css">
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
			  <a class="active" href="mislibros.php">Mis libros</a>
			  <a href="foro.php">Foro</a>
			  <a href="datospersonales.php">Mis datos</a>
			  <a href="recomendaciones.php">Mis recomendaciones</a>
			</section>
		
			<section class="row">

				<section class="row_book">

					<?php							

					    require_once('libro.class.inc');
					    require_once('valoracionlibro.class.inc');

					    $libro = Libro::obtenerLibro($_GET["libro"]);

				    	$titulo = $libro->devolverValor('Titulo');
				    	$autor = $libro->devolverValor('Autor');
				    	$editorial = $libro->devolverValor('Editorial');
				    	$anio = $libro->devolverValor('Anio');
				    	$edicion = $libro->devolverValor('Edicion');
				    	$descripcion = $libro->devolverValor('Descripcion');

				    	$valoracionlibro = ValoracionLibro::obtenerValoracion($_GET["libro"]);

				    	$valoracionmedia = $valoracionlibro->devolverValor('ValoracionMedia');

					?>


					<section class="book">
						<img src="imagenes/harry_potter.jpeg">											
						<ul>
							<li><h3><?php echo $titulo ?></h3></li>
							<li>Autor: <?php echo $autor ?></li>
							<li>Editorial: <?php echo $editorial ?></li>
							<li>Año:<?php echo $anio ?></li>
							<li>Edición:<?php echo $edicion ?></li>
						</ul>
					</section>
				
					<section class="section_area">							
						<h4 class="section_title">Descripción</h4>
						<p class="section_content"><?php echo $descripcion ?></p>
					</section>

					<section class="centrar">
						<form id="alta_libro" action = "procesar_valoracion_libro.php?titulo=<?php echo $titulo;?>" name = "formulario_valoracionlibro" method = "post" onsubmit="return validar_valoracionlibro();">

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

							<input id="dar_alta_libro" type = "submit" value = "Subir valoración"/>
						</form>
					</section>
			</section>


		<section class="MagicScroll">

		</section>

		
		<footer class="myfooter">
			<section class="column_footer">
					<h5 class="title_box">Contacto</h5>
					<section class="footerbar">
					  <a href="">Desarrollador</a>
					  <a href="">Como se hizo</a>
					  <a href="">Como se hizo</a>
					</section>
			</section>
		</footer>



	</body>


<html/>
