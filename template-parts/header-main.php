<header id="header" class="container-fluid">

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

  <nav id="menu" class="navbar nav">

    <div class="col-8 col-sm-4 col-md-3 col-lg-2 navbar-brand">

      <div id="header-logo" class="imgLiquid imgLiquidNoFill">

        <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id ,'full');
        ?>
        <img src="<?php echo $custom_logo_url;?>" alt="Coello Trejo Abogados Logo">

      </div>

    </div>

    <div class="col-4 col-sm-8 col-md-7 col-lg-10">

    </div>

  </nav>
</header>
