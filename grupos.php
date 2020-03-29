<html>
    <head>
        <title>Sistema de Control de Grupos</title>
        <link rel="stylesheet" href="estilo.css">
        <link rel="stylesheet" href="estilo2.css">
        <meta charset = "UTF-8">
    </head>
    <body>
        <h1 class="centro">Control de Grupos</h1>
        <form action="grupos.php" method="post">
        <div class="borde">
        <p>Numero de Grupo:</p><input type="number" class="input" name="info[numero]" required/>
        <p>Nombre de Grupo:</p><input type="text" class="input" name="info[nombre]" required/>
        <br>
        <div class="borde"> 
            <input type="submit" class="submit" value="Guardar">
            <br>
            <a class="submit2" href="index.html">Volver</a>
        </div>
        </form>
        <?php
            require "dbconnect.php";
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