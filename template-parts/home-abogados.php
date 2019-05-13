<section id="inicio-abogados" class="container-fluid">

  <div class="row">

    <div class="container">
      <div class="row">
        <?php
        $args = array(
          'post_type' => 'abogados-cpt',
          'order' => 'ASC'
        );
        $q = new WP_Query($args);
        if ($q->have_posts()):
          ?>

          <h2 class="col-12 text-center"><?php echo "Nuestros Abogados"; ?></h2>

          <?php
          while ($q->have_posts()):$q->the_post();
          ?>

          <div class="abogados-item col-12 col-md-6 col-lg-4">
            <div class="abogado-card col-12 no-padding">

              <div class="inicio-abogado-header col-12 no-padding">
                <div class="inicio-abogado-header-image col-12 no-padding imgLiquid imgLiquidFill">
                  <img src="<?php echo the_field('imagen_header_abogado'); ?>" alt="Coello Abogados">
                </div>
              </div>
              <!--  -->
              <div class="inicio-abogado-content col-12">

                <div class="abogado-image col-12 no-padding imgLiquid imgLiquidNoFill">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Coello Trajo Abogados Asesorías Jurídicas">
                </div>
                <div class="abogado-title col-12 text-center">
                  <p><?php echo get_the_title(); ?></p>
                </div>
                <p class="abogado-position col-12 text-center"><?php echo the_field('posicion_abogado'); ?></p>
                <p class="abogado-type col-12 text-center"><?php echo the_field('tipo_de_abogado'); ?></p>
                <a class="abogado-envelope" href="mailto:<?php echo the_field('correo_abogado'); ?>"><i class="fa fa-envelope"></i></a>

              </div>

            </div>

          </div>

          <?php
        endwhile;
      else:
        echo "No hay Abogados para mostrar";
      endif;
      ?>
    </div>
  </div>

</div>
</section>
