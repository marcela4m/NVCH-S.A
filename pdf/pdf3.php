<?php
require_once('class.ezpdf.php');
 
 	$bd_host = "mysql.nixiweb.com"; 
	$bd_usuario = "u893654268_3"; 
	$bd_password = "123456"; 
	$bd_base = "u893654268_3"; 
	$con = mysql_connect($bd_host, $bd_usuario, $bd_password) or die("Error con la conexión"); 
	mysql_select_db($bd_base, $con) or die("Error al seleccionar db");
	
	
	$resSql=mysql_query("select * from articulo",$con) or die("<br>Error consulta</br>".mysql_error());
	
$pdf = new Cezpdf('A4');
$pdf->selectFont('fonts/Helvetica.afm');
	
	while($row=mysql_fetch_row($resSql)){
		$data[]=array('ID_ARTICULO'=>$row[0], 'NOMBRE'=>$row[1],'DESCRIPCION'=>$row[2],'PRECIO'=>$row[3],'PROVEEDOR'=>$row[4],'STOCK'=>$row[5]);
	}
	$titles=array('Depto'=>'Depto', 'num_tickets'=>'Tickets','abiertos'=>'abiertos','cerrados'=>'cerrados');
	/*
$data[] = array('pais'=>'Peru', 'capital'=>'Lima');
$data[] = array('pais'=>'Colombia', 'capital'=>'Bogota');
$data[] = array('pais'=>'Chile', 'capital'=>'Santiago de Chile');
$data[] = array('pais'=>'Brasil', 'capital'=>'Brasilia');
$data[] = array('pais'=>'Ecuador', 'capital'=>'Quito');
$data[] = array('pais'=>'Bolivia', 'capital'=>'La Paz');
$data[] = array('pais'=>'Argentina', 'capital'=>'Buenos Aires');
$data[] = array('pais'=>'Guyana', 'capital'=>'Georgetown');
$data[] = array('pais'=>'Surinam', 'capital'=>'Paramaribo');
$data[] = array('pais'=>'Uruguay', 'capital'=>'Montevideo');
$data[] = array('pais'=>'Paraguay', 'capital'=>'Asuncion');
$data[] = array('pais'=>'Venezuela', 'capital'=>'Caracas');
 
$titles = array('pais'=>'<b>Pais</b>', 'capital'=>'<b>Capital</b>');*/
 
$pdf->ezTable($data);
$pdf->ezStream();
?>