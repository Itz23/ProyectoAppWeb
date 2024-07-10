
function validarCampos(){
    limpiarError()
    validarNombre()
    validarDireccion()
    validarEmail()
    validarTelefono()
    validarRfc()
    validarRol()
}
function limpiarError(){
    if (errorProv.value==null){
        errorProv.style.display = 'none';
        errorProv.innerHTML = '';}
}
function contieneNumeros(texto) {
    return /\d/.test(texto);
}
function validarNombre(){
  if (nombre.value == '' || nombre.value == null){
    errorProv.style.display = 'block';
    errorProv.innerHTML += '<li>Por favor completa el nombre</li>';
    console.log('Por favor completa el nombre');
      }else if (contieneNumeros(nombre.value)){
        error.style.display = 'block';
        error.innerHTML += '<li>No se pueden ingresar números en el nombre.</li>';
        nombre.value = "";}
}
function validarDireccion(){
  if (direccion.value == '' || direccion.value == null){
    errorProv.style.display = 'block';
    errorProv.innerHTML += '<li>Por favor el campo "Direccion"</li>';
    console.log('Por favor completa la direccion');
      } /*else if (isNaN (cantProd)){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor ingresa la cantidad con números</li>';
    console.log('Por favor completa la cantidad');
  } */
}
function validarEmail(){
  if (email.value == '' || email.value == null){
    errorProv.style.display = 'block';
    errorProv.innerHTML += '<li>Por favor completa el campo correo electronico</li>';
    console.log('Por favor completa el campo correo electronico');
      }
}
function validarTelefono(){
  if (telefono.value == '' || telefono.value == null){
    errorProv.style.display = 'block';
    errorProv.innerHTML += '<li>Por favor completa el campo telefono</li>';
    console.log('Por favor completa el campo telefono');
      }
}

function validarRfc(){
  if (rfc.value == '' || rfc.value == null){
    errorProv.style.display = 'block';
    errorProv.innerHTML += '<li>Por favor completa el campo RFC</li>';
    console.log('Por favor completa el campo RFC');
      }
}

function validarRol(){
  if (rol.value == '' || rol.value == null){
    errorProv.style.display = 'block';
    errorProv.innerHTML += '<li>Por favor completa el campo rol del proveedor</li>';
    console.log('Por favor completa el campo rol del proveedor');
      }
}
