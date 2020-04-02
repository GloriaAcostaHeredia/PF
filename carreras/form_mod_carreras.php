<?php
    //Asignar el valor del id de la tabla mysql a una variable de php
    $id = $_GET['id'];
    //incluir el archivo de conexion a base de datos
    require '../dbconnect.php';
    //hacer una consulta para seleccionar todos los datos que esten en la misma fila que el id
    $buscar = mysqli_query($conexion, "SELECT * FROM carrera WHERE id='$id'");
    //meter los datos en un array
    $fila = mysqli_fetch_array($buscar);
    //asignar los valores del array en variables
    $clave = $fila['clave'];
    $nombre = $fila['nombre'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Editar Carrera</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/estilo.css">
        <link rel="stylesheet" href="../css/estilo2.css">
        <link rel="stylesheet" href="../css/estilo3.css">
        <meta charset = "UTF-8">
    </head>
    <body>
        <h1 class ="centro">Editar Carreras</h1>
        <br>
        <!--Inicio del formulario-->
        <form action="modificar_carreras.php" method="post">
        <div class="borde">
        <p>Clave: </p>
            <input type="hidden"  name="id" value="<?php echo $id; ?>">
            <input type="text" class="input" name="clave" value="<?php echo $clave; ?>">
            <br>
            <p>Seleccione una Carrera:</p>
            <select name="nombre" class="select"  <?php echo $nombre?>>
                <option value="ITI">Ingenieria en Tecnologias de la Informacion</option>
                <option value="ISA">Ingenieria en Sistemas Automotrices</option>
                <option value="MECA">Ingenieria en Mecatronica</option>
                <option value="LAyGE">Licenciatura en Administracion y Gestion Empresarial</option>
            </select>
            
            <br>
            <input type="submit" class="submit" value="Guardar">
        </form>
        <!--fin del formulario-->
        <br>
        <a class="submit2" href="tab_carreras.php">Volver</a>
    </body>
</html>