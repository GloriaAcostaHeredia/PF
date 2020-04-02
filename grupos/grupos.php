<html>
    <head>
        <title>Sistema de Control de Grupos</title>
        <!--Estilos-->
        <link rel="stylesheet" href="../css/estilo.css">
        <link rel="stylesheet" href="../css/estilo2.css">
        <link rel="stylesheet" href="../css/estilo3.css">
        <meta charset = "UTF-8">
    </head>
    <body>
        <h1 class="centro">Control de Grupos</h1>
        <!--Para mandar por el metodo post a bd-->
        <form action="grupos.php" method="post">
        <div class="borde">
        <!--input para los datos-->
        <p>Numero de Grupo:</p><input type="number" class="input" name="info[numero]" required/>
        <p>Nombre de Grupo:</p><input type="text" class="input" name="info[nombre]" required/>
        <br>
        <div class="borde"> 
        <!-- boton para guardar en la bd-->
            <input type="submit" class="submit" value="Guardar">
            <br>
            <!-- boton para volver al index-->
            <a class="submit2" href="menu_grupos.html">Volver</a>
        </div>
        </form>
        <?php
        //Conexion a la base de datos
            require "../dbconnect.php";
            if ($conexion) {
                if ($_POST) {
                    $array = $_POST["info"];
                    $nombre = $array["nombre"];
                    $numero = $array["numero"];
                    $sql = "INSERT INTO grupos(numgrupo, nombre) VALUES ('$numero', '$nombre')";
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