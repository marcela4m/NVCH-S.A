<html>
<head>
<title>Problema</title>
</head>



<body>





<?php









echo '<br>A continuacion se muestra la lista de todos los clientes registrados en el sistema:';



$conexion=mysql_connect("mysql.nixiweb.com","u893654268_3","123456") 
  or  die("Problemas en la conexion");

mysql_select_db("u893654268_3",$conexion) 
  or  die("Problemas en la selección de la base de datos");

$registros=mysql_query("select * from clientes ",$conexion) or
  die("Problemas en el select:".mysql_error());
echo "    <table border=\"2\">\n"; 

echo "<td>CEDULA</td>\n"; 
echo "<td>NOMBRE COMPLETO</td>\n"; 
echo "<td>DIRECCION</td>\n"; 
echo "<td>TELEFONO</td>\n"; 
 
while ($reg=mysql_fetch_array($registros))
{


echo "<form action=\"ventas2.php\" method=\"post\">\n"; 
echo "      <tr>\n"; 
echo "        <td>\n"; 
  echo $reg['CC']."<br>";
echo "</td>\n"; 


echo "        <td>\n"; 
  echo $reg['nameC']."<br>";
echo "</td>\n";  


echo "        <td>\n"; 
  echo $reg['addressC']."<br>";
echo "</td>\n";  



echo "        <td>\n"; 
  echo $reg['phoneC']."<br>";
echo "</td>\n";  




echo "        <td>\n"; 
echo "<input type=\"radio\" name=\"one\"  value=".$reg["CC"]." ></td>\n";


//value=".$reg["CC"]."
//name=\"one\" 



}
echo "    </table>\n";

echo "      </tr>\n"; 
echo "<input type=\"submit\"  value=\"Agregar Cliente\" />\n"; 
echo "</form>\n";

mysql_close($conexion);


/*
  if (isset($_COOKIE['user'])){
  
  
	echo "user es igual aaaaaa:";
echo	$_COOKIE[user];
}
*/
?>







	































Generar reporte:  
<a href="/P/pdf/pdf.php" target="_self"> <input type="button" name="boton" value="PDF" /> </a>













<?php



//echo '<p><a href="logout.php">Cerrar Sesion</a></p>';

?>












</body>
</html> 