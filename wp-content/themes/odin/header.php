<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Required meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/vendors.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/main.css">

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<title><?php echo get_bloginfo('name')?></title>
</head>

<body class="preloader-visible" data-barba="wrapper">


	<!-- preloader start -->
	<div class="preloader js-preloader">
		<div class="preloader__bg"></div>

		<div class="preloader__progress">
			<div class="preloader__progress__inner"></div>
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/loader.svg" alt="preloader image" class="preloader__img">
		</div>
	</div>
	<!-- preloader end -->


	<!-- cursor start -->
	<div class="cursor js-cursor">
		<div class="cursor__wrapper">
			<div class="cursor__follower js-follower"></div>
			<div class="cursor__label js-label"></div>
			<div class="cursor__icon js-icon"></div>
		</div>
	</div>
	<!-- cursor end -->

	<!-- barba container start -->
	<div class="barba-container" data-barba="container">

		<!-- to-top-button start -->
		<div data-cursor class="backButton js-backButton">
			<span class="backButton__bg"></span>
			<div class="backButton__icon__wrap">
				<i class="backButton__button js-top-button" data-feather="arrow-up"></i>
			</div>
		</div>
		<!-- to-top-button end -->


		<main class="">


			<!-- header start -->
			<header class="header -light -sticky-light js-header-light -classic js-header">
				<!-- header__bar start -->
				<div class="header__bar">
					<div class="overflow-hidden">
						<div class="header__logo js-header-logo">
							<a data-barba href="<?php echo home_url();?>">
								<img class="header__logo__light" src="<?php echo wp_upload_dir()['baseurl']?>/2023/12/Captura-de-tela-2023-12-01-163105-removebg-preview.png" alt="logo">
							</a>
							<a data-barba href="<?php echo home_url();?>">
								<img class="header__logo__dark" src="<?php echo wp_upload_dir()['baseurl']?>/2023/12/Captura-de-tela-2023-12-01-163105-removebg-preview.png" alt="logo">
							</a>
						</div>
					</div>

					<?php $menu = wp_get_nav_menu_items('menu');?>

					<div class="navClassic-wrap js-header-menu-classic">
						<ul class="navClassic-list js-navClassic-list">
							<?php foreach ($menu as $item) :?>
							<li>
								<a data-barba href="<?php echo $item->url?>">
									<?php echo $item->title?>
								</a>
							</li>

							<?php endforeach;?>


							<!-- <li>
								<a data-barba href="home-1-classic.html">
									Contato
								</a>
							</li>
							<li>
								<a data-barba href="home-1-classic.html">
									Sobre nós
								</a>
							</li> -->

							<!-- <li class="menu-item-has-children">
								<a>Contato</a>

								<ul class="subnav-list">
									<li>
										<a data-barba href="home-1.html">Main Slider</a>
									</li>
									<li>
										<a data-barba href="home-2.html">Main Dark</a>
									</li>
									<li>
										<a data-barba href="home-3.html">Simple Slider</a>
									</li>
									<li>
										<a data-barba href="home-4.html">Bold Light</a>
									</li>
									<li>
										<a data-barba href="home-5.html">Static Header Dark</a>
									</li>
									<li>
										<a data-barba href="home-6.html">Personal</a>
									</li>
									<li>
										<a data-barba href="projectSlider-1.html">Project Slider</a>
									</li>
								</ul>
							</li> -->

						</ul>
					</div>

					<div class="header__menu__wrap overflow-hidden">
						<div class="header__menu js-header-menu">
							<button type="button" class="nav-button-open js-nav-open">
								<i class="icon" data-feather="menu"></i>
							</button>
						</div>
					</div>
				</div>
				<!-- header__bar end -->


				<!-- nav start -->
				<nav class="nav js-nav">
					<div class="nav__inner js-nav-inner">
						<div class="nav__bg js-nav-bg"></div>

						<div class="nav__container">
							<div class="nav__header">
								<button type="button" class="nav-button-back js-nav-back">
									<i class="icon" data-feather="arrow-left-circle"></i>
								</button>

								<button type="button" class="nav-btn-close js-nav-close pointer-events-none">
									<i class="icon" data-feather="x"></i>
								</button>
							</div>

							<?php $menu = wp_get_nav_menu_items('menu');?>

							<div class="nav__content">
								<div class="nav__content__left">
									<div class="navList__wrap">
										<ul class="navList js-navList">
										<?php foreach ($menu as $item) :?>
											<li>
												<a data-barba href="<?php echo $item->url?>">
												<?php echo $item->title?>
												</a>
											</li>
											<!-- <li>
												<a data-barba href="home-1-classic.html">
													Contato
												</a>
											</li>
											<li>
												<a data-barba href="home-1-classic.html">
													Sobre nós
												</a>
											</li> -->

											<?php endforeach; ?>

											<!-- <li class="menu-item-has-children">
												<a>Main Pages</a>

												<ul class="subnav-list">
													<li>
														<a data-barba href="home-1.html">Main Slider</a>
													</li>
													<li>
														<a data-barba href="home-2.html">Main Dark</a>
													</li>
													<li>
														<a data-barba href="home-3.html">Simple Slider</a>
													</li>
													<li>
														<a data-barba href="home-4.html">Bold Light</a>
													</li>
													<li>
														<a data-barba href="home-5.html">Static Header Dark</a>
													</li>
													<li>
														<a data-barba href="home-6.html">Personal</a>
													</li>
													<li>
														<a data-barba href="projectSlider-1.html">Project Slider</a>
													</li>
												</ul>
											</li> -->
										</ul>
									</div>
								</div>

								<!-- <div class="nav__content__right">
									<div class="nav__info">
										<div class="nav__info__item js-navInfo-item">
											<h5 class="text-sm tracking-none fw-500">
												Address
											</h5>

											<div class="nav__info__content text-lg text-white mt-16">
												<p>
													Studio Stukram 1910 Gateway Road, Portland, Oregon 97230
												</p>
											</div>
										</div>

										<div class="nav__info__item js-navInfo-item">
											<h5 class="text-sm tracking-none fw-500">
												Socials
											</h5>

											<div class="nav__info__content text-lg text-white mt-16">
												<a href="#">Behance</a>
												<a href="#">Dribbble</a>
												<a href="#">Facebook</a>
												<a href="#">Twitter</a>
											</div>
										</div>

										<div class="nav__info__item js-navInfo-item">
											<h5 class="text-sm tracking-none fw-500">
												Contact Us
											</h5>

											<div class="nav__info__content text-lg text-white mt-16">
												<a href="#">hello@stukram.com</a>
												<a href="#">+1 202 555 0171</a>
											</div>
										</div>
									</div>
								</div> -->
							</div>
						</div>
					</div>
				</nav>
				<!-- nav end -->
			</header>
			<!-- header end -->