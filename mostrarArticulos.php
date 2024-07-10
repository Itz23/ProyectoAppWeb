<?php
require 'conexion.php';
?>
<!doctype html>
<html lang="en">

<head>
  <title>Mostrar datos</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    
    <div class="container">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Material</th>
                            <th scope="col">Talla</th>
                            <th scope="col">Color</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Fecha de registro</th>
                            <th scope="col">Acciones</th>
                            <th scope="col"></th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    <?php
    $query = "SELECT * FROM ITZEL_ACCESORIOS;";
    if($resultado=$conn->query($query)){
        while($row=$resultado->fetch_assoc()){
            ?>
        
                        <tr class="">
                            <td><?php echo $row['nameProducto'];?></td>
                            <td><?php echo $row['cantProd'];?></td>
                            <td><?php echo $row['material'];?></td>
                            <td><?php echo $row['talla'];?></td>
                            <td><?php echo $row['color'];?></td>
                            <td><?php echo $row['descripcion'];?></td>
                            <td><?php echo $row['estado'];?></td>
                            <td><?php echo $row['categoria'];?></td>
                            <td><?php echo $row['precio'];?></td>
                            <td><?php echo $row['fecha'];?></td>
                            
                            <td><a name="" id="" class="btn btn-danger" href="eliminarArticulo.php?id=<?php echo $row['ID'];?>" role="button">Eliminar</a></td>
                            <td><a name="" id="" class="btn btn-primary" href="#" role="button">Editar</a></td>
                        </tr>
        <?php
    }//fin del while
}//fin del if
?>
