
<?php get_header(); ?>
    <?php if ( get_theme_mod( 'welcome_img_enable' ) ) { ?>
    <div class="welcome-banner" style="background-image: url('<?php echo get_theme_mod( 'welcome_img_url' );?>');">
        <div class="container">
            <h1 id="welcome-title"><?php echo get_theme_mod('welcime_header_title'); ?></h1>
            <div id="welcome-description">
                <h2 style="color: inherit;"><?php echo get_theme_mod('welcime_header_description'); ?></h2>
            </div>
            <?php 
                if(get_theme_mod('img_credit_description') != null) {
                ?>
                <p class="text-white" style="text-shadow: 1px 2px 3px #666;"><?php echo get_theme_mod('img_credit_description') ?></p>
            <?php } ?>
            <!--
            <span id="a1">COLOR</span>
            <span id="a2">COLOR</span>
            <span id="a3">COLOR</span>
            <span id="a4">COLOR</span>
            <span id="a5">COLOR</span>
            -->
        </div>
    </div>
    <?php } ?>

    <div class="container" id="main-container">
    <div class="row mt-4" id="main-content">
        <div class="col-md-9">
        <?php if(have_posts()):
                while(have_posts()) : 
                    ?>
                    <div class="card mb-4">
                        <div class="card-body">
                            <?php
                                the_post(); 
                                get_template_part('content',get_post_format());
                            ?>
                        </div>
                    </div>
                <?php
                endwhile; 
            endif;
        ?>
        <?php the_posts_navigation();?>
        </div>
 
<?php get_sidebar();?>
<?php get_footer(); ?>
    