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
                            <th scope="col">Nombre</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Puesto de trabajo</th>
                            <th scope="col">Fecha de ingreso</th>
                            <th scope="col">Salario</th>
                            <th scope="col">RFC</th>
                            <th scope="col">NSS</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Acciones</th>
                            <th scope="col"></th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    <?php
    $query = "SELECT * FROM ITZEL_EMPLEADO;";
    if($resultado=$conn->query($query)){
        while($row=$resultado->fetch_assoc()){
            ?>
        
                        <tr class="">
                            <td><?php echo $row['nombre'];?></td>
                            <td><?php echo $row['direccion'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['puesto'];?></td>
                            <td><?php echo $row['fecha'];?></td>
                            <td><?php echo $row['salario'];?></td>
                            <td><?php echo $row['rfc'];?></td>
                            <td><?php echo $row['nss'];?></td>
                            <td><?php echo $row['tel'];?></td>

                            <td><a name="" id="" class="btn btn-danger" href="eliminarEmpleado.php?id=<?php echo $row['ID'];?>" role="button">Eliminar</a></td>
                            <td><a name="" id="" class="btn btn-primary" href="#" role="button">Editar</a></td>
                        </tr>
        <?php
    }//fin del while
}//fin del if
?>
