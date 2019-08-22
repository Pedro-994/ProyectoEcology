<?php
	include('include/header.php');
	include('funciones/funcion.php');
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
			<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio</a>
				<i>/</i></li>
			<li>Productos</li>
		</ul>
	</div>
</div>
<div class="mobiles">
	<div class="container">
		<div class="w3ls_mobiles_grids">
			<div class="col-md-4 w3ls_mobiles_grid_left">
				<div class="w3ls_mobiles_grid_left_grid">
					<h3>Categorias</h3>
					<div class="w3ls_mobiles_grid_left_grid_sub">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title asd">
										<a class="pa_italic" role="button" data-toggle="collapse"
											data-parent="#accordion" href="#collapseOne" aria-expanded="true"
											aria-controls="collapseOne">
											<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
												class="glyphicon glyphicon-minus" aria-hidden="true"></i>Marcas
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
									aria-labelledby="headingOne">
									<div class="panel-body panel_text">
										<ul>
											<li><a href="products.php">HP</a></li>
											<li><a href="products1.php">LENOVO</a></li>
											<li><a href="products2.php">DELL</a></li>
											<li><a href="products.php">ACER</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title asd">
										<a class="pa_italic collapsed" role="button" data-toggle="collapse"
											data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
											aria-controls="collapseTwo">
											<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
												class="glyphicon glyphicon-minus" aria-hidden="true"></i>
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
									aria-labelledby="headingTwo">
									<div class="panel-body panel_text">
										<ul>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<ul class="panel_bottom">
						</ul>
					</div>
				</div>

				<div class="w3ls_mobiles_grid_left_grid">
					<h3>Precio</h3>
					<div class="w3ls_mobiles_grid_left_grid_sub">
						<div class="ecommerce_color ecommerce_size">
							<ul>
								<li><a href="#">Menor percio $ 100</a></li>
								<li><a href="#">$ 100-500</a></li>
								<li><a href="#">$ 1k-10k</a></li>
								<li><a href="#">$ 10k-20k</a></li>
								<li><a href="#">$ Mayor precio 20k</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 w3ls_mobiles_grid_right_left">
				<div class="w3ls_mobiles_grid_right_grid1">
					<img src="IMG/47.jpg" alt=" " class="img-responsive" />
					<div class="w3ls_mobiles_grid_right_grid1_pos">
						<h3>Top 10 Marcas<span>PC </span>& Laptops</h3>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>

			<div class="w3ls_mobiles_grid_right_grid2">
				<div class="w3ls_mobiles_grid_right_grid2_left">
					<h3>Mostrar Resultados: 0-1</h3>
				</div>
				<div class="w3ls_mobiles_grid_right_grid2_right">
					<select name="select_item" class="select_item">
						<option selected="selected">Clasificado por:</option>
						<option>HP</option>
						<option>LENOVO</option>
						<option>DELL</option>
						<option>ACER</option>
					</select>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3ls_mobiles_grid_right_grid3">  
					<?php
						getPro();
					?>

			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
</div>
<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true">&times;</span></button>
			</div>
			<section>
				<div class="modal-body">
					<div class="col-md-5 modal_body_left">
						<img src="IMG/<?php echo $img; ?>" alt=" " class="img-responsive" />
					</div>
					<div class="col-md-7 modal_body_right">
						<h4>Laptop DELL 201 </h4>
						<p>Esta es una opcion para todos y muy economica su renta.</p>
						<div class="rating">
							<div class="rating-left">
								<img src="IMG/star-.png" alt=" " class="img-responsive" />
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="modal_body_right_cart simpleCart_shelfItem">
							<p><span>$250</span> <i class="item_price">$245</i></p>
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="add" value="1" />
								<input type="hidden" name="w3ls_item" value="Laptop DELL201" />
								<input type="hidden" name="amount" value="245.00" />
								<button type="submit" class="w3ls-cart">Add to cart</button>
							</form>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</section>
		</div>
	</div>
</div>
<!-- newsletter -->
<!-- //newsletter -->
<!-- footer -->
<?php
	include('include/footer.php');
?>
<!-- //footer -->
<script type="text/javascript">
	$(window).load(function () {
		$("#flexiselDemo2").flexisel({
			visibleItems: 4,
			animationSpeed: 1000,
			autoPlay: true,
			autoPlaySpeed: 3000,
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: {
				portrait: {
					changePoint: 568,
					visibleItems: 1
				},
				landscape: {
					changePoint: 667,
					visibleItems: 2
				},
				tablet: {
					changePoint: 768,
					visibleItems: 3
				}
			}
		});

	});
</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
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