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
                            <th scope="col">Cantidad</th>
                            <th scope="col">Tipo de material</th>
                            <th scope="col">Nombre de producto de limpieza</th>
                            <th scope="col">Nombre de producto de diseño</th>
                            <th scope="col">Fecha de pedido</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">ID de empleado</th>

                            <th scope="col">Acciones</th>
                            <th scope="col"></th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    <?php
    $query = "SELECT * FROM ITZEL_PEDIDO_MATERIAL;";
    if($resultado=$conn->query($query)){
        while($row=$resultado->fetch_assoc()){
            ?>
        
                        <tr class="">
                            <td><?php echo $row['cantMat'];?></td>
                            <td><?php echo $row['tipoMat'];?></td>
                            <td><?php echo $row['nombreLimpieza'];?></td>
                            <td><?php echo $row['nombreDis'];?></td>
                            <td><?php echo $row['fechaPedido'];?></td>
                            <td><?php echo $row['descripcion'];?></td>
                            <td><?php echo $row['idEmpleado'];?></td>

                            <td><a name="" id="" class="btn btn-danger" href="eliminarMaterial.php?id=<?php echo $row['ID'];?>" role="button">Eliminar</a></td>
                            <td><a name="" id="" class="btn btn-primary" href="#" role="button">Editar</a></td>
                        </tr>
        <?php
    }//fin del while
}//fin del if
?>
