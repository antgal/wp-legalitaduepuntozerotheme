<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LDP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">	

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php ldp_get_theme_base_path(); ?>img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php ldp_get_theme_base_path(); ?>img/apple-touch-icon.png">	

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">		

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php ldp_get_theme_base_path(); ?>vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php ldp_get_theme_base_path(); ?>vendor/font-awesome/css/fontawesome-all.min.css">
		<link rel="stylesheet" href="<?php ldp_get_theme_base_path(); ?>vendor/animate/animate.min.css">
		<link rel="stylesheet" href="<?php ldp_get_theme_base_path(); ?>vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?php ldp_get_theme_base_path(); ?>vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php ldp_get_theme_base_path(); ?>vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php ldp_get_theme_base_path(); ?>vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php ldp_get_theme_base_path(); ?>css/theme.css">
		<link rel="stylesheet" href="<?php ldp_get_theme_base_path(); ?>css/theme-elements.css">
		<link rel="stylesheet" href="<?php ldp_get_theme_base_path(); ?>css/theme-blog.css">
		<link rel="stylesheet" href="<?php ldp_get_theme_base_path(); ?>css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="<?php ldp_get_theme_base_path(); ?>vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="<?php ldp_get_theme_base_path(); ?>vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="<?php ldp_get_theme_base_path(); ?>vendor/rs-plugin/css/navigation.css">
		
		<!-- Demo CSS -->
		<link rel="stylesheet" href="<?php ldp_get_theme_base_path(); ?>css/demos/demo-law-firm.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php ldp_get_theme_base_path(); ?>css/skins/skin-law-firm.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php ldp_get_theme_base_path(); ?>css/custom.css">

		<!-- Head Libs -->
		<script src="<?php ldp_get_theme_base_path(); ?>vendor/modernizr/modernizr.min.js"></script>

		<!--?php wp_head(); ?-->	
	</head>

	<body>
		<div class="body">
		
		

			<header id="header" class="header-narrow header-no-border-bottom" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 115, 'stickySetTop': '-115px', 'stickyChangeLogo': true}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="demo-law-firm.html">
											<img alt="Porto" width="245" height="54" data-sticky-width="183" data-sticky-height="41" data-sticky-top="93" src="<?php ldp_get_theme_base_path(); ?>img/demos/law-firm/logodark.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<ul class="header-extra-info d-flex align-items-center">
										<li>
											<div class="feature-box feature-box-call feature-box-style-2 align-items-center">
												<div class="feature-box-icon">
													<i class="icon-call-end icons"></i>
												</div>
												<div class="feature-box-info">
													<h4 class="mb-0">(800) 123-4567</h4>
												</div>
											</div>
										</li>
										<li class="d-none d-md-inline-flex">
											<div class="feature-box feature-box-mail feature-box-style-2 align-items-center">
												<div class="feature-box-icon">
													<i class="icon-envelope icons"></i>
												</div>
												<div class="feature-box-info">
													<h4 class="mb-0"><a href="mailto:mail@example.com">legalitaduepuntozero@gmail.com</a></h4>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="header-nav-bar header-nav-bar-primary">
						<div class="header-container container">
							<div class="header-row">
								<div class="header-column">
									<div class="header-row">	
										<div class="header-nav header-nav-stripe justify-content-start">
											<div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1">
												<nav class="collapse">
													<ul class="nav nav-pills" id="mainNav">
														<li>
															<a class="nav-link active" href="#">
																Home
															</a>
														</li>
														<li>
															<a class="nav-link" href="#">
																Chi siamo
															</a>
															<ul class="dropdown-menu">
																<li>
																	<a>Team</a>
																</li>
															</ul>
														</li>
														<li>
															<a class="nav-link" href="#">
																Chi sei tu?
															</a>
														</li>														
														<li>
															<a class="nav-link" href="#">
																Eventi
															</a>
														</li>
														<li>
															<a class="nav-link" href="#">
																Contatti
															</a>
														</li>
													</ul>
												</nav>
											</div>
										</div>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											Menu <i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">
