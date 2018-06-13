<?php
/*
    ======================
        加载CSS,JS等
    ======================
*/
function sparrow_script_enqueue() {
    wp_enqueue_style( 'bootstrap','//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    //wp_enqueue_style( 'bootstrap-va11','//gta191977649.github.io/bootstrap-va11/scss/main.css');
    wp_enqueue_script('bootstrapjs', "//gta191977649.github.io/bootstrap-va11/js/bootstrap.js",array(),null,true);
}
add_action('wp_enqueue_scripts', 'sparrow_script_enqueue');
/*
    ======================
        导航栏
    ======================
*/
function sparrow_theme_setup() {
    add_theme_support( 'menus' );
    add_theme_support( 'post-formats',array('aside','image','video') );
    register_nav_menu("primary", "Main nav" );
}
add_action( "init", "sparrow_theme_setup");

/*
    ======================
        侧边栏
    ======================
*/
function sparrow_widget_setup() {
    register_sidebar(array(
        "name" => "侧边栏",
        "id" => "sidebar-left",
        'class' => "",
        "description" => "Main sidebar for widgets",
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
    ));
    /*
    register_sidebar(array(
        "name" => "sidebar",
        "id" => "sidebar-1",
        'class' => "",
        "description" => "Main sidebar for widgets",
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
    ));
    */
}

add_action( "widgets_init","sparrow_widget_setup");