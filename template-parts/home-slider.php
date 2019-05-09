<section class="container-fluid no-padding">

  <?php
  $args = array(
    'post_type' => 'slider-cpt',
    'order' => 'ASC'
  );
  $q = new WP_Query($args);
  if ($q->have_posts()):
    // $form = echo the_content();
    ?>
    <div id="home-form" class="col-lg-5">

      <div class="row">
        <div class="ha col-8 mx-auto my-auto">
          <h5 class="text-center">¿Como podemos ayudarte?</h5>
          <?php
          echo do_shortcode('[contact-form-7 id="21" title="Form slider"]');
          ?>

        </div>
      </div>

    </div>
    <div id="home-slider" class="home-slider col-12">
      <?php
      while ($q->have_posts()):
        $q->the_post();
        ?>
        <div class="row">

          <div class="home-slide col-12 imgLiquid imgLiquidFill">
            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="Coello Trejo Home Page">
            <!--  -->
            <div class="home-slide-text col-12 col-lg-7">

              <div class="row">
                <div class="col-10 ha my-auto mx-auto">

                  <h1 class="col-12"><?php echo the_field('slide-titulo'); ?></h1>
                  <h5 class="col-12"><?php echo the_field('slide-subtitulo'); ?></h5>

                  <div class="col-12 no-padding">
                    <a href="<?php echo the_field('link-boton'); ?>" class="button text-center">
                      <?php echo the_field('texto-boton'); ?>
                    </a>
                  </div>

                </div>
              </div>

            </div>

          </div>

        </div>

        <?php
      endwhile;
    else:

      echo "No existen slides!";
      ?>

    </div>

    <?php
  endif;
  ?>

</section>
