<section class="container-fluid no-padding">

  <?php
  $args = array(
    'page_id' => '8',
    'order' => 'ASC'
  );
  $q = new WP_Query($args);
  if ($q->have_posts()):$q->the_post();
  /*
  En el editor de texto de la pagina, usa unicamente el shortcode de el formulario
  */
  $form = get_field('inicio_slider_form');
  //
  ?>
  <div id="home-form" class="d-none d-md-block col-12 col-md-5">

    <div class="row">
      <div class="ha col-12 col-md-10 col-lg-8 mx-auto my-auto">
        <h4 class="text-center">¿Como podemos ayudarte?</h4>
        <?php
        echo do_shortcode($form);
        ?>

      </div>
    </div>

  </div>
  <?php
endif;
?>
<div id="home-slider" class="home-slider col-12">
  <?php
  $args = array(
    'post_type' => 'slider-cpt',
    'order' => 'ASC'
  );
  $q = new WP_Query($args);
  if ($q->have_posts()):
    while ($q->have_posts()):
      $q->the_post();
      ?>
      <div class="row">

        <div class="home-slide col-12 imgLiquid imgLiquidFill">
          <img src="<?php echo the_post_thumbnail_url(); ?>" alt="Coello Trejo Home Page">
          <!--  -->
          <div class="home-slide-text col-12 col-md-7">

            <div class="row">
              <div class="col-10 col-md-12 col-lg-10 ha my-auto mx-auto">

                <h1 class="col-12"><?php echo the_field('slide-titulo'); ?></h1>
                <h5 class="col-12 d-none d-sm-block"><?php echo the_field('slide-subtitulo'); ?></h5>

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
