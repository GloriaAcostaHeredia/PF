<html>
    <head>
        <title>Sistema de Control de Materias</title>
        <!-- Estilos-->
        <link rel="stylesheet" href="estilo.css">
        <link rel="stylesheet" href="estilo2.css">
        <meta charset = "UTF-8">
    </head>
    <body>
        <h1 class="centro">Control de Materias</h1>
        <!--Para mandar por el metodo post a la bd-->
        <form action="materias.php" method="post">
        <div class="borde">
        <!-- inputs correspondientes -->
        <p>Nombre:</p><input type="text" class="input" name="info[nombre]" required/>
        <p>Clave de Materia:</p><input type="number" class="input" name="info[clave]" required/>
        <br>
        <div class="borde"> 
         <!--Botones para enviar a la base de datos y para volver al index-->
            <input type="submit" class="submit" value="Guardar">
            <br>
            <a class="submit2" href="index.html">Volver</a>
        </div>
        </form>
        <?php
         //Conexion a la base de datos
            require "dbconnect.php";
            if ($conexion) {
                if ($_POST) {
                    $array = $_POST["info"];
                    $nombre = $array["nombre"];
                    $clave = $array["clave"];
                    $sql = "INSERT INTO materias(clave, nombre) VALUES ('$clave', '$nombre')";
                    $query = mysqli_query($conexion, $sql);
                    if ($query) {
                        ?>
                        <br>
                        <div class="exito">
                        <h3>Datos Guardados Exitosamente!</h3>
                        </div>
                        <?php
                    }else {
                        ?>
                        <br>
                        <div class="error">
                        <h3>Ha Ocurrido un error, comuniquese con el administrador</h3>
                        </div>
                        <?php
                    }
                }
            }else {
                ?>
                <br>
                <div class="error">
                <h3>Ha Ocurrido un error, comuniquese con el administrador</h3>
                </div>
                <?php
            }
        ?>
</body>
</html>