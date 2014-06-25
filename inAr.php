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
									<li><a href="ingreso.php">CLIENTES</a><strong></strong></li>
									<li><a href="proveedores.php">PROVEEDORES</a><strong></strong></li>
									<li class="active"><a href="articulos.php">ARTICULOS</a><strong></strong></li>
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

<strong class="title-2">�Tenemos un regalo para ti!</strong>
						</div>
					</article>
					<div class="clear"></div>
				</div>
				<div class="wrapper border-bot2 margin-bot">
					<article class="grid_6 spacer-2">
						<h2 class="indent-bot">MENU ARTICULOS</h2>




<table border="0">

         <!--<a href="conClient.php">Consutar Clientes</a></p>-->
	 <a href="inAr.php">Ingresar Articulo</a></p>
	 <a href="upAr.php">Actualizar Articulo</a></p>
	 <a href="delAr.php">Eliminar Articulo</a></p>






</table>









<br><br><br>



						
					</article>
					<article class="grid_6">
						<div class="indent">
							<h2 class="indent-bot">NUEVO ARTICULO</h2>

							<ul class="list-2">
								
								
	
	
	
	
	<form action="inAr.php" method="post" enctype="multipart/form-data">


    <table border="0">


 <tr>
        <td>Nombre:</td>
        <td><input name="one" type="text"></td>
      </tr>


      <tr>
        <td>Descripcion:</td>
        <td><input name="two" type="text"></td>
      </tr>

      

      <tr>
        <td>Precio:</td>
        <td><input name="three" type="text"></td>
      </tr>




<tr>
        <td>Proveedor:</td>
        <td><input name="four" type="text"></td>
      </tr>


		<td>Stock:</td>
        <td><input name="five" type="text"></td>
		</tr>
      

	  		<td>Imagen:</td>
        <td><input name="six" type="file"></td>
		</tr>

    </table>




<input type="submit" value="Guardar registro" />
</form>
							
							
							
							
							
<?php
//session_start();

mysql_connect('mysql.nixiweb.com','u893654268_3','123456')or die ('Ha fallado la conexi�n: '.mysql_error());
mysql_select_db('u893654268_3')or die ('Error al seleccionar la Base de Datos: '.mysql_error());



	$nom = $_POST["one"];
	$des = $_POST["two"];
	$pre = $_POST["three"];
	$pro = $_POST["four"];
	$sto = $_POST["five"];
	$ima = $_POST["six"];
	// Hay campos en blanco
	if($nom==NULL&&$des==NULL&&$pre==NULL&&$pro==NULL&&$sto==NULL&&$ima==NULL) {
	}else if($nom==NULL|$des==NULL|$pre==NULL|$pro==NULL|$sto==NULL) {
		
echo "<h2> Uno o mas campos estan vacios.</h2>";
		
	}else{
			// Comprobamos si el nombre de usuario o la cuenta de correo ya exist�an
			$checkuser = mysql_query("SELECT * FROM articulo WHERE nameA='$nom'");
			$username_exist = mysql_num_rows($checkuser);

			//$checkemail = mysql_query("SELECT correo FROM paciente WHERE correo='$email'");
			//$email_exist = mysql_num_rows($checkemail);

			if ($username_exist>0) {
				echo "<h2>El articulo ya existe</h2>";
				
			}else{
			
			$nombrefoto=$_FILES['six']['name'];
			$ruta=$_FILES['six']['tmp_name'];
			$destino="images/".$nombrefoto;
			copy($ruta,$destino);

			
			/*copy($_FILES['six']['tmp_name'],$_FILES['six']['name']);
echo "La foto se registro en el servidor.<br>";
$nom2=$_FILES['six']['name'];
echo "<img src=\"$nom2\">";
			*/
			
			
			
				
				
				
				$query = 'INSERT INTO articulo (nameA, desA, priceA, pro, stock, image)
				VALUES (\''.$nom.'\',\''.$des.'\',\''.$pre.'\',\''.$pro.'\',\''.$sto.'\',\''.$destino.'\')';
				mysql_query($query) or die(mysql_error());
				echo 'El articulo '.$nom.' ha sido registrado de manera satisfactoria.<br />';
				
				
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
							<span>Brandon -  &copy; Asociados</span>
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