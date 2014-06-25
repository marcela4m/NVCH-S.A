<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysql_connect("localhost","root","") 
  or die("Problemas en la conexion");
mysql_select_db("base1",$conexion) or
  die("Problemas en la seleccion de la base de datos");
mysql_query("insert into usuario(name,contra,tipo) values 
   ('$_REQUEST[dos]','$_REQUEST[uno]',$_REQUEST[tres])", 
   $conexion) or die("Problemas en el select".mysql_error());
mysql_close($conexion);
echo "INGRESO EXITOSO";
?>
</body>
</html>