<?php
require 'conexion.php';

 $nombreProducto = $_GET['nameProducto'];
 $descripcion = $_GET['descripcion'];
 $cantEntrada = $_GET['entradas'];
 $cantSalida = $_GET['salidas'];
 $stock = $_GET['stock'];
 $precio = $_GET['precio'];
 $ID_EMPLEADO = $_GET['idEmpleado'];
 $ID_INVENTARIO = $_GET['idInventario'];
 $ID_PRENDAS = $_GET['idPrenda'];
 $ID_ACCESORIOS = $_GET['idAcces'];
 $ID_PROVEEDOR = $_GET['idProveedor'];
 $ID_COMPRA = $_GET['idEntrada'];
 $ID_VENTA = $_GET['idSalida'];


$sql = "INSERT INTO ITZEL_ALMACEN VALUES (null, '$nombreProducto', '$descripcion', '$cantEntrada', 
'$cantSalida', '$stock', '$precio', '$ID_EMPLEADO', '$ID_INVENTARIO', '$ID_PRENDAS', '$ID_ACCESORIOS', '$ID_PROVEEDOR', '$ID_COMPRA', '$ID_VENTA')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>