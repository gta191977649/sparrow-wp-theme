<?php get_header(); ?>

	<div class="col-9">
			<?php
				
			while ( have_posts() ) :
				the_post();
			
				get_template_part( 'content', get_post_format() );
				
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
				endwhile;
			?>
	
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();