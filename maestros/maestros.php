<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de Control de Maestros</title>
        <!-- Estilos -->
        <link rel="stylesheet" href="../css/estilo.css">
        <link rel="stylesheet" href="../css/estilo2.css">
        <link rel="stylesheet" href="../css/estilo3.css">
        <meta charset = "UTF-8">
    </head>
    <body>
        <h1 class="centro">Control de Maestros</h1>
        <!-- Para mandar por el metodo post a bd-->
        <form action="maestros.php" method="post">
        <div class="borde">
        <!-- Inputs correpondientes-->
        <p>Nombre:</p><input type="text" class="input" name="info[nombre]" required/>
        <p>Correo Electronico:</p><input type="email" class="input" name="info[email]" required/>  
        <p>Numero de Empleado:</p><input type="number" class="input" name="info[numemp]" required/>
        <p>Telefono de Contacto:</p><input type="number" class="input" name="info[telefono]" required/>
        <br>
        <div class="borde"> 
         <!--Botones para mandar a la bd y para volver al index-->
            <input type="submit" class="submit" value="Guardar"> <br> <a class="submit2" href="menu_maestros.html">Volver</a>
        </div>
        </form>
        <?php
        //Conexion a la base de datos
            require "../dbconnect.php";
            if ($conexion) {
                if ($_POST) {
                    $array = $_POST["info"];
                    $nombre = $array["nombre"];
                    $email = $array["email"];
                    $numemp = $array["numemp"];
                    $telefono = $array["telefono"];
                    $sql = "INSERT INTO maestros(numemp, nombre, correo, telefono) VALUES ('$numemp', '$nombre', '$email', '$telefono')";
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