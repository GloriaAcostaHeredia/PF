<?php
            //Se incluye el archivo de conexion a la base de datos
            require 'dbconnect.php';
            //se almacenan los valores de los formularios en variables de php
            $id = $_POST['id'];
            $clave = $_POST['clave'];
            $nombre = $_POST['nombre'];

            //se hace una consulta mysql para actualizar los datos de la tabla
            $consulta = mysqli_query($conexion, "UPDATE materias SET clave='$clave', nombre='$nombre' WHERE id='$id'");
            //se regresa a la tabla incial de html
            header('location: tab_materias.php');
        
?>