<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
	<script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/cufon-replace.js" type="text/javascript"></script>
	<script src="js/Open_Sans_400.font.js" type="text/javascript"></script>
	<script src="js/Open_Sans_italic_400.font.js" type="text/javascript"></script> 
	<script src="js/FF-cash.js" type="text/javascript"></script>	   
	<!--[if lt IE 7]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"  alt="" /></a>
		</div>
	<![endif]-->
	<!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
</head>
<body id="page3">
<!-- header -->
	<header>
		<div class="row-top">
			<div class="main">
				<div class="container_12">
					<div class="wrapper">
						<div class="grid_9">
							<h1>
								<a class="logo" href="index.html">family center</a>
							</h1>  
						</div>
						<div class="grid_3">
							<form id="search-form" method="post" enctype="multipart/form-data">
								<fieldset>	
									<div class="search-field">
										<input name="search" type="text" value="Buscar" onFocus="if(this.value=='Search'){this.value=''}" onBlur="if(this.value==''){this.value='Search'}" />
									</div>
									<a class="search-button" href="#" onClick="document.getElementById('search-form').submit()"><span>search</span></a>							
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row-bot">
			<div class="row-bot-shadow">
				<div class="main">
					<div class="container_12">
						 
							<nav>
								<ul class="menu">
									
									<li class="active"><a href="ingreso.php">CLIENTES</a><strong></strong></li>
									<li><a href="proveedores.php">PROVEEDORES</a><strong></strong></li>
									<li><a href="articulos.php">ARTICULOS</a><strong></strong></li>
									<li><a href="ventas.php">VENTAS</a><strong></strong></li>
									
								</ul>
							</nav>
						
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</header><div class="ic">More Website Templates  @ TemplateMonster.com - August 15th 2011!</div>
<!-- content -->
	<section id="content">
		<div class="main">
			<div class="container_12">
				<div class="border-bot margin-bot">
					<article class="grid_12">
						<div class="aligncenter inner-top">
							<strong class="title-1">NVCH S.A.</strong>

<strong class="title-2">¡Tenemos un regalo para ti!</strong>
						</div>
					</article>
					<div class="clear"></div>
				</div>
				<div class="wrapper border-bot2 margin-bot">
					<article class="grid_6 spacer-2">
						<h2 class="indent-bot">MENU CLIENTES</h2>




<table border="0">
     <!--<a href="conClient.php">Consutar Clientes</a></p>-->
	 <a href="inClient.php">Ingresar Cliente</a></p>
	 <a href="upClient.php">Actualizar Cliente</a></p>
	 <a href="delClient.php">Eliminar Cliente</a></p>






</table>









<br><br><br>



						
					</article>
					<article class="grid_6">
						<div class="indent">
							<h2 class="indent-bot">ACTUALIZAR CLIENTE</h2>

							<ul class="list-2">
								

								

							
							
							
							
							
							<?php
//session_start();

