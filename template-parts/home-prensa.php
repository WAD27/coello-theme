<section id="inicio-prensa" class="container-fluid">

  <div class="row">

    <h2 class="col-12 text-center">Sala de prensa</h2>

    <div class="container">
      <div class="row">

        <?php
        $args = array(
          'cat' => 4,
          'posts_per_page' => 3
        );
        $q = new WP_Query($args);
        if ($q->have_posts())://$q->the_post();

          while ($q->have_posts()):$q->the_post();

          ?>
          <article id="prensa-card" class="col-xs-12 col-md-6 col-lg-4">

            <a class="col-12 no-padding" href="<?php echo get_the_permalink(); ?>">

              <div id="prensa-card-img" class="col-12 imgLiquid imgLiquidFill">
                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="Archivo Coello Trejo">
              </div>

              <h4 class="col-12"><?php echo the_title(); ?></h4>
              <div class="col-12 no-padding"><?php echo get_excerpt(); ?></div>
              <p class="col-12 text-right"><small><?php echo get_the_date(); ?></small></p>

            </a>


          </article>


        <?php endwhile; ?>
      </div>
      <?php
    endif;
    ?>

  </div>

<div id="inicio-prensa-link" class="col-12 text-center">
  <a href="<?php echo get_category_link(4); ?>"> Visita todos los comunicados de prensa</a>
</div>

</div>

</div>
</section>
