<?php
session_start();

//datos para establecer la conexion con la base de mysql.
mysql_connect('localhost','root','')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('base1')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
function quitar($mensaje)
{
	$nopermitidos = array("'",'\\','<','>',"\"");
	$mensaje = str_replace($nopermitidos, "", $mensaje);
	return $mensaje;
}

if(trim($_POST["user"]) != "" && trim($_POST["cla"]) != "")
{
	
	
	
	
	$usuario = strtolower(htmlentities($_POST["user"], ENT_QUOTES));
	$password = $_POST["cla"];
	$result = mysql_query('SELECT * FROM paciente WHERE nom=\''.$usuario.'\'');
	if($row = mysql_fetch_array($result)){
		if($row["con"] == $password){
			$_SESSION["k_username"] = $row['nom'];
			echo 'Has sido logueado correctamente '.$_SESSION['k_username'].' <p>';
			echo '<a href="index2.php">Index</a></p>';
			
header ("Location: index2.php");


		}else{
			echo 'Password incorrecto';
		}
	}else{
		echo 'Usuario no existente en la base de datos';
	}
	mysql_free_result($result);

}else{
echo 'Debe especificar un usuario y password';
}
mysql_close();
?>