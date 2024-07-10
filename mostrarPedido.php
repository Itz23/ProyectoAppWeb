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
                            <th scope="col">Descripción</th>
                            <th scope="col">Cantidad de productos</th>
                            <th scope="col">Tipo de pago</th>
                            <th scope="col">Fecha de pedido</th>
                            <th scope="col">Fecha de pago</th>
                            <th scope="col">Precio Unitario</th>
                            <th scope="col">Total</th>
                            <th scope="col">ID de cliente</th>
                            <th scope="col">ID de usuario</th>

                            <!--<th scope="col">ID de usuario</th>
                            <th scope="col">ID de cliente</th>-->

                            <th scope="col">Acciones</th>
                            <th scope="col"></th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    <?php
    $query = "SELECT * FROM ITZEL_PEDIDO;";
    if($resultado=$conn->query($query)){
        while($row=$resultado->fetch_assoc()){
            ?>
        
                        <tr class="">
                            <td><?php echo $row['nameProducto'];?></td>
                            <td><?php echo $row['descProd'];?></td>
                            <td><?php echo $row['cantProd'];?></td>
                            <td><?php echo $row['tipoPago'];?></td>
                            <td><?php echo $row['fechaPedido'];?></td>
                            <td><?php echo $row['fechaPago'];?></td>
                            <td><?php echo $row['precioUni'];?></td>
                            <td><?php echo $row['canTot'];?></td>
                            <td><?php echo $row['idCliente'];?></td>
                            <td><?php echo $row['idUsuario'];?></td>

                            <td><a name="" id="" class="btn btn-danger" href="eliminarPedido.php?id=<?php echo $row['ID'];?>" role="button">Eliminar</a></td>
                            <td><a name="" id="" class="btn btn-primary" href="#" role="button">Editar</a></td>
                        </tr>
        <?php
    }//fin del while
}//fin del if
?>
