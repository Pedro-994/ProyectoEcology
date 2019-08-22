<?php
 include("database.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Ecology Computer</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"></script> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
</head> 
<body> 
	<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModalLabel">No esperes inicia sesion ahora!</h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">	
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<ul>
										<li class="resp-tab-item" aria-controls="tab_item-0"><span>Inicia sesion</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-1"><span>Registrate</span></li>
									</ul>		
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="register">
												<form action="#" method="post">			
													<input name="Email" placeholder="Correo electronico" type="text" required="">						
													<input name="Password" placeholder="Contraseña" type="password" required="">										
													<div class="sign-up">
														<input type="submit" value="Inicia Secion"/>
													</div>
												</form>
											</div>
										</div> 
									</div>	 
									<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<div class="register">
												<form action="#" method="post">			
													<input placeholder="Nombre" name="Name" type="text" required="">
													<input placeholder="Correo" name="Email" type="email" required="">	
													<input placeholder="Contraseña" name="Password" type="password" required="">	
													<input placeholder="Confirma la contraseña" name="Password" type="password" required="">
													<div class="sign-up">
														<input type="submit" value="Crear Cuenta"/>
													</div>
												</form>
											</div>
										</div>
									</div> 			        					            	      
								</div>	
							</div>
							<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default',            
										width: 'auto', 
										fit: true   
									});
								});
							</script>
							<div id="OR" class="hidden-xs">O</div>
						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<div class="row text-center sign-with">
								<div class="col-md-12">
									<h3 class="other-nw">Inicia Sesion Con:</h3>
								</div>
								<div class="col-md-12">
									<ul class="social">
										<li class="social_facebook"><a href="https://www.facebook.com/" class="entypo-facebook"></a></li>
										<li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
										<li class="social_twitter"><a href="https://twitter.com/login?lang=es" class="entypo-twitter"></a></li>
										<li class="social_behance"><a href="#" class="entypo-behance"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- header modal -->
	<!-- header -->
	<div class="header" id="home1">
		<div class="container">
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
			</div>
			<div class="w3l_logo">
				<h1><a href="index.html">Ecology Computer<span>El mejor alquiler de computadoras</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Buscar...">
						<input type="submit" value="Bus">
					</form>
				</div>
			</div>
			<div class="cart cart box_1"> 
				<form action="#" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="display" value="1" />
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>   
			</div>  
		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Inicio</a></li>	
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle act" data-toggle="dropdown" >Productos <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Computadoras</h6>
											<li><a href="products.php">HP</a></li>
											<li><a href="products.php">DELL <span>Nuevo</span></a></li> 
											<li><a href="products.php">LENOVO</a></li>
											<li><a href="products.php">ACER<span>Nuevo</span></a></li>
										</ul>
									</div>
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Accesorios</h6>
											<li><a href="products1.php">Mouse</a></li>
											<li><a href="products1.php">Teclados</a></li>
											<li><a href="products1.php">Bocinas <span>Nuevo</span></a></li>
											<li><a href="products1.php"><i>Mas</i></a></li>
										</ul>
									</div>
									<div class="col-sm-4">
										<div class="w3ls_products_pos">
											<h4>30%<i>Descuento</i></h4>
											<img src="IMG/ofer.jpg" alt=" " class="img-responsive" />
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						<li><a href="about.php">Sobre Nosotros</a></li> 
						</li>  
						<li><a href="mail.php">Contactanos</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner banner1">
		<div class="container">
			<h2>Descubre nuestras <span>Computadoras</span> Con <i>35% Descuento</i></h2> 
		</div>
	</div> 
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio</a> <i>/</i></li>
				<li>Productos</li>
			</ul>
		</div>
	<!-- //breadcrumbs --> 
	<!-- about -->
	<div class="about">
		<div class="container">	
			<div class="w3ls_about_grids">
				<div class="col-md-6 w3ls_about_grid_left">
					<p>Nosotros somos una empresa que se dedica al alquiler de computadoras reutilizadas para poder ayudar a la naturaleza evitando mas contaminacion y ademas ayudando a las personas que no pueden comprar una latop y la necesitan aqui con todo gusto se las prestamos.</p>
					<div class="col-xs-2 w3ls_about_grid_left1">
						<span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 w3ls_about_grid_left2">
						<p>Vision:Ecology Computer es una empresa dedicada a cubrir os requerimientos de estudiantes y usuarios en general utilizando la inovacion en nuestro servicio y dedicada a contribuir a el beneficio del medio ambiente para poder posicionarse como una empresa lider en el mercado.</p>
					</div>
					<div class="clearfix"> </div>
					<div class="col-xs-2 w3ls_about_grid_left1">
						<span class="glyphicon glyphicon-flash" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 w3ls_about_grid_left2">
						<p>Mision: Ofrecer a los usuarios por parte de nuestra empresa un buen servicio de calidad para que los usuarios tengan una experiencia confiables con el equipo que usa y asi mismo contribuir con la tecnologia y el reciclaje.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 w3ls_about_grid_right">
					<img src="images/52.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about --> 
	<!-- team -->
	<div class="team">
		<div class="container">
			<h3>Conozca A Nuestro Equipo</h3>
			<div class="wthree_team_grids">
				<div class="col-md-3 wthree_team_grid">
					<img src="images/fani.png" alt=" " class="img-responsive" />
					<h4>Fany Uribe <span>Directora</span></h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 wthree_team_grid">
					<img src="images/miri.png" alt=" " class="img-responsive" />
					<h4>Miriam Rosales <span>Programador</span></h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 wthree_team_grid">
					<img src="images/fabiola.png" alt=" " class="img-responsive" />
					<h4>Fabiola Martinez <span>Programador</span></h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 wthree_team_grid">
					<img src="images/eco.png" alt=" " class="img-responsive" />
					<h4>Ecology Computer <span>Empresa</span></h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
				<p>Nuestro equipo es el mejor en este tipo de temas siempre pensando en ayudar a las personas y a la naturaleza para un futuro mejor.</p>
			</div>
		</div>
	</div>
	<!-- //team -->
	<!-- team-bottom -->
	<div class="team-bottom">
		<div class="container">
			<h3>Estas listo para el futuro? Entra <span>30% Descuento </span>En Computadoras</h3>
			<p>Si estas listo entra para poder encontrar la computadora que nesecitas.</p>
			<a href="products.html">Productos</a>
		</div>
	</div>
	<!-- //team-bottom -->
	<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Hoja Informativa</h3>
				<p>Mandanos tu opinion.</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Correo" required="">
					<input type="submit" value="" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //newsletter -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contacto</h3>
					<p>Contactanos para cualquier duda o sugerencia de la pagina.</p>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Santa Maria Atarasquillo, <span>Lerma EDO.Mexico.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:Ecology.computer@gmail.com"></a>Ecology.computer@gmail.com</li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>7291258310</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Paginas</h3>
					<ul class="info"> 
						<li><a href="about.html">Sobre nosotros</a></li>
						<li><a href="mail.html">Contactanos</a></li>
						<li><a href="codes.html">Productos</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Marcas</h3>
					<ul class="info"> 
						<li><a href="products.html">HP</a></li>
						<li><a href="products1.html">LENOVO</a></li>
						<li><a href="products.html">DELL</a></li>
						<li><a href="products1.html">ACER</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h4>Redes Sociales</h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
				</div>
			</div>
			<div class="container">
				<p>&copy; 2019 Ecology Computer | Diseñado por <a href="">Ecology Computer.</a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->  
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  
	<!-- //cart-js --> 
</body>
</html>