<!doctype html>

<html>

	<head>
		<meta charset="utf-8">
		<title>Foro Libros</title>
		
		<link rel="stylesheet" type="text/css" href="css/main_style.css">			
		<link rel="stylesheet" type="text/css" href="css/libroleido.css">	
		<link rel="stylesheet" type="text/css" href="css/libro1.css">

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
				    	$personaquedadealta = $libro->devolverValor('PersonaQueDaDeAlta');

				    	$valoracionlibro = ValoracionLibro::obtenerValoracion($_GET["libro"]);

				    	$valoracionmedia = $valoracionlibro->devolverValor('ValoracionMedia');

				    	$libroanterior = Libro::obtenerLibroAnterior($titulo);
				    	$libroanteriortitulo = $libroanterior->devolverValor('Titulo');


				    	$librosiguiente = Libro::obtenerLibroSiguiente($titulo);
				    	$librosiguientetitulo = $librosiguiente->devolverValor('Titulo');

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

					<section class="section_area">							
						<h4 class="section_title">Valoración media:</h4>
						<p class="section_content">
							<section class="ec-stars-wrapper-fix">
								<?php 
									for($i = 1; $i < 6; $i++){
										if($valoracionmedia < $i){
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

					<section class="section_area">							
						<h4 class="section_title">Opiniones</h4>

						<?php								

						    require_once('opinionlibro.class.inc');

						    $usuariohaopinado = False;

						    $opiniones = OpinionLibro::obtenerOpinionesLibro($titulo);

						    foreach($opiniones as $opinion){
						    	if(!empty($opinion)){
							    	$opinante = $opinion->devolverValor('PersonaQueOpina');
							    	$textoopinion = $opinion->devolverValor('Opinion');
							    	$numestrellas = $opinion->devolverValor('Valoracion');

							    	if($opinante == $_SESSION['nick']){
							    		$usuariohaopinado = True;
							    	}


									echo '<section class="opinion">
											<section class="user">
												<img src="imagenes/user.png" alt = "Imagen"  height="30" width="30"/>
												<p class="algo">' . $opinante . '</p>
											</section>
											<section class="star-valoration">';

											echo '<section class="star-rating">';

												for($i = 1; $i < 6; $i++){
													if($i <= $numestrellas){
														echo '<a class="active" href="#" data-value="' . $i . '">&#9733;</a>';
													}
													else{
														echo '<a href="#" data-value="' . $i . '">&#9733;</a>';
													}
												}
											echo '</section>
											</section>
											</br>
											<p class="test">' . $textoopinion . ' </p>

										<p class="section_content"></p>
										</section>';
							    }						    	
						    } 

						?>


					</section>

					<section class="row">
						<section class="column33">
							<?php echo '<a class="boton_azul" href="libro.php?libro=' . $libroanteriortitulo . '">Anterior</a>' ?>
						</section>
						<section class="column33">
							<?php 
								if($usuariohaopinado){
									echo '<a class="boton_azul" href="valoracion_libro.php?libro=' . $titulo . '">Modificar valoración</a>'; 
								}
								else{
									echo '<a class="boton_azul" href="valoracion_libro.php?libro=' . $titulo . '">Valorar</a>'; 
								}
							?>
						</section>
						<section class="column33">
							<?php echo '<a class="boton_azul" href="libro.php?libro=' . $librosiguientetitulo . '">Siguiente</a>' ?>
						</section>
					</section>


				</section>


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
