<?php
$idd=null;
//setcookie("user","$idd",time()+60*60*24*365,"/");


$var = $_POST["total"];
$var2=$_COOKIE[user];
echo "La cookie esssssssssssssssssssssssss:";
echo $var2;


$conexion=mysql_connect("mysql.nixiweb.com","u893654268_3","123456") 
  or  die("Problemas en la conexion");

mysql_select_db("u893654268_3",$conexion) 
  or  die("Problemas en la selección de la base de datos");


  
$query = "Update ventas Set valVent='$var' where idv='$var2'";
				mysql_query($query) or die(mysql_error());
				echo 'El usuario '.$nom.' ha sido actualizado de manera satisfactoria.<br />';

setcookie("user","$idd",time()+60*60*24*365,"/");
header('Location:ventas.php');
?>