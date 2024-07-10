
function validarCampos(){
    limpiarError()
    validarNombre()
    validarDescripcion()
    validarCantidadE()
    validarCantidadS()
    validarStock()
    validarPrecio()
    validarIDemp()
    validarIDinventario()
    validarIDprendas()
    validarIDaccesorios()
    validarIDproveedor()
    validarEntrada()
    validarSalida()
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
  if (descripcion.value == '' || descripcion.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa la descripción</li>';
    console.log('Por favor completa el campo descripción');
      }
}

function validarCantidadE(){
  if (entradas.value == '' || entradas.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo cantidad de entradas</li>';
    console.log('Por favor completa el campo cantidad de entradas');
      }
}
function validarCantidadS(){
  if (salidas.value == '' || salidas.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo cantidad de salidas</li>';
    console.log('Por favor completa el campo cantidad de salidas');
      }
}
function validarStock(){
  if (stock.value == '' || stock.value == null){
    error.style.display = 'block';
    error.innerHTML += '<li>Por favor completa el campo stock</li>';
    console.log('Por favor completa el campo stock');
      }
}
function validarPrecio(){
    if (precio.value == '' || precio.value == null){
      error.style.display = 'block';
      error.innerHTML += '<li>Por favor completa el campo precio</li>';
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
  function validarIDinventario(){
    if (idInventario.value == '' || idInventario.value == null){
      error.style.display = 'block';
      error.innerHTML += '<li>Por favor completa el campo ID de inventario</li>';
      console.log('Por favor completa el campo ID de inventario');
        }
  }
  function validarIDprendas(){
    if (idPrenda.value == '' || idPrenda.value == null){
      error.style.display = 'block';
      error.innerHTML += '<li>Por favor completa el campo ID de la prenda</li>';
      console.log('Por favor completa el campo ID de la prenda');
        }
  }
  function validarIDaccesorios(){
    if (idAcces.value == '' || idAcces.value == null){
      error.style.display = 'block';
      error.innerHTML += '<li>Por favor completa el campo de ID de accesorio</li>';
      console.log('Por favor completa el campo ID de accesorio');
        }
  }
  function validarIDproveedor(){
    if (idProveedor.value == '' || idProveedor.value == null){
      error.style.display = 'block';
      error.innerHTML += '<li>Por favor completa el campo de ID de proveedor</li>';
      console.log('Por favor completa el campo ID de proveedor');
        }
  }
  function validarEntrada(){
    if (idEntrada.value == '' || idEntrada.value == null){
      error.style.display = 'block';
      error.innerHTML += '<li>Por favor completa el campo de ID de entrada</li>';
      console.log('Por favor completa el campo ID de entrada');
        }
  }
  function validarSalida(){
    if (idSalida.value == '' || idSalida.value == null){
      error.style.display = 'block';
      error.innerHTML += '<li>Por favor completa el campo de ID de salida</li>';
      console.log('Por favor completa el campo ID de salida');
        }
  }
  