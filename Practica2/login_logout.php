<?php 

	function login_logout_function(){

		if(empty($_SESSION['nick'])){
			echo '<form id="login" method="POST" action="login.php">
			    <li>
			    	Usuario<br><input type="text" name="user" required="true">';

			    	if(!empty($_GET['incorrectLogin']))
				    	if($_GET['incorrectLogin'] == 1){
				    		echo '<br><section class="incorrecto">Datos incorrectos</section>';
				    		$_GET['incorrectLogin'] = 0;
				    	}

				    if(!empty($_GET['registrado']))
				    	if($_GET['registrado'] == 1){
				    		echo '<br><section class="resgistrado-correctamente">Registrado Correctamente</section>';
				    		$_GET['registrado'] = 0;
				    	}

		echo   '</li>
				<li>
					Contraseña<br><input type="password" name="password" required="true">
					<br>
					<a href="altausuario.php">Formulario de alta</a>
				</li>
				<li>
					<input id="Enviar" type="submit" name="login" value="Enviar">
				</li>
			</form>';
		} 
		else{
			echo '<section id="area_personal">
				<section id="area_personal_texto">Área personal de <br> ' . $_SESSION['nick'] . '</section>
				<a id="salir" href="logout.php">Salir</a>
			</section>';
		}
	}

?>