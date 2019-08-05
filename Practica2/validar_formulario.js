

function validar_altausuario(){

	// NICKNAME

	var nick = document.formulario_altausuario.nickname.value;

	if(nick == ""){
		alert("El Nick es obligatorio.");
		document.formulario_altausuario.nickname.focus();
		return false;
	}
	else if(nick.length < 5){
		alert("Nick demasiado corto.");
		document.formulario_altausuario.nickname.focus();
		return false;
	}
	else if(nick.length > 30){
		alert("Nick demasiado largo.");
		document.formulario_altausuario.nickname.focus();
		return false;
	}


	// CONTRASEÑA

	var contrasenia = document.formulario_altausuario.contrasenia.value;

	if(contrasenia == ""){
		alert("La contraseña es obligatoria.");
		document.formulario_altausuario.contrasenia.focus();
		return false;
	}
	else if(contrasenia.length < 6){
		alert("Contraseña demasiado corta.");
		document.formulario_altausuario.contrasenia.focus();
		return false;
	}

	var i = 0;

	while (i < contrasenia.length) {
		if (contrasenia.charAt(i) == " "){
			alert("La contraseña no puede contener espacios.");
			document.formulario_altausuario.contrasenia.focus();
			return false;
		}
		i++;
	}


	// NOMBRE

	var nombre = document.formulario_altausuario.nombre.value;

	if(nombre == ""){
		alert("El Nombre es obligatorio.");
		document.formulario_altausuario.nombre.focus();
		return false;
	}
	else if(nombre.length > 30){
		alert("Nombre demasiado largo.");
		document.formulario_altausuario.nombre.focus();
		return false;
	}


	// APELLIDOS

	var apellidos = document.formulario_altausuario.apellidos.value;

	if(apellidos.length > 30){
		alert("Apellidos demasiado largo.");
		document.formulario_altausuario.apellidos.focus();
		return false;
	}


	// EMAIL

	var email = document.formulario_altausuario.email.value;

	if(email == ""){
		alert("El email es obligatorio.");
		document.formulario_altausuario.email.focus();
		return false;
	}
	if(!(/\S+@\S+\.\S+/.test(email))){
		alert("Formato de correo incorrecto.");
		document.formulario_altausuario.email.focus();
		return false;
	}


	// NACIMIENTO

	var fecha = document.formulario_altausuario.nacimiento.value;

	if(fecha == ""){
		alert("La fecha de nacimiento es obligatoria. Formato 2000-12-31.");
		document.formulario_altausuario.nacimiento.focus();
		return false;
	}
	else if(!validarFecha(fecha)){
		alert("Formato fecha incorrecto. Formato 2000-12-31.");
		document.formulario_altausuario.nacimiento.focus();
		return false;
	}


	// TELEFONO

	var telefono = document.formulario_altausuario.telefono.value;

	if(telefono != ""){
		if( !(/^\d{9}$/.test(telefono)) ) {
		  alert("Formato de teléfono incorrecto.");
		  document.formulario_altausuario.telefono.focus();
		  return false;
		}
	}
    
}

function validarFecha(fecha){
	var fechaArr = fecha.split('-');
	var anio = fechaArr[0];
	var mes = fechaArr[1];
	var dia = fechaArr[2];

	var plantilla = new Date(anio, mes - 1, dia);

	if(!plantilla || plantilla.getFullYear() == anio && plantilla.getMonth() == mes -1 && plantilla.getDate() == dia){
		return true;
	}else{
		return false;
	}
}

function validar_altalibro(){

	// TITULO

	var titulo = document.formulario_altalibro.titulo.value;

	if(titulo == ""){
		alert("El título es obligatorio.");
		document.formulario_altalibro.titulo.focus();
		return false;
	}
	else if(titulo.length > 40){
		alert("Título demasiado largo.");
		document.formulario_altalibro.titulo.focus();
		return false;
	}

	// AUTOR

	var autor = document.formulario_altalibro.autor.value;

	if(autor == ""){
		alert("El autor es obligatorio.");
		document.formulario_altalibro.autor.focus();
		return false;
	}
	else if(autor.length > 30){
		alert("Nombre del autor demasiado largo.");
		document.formulario_altalibro.autor.focus();
		return false;
	}


	// ANIO

	var anio = document.formulario_altalibro.anio.value;

	if(anio == ""){
		alert("El año es obligatorio.");
		document.formulario_altalibro.anio.focus();
		return false;
	}	
	else if( !(/^\d{4}$/.test(anio)) ) {
	  alert("Formato de año incorrecto. Formato 1999.");
	  document.formulario_altausuario.anio.focus();
	  return false;
	}
	

	// EDICION

	var edicion = document.formulario_altalibro.edicion.value;

	if(edicion == ""){
		alert("La edición es obligatoria.");
		document.formulario_altalibro.edicion.focus();
		return false;
	}
	else if(edicion.length > 30){
		alert("Nombre de la edición demasiado largo.");
		document.formulario_altalibro.edicion.focus();
		return false;
	}

	// DESCRIPCION

	var descripcion = document.formulario_altalibro.descripcion.value;

	if(descripcion == ""){
		alert("La descripción es obligatoria.");
		document.formulario_altalibro.descripcion.focus();
		return false;
	}
	else if(descripcion.length > 150){
		alert("Descripción demasiado larga.");
		document.formulario_altalibro.descripcion.focus();
		return false;
	}

	// OPINION

	var opinion = document.formulario_altalibro.opinion.value;

	if(opinion == ""){
		alert("La opinión es obligatoria.");
		document.formulario_altalibro.opinion.focus();
		return false;
	}
	else if(opinion.length > 90){
		alert("Opinión demasiado larga.");
		document.formulario_altalibro.opinion.focus();
		return false;
	}

}

function validar_valoracionlibro(){

	// OPINION

	var opinion = document.formulario_valoracionlibro.opinion.value;

	if(opinion.length > 90){
		alert("Opinión demasiado larga.");
		document.formulario_valoracionlibro.opinion.focus();
		return false;
	}

}
