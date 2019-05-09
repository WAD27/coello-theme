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

  <nav id="menu" class="navbar navbar-expand-lg navbar-light bg-ligh">

    <div class="col-8 col-sm-4 col-md-3 col-lg-2 navbar-brand">

      <div id="header-logo" class="imgLiquid imgLiquidNoFill">

        <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id ,'full');
        ?>
        <img src="<?php echo $custom_logo_url;?>" alt="Coello Trejo Abogados Logo">

      </div>

    </div>
    <!--  -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!--  -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>

  </nav>
</header>
