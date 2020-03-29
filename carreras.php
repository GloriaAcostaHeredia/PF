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
            <input type="number" class="input" name="matricula" required/>
            <p>Seleccione una Carrera:</p>
            <select class="select">
                <option>Carrera:</option>
                <option value="iti">Ingenieria en Tecnologias de la Informacion</option>
                <option value="isa">Ingenieria en Sistemas Automotrices</option>
                <option value="meca">Ingenieria en Mecatronica</option>
                <option value="layge">Licenciatura en Administracion y Gestion Empresarial</option>
            </select>
            <br>
            <br>
            <input type="submit" class="submit" value="Guardar">
            <br>
            <br>
            <a class="submit2" href="index.html">Volver</a>
        </div>
        </form>
</body>
</html>