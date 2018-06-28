<?php
/**
 * The template for the Home page
 *
 * Template Name: Home Page
 *
 * @package LDP
 */

get_header();
?>

<section class="section section-text-light section-center section-header mt-0 mb-0 border-top-0 p-0" style="background: radial-gradient(circle, #78b4d2 0%, #165b77 100%);">
	<div class="section-header-text">
		<div class="container">
			<img alt="Logo" class="img-fluid" src="<?php ldp_get_theme_base_path(); ?>img/logo-ldp0.png">
			<div class="row center text-center mt-5" >
				<h1 class="mx-auto w-100" style="color:#0c0c0c !important; font-size:5em;">Legalit&agrave; 2.0</h1>
				<h2 class="mx-auto w-100" style="color:#0c0c0c !important">Associazione vittime reati online</h2> 
			</div>
		</div>
	</div>
</section>

<!--div class="rev_slider_wrapper" style="height: 650px;display:none;">
	<div id="revolutionSlider" class="rev_slider" data-version="5.4.7">
		<ul>
			<li data-transition="fade" data-title="Advocate Team" data-thumb="<?php ldp_get_theme_base_path(); ?>img/slide1.png">
				<img src="<?php ldp_get_theme_base_path(); ?>img/slide1.png" alt="">
			</li>
		</ul>
	</div>
</div-->

<section class="section section-default section-no-border mt-0">
	<div class="d-block d-lg-none text-center">
		<ul class="header-social-icons social-icons mobileSocialIcons">
			<li class="social-icons-facebook"><a href="https://www.facebook.com/legalitaduepuntozero" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
			<li class="social-icons-twitter"><a href="https://twitter.com/Legalita2" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
			<li class="social-icons-linkedin"><a href="https://www.linkedin.com/in/legalit%C3%A0-duepuntozero-a6762313b/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
		</ul>		
	</div>
	<div class="container pt-3 pb-4">
		<div class="row justify-content-around">
			<div class="col-lg-7 mb-4 mb-lg-0">
				<h2 class="mb-0">Chi siamo</h2>
				<div class="divider divider-primary divider-small mb-4">
					<hr class="mr-auto">
				</div>
				<p class="mt-4">
					<?php
						$variable = get_field('descrizione_1');
						echo $variable
					?>
				</p>

				<a class="mt-3" href="demo-law-firm-about-us.html">Scopri di più <i class="fas fa-long-arrow-alt-right"></i></a>
			</div>
			<div class="col-lg-4">
				<h4 class="mb-0">Il nostro motto</h4>
				<div class="divider divider-primary divider-small mb-4">
					<hr class="mr-auto">
				</div>
				<p class="mt-4 mb-0">"Una lingua nasce, cambia, si rinnova. Il diritto segue e si nutre del cambiamento. Tutto cambia, muta, si evolve. Ma un reato, resta pur sempre un reato."</p>
			</div>
		</div>
	</div>
