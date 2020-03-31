<?php
    //Asignar el valor del id de la tabla mysql a una variable de php
    $id = $_GET['id'];
    //incluir el archivo de conexion a base de datos
    require 'dbconnect.php';
    //hacer una consulta para seleccionar todos los datos que esten en la misma fila que el id
    $buscar = mysqli_query($conexion, "SELECT * FROM alumnos WHERE id='$id'");
    //meter los datos en un array
    $fila = mysqli_fetch_array($buscar);
    //asignar los valores del array en variables
    $matricula = $fila['matricula'];
    $nombre = $fila['nombre'];
    $correo = $fila['correo'];
    $telefono = $fila['telefono'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Editar Alumno</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="estilo.css">
        <link rel="stylesheet" href="estilo2.css">
        <link rel="stylesheet" href="estilo3.css">
    </head>
    <body>
        <h1 class ="centro">Editar Alumno</h1>
        <br>
        <!--Inicio del formulario-->
        <form action="modificar_alumno.php" method="post">
            <p>Matricula: </p>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="text" name="matricula" value="<?php echo $matricula; ?>">
            <br>
            <p>Nombre de Alumno: </p>
            <input type="text" name="nombre" value="<?php echo $nombre; ?>">
            <br>
            <p>Correo Electronico: </p>
            <input type="text" name="correo" value="<?php echo $correo; ?>">
            <br>
            <p>Telefono: </p>
            <input type="text" name="telefono" value="<?php echo $telefono; ?>">
            <br>
            <input type="submit" value="Guardar">
        </form>
        <!--fin del formulario-->
    </body>
</html>