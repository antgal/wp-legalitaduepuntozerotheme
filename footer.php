<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LDP
 */

?>

		</div> <!-- <div role="main" class="main"> -->

			<footer class="short" id="footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-5">
							<a href="demo-law-firm.html" class="logo mb-3">
								<img alt="Porto Website Template" class="img-fluid" width="97" height="32" src="<?php ldp_get_theme_base_path(); ?>img/demos/law-firm/logo-law-firm-footer.png">
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis.</p>
						</div>
						<div class="col-lg-3 ml-lg-auto">
							<h5 class="mb-2">Porto Law Firm</h5>
							<ul class="list list-icons mt-4 pt-2">
								<li><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
								<li><i class="far fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
							</ul>
						</div>
						<div class="col-lg-3">
							<h5 class="mb-2">Toll Free</h5>
							<span class="phone">(800) 123-4567</span>
							<ul class="social-icons mt-4">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col">
								<p>© Copyright 2018. All Rights Reserved. | <a href="demo-law-firm-contact-us.html">Contact</a></p>
							</div>
						</div>
					</div>
				</div>
			</footer>
			
		</div> <!-- <div class="body"> -->

		<!-- Vendor -->
		<script src="<?php ldp_get_theme_base_path(); ?>vendor/jquery/jquery.min.js"></script>
		<script src="<?php ldp_get_theme_base_path(); ?>vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?php ldp_get_theme_base_path(); ?>vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?php ldp_get_theme_base_path(); ?>vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="<?php ldp_get_theme_base_path(); ?>vendor/popper/umd/popper.min.js"></script>
		<script src="<?php ldp_get_theme_base_path(); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php ldp_get_theme_base_path(); ?>vendor/common/common.min.js"></script>
		<script src="<?php ldp_get_theme_base_path(); ?>vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="<?php ldp_get_theme_base_path(); ?>vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php ldp_get_theme_base_path(); ?>vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="<?php ldp_get_theme_base_path(); ?>vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="<?php ldp_get_theme_base_path(); ?>vendor/isotope/jquery.isotope.min.js"></script>
		<script src="<?php ldp_get_theme_base_path(); ?>vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?php ldp_get_theme_base_path(); ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?php ldp_get_theme_base_path(); ?>vendor/vide/vide.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?php ldp_get_theme_base_path(); ?>js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="<?php ldp_get_theme_base_path(); ?>vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="<?php ldp_get_theme_base_path(); ?>vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="<?php ldp_get_theme_base_path(); ?>js/views/view.contact.js"></script>

		<!-- Demo -->
		<script src="<?php ldp_get_theme_base_path(); ?>js/demos/demo-law-firm.js"></script>	

		<!-- Theme Custom -->
		<script src="<?php ldp_get_theme_base_path(); ?>js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php ldp_get_theme_base_path(); ?>js/theme.init.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-12345678-1', 'auto');
		ga('send', 'pageview');
		</script>
		-->

		<!--?php wp_footer(); ?-->

	</body>
</html>
