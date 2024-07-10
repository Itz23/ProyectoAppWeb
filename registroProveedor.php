<?php
require 'conexion.php';
 $nombre = $_GET['nombre'];
 $direccion = $_GET['direccion'];
 $correo = $_GET['email'];
 $telefono = $_GET['telefono'];
 $RFC = $_GET['rfc'];
 $rol_proveedor = $_GET['rol'];



$sql = "INSERT INTO ITZEL_PROVEEDOR VALUES (null, '$nombre', '$direccion', '$correo', $telefono, '$RFC', '$rol_proveedor')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>