<!doctype html>

<html>

	<head>
		<meta charset="utf-8">
		<title>Foro Libros</title>
		
		<link rel="stylesheet" type="text/css" href="css/main_style.css">
		<link rel="stylesheet" type="text/css" href="css/recomendaciones.css">

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
			  <a class="active" href="recomendaciones.php">Mis recomendaciones</a>
			</section>

				<section class="row">
					<section class="row_book">
						<h4 class="title-recommendation">Libros recomendados 2019</h4>
						<a class="card-book-recommendation" href="libro1.php">
							<img src="imagenes/harry_potter.jpeg">
							<section class="card-book-recommendation-container">
								<b>Harry Potter y la piedra filosofal</b>
								<p>J.K. Rowling</p>
							</section>
						</a>

						<a class="card-book-recommendation" href="libro2.php">
							<img src="imagenes/anillo.jpg">
							<section class="card-book-recommendation-container">
								<b>El señor de los anillos</b>
								<p>J. R. R. Tolkien</p>
							</section>
						</a>

						<a class="card-book-recommendation" href="libro1.php">
							<img src="imagenes/harry_potter.jpeg">
							<section class="card-book-recommendation-container">
								<b>Harry Potter y la piedra filosofal</b>
								<p>J.K. Rowling</p>
							</section>
						</a>

						<a class="card-book-recommendation" href="libro2.php">
							<img src="imagenes/anillo.jpg">
							<section class="card-book-recommendation-container">
								<b>El señor de los anillos</b>
								<p>J. R. R. Tolkien</p>
							</section>
						</a>

						<a class="card-book-recommendation" href="libro1.php">
							<img src="imagenes/harry_potter.jpeg">
							<section class="card-book-recommendation-container">
								<b>Harry Potter y la piedra filosofal</b>
								<p>J.K. Rowling</p>
							</section>
						</a>
					</section>
				</section>
				<section class="row">
					<section class="row_book">

						<h4 class="title-recommendation">Libros recomendados por nuestros libreros</h4>

						<a class="card-book-recommendation" href="libro1.php">
							<img src="imagenes/harry_potter.jpeg">
							<section class="card-book-recommendation-container">
								<b>Harry Potter y la piedra filosofal</b>
								<p>J.K. Rowling</p>
							</section>
						</a>

						<a class="card-book-recommendation" href="libro2.php">
							<img src="imagenes/anillo.jpg">
							<section class="card-book-recommendation-container">
								<b>El señor de los anillos</b>
								<p>J. R. R. Tolkien</p>
							</section>
						</a>

						<a class="card-book-recommendation" href="libro1.php">
							<img src="imagenes/harry_potter.jpeg">
							<section class="card-book-recommendation-container">
								<b>Harry Potter y la piedra filosofal</b>
								<p>J.K. Rowling</p>
							</section>
						</a>

						<a class="card-book-recommendation" href="libro2.php">
							<img src="imagenes/anillo.jpg">
							<section class="card-book-recommendation-container">
								<b>El señor de los anillos</b>
								<p>J. R. R. Tolkien</p>
							</section>
						</a>

						<a class="card-book-recommendation" href="libro1.php">
							<img src="imagenes/harry_potter.jpeg">
							<section class="card-book-recommendation-container">
								<b>Harry Potter y la piedra filosofal</b>
								<p>J.K. Rowling</p>
							</section>
						</a>
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
