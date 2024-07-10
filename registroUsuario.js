/*let usuario = document.getElementById('formulario');
    nombre = usuario.nombre,
    email = usuario.email,
    password = usuario.password,
    confConstrasena = usuario.confConstrasena,

    error = document.getElementById('error');*/

    function validarCampos(){
        limpiarError()
        validarNombre()
        validarEmail()
        validarContrasena()
        validarConfContrasena()
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
    function validarEmail() {
        if (email.value == '' || email.value == null){
			error.style.display = 'block';
			error.innerHTML += '<li>Por favor completa el correo</li>';
			console.log('Por favor completa el correo');}
    }
    function validarContrasena(){
        if (password.value == '' || password.value == null){
			error.style.display = 'block';
			error.innerHTML += '<li>Por favor completa el campo "contraseña".</li>';
			console.log('Por favor completa el campo "contraseña".');
        }
    }
    function validarConfContrasena(){
      if (confConstrasena.value == '' || confConstrasena.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo "Confirmar contraseña".</li>';
    console.log('Por favor completa el campo "Confirmar contraseña".');
      } /*else if (password !== confConstrasena){
        error.style.display = 'block';
        error.innerHTML += '<li>Las contraseñas no coinciden".</li>';
        return;
      }*/
  }
    

