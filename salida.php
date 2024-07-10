<?php
require 'conexion.php';
 $nombre = $_GET['nombre'];
 $fecha = $_GET['fecha'];
 $cantidad = $_GET['cantidad'];


$sql = "INSERT INTO ITZEL_VENTA VALUES (null, '$nombre', '$fecha', '$cantidad')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>