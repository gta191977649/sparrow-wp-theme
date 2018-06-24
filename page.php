<?php get_header(); ?>
	<div class="container" id="main-container">
    <div class="row mt-4">
		<div class="col-md-9" id="main-content">
				<?php
					
				while ( have_posts() ) :
					?>
					<!--
					<div class="card mb-4">
						<div class="card-body">
						-->
					<?php
					the_post();
				
					get_template_part( 'content-page', get_post_format() );
					
				
				endwhile;
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				?>
				
							<!--
						</div>
					</div>
					-->
				
		
		</div><!-- #primary -->
		

<?php
get_sidebar();
get_footer();