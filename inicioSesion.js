/*let inicioSesion = document.getElementById('inicioSesion');
    nombre = inicioSesion.username,
    contrasena = inicioSesion.password,
    error = document.getElementById('error');*/

    function validarCampos(){
        limpiarError()
        validarNombre()
        /*validarCorreo()*/
        validarContrasena()
        /*validarConfContrasena()*/
    }
    function limpiarError(){
		if (error.value==null){
			error.style.display = 'none';
			error.innerHTML = '';}
    }
   
    function contieneNumeros(texto) {
		return /\d/.test(texto);
    }
    function validarNombre(){
        if (nombre.value == '' || nombre.value == null){
			error.style.display = 'block';
			error.innerHTML += '<li>Por favor completa el nombre</li>';
			console.log('Por favor completa el nombre');
        }else if (contieneNumeros(nombre.value)){
			error.style.display = 'block';
			error.innerHTML += '<li>No se pueden ingresar números en el nombre.</li>';
			nombre.value = "";
		}
    }
   /* function validarCorreo(){
      if (email.value == '' || email.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo "Correo electrónico".</li>';
    console.log('Por favor completa el campo "Correo electrónico".');
      }
  }*/

    function validarContrasena(){
        if (contrasena.value == '' || contrasena.value == null){
			error.style.display = 'block';
			error.innerHTML += '<li>Por favor completa el campo "contraseña".</li>';
			console.log('Por favor completa el campo "contraseña".');
        }
    }
   /* function validarConfContrasena(){
      if (confConstrasena.value == '' || confConstrasena.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo "Confirmar contraseña".</li>';
    console.log('Por favor completa el campo "Confirmar contraseña".');
      }
  }*/
