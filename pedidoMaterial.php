<?php
require 'conexion.php';
 $cantidad = $_GET['cantMat'];
 $tipoMat = $_GET['tipoMat'];
 $nombreLimpieza = $_GET['nombreLimpieza'];
 $nombreDis = $_GET['nombreDis'];
 $fechaPedido = $_GET['fechaPedido'];
 $descripcion  = $_GET['descripcion'];
 $ID_EMPLEADO  = $_GET['idEmpleado'];


$sql = "INSERT INTO ITZEL_PEDIDO_MATERIAL VALUES (null, '$cantidad', '$tipoMat', '$nombreLimpieza', '$nombreDis', '$fechaPedido', '$descripcion', '$ID_EMPLEADO')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>