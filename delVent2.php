							
							<?php
//session_start();


$conexion=mysql_connect('mysql.nixiweb.com','u893654268_3','123456')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('u893654268_3')or die ('Error al seleccionar la Base de Datos: '.mysql_error());



	$cedula = $_POST["client"];
	
	
	// Hay campos en blanco
	 if($cedula==NULL) {
		
//echo "<h2> ingrese la cedula.</h2>";
		
	}else{
			// Comprobamos si el nombre de usuario o la cuenta de correo ya existían
			$checkuser = mysql_query("SELECT * FROM ventas WHERE idv='$cedula'");
			$username_exist = mysql_num_rows($checkuser);

			//$checkemail = mysql_query("SELECT correo FROM paciente WHERE correo='$email'");
			//$email_exist = mysql_num_rows($checkemail);

			if ($username_exist==0) {
				echo "<h2>La venta no se ha registrado aun o ya se elimino</h2>";
				
			}else{
							
				$query = "DELETE FROM ventas WHERE idv='$cedula'";
				mysql_query($query) or die("Problemas en el select1:".mysql_error());
				
				

  /*
  $query2 = "select * from Client_Art WHERE idVent='$cedula' ";
				mysql_query($query2) or die("Problemas en el select2:".mysql_error());
  */
  
  
 



$query2=mysql_query("select * from Client_Art WHERE idVent='$cedula' ",$conexion) or
  die("Problemas en el select:".mysql_error());
  
  //($reg4=mysql_fetch_array($registros4))
  while($res=mysql_fetch_array($query2))
  {
  $arti=$res['art'];
  
  
  $query3=mysql_query("select * from articulo WHERE id='$arti'  ",$conexion) or
  die("Problemas en el select:".mysql_error());
  
  ;
				$res2=mysql_fetch_array($query3);
				$stoo=$res2['stock'];
				$new=$stoo+$res['cant'];
  $query4 = "Update articulo Set stock='$new' WHERE id='$arti' ";
				mysql_query($query4) or die("Problemas en el select3:".mysql_error());
  
  }
				
				$query = "DELETE FROM Client_Art WHERE idVent='$cedula'";
				mysql_query($query) or die("Problemas en el select:5".mysql_error());
				
				echo 'La venta ha sido eliminada de manera satisfactoria.<br />';
				header('Location:delVent.php');
				
			}
		}
	
	
?>