
<?php get_header(); ?>
    <?php if ( get_theme_mod( 'welcome_img_enable' ) ) { ?>
    <div class="welcome-banner" style="background-image: url('<?php echo get_theme_mod( 'welcome_img_url' );?>');">
        <div class="container">
        <h1>
        欢迎来到禾雀飛翔 </h1>
        <p>
        一只宅的博客，不定期更新、分享各种技术类的心得~ </p>
        <a href="#content" class="page-scroller"><i class="fa fa-fw fa-angle-down"></i></a>
        </div>
    </div>
    <?php } ?>
    <div class="container">
    <div class="row">
        
        <div class="col-9">
        <?php if(have_posts()):
                while(have_posts()) : the_post(); ?>
                
                <?php get_template_part('content',get_post_format()); ?>
                
                <?php
                endwhile;
            endif;
        ?>
        </div>
 
<?php get_sidebar();?>
<?php get_footer(); ?>
    