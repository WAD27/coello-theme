<!-- formulario para movil -->
<section id="home-form-mobile-wrap" class="container d-block d-md-none">
  <?php
  $args = array(
    'page_id' => '8',
    'order' => 'ASC'
  );
  $q = new WP_Query($args);
  if ($q->have_posts()):$q->the_post();

  $form = get_field('inicio_slider_form');
  //
  ?>
  <div id="home-form-mobile" class="d-block d-md-none col-12 col-md-5">

    <div class="row">
      <div class="ha col-12 col-md-10 col-lg-9 mx-auto my-auto">
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
</section>
<!--  -->
<section id="inicio-quien" class="container">

  <div class="row">
    <?php
    if (have_posts()):
      the_post();
      ?>
      <h2 class="col-12 text-center">
        <?php
        echo the_field('inicio_quienes_somos_titulo');
        ?>
      </h2>
      <div class="col-12">
        <p>
          <?php
          echo the_field('inicio_quienes_somos');
          ?>
        </p>
        <div class="inicio-quien-boton-wrap col-12 no-padding text-center">
          <a href="<?php echo the_field('inicio_quienes_somos_link'); ?>" class="button text-center">
            <?php echo the_field('inicio_quienes_somos_texto_boton'); ?>
          </a>
        </div>
      </div>

      <?php
    else:

      echo "No hay  contenido para la página Inicio!";

    endif;
    ?>
  </div>
</section>
