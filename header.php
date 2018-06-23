<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo get_bloginfo('name') ?> - <?php echo get_bloginfo( 'description' )?></title>
        <?php wp_head(); ?>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-sparrow" role="navigation">
        <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><i class="fa fa-twitter" aria-hidden="true"></i> <?php echo get_bloginfo('name') ?></a>
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse justify-content-md-end',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
        </div>
        </nav>
        <div class="background-1"></div>
        <div class="background-2"></div>
                
        