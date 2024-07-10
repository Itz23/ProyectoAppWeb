<?php
require 'conexion.php';
 $id = $_GET['id'];


$sql = "DELETE FROM ITZEL_PRENDAS WHERE id=$id;";
if (mysqli_query($conn, $sql)) {
      echo "<script>alert ('Registro borrado')</script>";
      header ('Location:mostrarPrenda.php');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>