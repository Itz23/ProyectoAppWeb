<?php
require 'conexion.php';
 $id = $_GET['id'];


$sql = "DELETE FROM ITZEL_CARRITO WHERE id=$id;";
if (mysqli_query($conn, $sql)) {
      echo "Registro borrado";
      header ('Location:mostrarCarrito.php');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>