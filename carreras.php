<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de Control de Carreras</title>
        <link rel="stylesheet" href="estilo.css">
        <link rel="stylesheet" href="estilo2.css">
        <meta charset = "UTF-8">
    </head>
    <body>
        <h1 class="centro">Control de Carreras</h1>
        <form action="carreras.php" method="post">
        <div class="borde">
            <p>Clave de Carrera:</p>
            <input type="number" class="input" name="info[clave]" required/>
            <p>Seleccione una Carrera:</p>
            <select name="info[carrera]" class="select">
                <option value="ITI">Ingenieria en Tecnologias de la Informacion</option>
                <option value="ISA">Ingenieria en Sistemas Automotrices</option>
                <option value="MECA">Ingenieria en Mecatronica</option>
                <option value="LAyGE">Licenciatura en Administracion y Gestion Empresarial</option>
            </select>
            <br>
            <br>
            <input type="submit" class="submit" value="Guardar">
            <br>
            <br>
            <a class="submit2" href="index.html">Volver</a>
        </form>
        <?php
            require "dbconnect.php";
            if ($conexion) {
                if ($_POST) {
                    $array = $_POST["info"];
                    $clave = $array["clave"];
                    $carrera = $array["carrera"];
                    $sql = "INSERT INTO carrera(clave, nombre) VALUES ('$clave', '$carrera')";
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