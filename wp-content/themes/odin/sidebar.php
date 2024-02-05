<?php
/**
 * The sidebar containing the secondary widget area, displays on homepage, archives and posts.
 *
 * If no active widgets in this sidebar, it will shows Recent Posts, Archives and Tag Cloud widgets.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<div class="col-lg-4">
							<aside class="blogSidebar widget_area">

								<!-- widget start -->
								<div class="widget widget_search">
									<div class="">
										<form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search__form" method="get" role="search">
											<div class="search__wrap">
												<input type="search" class="search__field" placeholder="Pesquisar" value="<?php echo get_search_query(); ?>" name="s" id="navbar-search">
												<button class="search__button">
													<i class="icon" data-feather="search"></i>
												</button>
											</div>
										</form>
									</div>
								</div>
								<!-- widget end -->


								<!-- widget start -->
								<div class="widget widget_categories">
									<h5 class="widget-title">
										Categories
									</h5>
									<?php $cat = get_categories(); ?>

									<ul>
										<?php foreach ($cat as $categoria) :
											// echo '<pre>';
											// print_r($categoria);
											// echo '</pre>';
										?>
											<li>
												<a href="<?php echo home_url()?>/<?php echo $categoria->taxonomy.'/';echo $categoria->slug ?>"><?php echo $categoria->name ?></a>
												(<?php echo $categoria->category_count ?>)
											</li>

											<!-- <li>
											<a href="#">UX/UI</a>
											(4)
										</li>
										<li>
											<a href="#">Web</a>
											(16)
										</li>
										<li>
											<a href="#">Creative</a>
											(23)
										</li> -->
										<?php endforeach; ?>
									</ul>
								</div>
								<!-- widget end -->


								<!-- widget start -->
								<div class="widget widget_recent_entries">
									<h5 class="widget-title">
										Postagens recentes
									</h5>

									<ul>
										<?php $posts = get_posts();
										setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
										date_default_timezone_set('America/Sao_Paulo');

										?>

										<!-- <pre>
											<?php //print_r($posts);
											?>
										</pre> -->


										<?php foreach ($posts as $postagem) :
											// $data = substr($postagem->post_date,8, 2).'-'.substr($postagem->post_date,5, 2).'-'.substr($postagem->post_date,0, 4)
											$data = date('d-M-Y', strtotime($postagem->post_date))
										?>
											<li>
												<span style="color: black; font-size: 14px; opacity: 0.7;" class="post-date"><?php echo strftime('%d de %B de %Y', strtotime($data)); ?></span>
												<a data-barba href="blog-article.html"><?php echo $postagem->post_title; ?></a>
											</li>
											<!-- <li>
											<span class="post-date">May 22, 2020</span>
											<a data-barba href="blog-article.html">Graphic Design: Tips and Best Practices</a>
										</li>
										<li>
											<span class="post-date">April 19, 2020</span>
											<a data-barba href="blog-article.html">Review of Popular Web Design Trends in 2020</a>
										</li> -->
										<?php endforeach; ?>
									</ul>
								</div>
								<!-- widget end -->



								<!-- widget start -->
								<?php $tags = get_tags(array (
									'taxonomy' => 'post_tag',
									'orderby' => 'name',
								)); ?>
								<div class="widget widget_tag_cloud">
									<h5 class="widget-title">
										Tags
									</h5>

									<div class="tagcloud">
										<?php foreach ($tags as $tag): ?>
										<a class="tag-cloud-link" href="<?php echo home_url()?>/tag/<?php echo $tag->slug?>"><?php echo $tag->name?> (<?php echo $tag->count?>)</a>
										<?php endforeach; ?>
									</div>
								</div>
								<!-- widget end -->

							</aside>
						</div>
