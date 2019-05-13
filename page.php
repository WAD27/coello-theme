<?php
/*Default Page Template*/
get_header();

if (have_posts()):the_post();

echo the_content();

endif;
get_footer();
