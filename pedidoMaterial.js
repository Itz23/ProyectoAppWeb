
function validarCampos(){
    limpiarError()
    validarCantidad()
    validarTipo()
    validarFecha()
    validarDescripcion()
    validarIDemp()
}
function limpiarError(){
    if (error.value==null){
        error.style.display = 'none';
        error.innerHTML = '';}
}
function contieneNumeros(texto) {
    return /\d/.test(texto);
}

function validarCantidad(){
  if (cantMat.value == '' || cantMat.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa la cantidad</li>';
    console.log('Por favor completa la cantidad');
      } /*else if (isNaN (cantProd)){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor ingresa la cantidad con números</li>';
    console.log('Por favor completa la cantidad');
  } */
}
function validarTipo(){
  if (tipoMat.value == '' || tipoMat.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo tipo de material</li>';
    console.log('Por favor completa el campo tipo de material');
      }
}
function validarFecha(){
    if (fechaPedido.value == '' || fechaPedido.value == null){
      error.style.display = 'block';
      error.innerHTML += '<li>Por favor completa el campo fecha</li>';
      console.log('Por favor completa el campo fecha');
        }
  }

function validarDescripcion(){
  if (descripcion.value == '' || descripcion.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa la descripción</li>';
    console.log('Por favor completa el campo descripción');
      }
}
function validarIDemp(){
  if (idEmpleado.value == '' || idEmpleado.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo ID de empleado</li>';
    console.log('Por favor completa el campo ID de empleado');
      }
}
