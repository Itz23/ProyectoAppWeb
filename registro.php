<?php
require 'conexion.php';
 $nombre = $_GET['nombre'];
 $email = $_GET['email'];
 $cotrasena = $_GET['contrasena'];



/*if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}*/
//echo "Connected successfully";

$sql = "INSERT INTO ITZEL_USUARIO VALUES (null, '$nombre', '$email', '$contrasena')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>