<!doctype html>

<html>

	<head>
		<meta charset="utf-8">
		<title>Foro Libros</title>
		
		<link rel="stylesheet" type="text/css" href="css/main_style.css">

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

		<?php

			if(!empty($_SESSION['nick'])){
				echo '<section class="navbar">
						  <a href="mislibros.php">Mis libros</a>
						  <a href="foro.php">Foro</a>
						  <a href="datospersonales.php">Mis datos</a>
						  <a href="recomendaciones.php">Mis recomendaciones</a>
						</section>';
			}

		?>


		<!-- ******************************** ZONA CENTRAL ******************************** -->

		<section class="row">

			<section class="column">
				<img id="image_left" src='imagenes/libreria1.jpg' alt = 'Imagen'/>
			</section>

			<section class="column">

				<section class="box">
					<h3 class="title_box">Libros mejor valorados</h3>

					<section class="book_container" style="height:370px;">
						<section class="card_book">
							<img src="imagenes/harry_potter.jpeg">
							<p><b>Harry Potter y la piedra filosofal</b></p> 
							<p>J. K. Rowling</p> 
						</section>

						<section class="card_book">
							<img src="imagenes/anillo.jpg">
							<p><b>El señor de los anillos</b></p> 
							<p>J. R. R. Tolkien</p> 
						</section>

						<section class="card_book">
							<img src="imagenes/harry_potter.jpeg">
							<p><b>Harry Potter y la piedra filosofal</b></p> 
							<p>J. K. Rowling</p> 
						</section>

						<section class="card_book">
							<img src="imagenes/anillo.jpg">
							<p><b>El señor de los anillos</b></p> 
							<p>J. R. R. Tolkien</p> 
						</section>
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
