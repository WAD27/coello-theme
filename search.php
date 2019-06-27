<?php

get_header();

get_template_part('template-parts/page-header');

?>

<section id="search-result" class="container">

  <div class="row">

    <div class="serach-content-area col-12 col-md-8 col-lg-9">

      <?php
      $s=get_search_query();
      $args = array(
        's' =>$s
      );
      // The Query
      $q = new WP_Query($args);
      if ($q->have_posts()):
        ?>
        <hr>
        <ul class="search-list col-12">
          <?php
          while ($q->have_posts()):
            $q->the_post();
            ?>
            <li class="col-12">
              <a class="row" href="<?php echo the_permalink(); ?>">
                <div class="search-post-img col-12 col-md-4 col-lg-3 imgLiquid imgLiquidFill">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Busqueda Coello Trejo">
                </div>
                <div class="col-12 col-md-8 col-lg-9">
                  <?php echo the_title(); ?>
                </div>
              </a>
            </li>
            <hr>
            <?php
          endwhile;
          ?>
        </ul>
        <?php
      else:
        ?>
        <h2 class="col-12 text-center">No hay resultados</h2>

        <div class="alert alert-info">
          <p>Lo sentimos no hemos encontrado lo que buscas, intenta de nuevo con otro criterio de busqueda.</p>
        </div>

      <?php endif; ?>

    </div>
    <div class="col-12 col-md-4 col-lg-3">
      <?php echo get_sidebar(); ?>
    </div>
  </div>

</section>

<?php

get_footer();
