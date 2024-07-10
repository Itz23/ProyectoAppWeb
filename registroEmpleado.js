
function validarCampos(){
    limpiarError()
    validarNombre()
    validarDireccion()
    validarEmail()
    validarPuestoT()
    validarFechaIng()
    validarSalario()
    validarRfc()
    validarNss()
    validarTelefono()
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
function validarPuestoT(){
    if (puesto.value == '' || puesto.value == null){
      errorProv.style.display = 'block';
      errorProv.innerHTML += '<li>Por favor completa el campo "Puesto de trabajo"</li>';
      console.log('Por favor completa el campo "Puesto de trabajo"');
        }
  }
  function validarFechaIng(){
    if (fecha.value == '' || fecha.value == null){
      errorProv.style.display = 'block';
      errorProv.innerHTML += '<li>Por favor completa el campo "Fecha de ingreso"</li>';
      console.log('Por favor completa el campo "Fecha de ingreso"');
        }
  }
  function validarSalario(){
    if (salario.value == '' || salario.value == null){
      errorProv.style.display = 'block';
      errorProv.innerHTML += '<li>Por favor completa el campo "Salario"</li>';
      console.log('Por favor completa el campo "Salario"');
        }
  }
function validarRfc(){
  if (rfc.value == '' || rfc.value == null){
    errorProv.style.display = 'block';
    errorProv.innerHTML += '<li>Por favor completa el campo RFC</li>';
    console.log('Por favor completa el campo RFC');
      }
}

function validarNss(){
  if (nss.value == '' || nss.value == null){
    errorProv.style.display = 'block';
    errorProv.innerHTML += '<li>Por favor completa el campo NSS</li>';
    console.log('Por favor completa el campo NSS');
      }
}
function validarTelefono(){
    if (tel.value == '' || tel.value == null){
      errorProv.style.display = 'block';
      errorProv.innerHTML += '<li>Por favor completa el campo telefono</li>';
      console.log('Por favor completa el campo telefono');
        }
  }