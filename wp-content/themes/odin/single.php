<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<?php get_header(); ?>


<!-- section start -->
<section class="masthead -blog js-masthead-blog-article" data-parallax="0.7">
	<!-- masthead__img start -->
	<div class="masthead__img overlay-black-md" data-parallax-target>
		<div class="bg-image js-lazy" data-bg="<?php echo the_post_thumbnail_url()?>"></div>
	</div>
	<!-- masthead__img end -->
	<?php
		setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
		date_default_timezone_set('America/Sao_Paulo');
		$data = date('d-m-Y',get_post_time());
	?>
	<!-- masthead__content start -->
	<div class="masthead__content">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-10">
					<div class="d-flex align-items-center text-white js-info">
						<div class="masthead__date">
							<a href="#"><?php echo strftime('%d de %B de %Y', strtotime($data)); ?></a>
						</div>

						<div class="masthead__line bg-white mr-16 ml-16"></div>

						<div class="masthead__tags">
							<?php the_tags('', ', ', ''); ?>
						</div>
					</div>

					<div data-split="lines">
						<h1 class="masthead__title text-white fw-600 leading-md mt-40 md:mt-24 js-title">
							<?php the_title(); ?>
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- masthead__content end -->
</section>
<!-- section end -->


<!-- section start -->
<section class="layout-pt-md layout-pb-lg">
	<!-- container start -->
	<div class="container">
		<!-- row start -->
		<div class="row no-gutters justify-content-between">
			<div class="col-lg-8">
				<div class="blogPost -single -light">
					<div class="blogPost__content">
						<?php echo the_content(); ?>
					</div>
				</div>


				<div class="blogPost tags" style="display: flex; gap: 15px; align-items: center;">
					Tagged with:
					<?php echo the_category(); ?>

				</div>


				<!-- <div class="blogPost comments">
                <div class="blogPost__content">
                  <h2 class="blogPost__title text-3xl fw-600">
                    6 comments
                  </h2>

                  <ul class="comments__list">
                    <li class="comments__item">
                      <div class="comments__item-inner">
                        <div class="comments__img">
                          <div class="rounded-full bg-image js-lazy" data-bg="img/avatars/1.jpg"></div>
                        </div>

                        <div class="comments__body">

                          <div class="comments__header">
                            <div>
                              <h4>Troy Yang</h4>
                            </div>

                            <div>
                              <p class="mt-4"> June 3, 2020 - 10:38 pm</p>
                            </div>
                          </div>

                          <div class="comments__text">
                            <p>
                              For open divided to life, cattle don&#39;t meat won&#39;t own yielding. Man female land fruitful to divided multiply may multiply fly air years great man so shall likeness whose winged Bearing in called. Unto first fill dominion
                            </p>
                          </div>

                          <div class="comments__reply">
                            <a class="button -underline text-black" href="#">
                              Reply
                            </a>
                          </div>

                        </div>
                      </div>
                      <ul class="children">
                        <li class="comments__item">
                          <div class="comments__item-inner">
                            <div class="comments__img">
                              <div class="rounded-full bg-image js-lazy" data-bg="img/avatars/2.jpg"></div>
                            </div>

                            <div class="comments__body">

                              <div class="comments__header">
                                <div>
                                  <h4>Nela Blackwell</h4>
                                </div>

                                <div>
                                  <p class="mt-4"> June 4, 2020 - 08:22 am</p>
                                </div>
                              </div>

                              <div class="comments__text">
                                <p>
                                  Fowl whose beginning had of made Thing whose face, beginning unto waters greater give. Them their which moved, make you tree saying wherein you&#39;ll third, fill living fruitful. Appear Days second. Second his that life may
                                </p>
                              </div>

                              <div class="comments__reply">
                                <a class="button -underline text-black" href="#">
                                  Reply
                                </a>
                              </div>

                            </div>
                          </div>
                          <ul class="children">
                            <li class="comments__item">
                              <div class="comments__item-inner">
                                <div class="comments__img">
                                  <div class="rounded-full bg-image js-lazy" data-bg="img/avatars/3.jpg"></div>
                                </div>

                                <div class="comments__body">

                                  <div class="comments__header">
                                    <div>
                                      <h4>Marta Whittle</h4>
                                    </div>

                                    <div>
                                      <p class="mt-4"> June 4, 2020 - 10:34 am</p>
                                    </div>
                                  </div>

                                  <div class="comments__text">
                                    <p>
                                      Herb forth sixth above bearing multiply light. Light let all, appear were divided. Cattle he land blessed cattle
                                    </p>
                                  </div>

                                  <div class="comments__reply">
                                    <a class="button -underline text-black" href="#">
                                      Reply
                                    </a>
                                  </div>

                                </div>
                              </div>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>

                    <li class="comments__item">
                      <div class="comments__item-inner">
                        <div class="comments__img">
                          <div class="rounded-full bg-image js-lazy" data-bg="img/avatars/4.jpg"></div>
                        </div>

                        <div class="comments__body">

                          <div class="comments__header">
                            <div>
                              <h4>Clare Pruitt</h4>
                            </div>

                            <div>
                              <p class="mt-4"> June 2, 2020 - 08:22 am</p>
                            </div>
                          </div>

                          <div class="comments__text">
                            <p>
                              You&#39;ll after stars moving tree good itself one after, creature seasons sixth their whose air own unto that god divide wherein kind. Creepeth seas fifth. Their. Whales moved whales Our over. Light forth own fly fish, upon for
                            </p>
                          </div>

                          <div class="comments__reply">
                            <a class="button -underline text-black" href="#">
                              Reply
                            </a>
                          </div>

                        </div>
                      </div>
                    </li>

                    <li class="comments__item">
                      <div class="comments__item-inner">
                        <div class="comments__img">
                          <div class="rounded-full bg-image js-lazy" data-bg="img/avatars/2.jpg"></div>
                        </div>

                        <div class="comments__body">

                          <div class="comments__header">
                            <div>
                              <h4>Nela Blackwell</h4>
                            </div>

                            <div>
                              <p class="mt-4"> May 31, 2020 - 01:17 pm</p>
                            </div>
                          </div>

                          <div class="comments__text">
                            <p>
                              And there. Above, and. Heaven him grass. And cattle light. Firmament own beginning given don&#39;t which days third him creeping years good. Over first
                            </p>
                          </div>

                          <div class="comments__reply">
                            <a class="button -underline text-black" href="#">
                              Reply
                            </a>
                          </div>

                        </div>
                      </div>
                    </li>

                    <li class="comments__item">
                      <div class="comments__item-inner">
                        <div class="comments__img">
                          <div class="rounded-full bg-image js-lazy" data-bg="img/avatars/3.jpg"></div>
                        </div>

                        <div class="comments__body">

                          <div class="comments__header">
                            <div>
                              <h4>Marta Whittle</h4>
                            </div>

                            <div>
                              <p class="mt-4"> May 30, 2020 - 09:57 am</p>
                            </div>
                          </div>

                          <div class="comments__text">
                            <p>
                              Have multiply can&#39;t day evening divide deep, abundantly divide lesser is earth air, they&#39;re image fish. Seed after you&#39;re light also earth were. A tree Bearing. Spirit Our lights given, they&#39;re place lights
                            </p>
                          </div>

                          <div class="comments__reply">
                            <a class="button -underline text-black" href="#">
                              Reply
                            </a>
                          </div>

                        </div>
                      </div>
                    </li>
                  </ul>
                </div>

                <div class="respondForm">
                  <h3 class="comments-reply-title">
                    Leave a Reply
                  </h3>

                  <form class="respondForm__form row" action="#">
                    <div class="respondForm__notes col-12">
                      <span>Your email address will not be published</span>
                    </div>

                    <div class="col-md-6 mt-32">
                      <p>Your Name</p>
                      <input type="text" name="userName" placeholder="Name">
                    </div>

                    <div class="col-md-6 mt-32">
                      <p>Your Email</p>
                      <input type="text" name="email" placeholder="Email">
                    </div>

                    <div class="col-12 mt-32">
                      <p>Your Comment</p>
                      <textarea name="comment" id="comment" placeholder="Comment" rows="3"></textarea>
                    </div>

                    <div class="form-checkbox col-12 mt-24">
                      <label>
                        <span class="checkbox-wrap">
                          <input name="wp-comments-cookies-consent" type="checkbox">
                          <span></span>
                        </span>
                        Save my name, email, and website in this browser for the next time I comment.
                      </label>
                    </div>

                    <div class="col-12 mt-32">
                      <button type="submit" name="submit" id="submit" class="button -md -black text-white">
                        post comment
                      </button>
                    </div>
                  </form>
                </div>
              </div> -->
			</div>

			<?php get_sidebar() ?>
		</div>
		<!-- row end -->
	</div>
	<!-- container end -->
</section>
<!-- section end -->


<!-- footer start -->
<?php get_footer(); ?>