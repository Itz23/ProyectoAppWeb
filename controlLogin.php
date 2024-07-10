<?php

if (!empty($_POST["btnLogin"])){
    if (empty($_POST["nombre"]) and empty($_POST["contrasena"])) {
        echo "Los campos están vacíos";
    } else {
        $nombre=$_POST('nombre'); //('nombre') es el nombre de la variable en html: name="nombre"
        $contrasena=$_POST('contrasena');
        $sql=$conn->query("select * from ITZEL_USUARIO where nombre='$nombre' and contrasena='$contrasena'");
        if($datos=$sql->fetch_object()){
            header("location: Inicio.html");
        } else {
            echo "Acceso denegado";

        }
    }
}

?>