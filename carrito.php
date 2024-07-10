<?php
require 'conexion.php';
 $nombreProducto = $_GET['nameProducto'];
 $cantidad = $_GET['cantProd'];
 $tallaPrenda = $_GET['tallaPren'];
 $categoriaPrenda = $_GET['categoriaPren'];
 $colorPrenda = $_GET['colorPren'];
 $tallaAccesorio = $_GET['tallaAcces'];
 $categoriaAccesorio = $_GET['categoriaAcces'];
 $colorAccesorio = $_GET['colorAcces'];
 $precioUni = $_GET['precioUni'];
 $ID_PEDIDO = $_GET['idPedido'];
 $ID_PRENDAS = $_GET['idPrenda'];
 $ID_ACCESORIOS = $_GET['idAcces'];



$sql = "INSERT INTO ITZEL_CARRITO VALUES (null, '$nombreProducto', '$cantidad', '$tallaPrenda', '$categoriaPrenda', '$colorPrenda', 
'$tallaAccesorio', '$categoriaAccesorio', '$colorAccesorio', '$precioUni', '$ID_PEDIDO', '$ID_PRENDAS', '$ID_ACCESORIOS')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>