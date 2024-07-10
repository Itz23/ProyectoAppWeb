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
                        <!--<th scope="col">ID</th>-->
                            <th scope="col">Nombre del producto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Talla de la prenda</th>
                            <th scope="col">Categoria de la prenda</th>
                            <th scope="col">Color de la prenda</th>
                            <th scope="col">Talla de accesorio</th>
                            <th scope="col">Categoria del accesorio</th>
                            <th scope="col">Color del accesorio</th>
                            <th scope="col">Precio Unitario</th>
                            <th scope="col">ID del pedido</th>
                            <th scope="col">ID de la prenda</th>
                            <th scope="col">ID del accesorio</th>

                            <th scope="col">Acciones</th>
                            <th scope="col"></th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    <?php
    $query = "SELECT * FROM ITZEL_CARRITO;";
    if($resultado=$conn->query($query)){
        while($row=$resultado->fetch_assoc()){
            ?>
        
                        <tr class="">
                            <td><?php echo $row['nameProducto'];?></td>
                            <td><?php echo $row['cantProd'];?></td>
                            <td><?php echo $row['tallaPren'];?></td>
                            <td><?php echo $row['categoriaPren'];?></td>
                            <td><?php echo $row['colorPren'];?></td>
                            <td><?php echo $row['tallaAcces'];?></td>
                            <td><?php echo $row['categoriaAcces'];?></td>
                            <td><?php echo $row['colorAcces'];?></td>
                            <td><?php echo $row['precioUni'];?></td>
                            <td><?php echo $row['idPedido'];?></td>
                            <td><?php echo $row['idPrenda'];?></td>
                            <td><?php echo $row['idAcces'];?></td>


                            <td><a name="" id="" class="btn btn-danger" href="eliminarCarrito.php?id=<?php echo $row['ID'];?>" role="button">Eliminar</a></td>
                            <td><a name="" id="" class="btn btn-primary" href="#" role="button">Editar</a></td>
                        </tr>
        <?php
    }//fin del while
}//fin del if
?>
