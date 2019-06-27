<?php
/*
Template Name: Search Page
*/

get_header();

get_template_part('template-parts/page-header');

 ?>


<section id="search-result" class="container">

  <div class="row">
  	<div class="serach-content-area col-12">

  			<?php get_search_form(); ?>

  	</div>
  </div>

</section>


 <?php

 get_footer();
