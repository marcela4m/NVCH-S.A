<?php

if($arti==NULL) {




echo "A continuacion agrege los articulos que desea comprar el cliente:	"; 

echo "<form method=\"post\" action=\"con_Art.php\" TARGET=\"_parent\">\n"; 
echo "\n"; 
echo "<input type=\"submit\" name=\"mail\" value=\"Consultar Articulos\" />\n"; 
echo "\n"; 
echo "</form>\n";

$var=$_COOKIE[user];


$registros2=mysql_query("select * from Client_Art WHERE client='$var' ",$conexion) or
  die("Problemas en el select:".mysql_error());
  
  
  while ($reg2=mysql_fetch_array($registros2))
  
 {

 $var2=$reg2['art'];
 //echo "esteeeee  :";
 //echo $var2;
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
//  echo $reg['stock']."<br>";
echo "<input type='text' name='four'  value='1' >";
echo "</td>\n";





echo "        <td>\n"; 
$nam=$reg3["image"];
echo "<img src=\"$nam\" width=\"100\" height=\"100\"><br>";
 // echo $reg['image']."<br>";
echo "</td>\n";






	}			


echo "      </tr>\n"; 
echo "    </table>\n";






}else  if($art!=NULL) {




$conexion=mysql_connect("mysql.nixiweb.com","u893654268_3","123456") 
  or  die("Problemas en la conexion");

mysql_select_db("u893654268_3",$conexion) 
  or  die("Problemas en la selección de la base de datos");

$registros=mysql_query("select * from articulo  ",$conexion) or
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
//$var=$reg['art'];
//WHERE client='$idd2'




  if (isset($_REQUEST[$reg['id']]))
  {
    
  
$query = 'INSERT INTO Client_Art (client, art)
				VALUES (\''.$_COOKIE[user].'\',\''.$reg['id'].'\')';
				mysql_query($query) or die(mysql_error());
				
				
				
				
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
//  echo $reg['stock']."<br>";
echo "<input type='text' name='four'  value='1' >";
echo "</td>\n";





echo "        <td>\n"; 
$nam=$reg3["image"];
echo "<img src=\"$nam\" width=\"100\" height=\"100\"><br>";
 // echo $reg['image']."<br>";
echo "</td>\n";




}


}
echo "      </tr>\n"; 
echo "    </table>\n";



}

?>


	


	

	
	
	

