<!--ARCHIVO DE CONEXION A BASE DE DATOS-->
<?php
    $usuario = "root";
    $contrasena = "";
    $servidor = "localhost";
    $basededatos = "proyecto";
    
    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
    $db = mysqli_select_db($conexion, $basededatos) or  die ("ERROR!!!");
    if (!$conexion) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
?>