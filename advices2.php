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
									<li><a href="index2.php">Home</a><strong></strong></li>
									<li><a href="health.php">QUIENES SOMOS</a><strong></strong></li>
									<li class="active"><a href="advices.php">INICIAR SESION</a><strong></strong></li>
									<li><a href="staff.php">ESPECIALISTAS</a><strong></strong></li>
									<li><a href="news.php">CREDITOS</a><strong></strong></li>
									<li><a href="contacts.php">CONTACTENOS</a><strong></strong></li>
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
							<strong class="title-1">¡Bienvenido!</strong>

<strong class="title-2">Con el nuevo </strong>
						</div>
					</article>
					<div class="clear"></div>
				</div>
				<div class="wrapper border-bot2 margin-bot">
					<article class="grid_6 spacer-2">
						<h2 class="indent-bot">INICIAR SESION</h2>









<form action="validar_usuario.php" method="post">


<table border="0">
      <tr>
        <td>Usuario:</td>
        <td><input name="user" type="text"></td>
      </tr>


      <tr>
        <td>Contrase&ntilde;a:</td>
        <td><input name="cla" type="password"></td>
      </tr>



      <tr>
        <td>Iniciar como:</td>
        <td>
<select name="tipo">
<option selected="selected" value="1">Aminisrador</option>
<option value="2">Cliente</option>
</select>
	</td>
      </tr>


</table>






<input type="submit" value="Ingresar">
<a href="advices2.php" target="_self"> <input type="button" name="boton" value="Registrarse" /> </a>


</form>
<br><br><br>



						
					</article>
					<article class="grid_6">
						<div class="indent">
							<h2 class="indent-bot">Registre sus datos:</h2>

<!--<p align="center">-->
							<ul class="list-2" >
								







 

 

 

 

 

 

 

 

 

 

 

 
<?php
session_start();

mysql_connect('u893654268_3','u893654268_3','123456')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('u893654268_3')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
function formRegistro(){
?>




<form action="advices2.php" method="post">
 

 


<form action="advices.php" method="post">


    <table border="0">

      <tr>
        <td>Nombre de usuario:</td>
        <td><input name="username" type="text"></td>
      </tr>


 <tr>
        <td>Contrase&ntilde;a:</td>
        <td><input name="password" type="password"></td>
      </tr>

      <tr>
        <td>Repetir contrase&ntilde;a:</td>
        <td><input name="password2" type="password"></td>
      </tr>

 <tr>




      <tr>
        <td>Nombres:</td>
        <td><input name="" type="text"></td>
      </tr>

      <tr>
        <td>Apellidos:</td>
        <td><input name="" type="text"></td>
      </tr>

     
 <tr>
        <td>Cedula:</td>
        <td><input name="" type="text"></td>
      </tr>



 <tr>
        <td>Eps:</td>
        <td><input name="" type="text"></td>
      </tr>


        <td>Correo electronico:</td>
        <td><input name="email" type="text"></td>
      </tr>

      <tr>
        <td>Telefono:</td>
        <td><input name="" type="text"></td>
      </tr>

 <tr>
        <td>Direccion:</td>
        <td><input name="" type="text"></td>
      </tr>

      <tr>
        <td>Localidad:</td>
        <td><input name="" type="text"></td>
      </tr>

 <tr>
        <td>Estrato:</td>
        <td><input name="" type="text"></td>
      </tr>

      <tr>
        <td>Sexo:</td>
        <td><input name="" type="text"></td>
      </tr>

 <tr>
        <td>RH:</td>
        <td><input name="" type="text"></td>
      </tr>

      <tr>
        <td>Fecha de nacimiento:</td>
        <td><input name="" type="text"></td>
      </tr>

 <tr>
        <td>Fecha de afiliacion:</td>
        <td><input name="" type="text"></td>
      </tr>



    </table>




<input type="submit" value="Guardar registro" />
</form>
<?php
}
if (isset($_POST["username"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$password2 = $_POST["password2"];
	$email = $_POST["email"];
	// Hay campos en blanco
	if($username==NULL|$password==NULL|$password2==NULL|$email==NULL) {
		
echo "<h2> Uno o mas campos estan vacios.</h2>";
		formRegistro();
	}else{
		// ¿Coinciden las contraseñas?
		if($password!=$password2) {
			echo "<h2>Las contraseñas no coinciden</h2>";
			formRegistro();
		}else{
			// Comprobamos si el nombre de usuario o la cuenta de correo ya existían
			$checkuser = mysql_query("SELECT * FROM paciente WHERE nom='$username'");
			$username_exist = mysql_num_rows($checkuser);

			$checkemail = mysql_query("SELECT correo FROM paciente WHERE correo='$email'");
			$email_exist = mysql_num_rows($checkemail);

			if ($email_exist>0|$username_exist>0) {
				echo "<h2>El nombre de usuario o la cuenta de correo estan ya en uso</h2>";
				formRegistro();
			}else{
				$query = 'INSERT INTO paciente (nom, con, correo, fecha)
				VALUES (\''.$username.'\',\''.$password.'\',\''.$email.'\',\''.date("Y-m-d").'\')';
				mysql_query($query) or die(mysql_error());
				echo 'El usuario '.$username.' ha sido registrado de manera satisfactoria.<br />';
				echo 'Ahora puede entrar ingresando su usuario y su password <br />';
				?>


				<?php
			}
		}
	}
}else{
	formRegistro();
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