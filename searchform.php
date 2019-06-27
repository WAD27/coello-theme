<div class="col-12 no-padding sidebar-search">

  <!-- <h4 class="col-12 text-center">Busqueda</h4> -->
  <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input class="col-12" type="text" name="s" id="s" value="<?php get_search_query(); ?>" placeholder="Busqueda"/>
    <!-- <input class="col-4" type="image" alt="Busca" /> -->
  </form>

</div>
