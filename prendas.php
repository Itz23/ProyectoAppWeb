<?php
require 'conexion.php';
 $nombre = $_GET['nameProducto'];
 $cantidad = $_GET['cantProd'];
 $material = $_GET['material'];
 $talla = $_GET['talla'];
 $color = $_GET['color'];
 $descripcion = $_GET['descripcion'];
 $estado = $_GET['estado'];
 $categoria = $_GET['categoria'];
 $precio = $_GET['precio'];
 $fechaRegistro = $_GET['fecha'];


$sql = "INSERT INTO ITZEL_PRENDAS VALUES (null, '$nombre', $cantidad, '$material',  '$talla', '$color', '$descripcion', '$estado', '$categoria', '$precio', '$fechaRegistro' )";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>