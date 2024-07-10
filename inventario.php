<?php
require 'conexion.php';
 $fecha = $_GET['fecha'];
 $stock_minimo = $_GET['stockmin'];
 $stock_maximo = $_GET['stockmax'];
 $aplicaIVA = $_GET['aplIva'];
 $nombreProducto = $_GET['nameProducto'];
 $costoUnitario = $_GET['costoUni'];
 $cantidad  = $_GET['cantidad'];
 $fechaCompra = $_GET['fechaCom'];
 $fechaVencimiento = $_GET['fechaVen'];
 $ID_PRENDAS = $_GET['idPrenda'];
 $ID_ACCESORIOS = $_GET['idAcces'];
 $ID_EMPLEADO = $_GET['idEmpleado'];



$sql = "INSERT INTO ITZEL_INVENTARIO VALUES (null, '$fecha', $stock_minimo, $stock_maximo, '$aplicaIVA', '$nombreProducto', '$costoUnitario', '$cantidad', '$fechaCompra', '$fechaVencimiento', '$ID_PRENDAS', '$ID_ACCESORIOS', '$ID_EMPLEADO')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>