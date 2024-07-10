function validarCampos(){
    limpiarError()
    validarNombre()
    validarCantidad()
    validarPrecio()
    validarIDpedido()
    validarIDprendas()
    validarIDaccesorios()
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
  if (nameProducto.value == '' || nameProducto.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el nombre</li>';
    console.log('Por favor completa el nombre');
      }
}
function validarCantidad(){
  if (cantProd.value == '' || cantProd.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa la cantidad</li>';
    console.log('Por favor completa la cantidad');
      } /*else if (isNaN (cantProd)){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor ingresa la cantidad con números</li>';
    console.log('Por favor completa la cantidad');
  } */
}

function validarPrecio(){
  if (precioUni.value == '' || precioUni.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo del Precio</li>';
    console.log('Por favor completa el campo precio');
      }
}
function validarIDpedido(){
  if (idPedido.value == '' || idPedido.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo ID de pedido</li>';
    console.log('Por favor completa el campo precio');
      }
}
function validarIDprendas(){
  if (idPrenda.value == '' || idPrenda.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo ID de la prenda</li>';
    console.log('Por favor completa el campo precio');
      }
}
function validarIDaccesorios(){
  if (idAcces.value == '' || idAcces.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo ID de accesorio</li>';
    console.log('Por favor completa el campo precio');
      }
}
