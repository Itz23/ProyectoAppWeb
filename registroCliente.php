<?php
require 'conexion.php';
 $nombre = $_GET['nombre'];
 $direccion = $_GET['direccion'];
 $correo = $_GET['email'];
 $telefono = $_GET['telefono'];



$sql = "INSERT INTO ITZEL_CLIENTE VALUES (null, '$nombre', '$direccion', '$correo', $telefono)";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>