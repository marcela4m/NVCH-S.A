
<?php



$conexion=mysql_connect("mysql.nixiweb.com","u893654268_3","123456") 
  or  die("Problemas en la conexion");

mysql_select_db("u893654268_3",$conexion) 
  or  die("Problemas en la selección de la base de datos");


	$idd = $_POST["client"];
	if($idd==NULL) {
	
	//echo "no entro";
	
	}else if($idd!=NULL) {
	//echo "entro"; 
	//echo $idd;
	
 	$regist=mysql_query("SELECT * FROM ventas WHERE idc='$idd'") or
  die("Problemas en el select:".mysql_error());
  

while ($reg0=mysql_fetch_array($regist)){

echo "<br><br><br><br>";
echo "\n"; 
echo "    <table border=\"1\">\n"; 
echo "\n"; 
echo "\n"; 
echo " <tr>\n"; 
echo "        <td>ID_Cliente</td>\n"; 
echo "        <td>Nombre_Cliente</td>\n"; 
echo "        <td>Fecha_Venta</td>\n"; 
echo "        <td>No. de Factura</td>\n";
echo "</tr>\n"; 
echo "\n"; 
echo " <tr>\n"; 


echo "        <td>\n"; 
  echo $idd;
echo "</td>\n"; 


echo "        <td>\n"; 
  echo $reg0['nomc']."<br>";
echo "</td>\n"; 
 
echo "        <td>"; 
echo $reg0['date']."<br>";
echo "        </td>\n"; 


echo "        <td>\n"; 
echo $reg0['idv']."<br>";;
echo "</td>\n";



echo "</tr>\n";
echo "\n"; 
echo "    </table>\n"; 
echo "\n"; 
echo "\n"; 




$var=$reg0['idv'];




$registros2=mysql_query("select * from Client_Art WHERE idVent='$var' ",$conexion) or
  die("Problemas en el select:".mysql_error());
  
echo "    <table border=\"2\">\n"; 
echo "<td>ID_ARTICULO</td>\n"; 
echo "<td>NOMBRE</td>\n"; 
echo "<td>DESCRIPCION</td>\n"; 
echo "<td>PRECIO</td>\n"; 
echo "<td>PROVEEDOR</td>\n";
echo "<td>CANTIDAD</td>\n";
echo "<td>VISTA_PREVIA</td>\n";
echo "<td>SUB_TOTAL</td>\n";
  
  
  while ($reg2=mysql_fetch_array($registros2))
  
 {

 $var2=$reg2['art'];

 
 
 $registros3=mysql_query("select * from articulo WHERE id='$var2' ",$conexion) or
  die("Problemas en el select:".mysql_error());
  
  $reg3=mysql_fetch_array($registros3);
  
  
  
  
  
  
  
echo "      <tr>\n"; 
echo "        <td>\n"; 
  
    echo $reg3['id']."<br>";
echo "</td>\n"; 


echo "        <td>\n"; 
  echo $reg3['nameA']."<br>";
echo "</td>\n";  


echo "        <td>\n"; 
  echo $reg3['desA']."<br>";
echo "</td>\n";  



echo "        <td>\n"; 
  echo $reg3['priceA']."<br>";
echo "</td>\n";  



echo "        <td>\n"; 
  echo $reg3['pro']."<br>";
echo "</td>\n";



echo "        <td>\n"; 
  echo $reg2["cant"]."<br>";
echo "</td>\n";





echo "        <td>\n"; 
$nam=$reg3["image"];
echo "<img src=\"$nam\" width=\"100\" height=\"100\"><br>";
 echo "</td>\n";


echo "        <td>\n"; 
$NUM=$reg3['priceA']*$reg2["cant"];
  echo $NUM."<br>";
echo "</td>\n";

$SUMA+=$NUM;

	}			


echo "      </tr>\n"; 


echo "      <tr>\n"; 

echo "        <td>\n"; 
  echo "---><br>";
echo "</td>\n";

echo "        <td>\n"; 
  echo "---><br>";
echo "</td>\n";

echo "        <td>\n"; 
  echo "---><br>";
echo "</td>\n";

echo "        <td>\n"; 
  echo "---><br>";
echo "</td>\n";

echo "        <td>\n"; 
  echo "---><br>";
echo "</td>\n";

echo "        <td>\n"; 
  echo "---><br>";
echo "</td>\n";


echo "        <td>\n"; 
  echo "TOTAL:<br>";
echo "</td>\n";



echo "        <td>\n"; 
  echo "$".$reg0['valVent'];
echo "</td>\n";


echo "      </tr>\n"; 
echo "    </table>\n";




} 
 
  
  
  


	
	
	}
	
	?>
