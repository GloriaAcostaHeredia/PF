<?php
//Incluir archivo de conexion a base de datos
require 'dbconnect.php';
    //Asignar el valor del id de la tabla mysql a una variable de php
    $id = $_GET['id'];
    //crear una consulta en mysql para eliminar los valores que esten en la misma fila que el id
    $consulta = mysqli_query($conexion, "DELETE FROM grupos WHERE id='$id'");
    //regresar a la tabla inicial de html
    header('location: tab_grupos.php');
?>