<html>
<head>
<title>Problema</title>
</head>
<body>



<?php
session_start();


echo '<p><a href="logout.php">Logout</a></p>';
echo '<b>'.$_SESSION['k_username'].'</b>.';
$user=$_SESSION['k_username'];
echo $user;
echo $user;
echo $user;
echo $user;



$conexion=mysql_connect("localhost","root","") 
  or die("Problemas en la conexion");
mysql_select_db("base1",$conexion) or
  die("Problemas en la seleccion de la base de datos");




$pepe=mysql_query("select fechav from disponibles  WHERE doctor='$_REQUEST[uno]' AND fechai='$_REQUEST[tres]'",$conexion) or
  die("Problemas en el select:".mysql_error());

$reg=mysql_fetch_array($pepe);

echo "Este essssssssssssssss:";
echo $reg['fechav'];
$fe=$reg['fechav'];
echo "otroooooooooolo de:";
echo $fe;
echo $user;




mysql_query("insert into nodisponibles(user,doc,esp,fechai,fechav) values 
   ('$user','$_REQUEST[uno]','$_REQUEST[dos]','$_REQUEST[tres]','$fe')", 
   $conexion) or die("Problemas en el select".mysql_error());

echo "otroooooooooo222222:";
echo $fe;

mysql_close($conexion);
echo "INGRESO EXITOSO";
header ("Location: clientes.php");


?>
</body>
</html>