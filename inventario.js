function validarCampos(){
    limpiarError()
    validarFecha()
    validarStMin()
    validarStMax()
    validarIVA()
    validarNombre()
    validarPrecio()
    validarCantidad()
    validarFeCompra()
    validarFeVencimiento()
    validarIDprendas()
    validarIDaccesorios()
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
function validarFecha(){
  if (fecha.value == '' || fecha.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo fecha</li>';
    console.log('Por favor completa la fecha');
      }
}

function validarStMin(){
  if (stockmin.value == '' || stockmin.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo stock minimo</li>';
    console.log('Por favor completa el campo stock minimo');
      }
}
function validarStMax(){
  if (stockmax.value == '' || stockmax.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo stock maximo</li>';
    console.log('Por favor completa el campo stock maximo');
      }
}

function validarIVA(){
  if (aplIva.value == '' || aplIva.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo "Aplica IVA"</li>';
    console.log('Por favor completa el campo "Aplica IVA"');
      }
}

function validarNombre(){
  if (nameProducto.value == '' || nameProducto.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo nombre</li>';
    console.log('Por favor completa el campo nombre');
      }
}
function validarPrecio(){
  if (costoUni.value == '' || costoUni.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo precio</li>';
    console.log('Por favor completa el campo precio');
      }
}
function validarCantidad(){
  if (cantidad.value == '' || cantidad.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo cantidad</li>';
    console.log('Por favor completa el campo cantidad');
      }
}
function validarFeCompra(){
    if (fechaCom.value == '' || fechaCom.value == null){
      error.style.display = 'block';
      error.innerHTML += '<li>Por favor completa el campo fecha de compra</li>';
      console.log('Por favor completa el campo fecha de compra');
        }
  }
  function validarFeVencimiento(){
    if (fechaVen.value == '' || fechaVen.value == null){
      error.style.display = 'block';
      error.innerHTML += '<li>Por favor completa el campo fecha de vencimiento</li>';
      console.log('Por favor completa el campo fecha de vencimiento');
        }
  }
  function validarIDprendas(){
    if (idPrenda.value == '' || idPrenda.value == null){
      error.style.display = 'block';
      error.innerHTML += '<li>Por favor completa el campo de ID prenda</li>';
      console.log('Por favor completa el campo precio');
        }
  }
  function validarIDaccesorios(){
    if (idAcces.value == '' || idAcces.value == null){
      error.style.display = 'block';
      error.innerHTML += '<li>Por favor completa el campo de ID de accesorio</li>';
      console.log('Por favor completa el campo precio');
        }
  }
  function validarIDemp(){
    if (idEmpleado.value == '' || idEmpleado.value == null){
      error.style.display = 'block';
      error.innerHTML += '<li>Por favor completa el campo ID de empleado</li>';
      console.log('Por favor completa el campo ID de empleado');
        }
  }
  
  

