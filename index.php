<?php

	get_header();

	if (have_posts()) :
   		while ( have_posts() ) : the_post();
      		get_template_part( 'template-parts/post/content', get_post_format() );
   		endwhile;
	endif;

	get_sidebar();
	get_footer(); 

?>