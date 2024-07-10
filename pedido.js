function validarCampos(){
    limpiarError()
    validarNombre()
    validarDescripcion()
    validarCantidad()
    validarTipo()
    validarPedido()
    validarPago()
    validarPrecio()
    validarTotal()
    validarIDcliente()
    validarIDusuario()

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
function validarDescripcion(){
    if (descProd.value == '' || descProd.value == null){
      error.style.display = 'block';
      error.innerHTML += '<li>Por favor completa la descripción del producto</li>';
      console.log('Por favor completa el campo descripción');
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
function validarTipo(){
    if (tipoPago.value == '' || tipoPago.value == null){
        error.style.display = 'block';
        error.innerHTML += '<li>Por favor completa el campo Fecha de pedido</li>';
        console.log('Por favor completa el campo tipo de fecha pedido');
          }
}
function validarPedido(){
  if (fechaPedido.value == '' || fechaPedido.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo Fecha de pedido</li>';
    console.log('Por favor completa el campo tipo de fecha pedido');
      }
}
function validarPago(){
  if (fechaPago.value == '' || fechaPago.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo Fecha de pago</li>';
    console.log('Por favor completa el campo fecha de pago');
      }
}

function validarPrecio(){
  if (precioUni.value == '' || precioUni.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo Precio</li>';
    console.log('Por favor completa el campo precio');
      }
}
function validarTotal(){
  if (canTot.value == '' || canTot.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo Cantidad total</li>';
    console.log('Por favor completa el campo cantidad total');
      }
}
function validarIDcliente(){
  if (idCliente.value == '' || idCliente.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo Cantidad total</li>';
    console.log('Por favor completa el campo cantidad total');
      }
}
function validarIDusuario(){
  if (idUsuario.value == '' || idUsuario.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo Cantidad total</li>';
    console.log('Por favor completa el campo cantidad total');
      }
}

