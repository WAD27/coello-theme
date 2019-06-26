<?php

get_header();
// get_template_part('template-parts/page-header');
?>
<section id="archive" class="container">

  <h1 class="col-12 text-center"><?php echo single_cat_title(); ?></h1>
  <p><?php echo category_description(); ?></p>

  <?php
  if (have_posts()):
    ?>

    <!--  -->

    <div class="row">

      <?php
      while (have_posts()):the_post();
      ?>

      <article id="archive-card" class="col-xs-12 col-md-6 col-lg-4">

        <a class="col-12 no-padding" href="<?php echo get_the_permalink(); ?>">

          <div id="archive-card-img" class="col-12 imgLiquid imgLiquidFill">
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
</section>

<?php
get_footer();
