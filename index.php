<?php
 include("database.php");
 include('include/header.php');
?>
	<div class="banner">
		<div class="container">
			<h3>Alquiler de computadoras <span>Tu mejor opcion</span></h3>
		</div>
	</div>
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-5 wthree_banner_bottom_left">
				<div class="video-img">
					<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
						<span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
					</a>
				</div>     
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<div id="small-dialog" class="mfp-hide">
						<iframe src="https://www.youtube.com/watch?v=zQkoDZ54jzA"></iframe>
					</div>
					<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
					</script>
			</div>
			<div class="col-md-7 wthree_banner_bottom_right">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">HP</a></li>
						<li role="presentation"><a href="#audio" role="tab" id="audio-tab" data-toggle="tab" aria-controls="audio">LENOVO</a></li>
						<li role="presentation"><a href="#video" role="tab" id="video-tab" data-toggle="tab" aria-controls="video">ACER</a></li>
						<li role="presentation"><a href="#kitchen" role="tab" id="kitchen-tab" data-toggle="tab" aria-controls="kitchen">DELL</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="IMG/hp.jpg" alt=" " class="img-responsive" />
										<img src="IMG/hp.jpg" alt=" " class="img-responsive" />
										<img src="IMG/hp.jpg" alt=" " class="img-responsive" />
										<img src="IMG/hp.jpg" alt=" " class="img-responsive" />
										<img src="IMG/hp.jpg" alt=" " class="img-responsive" />
										<img src="IMG/hp.jpg" alt=" " class="img-responsive" />
										<img src="IMG/hp.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div> 
									<h5><a href="single.php">Laptop hp 569</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$380</span> <i class="item_price">$350</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Mobile Phone1" /> 
											<input type="hidden" name="amount" value="350.00" />   
											<button type="submit" class="w3ls-cart">Añadir</button>
										</form>  
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="IMG/pchp.jpg" alt=" " class="img-responsive" />
										<img src="IMG/pchp.jpg" alt=" " class="img-responsive" />
										<img src="IMG/pchp.jpg" alt=" " class="img-responsive" />
										<img src="IMG/pchp.jpg" alt=" " class="img-responsive" />
										<img src="IMG/pchp.jpg" alt=" " class="img-responsive" />
										<img src="IMG/pchp.jpg" alt=" " class="img-responsive" />
										<img src="IMG/pchp.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.php">PC HP 6987</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$330</span> <i class="item_price">$302</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Mobile Phone2" /> 
											<input type="hidden" name="amount" value="302.00" />   
											<button type="submit" class="w3ls-cart">Añadir</button>
										</form>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="IMG/lap.jpg" alt=" " class="img-responsive" />
										<img src="IMG/lap.jpg" alt=" " class="img-responsive" />
										<img src="IMG/lap.jpg" alt=" " class="img-responsive" />
										<img src="IMG/lap.jpg" alt=" " class="img-responsive" />
										<img src="IMG/lap.jpg" alt=" " class="img-responsive" />
										<img src="IMG/lap.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.php">Laptop 25</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$250</span> <i class="item_price">$245</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Mobile Phone3" /> 
											<input type="hidden" name="amount" value="245.00"/>   
											<button type="submit" class="w3ls-cart">Añadir</button>
										</form>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="audio" aria-labelledby="audio-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="IMG/le.jpg" alt=" " class="img-responsive" />
										<img src="IMG/le.jpg" alt=" " class="img-responsive" />
										<img src="IMG/le.jpg" alt=" " class="img-responsive" />
										<img src="IMG/le.jpg" alt=" " class="img-responsive" />
										<img src="IMG/le.jpg" alt=" " class="img-responsive" />
										<img src="IMG/le.jpg" alt=" " class="img-responsive" />
										<img src="IMG/le.jpg" alt=" " class="img-responsive" />
										<img src="IMG/le.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.php">PC Lenovo36954</a></h5>
										<p><span>$500</span> <i class="item_price">$499</i></p>
									<div class="simpleCart_shelfItem">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Speakers" /> 
											<input type="hidden" name="amount" value="250.00" />   
											<button type="submit" class="w3ls-cart">Añadir</button>
										</form>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="IMG/le.jpg" alt=" " class="img-responsive" />
										<img src="IMG/le.jpg" alt=" " class="img-responsive" />
										<img src="IMG/le.jpg" alt=" " class="img-responsive" />
										<img src="IMG/le.jpg" alt=" " class="img-responsive" />
										<img src="IMG/le.jpg" alt=" " class="img-responsive" />
										<img src="IMG/le.jpg" alt=" " class="img-responsive" />
										<img src="IMG/le.jpg" alt=" " class="img-responsive" />
										<img src="IMG/le.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.php">Laptop Lenovo 330</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$250</span> <i class="item_price">$230</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Headphones" /> 
											<input type="hidden" name="amount" value="150.00" />   
											<button type="submit" class="w3ls-cart">Añadir</button>
										</form>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="IMG/le.jpg" alt=" " class="img-responsive" />
										<img src="IMG/le.jpg" alt=" " class="img-responsive" />
										<img src="IMG/le.jpg" alt=" " class="img-responsive" />
										<img src="IMG/le.jpg" alt=" " class="img-responsive" />
										<img src="IMG/le.jpg" alt=" " class="img-responsive" />
										<img src="IMG/le.jpg" alt=" " class="img-responsive" />
										<img src="IMG/le.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.php">Laptop Lenovo 25648</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$220</span> <i class="item_price">$180</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Audio Player" /> 
											<input type="hidden" name="amount" value="180.00"/>   
											<button type="submit" class="w3ls-cart">Añadir</button>
										</form>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="video" aria-labelledby="video-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="IMG/2019.jpg" alt=" " class="img-responsive" />
										<img src="IMG/2019.jpg" alt=" " class="img-responsive" />
										<img src="IMG/2019.jpg" alt=" " class="img-responsive" />
										<img src="IMG/2019.jpg" alt=" " class="img-responsive" />
										<img src="IMG/2019.jpg" alt=" " class="img-responsive" />
										<img src="IMG/2019.jpg" alt=" " class="img-responsive" />
										<img src="IMG/2019.jpg" alt=" " class="img-responsive" />
										<img src="IMG/2019.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.php">Laptop Acer</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$880</span> <i class="item_price">$850</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Laptop" /> 
											<input type="hidden" name="amount" value="850.00" />   
											<button type="submit" class="w3ls-cart">Añadir</button>
										</form>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="IMG/2019.jpg" alt=" " class="img-responsive" />
										<img src="IMG/2019.jpg" alt=" " class="img-responsive" />
										<img src="IMG/2019.jpg" alt=" " class="img-responsive" />
										<img src="IMG/2019.jpg" alt=" " class="img-responsive" />
										<img src="IMG/2019.jpg" alt=" " class="img-responsive" />
										<img src="IMG/2019.jpg" alt=" " class="img-responsive" />
										<img src="IMG/2019.jpg" alt=" " class="img-responsive" />
										<img src="IMG/2019.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.php">PC Acer 216</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$290</span> <i class="item_price">$280</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Notebook" /> 
											<input type="hidden" name="amount" value="280.00" />   
											<button type="submit" class="w3ls-cart">Añadir</button>
										</form>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="IMG/2019.jpg" alt=" " class="img-responsive" />
										<img src="IMG/2019.jpg" alt=" " class="img-responsive" />
										<img src="IMG/2019.jpg" alt=" " class="img-responsive" />
										<img src="IMG/2019.jpg" alt=" " class="img-responsive" />
										<img src="IMG/2019.jpg" alt=" " class="img-responsive" />
										<img src="IMG/2019.jpg" alt=" " class="img-responsive" />
										<img src="IMG/2019.jpg" alt=" " class="img-responsive" />
										<img src="IMG/2019.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.php">Acer PC256</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$400</span> <i class="item_price">$320</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Kid's Toy" /> 
											<input type="hidden" name="amount" value="80.00" />   
											<button type="submit" class="w3ls-cart">Añadir</button>
										</form>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tv" aria-labelledby="tv-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.php">PC DELL 2569</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$950</span> <i class="item_price">$820</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Refrigerator" /> 
											<input type="hidden" name="amount" value="820.00" />   
											<button type="submit" class="w3ls-cart">Añadir</button>
										</form>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="IMG/15.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.php">Laptop DELL 26587</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$700</span> <i class="item_price">$680</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="LED Tv"/> 
											<input type="hidden" name="amount" value="680.00"/>   
											<button type="submit" class="w3ls-cart">Añadir</button>
										</form>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.php">Laptop DELL 1235</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$520</span> <i class="item_price">$510</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Washing Machine" /> 
											<input type="hidden" name="amount" value="510.00" />   
											<button type="submit" class="w3ls-cart">Añadir</button>
										</form>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="kitchen" aria-labelledby="kitchen-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.php">PC DELL 265</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$460</span> <i class="item_price">$450</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Grinder" /> 
											<input type="hidden" name="amount" value="450.00" />   
											<button type="submit" class="w3ls-cart">Añadir</button>
										</form>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.php">Laptop DELL123</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$390</span> <i class="item_price">$350</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Water Purifier" /> 
											<input type="hidden" name="amount" value="350.00" />   
											<button type="submit" class="w3ls-cart">Añadir</button>
										</form>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<img src="IMG/dell.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.php">Laptop DELL 256</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$250</span> <i class="item_price">$220</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Coffee Maker" /> 
											<input type="hidden" name="amount" value="220.00" />   
											<button type="submit" class="w3ls-cart">Añadir</button>
										</form>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="IMG/3.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Unas de las mejores marcas para los estudiantes</h4>
							<p>Esta laptop es muy potente para los estudiantes ya que es rapida para poder realizar todos sus trabajos. </p>
							<div class="rating">
								<div class="rating-left">
									<img src="IMG/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="IMG/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="IMG/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="IMG/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="IMG/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$380</span> <i class="item_price">$350</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Mobile Phone1"> 
									<input type="hidden" name="amount" value="350.00">   
									<button type="submit" class="w3ls-cart">Añadir</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="IMG/9.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Computadores Lenovo</h4>
							<p>Son mas potentes que las Hp estas son utilizadas mas para trabajos de empresas.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="IMG/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="IMG/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="IMG/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="IMG/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="IMG/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$180</span> <i class="item_price">$150</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Headphones"> 
									<input type="hidden" name="amount" value="150.00">   
									<button type="submit" class="w3ls-cart">Añadir</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="IMG/11.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Computadores ACER</h4>
							<p>Para juegos que necesitan de una gran tarjeta grafica.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="IMG/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="IMG/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="IMG/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="IMG/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="IMG/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$880</span> <i class="item_price">$850</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Laptop"> 
									<input type="hidden" name="amount" value="850.00">   
									<button type="submit" class="w3ls-cart">Añadir</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModal3">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="IMG/14.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Computadores DELL </h4>
							<p>Las mejores que tenemos para rentar de uso rudo para algunas personas en especifico.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="IMG/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="IMG/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="IMG/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="IMG/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="IMG/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$950</span> <i class="item_price">$820</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Mobile Phone1"> 
									<input type="hidden" name="amount" value="820.00">   
									<button type="submit" class="w3ls-cart">Añadir</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModal4">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="IMG/17.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Computadores DELL</h4>
							<p>Tu mejor opcion para ocasiones de trabajo.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="IMG/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="IMG/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="IMG/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="IMG/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="IMG/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$460</span> <i class="item_price">$450</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Mobile Phone1"> 
									<input type="hidden" name="amount" value="450.00">   
									<button type="submit" class="w3ls-cart">Añadir</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModal5">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModal6">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="IMG/37.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Kitchen & Dining Accessories</h4>
							<p>Ut enim ad minim veniam, quis nostrud 
								exercitation ullamco laboris nisi ut aliquip ex ea 
								commodo consequat.Duis aute irure dolor in 
								reprehenderit in voluptate velit esse cillum dolore 
								eu fugiat nulla pariatur. Excepteur sint occaecat 
								cupidatat non proident, sunt in culpa qui officia 
								deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="IMG/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="IMG/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="IMG/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="IMG/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="IMG/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$280</span> <i class="item_price">$250</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Induction Stove"> 
									<input type="hidden" name="amount" value="250.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="banner-bottom1">
		<div class="agileinfo_banner_bottom1_grids">
			<div class="col-md-7 agileinfo_banner_bottom1_grid_left">
				<h3>Gran inauguracion<span>20% <i>Descuento</i></span></h3>
				<a href="products.php">Alquilar</a>
			</div>
			<div class="col-md-5 agileinfo_banner_bottom1_grid_right">
				<h4>Tiempo de oferta</h4>
				<div class="timer_wrap">
					<div id="counter"> </div>
				</div>
				<script src="js/jquery.countdown.js"></script>
				<script src="js/script.js"></script>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //new-products -->
	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Marcas</h3>
			<div class="sliderfig">
				<ul id="flexiselDemo1">			
					<li>
						<img src="IMG/tb1.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="IMG/tb2.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="IMG/tb3.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="IMG/tb4.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="IMG/tb5.jpg" alt=" " class="img-responsive" />
					</li>
				</ul>
			</div>
			<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>
	<!-- //top-brands --> 

	<?php
		include ('include/footer.php')
	?>
	<!-- //footer --> 
</body>
</html>