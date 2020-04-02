<?php
    //Asignar el valor del id de la tabla mysql a una variable de php
    $id = $_GET['id'];
    //incluir el archivo de conexion a base de datos
    require 'dbconnect.php';
    //hacer una consulta para seleccionar todos los datos que esten en la misma fila que el id
    $buscar = mysqli_query($conexion, "SELECT * FROM maestros WHERE id='$id'");
    //meter los datos en un array
    $fila = mysqli_fetch_array($buscar);
    //asignar los valores del array en variables
    $numero = $fila['numemp'];
    $nombre = $fila['nombre'];
    $correo = $fila['correo'];
    $telefono = $fila['telefono'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Editar Maestros</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="estilo.css">
        <link rel="stylesheet" href="estilo2.css">
        <link rel="stylesheet" href="estilo3.css">
        <meta charset = "UTF-8">
    </head>
    <body>
        <h1 class ="centro">Editar Maestros</h1>
        <br>
        <!--Inicio del formulario-->
        <form action="modificar_maestros.php" method="post">
        <div class="borde">
            <p>Matricula: </p>
            <input type="hidden"  name="id" value="<?php echo $id; ?>">
            <input type="text" class="input" name="numemp" value="<?php echo $numero; ?>">
            <br>
            <p>Nombre de Alumno: </p>
            <input type="text" class="input" name="nombre" value="<?php echo $nombre; ?>">
            <br>
            <p>Correo Electronico: </p>
            <input type="text" class="input" name="correo" value="<?php echo $correo; ?>">
            <br>
            <p>Telefono: </p>
            <input type="text" class="input" name="telefono" value="<?php echo $telefono; ?>">
            <br>
            <input type="submit" class="submit" value="Guardar">
        </form>
        <!--fin del formulario-->
    </body>
</html>