</section>
<div class="container" id="practice-areas">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h2 class="mt-4 mb-0">A chi ci rivolgiamo</h2>
			<div class="divider divider-primary divider-small divider-small-center mb-4">
				<hr>
			</div>
		</div>
	</div>

	<div class="row mt-4">
		<div class="col-lg-4">
			<div class="feature-box feature-box-style-2 mb-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
				<div class="feature-box-icon">
					<img src="<?php ldp_get_theme_base_path(); ?>img/demos/law-firm/icons/business-law.png" alt="" />
				</div>
				<div class="feature-box-info ml-3">
					<h4 class="mb-2">Scuole</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
					<a class="mt-3" href="demo-law-firm-practice-areas-detail.html">Scopri di più <i class="fas fa-long-arrow-alt-right"></i></a>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="feature-box feature-box-style-2 mb-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
				<div class="feature-box-icon">
					<img src="<?php ldp_get_theme_base_path(); ?>img/demos/law-firm/icons/business-law.png" alt="" />
				</div>
				<div class="feature-box-info ml-3">
					<h4 class="mb-2">Università</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
					<a class="mt-3" href="demo-law-firm-practice-areas-detail.html">Scopri di più <i class="fas fa-long-arrow-alt-right"></i></a>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="feature-box feature-box-style-2 mb-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
				<div class="feature-box-icon">
					<img src="<?php ldp_get_theme_base_path(); ?>img/demos/law-firm/icons/health-law.png" alt="" />
				</div>
				<div class="feature-box-info ml-3">
					<h4 class="mb-2">Istituti penitenziari</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
					<a class="mt-3" href="demo-law-firm-practice-areas-detail.html">Scopri di più <i class="fas fa-long-arrow-alt-right"></i></a>
				</div>
			</div>
		</div>
	</div>

	<div class="row mt-lg-3 mb-4">
		<div class="col-lg-4">
			<div class="feature-box feature-box-style-2 mb-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
				<div class="feature-box-icon">
					<img src="<?php ldp_get_theme_base_path(); ?>img/demos/law-firm/icons/divorce-law.png" alt="" />
				</div>
				<div class="feature-box-info ml-3">
					<h4 class="mb-2">Privati</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
					<a class="mt-3" href="demo-law-firm-practice-areas-detail.html">Scopri di più <i class="fas fa-long-arrow-alt-right"></i></a>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="feature-box feature-box-style-2 mb-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
				<div class="feature-box-icon">
					<img src="<?php ldp_get_theme_base_path(); ?>img/demos/law-firm/icons/capital-law.png" alt="" />
				</div>
				<div class="feature-box-info ml-3">
					<h4 class="mb-2">Avvocati</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
					<a class="mt-3" href="demo-law-firm-practice-areas-detail.html">Scopri di più <i class="fas fa-long-arrow-alt-right"></i></a>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="feature-box feature-box-style-2 mb-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
				<div class="feature-box-icon">
					<img src="<?php ldp_get_theme_base_path(); ?>img/demos/law-firm/icons/accident-law.png" alt="" />
				</div>
				<div class="feature-box-info ml-3">
					<h4 class="mb-2">Liberi professionisti</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
					<a class="mt-3" href="demo-law-firm-practice-areas-detail.html">Scopri di più <i class="fas fa-long-arrow-alt-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>



