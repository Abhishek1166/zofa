<?php
// echo '<pre>';
// print_r($site);
// echo '</pre>';
// die;
?>
<footer>
	<div class="container">

		<!--footer showroom-->
		<div class="footer-showroom">
			<div class="row">
				<div class="col-sm-8">
					<h2>Visit our showroom</h2>
					<p><?= $site['site_address'] ?></p>
					<p>Mon - Sat: 10 am - 6 pm &nbsp; &nbsp; | &nbsp; &nbsp; Sun: 12pm - 2 pm</p>
				</div>
				<div class="col-sm-4 text-center">
					<a href="contact" class="btn btn-clean"><span class="icon icon-map-marker"></span> Get directions</a>


					<div class="call-us h4"><span class="icon icon-phone-handset"></span> <?= $site['site_mobile'] ?></div>
				</div>
			</div>
		</div>

		<!--footer links-->
		<div class="footer-links">
			<div class="row">
				<div class="col-sm-4 col-md-2">
					<h5>Browse by</h5>
					<ul>
						<!-- <li><a href="#">Brand</a></li> -->


						<!-- <li>
							<a href="products1">Products</a>
						</li> -->

						<li>
							<a href="<?php echo SITE_URL ?>productsgrid/1">Shop</a>
						</li>


						<li><a href=" #">Category</a></li>
					</ul>
				</div>

				<div class="col-sm-4 col-md-2">
					<h5>Our company</h5>
					<ul>
						<li>
							<a href="<?php echo SITE_URL ?>about-us">About us</a>
						</li>





						<li>
							<a href="<?php echo SITE_URL ?>contact">Contact</a>
						</li>
					</ul>
				</div>
				<div class="col-sm-12 col-md-6">
					<h5>Sign up for our newsletter</h5>
					<p><i>Add your email address to sign up for our monthly emails and to receive promotional offers.</i></p>
					<div class="form-group form-newsletter">
						<input class="form-control" type="text" name="email" value="" placeholder="Email address" />
						<input type="submit" class="btn btn-clean btn-sm" value="Subscribe" />
					</div>
				</div>
			</div>
		</div>

		<!--footer social-->

		<div class="footer-social">
			<div class="row">
				<div class="col-sm-6">
					<a href="https://themeforest.net/item/mobel-furniture-website-template/20382155" target="_blank"><i class="fa fa-download"></i> Download Mobel</a> &nbsp; | <a href="#">Sitemap</a> &nbsp; | &nbsp; <a href="#">Privacy policy</a>
				</div>
				<div class="col-sm-6 links">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

</div>
<!--/wrapper-->

<!--JS files-->
<script src="<?php echo SITE_URL; ?>assets/js/zofa/jquery.min.js"></script>
<script src="<?php echo SITE_URL; ?>assets/js/zofa/jquery.bootstrap.js"></script>
<script src="<?php echo SITE_URL; ?>assets/js/zofa/jquery.magnific-popup.js"></script>
<script src="<?php echo SITE_URL; ?>assets/js/zofa/jquery.owl.carousel.js"></script>
<script src="<?php echo SITE_URL; ?>assets/js/zofa/jquery.ion.rangeSlider.js"></script>
<script src="<?php echo SITE_URL; ?>assets/js/zofa/jquery.isotope.pkgd.js"></script>
<script src="<?php echo SITE_URL; ?>assets/js/zofa/main.js"></script>

<!-- for modal -->


</body>

</html>