<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LDP
 */

get_header();
?>

<div class="slider-container rev_slider_wrapper" style="height: 650px;">
	<div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.7">
		<ul>
			<li data-transition="fade" data-title="Advocate Team" data-thumb="/images/cybge2r.png">
				<img src="/images/cybge2r.png"  
					alt=""
					data-bgposition="center center" 
					data-bgfit="cover" 
					data-bgrepeat="no-repeat"
					class="rev-slidebg">
			</li>
		</ul>
	</div>
</div>
<section class="section section-default section-no-border mt-0">
	<div class="container pt-3 pb-4">
		<div class="row justify-content-around">
			<div class="col-lg-7 mb-4 mb-lg-0">
				<h2 class="mb-0">Chi siamo</h2>
				<div class="divider divider-primary divider-small mb-4">
					<hr class="mr-auto">
				</div>
				<p class="mt-4">L’Associazione denominata “ LEGALITA’ 2.0 – ONLUS” ha sede in Salerno (SA), Piazza Casalbore n. 25. In uno scenario caratterizzato da un continuo incremento dei reati on-line, causa la scarsa informazione e la continua evoluzione, l'Associazione Legalità 2.0 ha realizzato una macchina organizzativa di professionisti capace di offrire concreto supporto alla vittima attraverso: la sensibilizzazione e la responsabilizzazione dell' utenza sui rischi cui è possibile incorrere con l'uso degli strumenti informatici, la prevenzione in istituti scolastici, e la completa assistenza della vittima.</p>

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
					<img src="<?php ldp_get_theme_base_path(); ?>img/demos/law-firm/icons/criminal-law.png" alt="" />
				</div>
				<div class="feature-box-info ml-3">
					<h4 class="mb-2">Scuole</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
					<a class="mt-3" href="demo-law-firm-practice-areas-detail.html">Learn More <i class="fas fa-long-arrow-alt-right"></i></a>
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
					<a class="mt-3" href="demo-law-firm-practice-areas-detail.html">Learn More <i class="fas fa-long-arrow-alt-right"></i></a>
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
					<a class="mt-3" href="demo-law-firm-practice-areas-detail.html">Learn More <i class="fas fa-long-arrow-alt-right"></i></a>
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
					<a class="mt-3" href="demo-law-firm-practice-areas-detail.html">Learn More <i class="fas fa-long-arrow-alt-right"></i></a>
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
					<a class="mt-3" href="demo-law-firm-practice-areas-detail.html">Learn More <i class="fas fa-long-arrow-alt-right"></i></a>
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
					<a class="mt-3" href="demo-law-firm-practice-areas-detail.html">Learn More <i class="fas fa-long-arrow-alt-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 p-0">
			<section class="section section-primary match-height" style="background-image: url(<?php ldp_get_theme_base_path(); ?>img/patterns/fancy.jpg);">
				<div class="row justify-content-end ml-lg-5">
					<div class="col-half-section col-half-section-right">
						<h2 class="mb-0">Testimonials</h2>
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
			<section class="parallax section section-parallax match-height" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="<?php ldp_get_theme_base_path(); ?>img/demos/law-firm/parallax/parallax-law-firm.jpg" style="min-height: 450px;">
			</section>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="mt-4 mb-0">Il nostro team</h2>
				<div class="divider divider-primary divider-small divider-small-center mb-4">
					<hr>
				</div>
			</div>
		</div>
		<div class="row mt-4">
			<div class="owl-carousel owl-theme owl-team-custom show-nav-title mb-0" data-plugin-options="{'items': 4, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
				<div class="text-center mb-4">
					<a href="demo-law-firm-attorneys-detail.html">
						<img src="<?php ldp_get_theme_base_path(); ?>img/team/team-22.jpg" class="img-fluid" alt="">
					</a>
					<h4 class="mt-3 mb-0">David Doe</h4>
					<p class="mb-0">Criminal Law</p>
					<span class="thumb-info-social-icons mt-2 pb-0">
						<a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
						<a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
						<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
					</p>
				</div>
				<div class="text-center mb-4">
					<a href="demo-law-firm-attorneys-detail.html">
						<img src="<?php ldp_get_theme_base_path(); ?>img/team/team-23.jpg" class="img-fluid" alt="">
					</a>
					<h4 class="mt-3 mb-0">Jeff Doe</h4>
					<p class="mb-0">Business Law</p>
					<span class="thumb-info-social-icons mt-2 pb-0">
						<a href="mailto:mail@example.com"><i class="far fa-envelope"></i><span>Email</span></a>
						<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
					</p>
				</div>
				<div class="text-center mb-4">
					<a href="demo-law-firm-attorneys-detail.html">
						<img src="<?php ldp_get_theme_base_path(); ?>img/team/team-24.jpg" class="img-fluid" alt="">
					</a>
					<h4 class="mt-3 mb-0">Craig Doe</h4>
					<p class="mb-0">Divorce Law</p>
					<span class="thumb-info-social-icons mt-2 pb-0">
						<a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
						<a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
						<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
					</p>
				</div>
				<div class="text-center mb-4">
					<a href="demo-law-firm-attorneys-detail.html">
						<img src="<?php ldp_get_theme_base_path(); ?>img/team/team-25.jpg" class="img-fluid" alt="">
					</a>
					<h4 class="mt-3 mb-0">Richard Doe</h4>
					<p class="mb-0">Accident Law</p>
					<span class="thumb-info-social-icons mt-2 pb-0">
						<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
					</p>
				</div>
				<div class="text-center mb-4">
					<a href="demo-law-firm-attorneys-detail.html">
						<img src="<?php ldp_get_theme_base_path(); ?>img/team/team-29.jpg" class="img-fluid" alt="">
					</a>
					<h4 class="mt-3 mb-0">Amanda Doe</h4>
					<p class="mb-0">Health Law</p>
					<span class="thumb-info-social-icons mt-2 pb-0">
						<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
					</p>
				</div>
				<div class="text-center mb-4">
					<a href="demo-law-firm-attorneys-detail.html">
						<img src="<?php ldp_get_theme_base_path(); ?>img/team/team-30.jpg" class="img-fluid" alt="">
					</a>
					<h4 class="mt-3 mb-0">Jessica Doe</h4>
					<p class="mb-0">Capital Law</p>
					<span class="thumb-info-social-icons mt-2 pb-0">
						<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
					</p>
				</div>
			</div>
		</div>
	</div>

