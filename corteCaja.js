function validarCampos(){
    limpiarError()
    validarfechaAbrio()
    validarfechaCerro()
    validarEntrego()
    validarDescripcion()
    validarImporte()
    validarDivisa()
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
function validarfechaAbrio(){
  if (abrio.value == '' || abrio.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo Abrió</li>';
    console.log('Por favor completa el campo Abrió');
      }
}
function validarfechaCerro(){
  if (cerro.value == '' || cerro.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa la fecha de cierre</li>';
    console.log('Por favor completa el campo Cerró');
      } /*else if (isNaN (cantProd)){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor ingresa la cantidad con números</li>';
    console.log('Por favor completa la cantidad');
  } */
}
function validarEntrego(){
  if (entrego.value == '' || entrego.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo Entrego</li>';
    console.log('Por favor completa el campo entrego');
      }else if (contieneNumeros(entrego.value)){
        error.style.display = 'block';
        error.innerHTML += '<li>No se pueden ingresar números en el nombre.</li>';
        entrego.value = "";
    }
}

function validarDescripcion(){
  if (descripcion.value == '' || descripcion.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo descripción</li>';
    console.log('Por favor completa el campo descripción');
      }
}

function validarImporte(){
  if (importe.value == '' || importe.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo Importe</li>';
    console.log('Por favor completa el campo importe');
      }
}
function validarDivisa(){
  if (divisa.value == '' || divisa.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo Divisa</li>';
    console.log('Por favor completa el campo Divisa');
      }
}
function validarIDemp(){
  if (idEmpleado.value == '' || idEmpleado.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo ID de empleado</li>';
    console.log('Por favor completa el campo ID de empleado');
      }
}