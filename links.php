<?php
/*
    Template Name: Links
*/
?>

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

        </div>
    </div>
    <?php } ?>
    <div class="container">
    <div class="row pt-3">
        <div class="col-md-9">
       
        <h2 class="entry-title"><?php the_title(); ?></h2>
        <div class="row">
        <?php 
        
            $bookmarks = get_bookmarks();
            if ( !empty($bookmarks) ){
                foreach ($bookmarks as $bookmark) {
                    echo '<div class="col-sm-3" id="friend-link">';
                    echo '<a href="' . $bookmark->link_url . '" title="' . $bookmark->link_description . '" target="_blank" >'. get_avatar($bookmark->link_notes,64) .'</a>'.'<h3 class="friend-name">'.'<a href="' . $bookmark->link_url.'">' .$bookmark->link_name .'</a></h3>';
                    echo '<p class="friend-description font-italic">'.$bookmark->link_description.'</p>';
                    echo '</div>';
                }     
            }
        ?>
        </div>
        <?php 
        //正文
        while ( have_posts() ) :
            the_post();
            get_template_part( 'content-link', get_post_format() );
            
        endwhile;
        if ( comments_open() || get_comments_number() ) {
            comments_template();
        }
        ?>
        </div>
<?php get_sidebar();?>
<?php get_footer(); ?>
    