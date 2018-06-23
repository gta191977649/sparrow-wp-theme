<?php get_header(); ?>
	<div class="container" id="main-container">
    <div class="row mt-4">
		<div class="col-sm-9" id="main-content">
				<?php
					
				while ( have_posts() ) :
					?>
					<!--
					<div class="card mb-4">
						<div class="card-body">
						-->
					<?php
					the_post();
				
					get_template_part( 'content', get_post_format() );
					
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
				?>
							<!--
						</div>
					</div>
					-->
				
		
		</div><!-- #primary -->
		

<?php
get_sidebar();
get_footer();