<?php

get_header();

get_template_part('template-parts/page-header');
?>

<section id="blog-single" class="container-fluid">

  <div class="row">

    <?php
    if (have_posts()):the_post();
    ?>
    <article class="col-xs-12 col-md-8 col-lg-9">
      <div class="col-12">
        <?php echo the_content(); ?>
      </div>
    </article>
    <!--  -->
    <div class="col-xs-12 col-md-4 col-lg-3">
      <?php
      echo get_sidebar();
      ?>
    </div>
  <?php endif; ?>
</div>

</section>


<?php
get_footer();
