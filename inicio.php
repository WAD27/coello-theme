<?php get_header();

get_template_part('template-parts/home-slider');

?>

<section>

  <h1>
    <?php echo "Coello Trejo Abogados localhost"; ?>
  </h1>

  <p>
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
  </p>
</section>


<?php get_footer(); ?>
