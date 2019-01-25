<?php get_header(); ?>

	<?php if (have_posts()) : ?>
   		<?php while ( have_posts() ) : the_post();
   			if(is_sticky() == 1)
      			get_template_part( 'template-parts/post/content-sticky', get_post_format() );
      		else
      			get_template_part( 'template-parts/post/content', get_post_format() );
   		endwhile; ?>
   		</div>

	   	<div class="col-sm-12 col-md-12 col-lg-3 navigation">
			<div class="alignleft"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php next_posts_link('Next Entries &raquo;','') ?></div>
		</div>
	<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>