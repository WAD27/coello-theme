<?php get_header();

get_template_part('template-parts/home-slider');

?>

<center>
  <h1>
    <?php echo "Coello Trejo Abogados localhost"; ?>
  </h1>
  <p>
    <?php
    for ($i=0; $i < 10; $i++) {
      echo "Coello Trejo Abogados localhost";
    }
    ?>
  </p>
</center>


<?php get_footer(); ?>
