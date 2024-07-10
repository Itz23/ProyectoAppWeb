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
                            <th scope="col">Fecha</th>
                            <th scope="col">Stock mínimo</th>
                            <th scope="col">Stock máximo</th>
                            <th scope="col">Aplica IVA</th>
                            <th scope="col">Nombre del producto</th>
                            <th scope="col">Costo unitario</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Fecha Compra</th>
                            <th scope="col">Fecha Vencimiento</th>

                            <th scope="col">Acciones</th>
                            <th scope="col"></th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    <?php
    $query = "SELECT * FROM ITZEL_INVENTARIO;";
    if($resultado=$conn->query($query)){
        while($row=$resultado->fetch_assoc()){
            ?>
        
                        <tr class="">
                            <td><?php echo $row['fecha'];?></td>
                            <td><?php echo $row['stockmin'];?></td>
                            <td><?php echo $row['stockmax'];?></td>
                            <td><?php echo $row['aplIva'];?></td>
                            <td><?php echo $row['nameProducto'];?></td>
                            <td><?php echo $row['costoUni'];?></td>
                            <td><?php echo $row['cantidad'];?></td>
                            <td><?php echo $row['fechaCom'];?></td>
                            <td><?php echo $row['fechaVen'];?></td>

                            <td><a name="" id="" class="btn btn-danger" href="eliminarInventario.php?id=<?php echo $row['ID'];?>" role="button">Eliminar</a></td>
                            <td><a name="" id="" class="btn btn-primary" href="#" role="button">Editar</a></td>
                        </tr>
        <?php
    }//fin del while
}//fin del if
?>
