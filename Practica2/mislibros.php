<!doctype html>

<html>

	<head>
		<meta charset="utf-8">
		<title>Foro Libros</title>
		
		<link rel="stylesheet" type="text/css" href="css/main_style.css">			
		<link rel="stylesheet" type="text/css" href="css/mislibros.css">

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
				
				<section class="column">
					<section class="box">
						<h3 class="title_box">Libros leídos</h3>

						<section class="book_container">

							<?php								
							    require_once('libro.class.inc');

							    $libros = Libro::obtenerLibrosSubidosPor($_SESSION['nick']);

							    foreach($libros as $libro){
							    	if(!empty($libro)){
							    		$titulo = $libro->devolverValor('Titulo');
								    	$autor = $libro->devolverValor('Autor');

								    	echo '<a class="card_book" href="libroleido.php?libro=' . $titulo . '">
												<img src="imagenes/harry_potter.jpeg">
													<section class="container">
														<p><b>' . $titulo . ' </b></p> 
														<p>' .$autor . '</p> 
													</section>
											</a>';
								    }						    	
							    } 

							?>

						</section>
					</section>
				</section>
				<section  class="column">
					<section class="box">
						<h3 class="title_box">Últimos libros</h3>
						<section class="list_book">

							<?php					
							    require_once('libro.class.inc');

							    $libros = Libro::obtenerUltimosLibrosSubidos(12);

							    foreach($libros as $libro){
							    	if(!empty($libro)){
								    	$titulo = $libro->devolverValor('Titulo');
								    	$autor = $libro->devolverValor('Autor');

								    	echo '<a class="last-book-area" href="libro.php?libro=' . $titulo .'">
												<p class="last-book-text"><b>' . $titulo . '</b>
													<br>' . $autor . '
												</p> 
											</a>';
									}
							    } 
							?>

						</section>	
						<section class="center_a">
							<a id="NuevoLibro" href="altalibro.php">Nuevo Libro</a>
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
