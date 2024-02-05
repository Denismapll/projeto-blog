<?php

/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<!-- footer start -->
<footer class="footer -type-1 bg-dark-1">
	<!-- container start -->
	<div class="container">

		<div class="footer__top">
			<!-- row start -->
			<div class="row y-gap-48 justify-content-between">
				<div class="col-lg-auto col-sm-12">
					<a href="<?php echo home_url() ?>" class="footer__logo text-white">
						<?php echo get_bloginfo('name'); ?>
					</a>
				</div>

				<div class="col-lg-3 col-sm-6">
					<h4 class="text-xl fw-500 text-white">
						Studio
					</h4>

					<div class="footer__content text-base text-light mt-16 sm:mt-12">
						<p>Studio Stukram 1910 Gateway Road, Portland, Oregon 97230</p>
						<p class="mt-8">hello@stukram.com</p>
						<p class="mt-8">+1 202 555 0171</p>
					</div>
				</div>

				<?php $menu = wp_get_nav_menu_items('menu'); ?>

				<div class="col-lg-auto col-sm-4">
					<h4 class="text-xl fw-500 text-white">
						Links
					</h4>

					<div class="footer__content text-base text-light mt-16 sm:mt-12">
						<?php foreach ($menu as $item) : ?>
							<div><a data-barba href="<?php echo $item->url ?>" class="button -underline mt-4"><?php echo $item->title ?></a></div>
						<?php endforeach; ?>
						<!-- <div><a data-barba href="about-1.html" class="button -underline mt-4">Abous Us</a></div>
						<div><a data-barba href="#" class="button -underline mt-4">Shop</a></div>
						<div><a data-barba href="contact-1.html" class="button -underline mt-4">Contacts</a></div> -->
					</div>
				</div>



				<div class="col-lg-auto col-auto">
					<h4 class="text-xl fw-500 text-white">
						Follow us
					</h4>

					<div class="social -bordered mt-16 sm:mt-12">
						<a class="social__item text-white border-light" href="#">
							<svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
								<path d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z" />
							</svg>
						</a>
						<a class="social__item text-white border-light" href="#">
							<svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
								<path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
							</svg>
						</a>
						<a class="social__item text-white border-light" href="#">
							<svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
								<path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
							</svg>
						</a>
						<a class="social__item text-white border-light" href="#">
							<svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
								<path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" />
							</svg>
						</a>
					</div>
				</div>
			</div>
			<!-- row end -->
		</div>


		<div class="footer__bottom -light">
			<!-- row start -->
			<div class="row">
				<div class="col">
					<div class="footer__copyright">
						<p class="text-light">
							@ <?php echo date('Y'); ?>, <?php echo get_bloginfo('name') ?>. <?php echo get_bloginfo('description') ?>
						</p>
					</div>
				</div>
			</div>
			<!-- row end -->
		</div>

	</div>
	<!-- container end -->
</footer>
<!-- footer end -->


</main>

</div>
<!-- barba container end -->


<!-- JavaScript -->
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/vendors.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/main.js"></script>

</body>

</html>