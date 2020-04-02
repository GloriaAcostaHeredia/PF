<?php
            //Se incluye el archivo de conexion a la base de datos
            require '../dbconnect.php';
            //se almacenan los valores de los formularios en variables de php
            $id = $_POST['id'];
            $Numero = $_POST['numemp'];
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            //se hace una consulta mysql para actualizar los datos de la tabla
            $consulta = mysqli_query($conexion, "UPDATE maestros SET numemp='$Numero', nombre='$nombre', correo='$correo', telefono='$telefono' WHERE id='$id'");
            //se regresa a la tabla incial de html
            header('location: tab_maestros.php');
        ?>