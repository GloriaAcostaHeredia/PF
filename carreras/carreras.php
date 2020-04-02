<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de Control de Carreras</title>
        <!--Estilos-->
        <link rel="stylesheet" href="../css/estilo.css">
        <link rel="stylesheet" href="../css/estilo2.css">
        <link rel="stylesheet" href="../css/estilo3.css">
        <meta charset = "UTF-8">
    </head>
    <body>
        <h1 class="centro">Control de Carreras</h1>
        <!--Para mandar por el metodo post a bd-->
        <form action="carreras.php" method="post">
        <div class="borde">
            <p>Clave de Carrera:</p>
            <!--Input para la clave-->
            <input type="number" class="input" name="info[clave]" required/>
            <p>Seleccione una Carrera:</p>
            <!--Lista con las carreras-->
            <select name="info[carrera]" class="select">
                <option value="ITI">Ingenieria en Tecnologias de la Informacion</option>
                <option value="ISA">Ingenieria en Sistemas Automotrices</option>
                <option value="MECA">Ingenieria en Mecatronica</option>
                <option value="LAyGE">Licenciatura en Administracion y Gestion Empresarial</option>
            </select>
            <br>
            <br>
            <!--Boton para guardar en la base de batos-->
            <input type="submit" class="submit" value="Guardar">
            <br>
            <br>
            <!--Boton para volver al index-->
            <a class="submit2" href="menu_carreras.html">Volver</a>
        </form>
        <?php
        //Conexion a la base de datos
            require '../dbconnect.php';
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
                        <!--Mensaje si se hace con exito-->
                        <h3>Datos Guardados Exitosamente!</h3>
                        </div>
                        <?php
                    }else {
                        ?>
                        <br>
                        <div class="error">
                        <!--Mensaje si ocurre un error-->
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