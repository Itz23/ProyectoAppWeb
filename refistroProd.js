/*let formulario = document.getElementById('formulario');
    nombre = formulario.nombreProducto,
    tipo = formulario.tipoProducto,
    material = formulario.matProducto,
    estado = formulario.estadoP,
    categoria = formulario.categoria,
    error = document.getElementById('error');*/

    function validarCampos(){
        limpiarError()
        validarNombre()
        validarCantidad()
        validarMaterial()
        validarTalla()
        validarDescripcion()
        validarEstado()
        validarCategoria()
        validarPrecio()
        validarFecha()
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
        console.log('Por favor completa la cantidad');} 
      /*else if (isNaN (cantProd)){
        error.style.display = 'block';
        error.innerHTML += '<li>Por favor ingresa la cantidad con números</li>';
        console.log('Por favor completa la cantidad');
      } */
    }
    function validarMaterial(){
      if (material.value == '' || material.value == null){
        error.style.display = 'block';
        error.innerHTML += '<li>Por favor completa el campo material</li>';
        console.log('Por favor completa el campo material');
		  }
    }
    function validarTalla(){
      if (talla.value == '' || talla.value == null){
        error.style.display = 'block';
        error.innerHTML += '<li>Por favor elige una talla para tu prenda</li>';
        console.log('Por favor completa el campo talla');
		  }
    }

    function validarDescripcion(){
      if (descripcion.value == '' || descripcion.value == null){
        error.style.display = 'block';
        error.innerHTML += '<li>Por favor completa la descripción del producto</li>';
        console.log('Por favor completa el campo descripción');
		  }
    }

    function validarEstado(){
      if (estado.value == '' || estado.value == null){
        error.style.display = 'block';
        error.innerHTML += '<li>Por favor completa el campo estado</li>';
        console.log('Por favor completa el campo estado');
		  }
    }
    function validarCategoria(){
      if (categoria.value == '' || categoria.value == null){
        error.style.display = 'block';
        error.innerHTML += '<li>Por favor completa el campo categoria</li>';
        console.log('Por favor completa el campo categoria');
		  }
    }
    function validarPrecio(){
      if (precio.value == '' || precio.value == null){
        error.style.display = 'block';
        error.innerHTML += '<li>Por favor completa el campo precio</li>';
        console.log('Por favor completa el campo precio');
		  }
    }
    function validarFecha(){
      if (fecha.value == '' || fecha.value == null){
        error.style.display = 'block';
        error.innerHTML += '<li>Por favor completa el campo fecha</li>';
        console.log('Por favor completa el campo fecha');
		  }
    }
    
