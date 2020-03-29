<!DOCTYPE html>
<html>
    <head>
        <title>Sistema De Control De Carreras</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <form action="bdconnect.php" method="post"/>
    <body>
    <center> <h1> Sistema De Control De Carreras</h1></center>
<p>Clave de la carrera: <input type="text" class="input" name="clave" required/>   
</p>
<p>
<table>
   <tr>
   <td>
   Carrera:<br/>
   <input type="radio" name="carrera" value="Ingenieria en Sistemas Automotrices"/> 
   Ingenieria en Sistemas Automotrices<br/>
   <input type="radio" name="carrera" value="Ingenieria en Tecnologias de Manufactura"checked="checked"/> 
   Ingenieria en Tecnologias de Manufactura <br/>
   <input type="radio" name="carrera" value="Ingenieria en Mecatronica"/> 
   Ingenieria en Mecatronica<br/>
   <input type="radio"  name="carrera" value="Ingenieria en Tecnologias de la Informacion"/> 
   Ingenieria en Tecnologias de la Informacion<br/>
   </td>
</table>
</p>
<div class="borde"> 
            <center>
            <input type="submit" class="submit" value="Enviar!">
            <a class="boton" href="index.html"> Regresar </a> </center>
        </div>
</form>
</body>
</html>