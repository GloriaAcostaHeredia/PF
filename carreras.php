<!DOCTYPE html>
<html>
    <head>
        <title>Carreras</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <form action="bdconnect.php" method="post"/>
    <body>
    <center> <h1> Carreras</h1></center>
<p>Clave de la carrera: <input type="text" name="clave" required/>   
</p>
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
   <input type="radio" name="carrera" value="Ingenieria en Tecnologias de la Informacion"/> 
   Ingenieria en Tecnologias de la Informacion<br/>
   </td>
</table>
<center><input type="submit" value="Enviar!"> 
   <input type="reset" value="borrar todo">
   </center></p>
</form>
</body>
</html>