</div>

<section class="parallax section section-text-light section-parallax section-center mt-5" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="<?php ldp_get_theme_base_path(); ?>img/demos/law-firm/parallax/parallax-law-firm-2.jpg">
	<div class="container">
		<div class="row counters counters-text-light">
			<div class="col-lg-3 col-sm-6">
				<div class="counter mb-4 mt-4">
					<i class="icon-user-following icons"></i>
					<strong data-to="30000" data-append="+">0</strong>
					<label>Happy Clients</label>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="counter mb-4 mt-4">
					<i class="icon-diamond icons"></i>
					<strong data-to="15">0</strong>
					<label>Years in Business</label>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="counter mb-4 mt-4">
					<i class="icon-badge icons"></i>
					<strong data-to="3">0</strong>
					<label>Awards</label>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="counter mb-4 mt-4">
					<i class="icon-paper-plane icons"></i>
					<strong data-to="178">0</strong>
					<label>Successful Stories</label>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h2 class="mt-4 mb-0">Latest News</h2>
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

<section class="section section-background section-footer" style="background-image: url(<?php ldp_get_theme_base_path(); ?>img/demos/law-firm/contact/contact-background.jpg); background-position: 50% 100%; background-size: cover;">
	<div class="container">
		<div class="row justify-content-end">
			<div class="col-lg-6">
				<h2 class="mt-5 mb-0">Request a Free Consultation</h2>
				<p>Consult with our experienced team for complete solutions to your legal issues.</p>
				<div class="divider divider-primary divider-small mb-4">
					<hr class="mr-auto">
				</div>
				<form id="contactForm" action="php/contact-form.php" method="POST">
					<div class="form-row">
						<div class="form-group col-sm-6">
							<input type="text" value="" placeholder="Your name" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
						</div>
						<div class="form-group col-sm-6">
							<input type="email" value="" placeholder="Your email address *" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<input type="text" value="" placeholder="Subject" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<textarea maxlength="5000" placeholder="Message *" data-msg-required="Please enter your message." rows="3" class="form-control" name="message" id="message" required></textarea>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<input type="submit" value="Send Message" class="btn btn-primary mb-5" data-loading-text="Loading...">

							<div class="alert alert-success d-none" id="contactSuccess">
								Message has been sent to us.
							</div>

							<div class="alert alert-danger d-none" id="contactError">
								Error sending your message.
							</div>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</section>

<?php
get_footer();
