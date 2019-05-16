<header id="header" class="container-fluid no-padding">

  <div id="top-header" class="row top-header">

    <div class="d-none d-lg-block  col-lg-5 col-xl-6">
      <!-- div complementario -->
    </div>
    <div class="col-12 col-lg-7 col-xl-6">
      <div class="row">
        <div class="col-12 col-sm-6 my-auto text-center">
          <a href="mailto:administracion@coellotrejo.com">
            <i class="fa fa-envelope">&nbsp;administracion@coellotrejo.com</i>
          </a>
        </div>
        <div class="col-12 col-sm-6 my-auto text-center">
          <a class="col-6" href="tel:55545656">
            <i class="fa fa-phone"></i>
            &nbsp;5554 5656
          </a>
          <a class="col-6" href="tel:55545656">
            <i class="fa fa-phone"></i>
            &nbsp;5563 3414
          </a>
        </div>
      </div>
    </div>

  </div>

  <nav id="menu" class="navbar navbar-expand-lg navbar-light bg-ligh">

    <div class="col-7 col-sm-4 col-md-3 col-lg-2 navbar-brand">
      <a href="<?php echo home_url(); ?>" alt="Link a Inicio Coello Trejo">
        <div id="header-logo" class="d-none d-lg-block imgLiquid imgLiquidNoFill">

          <?php
          $custom_logo_id = get_theme_mod('custom_logo');
          $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id ,'full');
          ?>
          <img src="<?php echo $custom_logo_url;?>" alt="Coello Trejo Abogados Logo">

        </div>
        <div id="header-logo-mobile" class="d-block d-lg-none imgLiquid imgLiquidNoFillLeft">

          <?php
          $custom_logo_id = get_theme_mod('custom_logo');
          $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id ,'full');
          ?>
          <img src="<?php echo $custom_logo_url;?>" alt="Coello Trejo Abogados Logo">

        </div>
      </a>

    </div>
    <!--  -->
      <button class="navbar-toggler navbar-toggler-right custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <!--  -->
    <div class="container col-10 d-none d-lg-block" id="navbarDesktop">

      <?php wp_nav_menu( array('theme_location' => 'desktop-menu')); ?>

    </div>
    <div class="collapse text-center" id="navbarSupportedContent">

      <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu')); ?>

    </div>

  </nav>
</header>
