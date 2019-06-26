<?php

get_header();

get_template_part('template-parts/page-header');
?>

<section id="blog-single" class="container-fluid">

  <?php
  if (have_posts()):the_post();
  ?>
  <article class="col-xs-12 col-md-9 col-lg-10">
    <div class="col-12">
      <?php //echo the_content(); ?>
    </div>
  </article>
  <!--  -->
  <div class="col-xs-12 col-md-3 col-lg-2">
    <?php //echo dynamic_sidebar("coello-blog-sidebar"); ?>
  </div>
<?php endif; ?>
</section>


<?php
get_footer();