<section class="parallax section section-text-light section-parallax section-center mt-5" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="<?php ldp_get_theme_base_path(); ?>img/demos/law-firm/parallax/martello.jpg">
	<div class="container">
		<div class="row counters counters-text-light">
			<div class="col-lg-3 col-sm-6">
				<div class="counter mb-4 mt-4">
					<i class="icon-user-following icons"></i>
					<strong data-to="15">0</strong>
					<label>Membri</label>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="counter mb-4 mt-4">
					<i class="icon-diamond icons"></i>
					<strong data-to="2" data-append="+">1</strong>
					<label>Anni di attività</label>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="counter mb-4 mt-4">
					<i class="icon-badge icons"></i>
					<strong data-to="20" data-append="+">0</strong>
					<label>Convegni</label>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="counter mb-4 mt-4">
					<i class="icon-paper-plane icons"></i>
					<strong data-to="500" data-append="+">0</strong>
					<label>Persone raggiunte</label>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h2 class="mt-4 mb-0"><a href="#">Ultime News</a></h2>
			<div class="divider divider-primary divider-small divider-small-center mb-4">
				<hr>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">

			<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mb-5">
				<span class="thumb-info-side-image-wrapper p-0 d-none d-sm-block">
					<a title="" href="demo-law-firm-news-detail.html">
						<img src="<?php ldp_get_theme_base_path(); ?>img/demos/law-firm/blog/blog-law-firm-1.jpg" class="img-fluid" alt="" style="width: 195px;">
					</a>
				</span>
				<span class="thumb-info-caption">
					<span class="thumb-info-caption-text">
						<h2 class="mb-3 mt-1"><a title="" class="text-dark" href="demo-law-firm-news-detail.html">Award of Honor</a></h2>
						<span class="post-meta">
							<span>January 10, 2017 | <a href="#">John Doe</a></span>
						</span>
						<p class="text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
						<a class="mt-3" href="demo-law-firm-news-detail.html">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
					</span>
				</span>
			</span>

		</div>
		<div class="col-lg-6">

			<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mb-5">
				<span class="thumb-info-side-image-wrapper p-0 d-none d-sm-block">
					<a title="" href="demo-law-firm-news-detail.html">
						<img src="<?php ldp_get_theme_base_path(); ?>img/demos/law-firm/blog/blog-law-firm-2.jpg" class="img-fluid" alt="" style="width: 195px;">
					</a>
				</span>
				<span class="thumb-info-caption">
					<span class="thumb-info-caption-text">
						<h2 class="mb-3 mt-1"><a title="" class="text-dark" href="demo-law-firm-news-detail.html">The Best Lawyer</a></h2>
						<span class="post-meta">
							<span>January 10, 2017 | <a href="#">John Doe</a></span>
						</span>
						<p class="text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
						<a class="mt-3" href="demo-law-firm-news-detail.html">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
					</span>
				</span>
			</span>

		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 p-0">
			<section class="section section-primary match-height">
				<div class="row justify-content-end ml-lg-5">
					<div class="col-half-section col-half-section-right">
						<h2 class="mb-0">Cosa pensano di noi</h2>
						<div class="divider divider-light divider-small mb-4">
							<hr class="mr-auto">
						</div>

						<div class="owl-carousel owl-theme mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': false, 'dots': true}">
							<div>
								<div class="testimonial testimonial-style-3 testimonial-trasnparent-background testimonial-alternarive-font">
									<blockquote class="text-light">
										<p class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis.</p>
									</blockquote>
									<div class="testimonial-author">
										<div class="testimonial-author-thumbnail">
											<img src="<?php ldp_get_theme_base_path(); ?>img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
										</div>
										<p><strong>John Smith</strong><span class="text-light">CEO & Founder - Okler</span></p>
									</div>
								</div>
							</div>
							<div>
								<div class="testimonial testimonial-style-3 testimonial-trasnparent-background testimonial-alternarive-font">
									<blockquote class="text-light">
										<p class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet.</p>
									</blockquote>
									<div class="testimonial-author">
										<div class="testimonial-author-thumbnail">
											<img src="<?php ldp_get_theme_base_path(); ?>img/clients/client-2.jpg" class="img-fluid rounded-circle" alt="">
										</div>
										<p><strong>Jessica Smith</strong><span class="text-light">Marketing - Okler</span></p>
									</div>
								</div>
							</div>
							<div>
								<div class="testimonial testimonial-style-3 testimonial-trasnparent-background testimonial-alternarive-font">
									<blockquote class="text-light">
										<p class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis.</p>
									</blockquote>
									<div class="testimonial-author">
										<div class="testimonial-author-thumbnail">
											<img src="<?php ldp_get_theme_base_path(); ?>img/clients/client-3.jpg" class="img-fluid rounded-circle" alt="">
										</div>
										<p><strong>Bob Smith</strong><span class="text-light">COO - Okler</span></p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>
		</div>
		<div class="col-lg-6 p-0 visible-md visible-lg">
			<section class="parallax section section-parallax match-height" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="<?php ldp_get_theme_base_path(); ?>img/demos/law-firm/parallax/scrivonodinoi.jpg" style="min-height: 450px;">
			</section>
		</div>
	</div>
</div>

<div class="container">
	<div class="row text-center">
		<div class="col-lg-12">
			<h2 class="mt-5 mb-0">Hai domande o cerchi informazioni?</h2>
			<p>Scrivici o chiamaci e otterrai tutte le informazioni di cui hai bisogno</p>
			<div class="form-row">
				<div class="form-group col">
					<a class="btn btn-primary mb-5" href="<?php ldp_get_base_path(); ?>contatti" >Contattaci</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
