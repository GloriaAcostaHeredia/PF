
<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de Control de Alumnos</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h1 class="centro">Control de Alumnos</h1>
        <form action="bdconnect.php" method="post">
        <div class="borde">
        <p>Nombre:</p><input type="text" class="input" name="nombre" required/>
        <p>Correo Electronico:</p><input type="email" class="input" name="email" required/>  
        <p>Matricula:</p><input type="number" class="input" name="matricula" required/>
        <p>Telefono de Contacto:</p><input type="tel" class="input"  name="telefono" required/>
        <br>
        <div class="borde"> 
            <center>
            <input type="submit" class="submit" value="Enviar!">
            <a class="boton" href="index.html"> Regresar </a> </center>
        </div>
        </form>
</body>
</html>

