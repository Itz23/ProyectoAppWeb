<?php
require 'conexion.php';
 $fecha_inicial = $_GET['abrio'];
 $fecha_final = $_GET['cerro'];
 $entrego = $_GET['entrego'];
 $descripcion = $_GET['descripcion'];
 $importe = $_GET['importe'];
 $divisa = $_GET['divisa'];
 $observaciones  = $_GET['observaciones'];
 $ID_EMPLEADO = $_GET['idEmpleado'];
 



$sql = "INSERT INTO ITZEL_CORTE_CAJA VALUES (null, '$fecha_inicial', '$fecha_final', '$entrego', '$descripcion', $importe, '$divisa', '$observaciones',  '$ID_EMPLEADO')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>