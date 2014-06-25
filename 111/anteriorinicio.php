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
	<script src="js/jquery.easing.1.3.js" type="text/javascript"></script> 
	<script src="js/tms-0.3.js" type="text/javascript"></script>
	<script src="js/tms_presets.js" type="text/javascript"></script>  
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
<body id="page1">
	<script type="text/javascript">
		$(function(){
			$('.slider')._TMS({
				duration:800,
				easing:'easeOutQuad',
				preset:'diagonalFade',
				pagination:'.pagination',
				slideshow:7000,
				banners:false,
				pauseOnHover:true
			})
		})
	</script>
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
									<li class="active"><a href="index.php">Home</a><strong></strong></li>
									<li><a href="health.php">QUIENES SOMOS</a><strong></strong></li>
									<li><a href="advices.php">SERVICIO DE CITAS</a><strong></strong></li>
									<li><a href="staff.php">ESPECIALISTAS</a><strong></strong></li>
									<li><a href="news.php">CREDITOS</a><strong></strong></li>
									<li class="last"><a href="contacts.php">CONTACTENOS</a><strong></strong></li>
								</ul>
							</nav>

							<div class="slider-wrapper">
								<div class="slider">
									<ul class="items">
										<li>
											<img src="images/slider-img1.jpg" alt="" />
										</li>
										<li>
											<img src="images/slider-img2.jpg" alt="" />
										</li>
										<li>
											<img src="images/slider-img3.jpg" alt="" />
										</li>
									</ul>
									<ul class="pagination">
										<li><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
									</ul>
								
							</div>
						</div>
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
							<strong class="title-1">&quot;Es importante estar feliz!&quot;</strong>
							<strong class="title-2">Para nosotros es importante que usted cuente con un buen servicio medico.</strong>
						</div>
					</article>
					<div class="clear"></div>
				</div>
				<div class="wrapper border-bot2 margin-bot">
					
					
				</div>
				<div class="wrapper">
					<article class="grid_4">




						




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