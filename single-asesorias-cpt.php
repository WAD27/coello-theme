<?php

get_header();

get_template_part('template-parts/page-header');

?>

<section id="single-asesorias" class="container">

  <div class="row">

    <div class="col-12 col-md-8">

      <?php

      echo get_field('asesoria_texto');


      ?>
    </div>
    <div class="asesorias-imagen col-12 col-md-4">
      <div class="col-12 imgLiquid imgLiquidFill">
        <img src="<?php echo get_field('asesoria_imagen'); ?>">
      </div>
    </div>



  </div>
</section>

<?php

get_footer();
