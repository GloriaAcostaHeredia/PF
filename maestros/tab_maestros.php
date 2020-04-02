<!DOCTYPE html>
<html>
    <head>
        <title>Maestros</title>
        <link rel="stylesheet" href="../css/estilo.css">
        <link rel="stylesheet" href="../css/estilo2.css">
        <link rel="stylesheet" href="../css/estilo3.css">
        <meta charset = "UTF-8">
    </head>
    <body>
        <h1 class="centro">Control de Maestros </h1>
        <br>
        <!--Contenido de la tabla-->
        <div class="borde">
        <div class= centro>
        <table class="tabla">
            <thead>
            <tr>
                <th class="left">Num. Emplado</th>
                <th>Nombre de Docente</th>
                <th>Correo Electronico</th>
                <th>Telefono</th>
                <th class="right">Opciones</th>
            </tr>
            </thead>
        <?php
            //incluir archivo de conexion a base de datos
            require '../dbconnect.php';
            //hacer una consulta mysql para seleccionar todos los datos y poder imprimirlos en una tabla hecha en html
            $select = "SELECT * FROM maestros ORDER BY numemp ASC";
            $consulta = mysqli_query($conexion, $select);
            //hacer un ciclo while donde se vayan imprimiendo los datos de la tabla (dichos datos introducidos en un array con la funcion mysqli_fetch_array)
            //en la tabla de html
            while ($fila = mysqli_fetch_array($consulta)) {
                //Se crea una variable donde se guarde el id de su fila correspondiente
                $id = $fila['id'];
                //se imprime la tabla
                echo '<tbody>';
                echo '<tr>';
                echo '<td>'.$fila['numemp'].'</td>';
                echo '<td>'.$fila['nombre'].'</td>';
                echo '<td>'.$fila['correo'].'</td>';
                echo '<td>'.$fila['telefono'].'</td>';
                echo '<td><a class="tablab" href="form_mod_maestros.php?id='.$id.'">Editar</a>&nbsp;<a class="tablab" href="borrar_maestros.php?id='.$id.'">Borrar</a></td>';
                echo '</tr>';
                echo '</tbody>';
            }
        ?>
        </table>
        </div>
        <br>
        <a class="submit2" href="menu_maestros.html">Volver</a>
        </div>
        
        <!--Fin de contenido de la tabla-->
    </body>
</html>