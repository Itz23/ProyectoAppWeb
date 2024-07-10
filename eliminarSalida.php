<?php
require 'conexion.php';
 $id = $_GET['id'];


$sql = "DELETE FROM ITZEL_VENTA WHERE id=$id;";
if (mysqli_query($conn, $sql)) {
      echo "Registro borrado";
      header ('Location:mostrarSalida.php');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>