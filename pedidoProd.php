<?php
require 'conexion.php';
 $nameProducto  = $_GET['nameProducto'];
 $descripcion  = $_GET['descProd'];
 $cant_productos  = $_GET['cantProd'];
 $tipoPago   = $_GET['tipoPago'];
 $fecha_pedido   = $_GET['fechaPedido'];
 $fecha_pago   = $_GET['fechaPago'];
 $precio_unitario   = $_GET['precioUni'];
 $total   = $_GET['canTot'];
 $ID_CLIENTE   = $_GET['idCliente'];
 $ID_USUARIO   = $_GET['idUsuario'];


$sql = "INSERT INTO ITZEL_PEDIDO VALUES (null, '$nameProducto', '$descripcion', $cant_productos, '$tipoPago', '$fecha_pedido', '$fecha_pago', '$precio_unitario', '$total', '$ID_CLIENTE', '$ID_USUARIO')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>