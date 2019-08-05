<!doctype html>

<html>

	<head>
		<meta charset="utf-8">
		<title>Foro Libros</title>
		
		<link rel="stylesheet" type="text/css" href="css/main_style.css">			
		<link rel="stylesheet" type="text/css" href="css/libroleido.css">

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
			  <a class="active" href="mislibros.php">Mis libros</a>
			  <a href="foro.php">Foro</a>
			  <a href="datospersonales.php">Mis datos</a>
			  <a href="recomendaciones.php">Mis recomendaciones</a>
			</section>
		
			<section class="row">

				<section class="row_book">

					<?php							

					    require_once('libro.class.inc');

					    $libro = Libro::obtenerLibro($_GET["libro"]);

				    	$titulo = $libro->devolverValor('Titulo');
				    	$autor = $libro->devolverValor('Autor');
				    	$editorial = $libro->devolverValor('Editorial');
				    	$anio = $libro->devolverValor('Anio');
				    	$edicion = $libro->devolverValor('Edicion');
				    	$descripcion = $libro->devolverValor('Descripcion');
				    	$personaquedadealta = $libro->devolverValor('PersonaQueDaDeAlta');

					    require_once('opinionlibro.class.inc');

					    $opinionlibro = OpinionLibro::obtenerOpinion($titulo, $personaquedadealta);

					    $opinion = $opinionlibro->devolverValor('Opinion');
					    $valoracion = $opinionlibro->devolverValor('Valoracion');

					?>

					<section class="book">
						<img src="imagenes/harry_potter.jpeg">
						<section class="container">														
							<ul>
								<li><h3><?php echo $titulo ?></h3></li>
								<li>Autor: <?php echo $autor ?></li>
								<li>Editorial: <?php echo $editorial ?></li>
								<li>Año: <?php echo $anio ?></li>
								<li>Edición: <?php echo $edicion ?></li>
							</ul>
						</section>
					</section>

					<section class="section_area">							
						<h4 class="section_title">Descripción</h4>
						<p class="section_content"><?php echo $descripcion ?></p>
					</section>

					<section class="section_area">							
						<h4 class="section_title">Opinión</h4>
						<p class="section_content"><?php echo $opinion ?></p>
					</section>

					<section class="section_area">							
						<h4 class="section_title">Mi valoración:</h4>
						<p class="section_content">
							<section class="ec-stars-wrapper-fix">

								<?php 

									for($i = 1; $i < 6; $i++){
										if($valoracion < $i){
											echo '<a href="#" data-value="'.$i.'">&#9733;</a>';
										}
										else{
											echo '<a class="active" href="#" data-value="'.$i.'">&#9733;</a>';
										}
									}

								?>

							</section>
						</p>
					</section>

					<section class="row">
						<section class="column33">
							<?php 
								echo '<a class="boton_azul" href="valoracion_libro.php?libro=' . $titulo . '">Modificar valoración</a>'; 
							?>
						</section>
					</section>
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
