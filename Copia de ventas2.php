<html>
<head>
<title>Problema</title>
</head>
<body>

<?php


  
  
//session_start();

//mysql_connect('mysql.nixiweb.com','u893654268_3','123456')or die ('Ha fallado la conexi�n: '.mysql_error());
//mysql_select_db('u893654268_3')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
$conexion=mysql_connect("mysql.nixiweb.com","u893654268_3","123456") 
  or  die("Problemas en la conexion");

mysql_select_db("u893654268_3",$conexion) 
  or  die("Problemas en la selecci�n de la base de datos");


	$idd = $_POST["one"];
	$arti = $_POST["two"];
	
//	echo "Esteeeee:";
//	echo $idd;
	
	// Hay campos en blanco
	if($idd!=NULL){
	echo "oneeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee";
	}
	if($arti!=NULL){
	echo "twoooooooooooooooooooooooooooooooooooooooooooooooooo";
	}


	if($idd==NULL) {
	
	
echo "A continuacion seleccione el cliente:	"; 

echo "<form method=\"post\" action=\"con_Clientes.php\" TARGET=\"_parent\">\n"; 
echo "\n"; 
echo "<input type=\"submit\" name=\"mail\" value=\"Consultar cliente\" />\n"; 
echo "\n"; 
echo "</form>\n";



	$idd2=$_COOKIE[user];
	$registros=mysql_query("SELECT * FROM ventas WHERE idv='$idd2'") or
  die("Problemas en el select:".mysql_error());
  $reg=mysql_fetch_array($registros);
	$id3=$reg['idc'];
	
	
	$registros=mysql_query("SELECT * FROM clientes WHERE CC='$id3'") or
  die("Problemas en el select:".mysql_error());
  $reg=mysql_fetch_array($registros);
  
  

echo "\n"; 
echo "    <table border=\"1\">\n"; 
echo "\n"; 
echo "\n"; 
echo " <tr>\n"; 
echo "        <td>ID_Cliente</td>\n"; 
echo "        <td>Nombre_Cliente</td>\n"; 
echo "        <td>Fecha_Venta</td>\n"; 
echo "</tr>\n"; 
echo "\n"; 
echo " <tr>\n"; 


echo "        <td>\n"; 
  echo $reg['CC'];
echo "</td>\n"; 


echo "        <td>\n"; 
  echo $reg['nameC']."<br>";
echo "</td>\n"; 
 
echo "        <td>"; 
echo date("Y-m-d");
echo "        </td>\n"; 
echo "</tr>\n";
echo "\n"; 
echo "    </table>\n"; 
echo "\n"; 
echo "\n"; 

	
	}else if($idd!=NULL) {
//	setcookie("user","$idd",time()+60*60*24*365,"/");
 // echo "cookie creadaaaaa";
 // echo $_COOKIE[user];
 
 
 	$registros=mysql_query("SELECT * FROM clientes WHERE CC='$idd'") or
  die("Problemas en el select:".mysql_error());
  $reg=mysql_fetch_array($registros);
  
  

echo "\n"; 
echo "    <table border=\"1\">\n"; 
echo "\n"; 
echo "\n"; 
echo " <tr>\n"; 
echo "        <td>ID_Cliente</td>\n"; 
echo "        <td>Nombre_Cliente</td>\n"; 
echo "        <td>Fecha_Venta</td>\n"; 
echo "</tr>\n"; 
echo "\n"; 
echo " <tr>\n"; 


echo "        <td>\n"; 
  echo $reg['CC'];
echo "</td>\n"; 


echo "        <td>\n"; 
  echo $reg['nameC']."<br>";
echo "</td>\n"; 
 
echo "        <td>"; 
echo date("Y-m-d");
echo "        </td>\n"; 
echo "</tr>\n";
echo "\n"; 
echo "    </table>\n"; 
echo "\n"; 
echo "\n"; 



$query = 'INSERT INTO ventas (idc, nomc, date)
				VALUES (\''.$reg['CC'].'\',\''.$reg['nameC'].'\',\''.date("Y-m-d").'\')';
				mysql_query($query) or die(mysql_error());
				//echo 'El usuario '.$nom.' ha sido registrado de manera satisfactoria.<br />';
				$query2 = "SELECT LAST_INSERT_ID() FROM ventas";
$last_id = mysql_result( mysql_query( $query2 ), 0, 0 );


setcookie("user","$last_id",time()+60*60*24*365,"/");
			
echo "El ultimo fueeeeeeeeeeeeeeeeeeeeeeeeeeeeee:::::::::".$last_id;		
}








	
	
	
	
	if($arti==NULL) {




echo "A continuacion agrege los articulos que desea comprar el cliente:	"; 

echo "<form method=\"post\" action=\"con_Art.php\" TARGET=\"_parent\">\n"; 
echo "\n"; 
echo "<input type=\"submit\" name=\"mail\" value=\"Consultar Articulos\" />\n"; 
echo "\n"; 
echo "</form>\n";

$var=$_COOKIE[user];

//$registros2=mysql_query("select * from Client_Art WHERE client='$var' ",$conexion) or
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






}else  if($arti!=NULL) {

//echo "El ultimo fueeeeeeeeeeeeeeeeeeeeeeeeeeeeee:::::::::".$last_id;


$conexion=mysql_connect("mysql.nixiweb.com","u893654268_3","123456") 
  or  die("Problemas en la conexion");

mysql_select_db("u893654268_3",$conexion) 
  or  die("Problemas en la selecci�n de la base de datos");

$registros4=mysql_query("select * from articulo  ",$conexion) or
  die("Problemas en el select:".mysql_error());

 
while ($reg4=mysql_fetch_array($registros4))
{
//$var=$reg['art'];
//WHERE client='$idd2'

//echo"nooo ENTROOOOOOOOO";
echo $reg4['id'];
echo "-----------";
echo $_REQUEST['two'];
//if (isset($_REQUEST['two']==$reg4['id']))
  if (isset($_REQUEST[$reg4['id']]))
  {
    echo"ENTROOOOOOOOOOOOOOOOOOOOOOOO";
  
$query = 'INSERT INTO Client_Art (idVent, art)
				VALUES (\''.$_COOKIE[user].'\',\''.$reg4['id'].'\')';
				mysql_query($query) or die(mysql_error());
	
}


}
//aaqqqqqqqqqqqqqqqqqqqqqqqqqq




$var=$_COOKIE[user];


$registros5=mysql_query("select * from Client_Art WHERE idVent='$var' ",$conexion) or
  die("Problemas en el select:".mysql_error());
  
echo "    <table border=\"2\">\n"; 
echo "<td>ID_ARTICULO</td>\n"; 
echo "<td>NOMBRE</td>\n"; 
echo "<td>DESCRIPCION</td>\n"; 
echo "<td>PRECIO</td>\n"; 
echo "<td>PROVEEDOR</td>\n";
echo "<td>CANTIDAD</td>\n";
echo "<td>VISTA_PREVIA</td>\n";
  
  
  while ($reg2=mysql_fetch_array($registros5))
  
 {

 $var2=$reg2['art'];
 //echo "esteeeee  :";
 //echo $var2;
 $registros6=mysql_query("select * from articulo WHERE id='$var2' ",$conexion) or
  die("Problemas en el select:".mysql_error());
  
  $reg3=mysql_fetch_array($registros6);
  
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


}






	
	
?>


</body>
</html>