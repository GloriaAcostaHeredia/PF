<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de Control de Maestros</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h1 class="centro">Control de Maestros</h1>
        <form action="bdconnect.php" method="post">
        <div class="borde">
        <p>Nombre:</p><input type="text" class="input" name="nombre" required/>
        <p>Correo Electronico:</p><input type="email" class="input" name="email" required/>  
        <p>Numero de Empleado:</p><input type="number" class="input" name="numemp" required/>
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