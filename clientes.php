<html>
<head>
<title>Problema</title>
</head>
<body>





<?php
session_start();

echo "Bienvenido(a): ";
echo '<b>'.$_SESSION['k_username'].'</b>.';
$user=$_SESSION['k_username'];
echo '<br>Estas son sus citas vigentes:';


$conexion=mysql_connect("localhost","root","") 
  or  die("Problemas en la conexion");

mysql_select_db("base1",$conexion) 
  or  die("Problemas en la selección de la base de datos");

$registros=mysql_query("select * from nodisponibles WHERE user='$user'",$conexion) or
  die("Problemas en el select:".mysql_error());
//echo "    <table border=\"2\">\n"; 
echo "<table width=\"50%\" border=\"2\" align=\"center\" cellspacing=\"0\" bordercolor=\"#000000\" bgcolor=\"#FFCC99\">\n";


echo "<td>DOCTOR</td>\n"; 
echo "<td>ESPECIALIDAD</td>\n"; 
echo "<td>FECHA DE ASISTENCIA</td>\n"; 
echo "<td>FECHA DE VENCIMIENTO</td>\n"; 
 
while ($reg=mysql_fetch_array($registros))
{
echo "      <tr>\n"; 
echo "        <td>\n"; 
  echo $reg['doc']."<br>";
echo "</td>\n"; 


echo "        <td>\n"; 
  echo $reg['esp']."<br>";
echo "</td>\n";  


echo "        <td>\n"; 
  echo $reg['fechai']."<br>";
echo "</td>\n";  



echo "        <td>\n"; 
  echo $reg['fechav']."<br>";
echo "</td>\n";  



echo "      </tr>\n"; 


}
echo "    </table>\n";
mysql_close($conexion);
?>







	































<br>Para sacar una nueva cita de click 
<a href="P1.php" target="_self"> <input type="button" name="boton" value="Aqui" /> </a>





















<?php



echo '<p><a href="logout.php">Cerrar Sesion</a></p>';

?>









</body>
</html>