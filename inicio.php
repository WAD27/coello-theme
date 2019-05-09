<?php get_header();

get_template_part('template-parts/home-slider');

?>

<section class="container">

  <h1 class="text-center">
    <?php echo "Coello Trejo Abogados localhost"; ?>
  </h1>

  <div class="row">
    <?php
    if (have_posts()):
      while (have_posts()):

        the_post();

        echo the_content();

      endwhile;
    else:

      echo "No content for this page!";

    endif;
    ?>
  </div>
</section>


<?php get_footer(); ?>
