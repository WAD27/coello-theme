<?php
/*Default Page Template*/
get_header();


if (have_posts()):the_post();

get_template_part('template-parts/page-header');
?>

<!--  -->
<section id="page-content" class="container">

  <div class="col-12">

    <?php
    echo the_content();

    ?>
  </div>
  <?php
endif;
?>
</section>
<?php
get_footer();
