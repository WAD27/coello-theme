<aside id="blog-sidebar" class="col-12">

  <div id="sidebar-search" class="col-12 no-padding">
    <?php echo get_search_form(); ?>
  </div>

  <hr>

  <h4 class="col-12 text-center no-padding">
    Prensa Últimas
  </h4>

  <div class="row">

    <?php
    $args = array(
      'category_name' => 'sala-de-prensa',
      'posts_per_page' => 4
    );
    $post = new WP_Query($args);
    while ($post->have_posts()):$post->the_post();
    ?>

    <article class="latest-post col-12">

      <a class="latest-post-link col-12 no-padding" href="<?php echo get_the_permalink(); ?>">

        <div class="latest-post-img col-12 imgLiquid imgLiquidFill">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Coello Trejo Blog">
        </div>

        <div class="latest-post-txt col-12 no-padding">

          <h6 class="col-12 no-padding"><?php echo the_title(); ?></h6>
          <p class="col-12 text-center no-padding"><small><?php echo get_the_date(); ?></small></p>
          <p class="col-12 no-padding text-right"><small>... Leer Más</small></p>

        </div>

      </a>

    </article>


  <?php endwhile; ?>
</div>

</aside>
