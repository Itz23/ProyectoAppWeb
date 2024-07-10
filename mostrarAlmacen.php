<?php
require 'conexion.php';
?>
<!doctype html>
<html lang="en">

<head>
  <title>Mostrar datos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
  <header>
  </header>
  <main>
    
    <div class="container">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Cantidad de entradas</th>
                            <th scope="col">Cantidad de salidas</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Precio</th>  
                            <th scope="col">ID del empleado</th>                        
                            <th scope="col">ID de inventario</th>                        
                            <th scope="col">ID de prenda</th>                        
                            <th scope="col">ID de accesorio</th>                        
                            <th scope="col">ID de proveedor</th>                        
                            <th scope="col">ID de entrada</th>                        
                            <th scope="col">ID de salida</th>                        

                            <th scope="col">Acciones</th>
                            <th scope="col"></th>                         
                        </tr>
                    </thead>
                    <tbody>
                    <?php
    $query = "SELECT * FROM ITZEL_ALMACEN;";
    if($resultado=$conn->query($query)){
        while($row=$resultado->fetch_assoc()){
            ?>
        
                        <tr class="">
                           
                            <td><?php echo $row['nameProducto'];?></td>
                            <td><?php echo $row['descripcion'];?></td>
                            <td><?php echo $row['entradas'];?></td>
                            <td><?php echo $row['salidas'];?></td>
                            <td><?php echo $row['stock'];?></td>
                            <td><?php echo $row['precio'];?></td>
                            <td><?php echo $row['idEmpleado'];?></td>
                            <td><?php echo $row['idInventario'];?></td>
                            <td><?php echo $row['idPrenda'];?></td>
                            <td><?php echo $row['idAcces'];?></td>
                            <td><?php echo $row['idProveedor'];?></td>
                            <td><?php echo $row['idEntrada'];?></td>
                            <td><?php echo $row['idSalida'];?></td>

                            <td><a name="" id="" class="btn btn-danger" href="eliminarAlmacen.php?id=<?php echo $row['ID'];?>" role="button">Eliminar</a></td>
                            <td><a name="" id="" class="btn btn-primary" href="#" role="button">Editar</a></td>
                        </tr>
        <?php
    }//fin del while
}//fin del if
?>