mysql_connect('mysql.nixiweb.com','u893654268_3','123456')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('u893654268_3')or die ('Error al seleccionar la Base de Datos: '.mysql_error());



	$cedula = $_POST["one"];
	$nom = $_POST["two"];
	$dir = $_POST["three"];
	$tel = $_POST["four"];
	// Hay campos en blanco
	if($cedula==NULL) {
	
	
echo "<form action=\"upClient.php\" method=\"post\">\n"; 
echo "\n"; 
echo "\n"; 
echo "    <table border=\"0\">\n"; 
echo "\n"; 
echo "\n"; 
echo " <tr>\n"; 
echo "        <td>Cedula:</td>\n"; 
echo "        <td><input name=\"one\" type=\"text\"></td>\n"; 
echo "      </tr>\n"; 
echo "\n"; 
echo "\n"; 
echo "    </table>\n"; 
echo "\n"; 
echo "\n"; 
echo "<input type=\"submit\" value=\"ACTUALIZAR\" />\n"; 
echo "</form>\n";

	
	}else if($nom!=NULL) {
$query = "Update clientes Set CC='$cedula',nameC='$nom',addressC='$dir',phoneC='$tel' where CC='$cedula'";
				mysql_query($query) or die(mysql_error());
				echo 'El usuario '.$nom.' ha sido actualizado de manera satisfactoria.<br />';
				
				
}else{
	
	// Comprobamos si el nombre de usuario o la cuenta de correo ya existían
			$checkuser = mysql_query("SELECT * FROM clientes WHERE CC='$cedula'");
			$username_exist = mysql_num_rows($checkuser);

			//$checkemail = mysql_query("SELECT correo FROM paciente WHERE correo='$email'");
			//$email_exist = mysql_num_rows($checkemail);

			if ($username_exist==0) {
				echo "<h2>El usuario no existe</h2>";
				
			}else{
				

				
				while ($reg=mysql_fetch_array($checkuser))
{
								
			

			
			
	



echo "<form action=\"upClient.php\" method=\"post\">\n"; 
echo "\n"; 
echo "\n"; 
echo "    <table border=\"0\">\n"; 
echo "\n"; 
echo "\n"; 
echo " <tr>\n"; 
echo "        <td>Cedula:</td>\n"; 
echo "        <td><input type='text' name='one'  value=".$reg["CC"]." ></td>\n"; 
echo "		 \n"; 
echo "      </tr>\n"; 
echo "\n"; 
echo "\n"; 
echo "      <tr>\n"; 
echo "        <td>Nombres y apellidos:</td>\n"; 
echo "        <td><input type='text' name='two'  value=".$reg["nameC"]." ></td>\n";
echo "      </tr>\n"; 
echo "\n"; 
echo "      \n"; 
echo "\n"; 
echo "      <tr>\n"; 
echo "        <td>Direccion:</td>\n"; 
echo "        <td><input type='text' name='three'  value=".$reg["addressC"]." ></td>\n";
echo "      </tr>\n"; 
echo "\n"; 
echo "\n"; 
echo "\n"; 
echo "\n"; 
echo "\n"; 
echo "        <td>Telefono:</td>\n"; 
echo "        <td><input type='text' name='four'  value=".$reg["phoneC"]." ></td>\n";
echo "      </tr>\n"; 
echo "\n"; 
echo "\n"; 
echo "\n"; 
echo "      \n"; 
echo "\n"; 
echo "\n"; 
echo "    </table>\n"; 
echo "\n"; 
echo "\n"; 
echo "\n"; 
echo "\n"; 
echo "<input type=\"submit\" value=\"Actualizar registro\" />\n"; 
echo "</form>\n";
	
			
			
			
			
}

				
				
}
		}
	
	
?>





							</ul>
						</div>
					</article>
				</div>
				<div class="wrapper">
					<article class="grid_6 spacer-2">
						
						<div class="indent-r">
							<div class="wrapper prev-indent-bot">

								
							
					</article>
					<article class="grid_6">
						<div class="indent">
							
							<div class="wrapper prev-indent-bot">
								
								
							
					</article>
				</div>
			</div>
		</div>
	</section>
<!-- footer -->
	<footer>
		<div class="main">
			<div class="container_12">
				<div class="wrapper">
					<div class="grid_4">
						<span class="footer-text">
							<span>Brandon - Pablo &copy; Asociados</span>
Para mas informacion puede llamar al siguiente numero:
						</span>
						<div><!-- {%FOOTER_LINK} --></div>
					</div>
					<div class="grid_4 suffix_1">
						<strong class="support-phone"><strong>+1(800)</strong> 123-1234</strong>
					</div>
					<div class="grid_3">
						<ul class="list-services">
							<li><a class="l-1" href="#"></a></li>
							<li><a class="l-2" href="#"></a></li>
							<li><a class="l-3" href="#"></a></li>
							<li><a class="l-4" href="#"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript"> Cufon.now(); </script>
	
	
	
</body>
</html>