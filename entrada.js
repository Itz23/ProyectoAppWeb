function validarCampos(){
    limpiarError()
    validarNombre()
    validarFecha()
    validarCantidad()
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
      }
}
function validarFecha(){
    if (fecha.value == '' || fecha.value == null){
      error.style.display = 'block';
      error.innerHTML += '<li>Por favor completa el campo fecha</li>';
      console.log('Por favor completa el campo fecha');
        }
  }
function validarCantidad(){
  if (cantidad.value == '' || cantidad.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa la cantidad</li>';
    console.log('Por favor completa la cantidad');
      } /*else if (isNaN (cantProd)){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor ingresa la cantidad con números</li>';
    console.log('Por favor completa la cantidad');
  } */
}
