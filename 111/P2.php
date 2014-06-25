<html>
<head>
<title>Problema</title>
</head>
<body>




<?php
$conexion=mysql_connect("localhost","root","") 
  or  die("Problemas en la conexion");

mysql_select_db("base1",$conexion) 
  or  die("Problemas en la selección de la base de datos");

$registros=mysql_query("select codigo,nombre, mail, codigocurso
                       from alumnos",$conexion) or
  die("Problemas en el select:".mysql_error());
echo "    <table border=\"2\">\n"; 

echo "<td>uno:</td>\n"; 
echo "<td>dos:</td>\n"; 
echo "<td>tres:</td>\n"; 
 
while ($reg=mysql_fetch_array($registros))
{
echo "      <tr>\n"; 
echo "        <td>\n"; 
  echo $reg['codigo']."<br>";
echo "</td>\n"; 


echo "        <td>\n"; 
  echo $reg['nombre']."<br>";
echo "</td>\n";  


echo "        <td>\n"; 
  echo $reg['mail']."<br>";
echo "</td>\n";  

echo "      </tr>\n"; 


}
echo "    </table>\n";
mysql_close($conexion);
?>




</body>
</html> 