<html>
<head>
<title>Problema</title>
</head>
<body>



A continuacion se mostrara el horario y la disponibilidad de cada doctor:
<br>
<?php
$conexion=mysql_connect("localhost","root","") 
  or  die("Problemas en la conexion");

mysql_select_db("base1",$conexion) 
  or  die("Problemas en la selección de la base de datos");

$registros=mysql_query("select doctor,especialidad, fechai
                       from disponibles",$conexion) or
  die("Problemas en el select:".mysql_error());
echo "<table width=\"50%\" border=\"2\" align=\"center\" cellspacing=\"0\" bordercolor=\"#000000\" bgcolor=\"#FFCC99\">\n";

echo "<td>DOCTOR</td>\n"; 
echo "<td>ESPECIALISTA</td>\n"; 
echo "<td>FECHA</td>\n"; 
 
while ($reg=mysql_fetch_array($registros))
{
echo "      <tr>\n"; 
echo "        <td>\n"; 
  echo $reg['doctor']."<br>";
echo "</td>\n"; 


echo "        <td>\n"; 
  echo $reg['especialidad']."<br>";
echo "</td>\n";  


echo "        <td>\n"; 
  echo $reg['fechai']."<br>";
echo "</td>\n";  

echo "      </tr>\n"; 


}
echo "    </table>\n";
mysql_close($conexion);
?>





<form action="P11.php" method="post">
<br>A continuacion y de acuerdo a la tabla anterior escoja el horario que mas le convenga:

<br><br>




DOCTOR:
<select name="uno">
<?php
$conexion=mysql_connect("localhost","root","") or
  die("Problemas en la conexion");
mysql_select_db("base1",$conexion) or
  die("Problemas en la selección de la base de datos");
$registros=mysql_query("select doctor from disponibles",$conexion) or
  die("Problemas en el select:".mysql_error());
while ($reg=mysql_fetch_array($registros))
{

  echo "<option value=\"$reg[doctor]\">$reg[doctor]</option>";

}
?>
</select>








ESPECIALIDAD:
<select name="dos">
<?php
$conexion=mysql_connect("localhost","root","") or
  die("Problemas en la conexion");
mysql_select_db("base1",$conexion) or
  die("Problemas en la selección de la base de datos");
$registros=mysql_query("select especialidad from disponibles",$conexion) or
  die("Problemas en el select:".mysql_error());
while ($reg=mysql_fetch_array($registros))
{
  echo "<option value=\"$reg[especialidad]\">$reg[especialidad]</option>";
  
}
?>
</select>















FECHA:
<select name="tres">
<?php
$conexion=mysql_connect("localhost","root","") or
  die("Problemas en la conexion");
mysql_select_db("base1",$conexion) or
  die("Problemas en la selección de la base de datos");
$registros=mysql_query("select fechai from disponibles",$conexion) or
  die("Problemas en el select:".mysql_error());
while ($reg=mysql_fetch_array($registros))
{

  echo "<option value=\"$reg[fechai]\">$reg[fechai]</option>";

}
?>
</select>

<br>
<input type="submit" value="Registrar">




</form>

	






<br>










<?php



echo '<p><a href="logout.php">Cerrar Sesion</a></p>';

?>














































</body>
</html>