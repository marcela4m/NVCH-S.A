<html>
<head>
<title>Problema</title>
</head>
<body>





<?php









echo '<br>A continuacion se muestra la lista de todos los Articulos registrados en el sistema:';



$conexion=mysql_connect("mysql.nixiweb.com","u893654268_3","123456") 
  or  die("Problemas en la conexion");

mysql_select_db("u893654268_3",$conexion) 
  or  die("Problemas en la selección de la base de datos");

$registros=mysql_query("select * from articulo ",$conexion) or
  die("Problemas en el select:".mysql_error());
echo "    <table border=\"2\">\n"; 

echo "<td>ID_ARTICULO</td>\n"; 
echo "<td>NOMBRE</td>\n"; 
echo "<td>DESCRIPCION</td>\n"; 
echo "<td>PRECIO</td>\n"; 
echo "<td>PROVEEDOR</td>\n";
echo "<td>CANTIDAD</td>\n";
echo "<td>VISTA_PREVIA</td>\n";
 
while ($reg=mysql_fetch_array($registros))
{


echo "<form action=\"ventas2.php\" method=\"post\">\n"; 
echo "      <tr>\n"; 
echo "        <td>\n"; 
  echo $reg['id']."<br>";
echo "</td>\n"; 


echo "        <td>\n"; 
  echo $reg['nameA']."<br>";
echo "</td>\n";  


echo "        <td>\n"; 
  echo $reg['desA']."<br>";
echo "</td>\n";  



echo "        <td>\n"; 
  echo $reg['priceA']."<br>";
echo "</td>\n";  



echo "        <td>\n"; 
  echo $reg['pro']."<br>";
echo "</td>\n";



echo "        <td>\n"; 
  echo $reg['stock']."<br>";
echo "</td>\n";





echo "        <td>\n"; 
$nam=$reg["image"];
echo "<img src=\"$nam\" width=\"100\" height=\"100\"><br>";
 // echo $reg['image']."<br>";
echo "</td>\n";





echo "        <td>\n"; 
echo "<input type=\"checkbox\" name=".$reg["id"]."   ></td>\n";


//value=".$reg["CC"]."
//name=\"one\" 
//echo $reg["id"];


}
echo "    </table>\n";
echo "      </tr>\n"; 
echo "<input type=\"submit\"  value=\"Agregar Articulos\" />\n"; 
echo "</form>\n";


//mysql_close($conexion);


?>







	































Generar reporte:  
<a href="/P/pdf/pdf.php" target="_self"> <input type="button" name="boton" value="PDF" /> </a>













<?php



//echo '<p><a href="logout.php">Cerrar Sesion</a></p>';

?>











</body>
</html>