<?php

get_header();

$title = get_thcategory();
$title = $title[0]->cat_name;
?>
<section id="archive-content" class="container">

<h1><?php echo $title; ?></h1>


<?php
if (have_posts()):

get_template_part('template-parts/page-header');
?>

<!--  -->

  <div class="row">

<?php
  while (have_posts()):the_post();
 ?>

<article class="col-12">

</article>


<?php endwhile; ?>
  </div>
  <?php
endif;
?>
</section>

<?php
get_footer();
