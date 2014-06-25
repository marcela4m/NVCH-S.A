<?php
//$idd=null;
//setcookie("user","$idd",time()+60*60*24*365,"/");


$var1 = $_POST["uno"];
$var2=$_POST["dos"];
$var3=$_COOKIE[user];
/*echo "La cookie esssssssssssssssssssssssss:";
echo $var1;
echo $var2;
echo $var3;
*/

$conexion=mysql_connect("mysql.nixiweb.com","u893654268_3","123456") 
  or  die("Problemas en la conexion");
  
  mysql_select_db("u893654268_3",$conexion) 
  or  die("Problemas en la selección de la base de datos");

/*
$registros2=mysql_query("select * from Client_Art WHERE idVent='$var2' AND art='$var' ",$conexion) or
  die("Problemas en el select:".mysql_error());
  

  
  
  while ($reg2=mysql_fetch_array($registros2))
  
 {

 $var3=$reg2['cant'];
 echo "<br>esteeeee  :";
 echo $var3;
}
  */
  
  
  
  				
				$regist=mysql_query("select * from articulo WHERE id='$var1' ",$conexion) or
  die("Problemas en el select:".mysql_error());
  
  
  $menos=$var2-1;
  $res=mysql_fetch_array($regist);
  
				$cannty=$res["stock"]-$menos;
  
  
  if($res["stock"]<$menos){
  
  echo "La cantidad  ingresada es mayor al Stock del producto<br>";
  echo "<a href=\"ventas2.php\">Regresar</a>\n";
  }else{
  
  $query = "Update Client_Art Set cant='$var2' WHERE idVent='$var3' AND art='$var1'";
				mysql_query($query) or die(mysql_error());
				echo 'El usuario  ha sido actualizado de manera satisfactoria.<br />';
				
				
				
				
				
				

 echo "esteeeeeeeeeeeeee  :";
 echo $cannty;
 
				
				$query2 = "Update articulo Set stock='$cannty' WHERE id='$var1' ";
				mysql_query($query2) or die(mysql_error());
				
				
  
header('Location:ventas2.php');
}
?>