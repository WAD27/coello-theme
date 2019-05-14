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
        <a class="contact-link" href="mailto:<?php echo get_field('contacto_email');?>">
        <?php echo the_field('contacto_email'); ?>
      </a>
    </div>
    </div>
  </div>

</section>

<?php

endif;
get_footer();
