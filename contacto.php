<?php
/*
Template Name: Contacto Coello
*/
get_header();

if (have_posts()):the_post();

get_template_part('template-parts/page-header');


?>

<section id="contact-content" class="container">
  <div class="contact-paragraph row">
    <div class="col-12">

      <?php echo get_the_content(); ?>

    </div>
  </div>

  <div class="contact-content row">
    <!--  -->
    <div class="contact-form col-12 col-md-8">
      <?php
      $field = get_field('contacto_shortcode');
      echo do_shortcode($field);
      ?>
    </div>
    <!--  -->
    <div class="contact-data col-12 col-md-4">
      <div class="contact-block col-12 no-padding">
        <h4>Dirección</h4>
        <?php echo get_field('contacto_direccion'); ?>
      </div>
      <div class="contact-block col-12 no-padding">
        <h4>Teléfonos</h4>
        <a class="contact-link" href="tel:<?php echo get_field('contacto_telefono_1');?>">
          <?php echo get_field('contacto_telefono_1'); ?>
        </a>
        <a class="contact-link" href="tel:<?php echo get_field('contacto_telefono_2');?>">
          <?php echo get_field('contacto_telefono_2'); ?>
        </a>
      </div>
      <div class="contact-block col-12 no-padding">
        <h4>Correo</h4>
        <a class="contact-link-email" href="mailto:<?php echo get_field('contacto_email');?>">
          <?php echo the_field('contacto_email'); ?>
        </a>
      </div>
    </div>
  </div>
  <div id="map" class="container">
    <div class="col-12 no-padding">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.9639889164523!2d-99.18860358568784!3d19.37071188691948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff888de2464f%3A0xaaae090bacbe4ad5!2sLos+Ju%C3%A1rez+32%2C+San+Jos%C3%A9+Insurgentes%2C+03900+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses!2smx!4v1559012815939!5m2!1ses!2smx" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>

</section>

<?php

endif;
get_footer();
