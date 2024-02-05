<?php

/**
 * Template Name: About Us
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<?php get_header(); ?>


      <!-- section start -->
      <section data-anim-wrap class="layout-mt-headerBar h-md md:h-70vh">
        <div data-anim-child="img-right cover-white delay-2" class="bg-fill-image">
          <div data-parallax="0.7" class="h-full overlay-black-sm">
            <div data-parallax-target class="bg-image js-lazy" data-bg="img/backgrounds/6.jpg"></div>
          </div>
        </div>
      </section>
      <!-- section end -->


      <!-- section start -->
      <section class="layout-pt-lg layout-pb-lg">
        <!-- container start -->
        <div class="container">

          <!-- row start -->
          <div class="row justify-content-center text-center">
            <div class="col-lg-7">
              <div class="sectionHeading -lg">
                <!-- <p class="sectionHeading__subtitle">
                  Historia
                </p> -->
                <h2 class="sectionHeading__title">
                  <?php echo single_post_title()?>
                </h2>
              </div>
            </div>
          </div>
          <!-- row end -->

          <!-- row start -->
          <div class="row x-gap-32 y-gap-32 layout-pt-md">

            <div class="col-lg-3 col-sm-6">
              <div data-anim="slide-up delay-1" class="clientsItem -hover ratio ratio-1:1 border-dark rounded-4">
                <div class="clientsItem__img">
                  <img class="col-9" src="img/clients/dark/1.png" alt="Client">
                </div>

                <div class="clientsItem__content">
                  <h5 class="clientsItem__title text-2xl text-white">
                    Acme Inc.
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div data-anim="slide-up delay-1" class="clientsItem -hover ratio ratio-1:1 border-dark rounded-4">
                <div class="clientsItem__img">
                  <img class="col-9" src="img/clients/dark/2.png" alt="Client">
                </div>

                <div class="clientsItem__content">
                  <h5 class="clientsItem__title text-2xl text-white">
                    Acme Inc.
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div data-anim="slide-up delay-1" class="clientsItem -hover ratio ratio-1:1 border-dark rounded-4">
                <div class="clientsItem__img">
                  <img class="col-9" src="img/clients/dark/3.png" alt="Client">
                </div>

                <div class="clientsItem__content">
                  <h5 class="clientsItem__title text-2xl text-white">
                    Acme Inc.
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div data-anim="slide-up delay-1" class="clientsItem -hover ratio ratio-1:1 border-dark rounded-4">
                <div class="clientsItem__img">
                  <img class="col-9" src="img/clients/dark/4.png" alt="Client">
                </div>

                <div class="clientsItem__content">
                  <h5 class="clientsItem__title text-2xl text-white">
                    Acme Inc.
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div data-anim="slide-up delay-1" class="clientsItem -hover ratio ratio-1:1 border-dark rounded-4">
                <div class="clientsItem__img">
                  <img class="col-9" src="img/clients/dark/5.png" alt="Client">
                </div>

                <div class="clientsItem__content">
                  <h5 class="clientsItem__title text-2xl text-white">
                    Acme Inc.
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div data-anim="slide-up delay-1" class="clientsItem -hover ratio ratio-1:1 border-dark rounded-4">
                <div class="clientsItem__img">
                  <img class="col-9" src="img/clients/dark/6.png" alt="Client">
                </div>

                <div class="clientsItem__content">
                  <h5 class="clientsItem__title text-2xl text-white">
                    Acme Inc.
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div data-anim="slide-up delay-1" class="clientsItem -hover ratio ratio-1:1 border-dark rounded-4">
                <div class="clientsItem__img">
                  <img class="col-9" src="img/clients/dark/7.png" alt="Client">
                </div>

                <div class="clientsItem__content">
                  <h5 class="clientsItem__title text-2xl text-white">
                    Acme Inc.
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div data-anim="slide-up delay-1" class="clientsItem -hover ratio ratio-1:1 border-dark rounded-4">
                <div class="clientsItem__img">
                  <img class="col-9" src="img/clients/dark/8.png" alt="Client">
                </div>

                <div class="clientsItem__content">
                  <h5 class="clientsItem__title text-2xl text-white">
                    Acme Inc.
                  </h5>
                </div>
              </div>
            </div>

          </div>
          <!-- row end -->

        </div>
        <!-- container end -->
      </section>
      <!-- section end -->


      <!-- section start -->
      <section data-parallax="0.7" class="layout-pt-lg layout-pb-lg">
        <div data-parallax-target class="overlay-black-md bg-image js-lazy" data-bg="img/backgrounds/2.jpg"></div>

        <!-- container start -->
        <div class="container z-5">
          <!-- row start -->
          <div class="row justify-content-center text-center">
            <div class="col-12">
              <p class="text-sm uppercase tracking-lg text-white mb-20">
                Entre em contato
              </p>

              <h2 class="text-5xl sm:text-5xl xs:text-4xl leading-sm fw-700 text-white">
                Anuncie com a gente !
              </h2>

              <a href="<?php echo home_url('/contato');?>" class="button -md -white text-black mt-32">
                Clique aqui
              </a>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
      </section>
      <!-- section end -->


<?php get_footer();?>