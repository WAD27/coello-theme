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
