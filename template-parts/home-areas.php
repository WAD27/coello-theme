<section id="inicio-areas" class="container-fluid">

  <div class="row">

    <div class="container">
      <div class="row">
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

          <div class="areas-item col-12 col-sm-6 col-lg-4">
            <div class="row">

              <div class="col-12">
              <div class="areas-image col-12 no-padding imgLiquid imgLiquidFill">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Coello Trajo Abogados Asesorías Jurídicas">
              </div>
              </div>
              <div class="areas-title col-12 text-center">
                <h5><?php echo get_the_title(); ?></h5>
                <a href="<?php echo get_the_permalink($q->id());?>">Ver más ></a>
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

</div>
</section>
