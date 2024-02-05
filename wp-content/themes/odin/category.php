<?php
/**
 * The template for displaying Category pages.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<!-- section start -->
<section class="layout-pt-xl layout-pb-md">
	<!-- container start -->
	<div class="container">
		<!-- row start -->
		<div class="row justify-content-center text-center">
			<div class="col-xl-7 col-lg-8">
				<ul class="breadcrumbs justify-content-center text-black mb-40">
					<li class="breadcrumbs-item">
						<a data-barba href="home-1.html">
							Home
						</a>
					</li>
					<li class="breadcrumbs-item active" aria-current="page">
						<?php echo get_bloginfo('name') ?>
					</li>
				</ul>

				<div class="sectionHeading -lg">
					<h1 class="sectionHeading__title">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
					</h1>
				</div>
			</div>
		</div>
		<!-- row end -->
	</div>
	<!-- container end -->
</section>
<!-- section end -->


<!-- section start -->
<section class="layout-pt-xs layout-pb-md">
	<!-- container start -->
	<div class="container">
		<!-- row start -->
		<div class="row no-gutters justify-content-between">

			<!-- posts start -->
			<div class="col-lg-8">

				<?php

				if (have_posts()) :
					while (have_posts()) : the_post(); ?>
						<!-- blog-item start -->
						<div class="blogPost">
							<a data-barba href="<?php echo the_permalink(); ?>">
								<div class="blogPost__img -hover">
									<div class="bg-image ratio ratio-16:9 js-lazy" data-bg="<?php echo the_post_thumbnail_url() ?>"></div>
								</div>
							</a>

							<!-- blog-content start -->
							<div class="blogPost__content mt-24">
								<div class="blogPost__info leading-md">
									<?php print_r(the_category()); ?>
								</div>

								<h3 class="blogPost__title text-2xl fw-600 mt-16">
									<a data-barba href="<?php echo the_permalink(); ?>">
										<?php the_title() ?>
									</a>
								</h3>

								<p class="blogPost__text text-base mt-12">
									<?php the_excerpt() ?>
								</p>

								<div class="blogPost__button text-black mt-12">
									<a href="<?php the_permalink(); ?>" data-barba class="button -underline fw-500">
										Ler mais
									</a>
								</div>
							</div>
							<!-- blog-content end -->
						</div>



				<?php
					endwhile;
				endif;

				?>
				<div class="pagination">
					<?php wordpress_pagination(); ?>
				</div>

				<style>
					.pagination span,
					.pagination a {
						margin: 7px;
					}

					.pagination span {
						color: red;
					}
				</style>
				<!-- <div class="blogPost-pagination">
								<div class="blogPost-pagination__wrap">
									<a class="is-active" href="#">1</a>
									<a href="#">2</a>
									<a href="#">3</a>
									<span>...</span>
									<a href="#">6</a>
								</div>
							</div> -->

			</div>
			<!-- posts end -->


			<!-- sidebar start -->
			<?php get_sidebar() ?>
			<!-- sidebar end -->

		</div>
		<!-- row end -->
	</div>
	<!-- container end -->
</section>
<!-- section end -->
<?php
get_footer();
