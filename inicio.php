<?php get_header();

get_template_part('template-parts/home-slider');

?>

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

<!-- seccion grid areas -->
<section id="inicio-areas" class="container">

  <div class="row">

    <div class="col-12">
      <?php
      $args = array(
        'post_type' => 'asesorias-cpt',
        'order' => 'ASC'
      );
      $q = new WP_Query($args);
      if ($q->have_posts()):
      ?>

      <h2 class="col-12 text-center"><?php echo "Áreas"; ?></h2>

      <?php
      while ($q->have_posts()):$q->the_post();
        ?>

        <div class="areas-item col-12 col-sm-6 col-md-4 col-lg-6">
          <div class="row">

            <div class="areas-image col-12 no-padding imgLiquid imgLiquidFill">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Coello Trajo Abogados Asesorías Jurídicas">
            </div>
            <div class="areas-title col-12 text-center">
              <?php echo get_the_title(); ?>
              <a href="#">Ver mas ></a>
            </div>
          </div>
        </div>

        <?php
      endwhile;
    else:
      echo "No hay post sobre Asesorías Jurídicas";
    endif;
    ?>
  </div>

</div>
</section>


<?php get_footer(); ?>
