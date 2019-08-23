<?php
 include("database.php");
 include("include/header.php");

?>
	<!-- banner -->
	<div class="banner banner10">
		<div class="container">
			<h2>Contactanos</h2>
		</div>
	</div>
	<!-- //banner -->    
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio</a> <i>/</i></li>
				<li>Contactanos</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 
	<!-- mail -->
	<div class="mail">
		<div class="container">
			<h3>Envianos un Correo</h3>
			<div class="agile_mail_grids">
				<div class="col-md-5 contact-left">
					<h4>Direccion</h4>
					<p>Santa Maria Atarasquillo
						<span>EDO.Mexico</span></p>
					<ul>
						<li>Telefono :7291258310</li>
						<li><a href="mailto:Ecology.computer@gmail.com">Ecology.computer@gmail.com</a></li>
					</ul>
				</div>
				<div class="col-md-7 contact-left">
					<h4>Formulario De Mensaje</h4>
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Nombre" required="">
						<input type="email" name="Email" placeholder="Correo" required="">
						<input type="text" name="Telephone" placeholder="Telefono" required="">
						<textarea name="message" placeholder="Mensaje..." required=""></textarea>
						<input type="submit" value="Enviar" >
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>

			<div class="contact-bottom">
			</div>
		</div>
	</div>
	<!-- //mail -->

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