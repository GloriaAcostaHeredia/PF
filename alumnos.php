
<html>
    <head>
        <title>Sistema de Control de Maestros</title>
        <link rel="stylesheet" href="estilo.css">
        <link rel="stylesheet" href="estilo2.css">
        <meta charset = "UTF-8">
    </head>
    <body>
        <h1 class="centro">Control de Alumnos</h1>
        <form action="alumnos.php" method="post">
        <div class="borde">
        <p>Nombre:</p><input type="text" class="input" name="info[nombre]" required/>
        <p>Correo Electronico:</p><input type="email" class="input" name="info[email]" required/>  
        <p>Matricula:</p><input type="number" class="input" name="info[matricula]" required/>
        <p>Telefono de Contacto:</p><input type="number" class="input" name="info[telefono]" required/>
        <br>
        <div class="borde"> 
            <input type="submit" class="submit" value="Guardar">
            <br>
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
                    $email = $array["email"];
                    $matricula = $array["matricula"];
                    $telefono = $array["telefono"];
                    $sql = "INSERT INTO alumnos(matricula, nombre, correo, telefono) VALUES ('$matricula', '$nombre', '$email', '$telefono')";
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