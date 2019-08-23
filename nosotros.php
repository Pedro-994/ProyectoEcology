<?php
 include("database.php");
 include("include/header.php");

?>
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
	<!-- footer -->
	<?php
	include('include/footer.php');
	?>
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