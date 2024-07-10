<?php
require 'conexion.php';
 $id = $_GET['id'];


$sql = "DELETE FROM ITZEL_PEDIDO WHERE id=$id;";
if (mysqli_query($conn, $sql)) {
      echo "Registro borrado";
      header ('Location:mostrarPedido.php');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>