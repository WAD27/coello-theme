<?php
/*Default Page Template*/
get_header();
?>
<section id="page-header" class="container-fluid">
  <?php
  if (have_posts()):the_post();
  ?>
  <div class="page-header container-fluid">
    <div class="page-header-img col-12 imgLiquid imgLiquidFill">
      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Pagina Coello Trejo">
    </div>
    <div class="page-header-title row">
      <div class="col-12 ha my-auto text-left">
        <h1 class="col-12 "><?php echo the_title(); ?></h1>
      </div>
    </div>
  </div>

</section>
<!--  -->
<section id="page-content" class="container">
  <div class="row">

    <?php
    echo the_content();

  endif;
  ?>
</div>
</section>
<?php
get_footer();
