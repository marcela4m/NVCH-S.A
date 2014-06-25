<html>
<head>
<title>Problema</title>
</head>
<body>





<?php
session_start();





echo "Bienvenido(a)";
echo '<b>'.$_SESSION['k_username'].'</b>.';
$user=$_SESSION['k_username'];


echo '<br>A continuacion se muestra la lista de todos los pacientes actualmente vinculados al sistema:';



$conexion=mysql_connect("localhost","root","") 
  or  die("Problemas en la conexion");

mysql_select_db("base1",$conexion) 
  or  die("Problemas en la selección de la base de datos");

$registros=mysql_query("select * from paciente ",$conexion) or
  die("Problemas en el select:".mysql_error());
echo "    <table border=\"2\">\n"; 

echo "<td>NOMBRE</td>\n"; 
echo "<td>CONTRASEÑA</td>\n"; 
echo "<td>CORREO</td>\n"; 
echo "<td>FECHA DE AFILIACION</td>\n"; 
 
while ($reg=mysql_fetch_array($registros))
{
echo "      <tr>\n"; 
echo "        <td>\n"; 
  echo $reg['nom']."<br>";
echo "</td>\n"; 


echo "        <td>\n"; 
  echo $reg['con']."<br>";
echo "</td>\n";  


echo "        <td>\n"; 
  echo $reg['correo']."<br>";
echo "</td>\n";  



echo "        <td>\n"; 
  echo $reg['fecha']."<br>";
echo "</td>\n";  




echo "      </tr>\n"; 


}
echo "    </table>\n";

mysql_close($conexion);


?>







	































Generar reporte  
<a href="/P/pdf/pdf.php" target="_self"> <input type="button" name="boton" value="PDF" /> </a>













<?php



echo '<p><a href="logout.php">Cerrar Sesion</a></p>';

?>











</body>
</html>