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
                            <th scope="col">Fecha inicial</th>
                            <th scope="col">Fecha final</th>
                            <th scope="col">Entregó</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Importe</th>
                            <th scope="col">Divisa</th>
                            <th scope="col">Observaciones</th>
                            <th scope="col">ID del empleado</th>
                            <th scope="col">Acciones</th>
                            <th scope="col"></th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    <?php
    $query = "SELECT * FROM ITZEL_CORTE_CAJA;";
    if($resultado=$conn->query($query)){
        while($row=$resultado->fetch_assoc()){
            ?>
        
                        <tr class="">
                            <td><?php echo $row['abrio'];?></td>
                            <td><?php echo $row['cerro'];?></td>
                            <td><?php echo $row['entrego'];?></td>
                            <td><?php echo $row['descripcion'];?></td>
                            <td><?php echo $row['importe'];?></td>
                            <td><?php echo $row['divisa'];?></td>
                            <td><?php echo $row['observaciones'];?></td>

                            <td><a name="" id="" class="btn btn-danger" href="eliminarCorte.php?id=<?php echo $row['ID'];?>" role="button">Eliminar</a></td>
                            <td><a name="" id="" class="btn btn-primary" href="#" role="button">Editar</a></td>
                        </tr>
        <?php
    }//fin del while
}//fin del if
?>
