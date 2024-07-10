<?php
require 'conexion.php';
 $nombre = $_GET['nombre'];
 $direccion = $_GET['direccion'];
 $correo = $_GET['email'];
 $puestoTr = $_GET['puesto'];
 $fechaIngreso = $_GET['fecha'];
 $salario = $_GET['salario'];
 $RFC = $_GET['rfc'];
 $NSS = $_GET['nss'];
 $telefono = $_GET['tel'];



$sql = "INSERT INTO ITZEL_EMPLEADO VALUES (null, '$nombre', '$direccion', '$correo', '$puestoTr', '$fechaIngreso', $salario, '$RFC', '$NSS', $telefono)";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>