<?php
/*
Template Name: Asesorías Jurídicas
*/

get_header();

if (have_posts()):the_post();

get_template_part('template-parts/page-header');

?>

<section id="asesorias" class="container">

  <div class="row">

    <div class="col-12">
      <?php echo the_content(); ?>
    </div>

    <?php
    $args = array(
      'post_type' => 'asesorias-cpt',
      'order' => 'ASC'
    );
    $q = new WP_Query($args);
    while ($q->have_posts()): $q->the_post();
    ?>

    <div class="areas-item col-12 col-sm-6 col-lg-4">
      <div class="row">

        <div class="areas-image col-12 no-padding imgLiquid imgLiquidNoFill">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Coello Trajo Abogados Asesorías Jurídicas">
        </div>
        <div class="areas-title col-12 text-center">
          <h5><?php echo get_the_title(); ?></h5>
          <a href="<?php echo get_the_permalink($q->id());?>">Ver más ></a>
        </div>
      </div>
    </div>


    <?php

  endwhile;
  ?>

</div>

</section>


<?php
else:
  echo "No hay Asesorías Jurídicas que mostrar!";
endif;

get_footer();
