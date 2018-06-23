<?php
require_once get_template_directory() . '/lib/class-wp-bootstrap-navwalker.php';

/*
    ======================
        加载CSS,JS等
    ======================
*/
function sparrow_script_enqueue() {
    wp_enqueue_style( 'bootstrap','//cdn.bootcss.com/bootstrap/4.1.1/css/bootstrap.min.css');
    wp_enqueue_style( 'custom', get_template_directory_uri()."/css/custom.css");

    wp_enqueue_style( 'background', get_template_directory_uri()."/css/background.css");
    wp_enqueue_style( 'main', get_template_directory_uri()."/css/main.css");
    //wp_enqueue_style( 'bootstrap-va11','//gta191977649.github.io/bootstrap-va11/scss/main.css');
    wp_enqueue_style( 'font-awsome','//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style( 'jquery-ui-css','//cdn.bootcss.com/jqueryui/1.12.1/jquery-ui.css');
    wp_enqueue_script('jquery', "//cdn.bootcss.com/jquery/3.3.1/jquery.min.js",array(),null,true);
    
    wp_enqueue_script('bootstrapjs', "//cdn.bootcss.com/bootstrap/4.1.1/js/bootstrap.min.js",array(),null,true);
    
    wp_enqueue_script('vibrant', get_template_directory_uri()."/js/vibrant.js",array(),null,true);
    wp_enqueue_script('effect', get_template_directory_uri()."/js/effect.js",array(),null,true);
    //wp_enqueue_script('backgroundjs', get_template_directory_uri()."/js/background.js",array(),null,true);
    //wp_enqueue_script('ajaxfy', get_template_directory_uri()."/js/ajaxfy.js",array(),null,true);
    
}
add_action('wp_enqueue_scripts', 'sparrow_script_enqueue');
/*
    ======================
        导航栏
    ======================
*/
function sparrow_theme_setup() {
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
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
        'before_widget' => '<div class="card mb-4 %2$s" id="%1$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<div class="card-header"><h3 class="widget-title">',
        'after_title'   => '</h3></div><div class="card-body">'
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
/*
    ======================
        注册主题自定义设定
    ======================
*/
function sparrow_customize_register( $wp_customize ) {
    /////////// 主题背景图片 ///////////////
    $wp_customize->add_section( 'custom_header_bk' , array(
        'title'      => '欢迎图片设置',
        'priority' => 20,
    ));
    $wp_customize->add_setting( 'welcome_img_enable' , array(
        'default'     => true,
        'transport' => 'refresh', 
    ));
  
    $wp_customize->add_control( 'welcome_img_enable', array(
        'label' => '开启欢迎图片',
        'section' => 'custom_header_bk',
        'settings' => 'welcome_img_enable',
        'type' => 'radio',
        'choices' => array(
            true => '开启',
            false => '关闭'
        ),
    ));
    $wp_customize->add_setting( 'welcome_img_url' , array(
        'default'     => '//api.th9.bid/random',
        'transport' => 'refresh', 
    ));

    $wp_customize->add_control( 'welcome_img_url', array(
        'label' => '图片URL',
        'section' => 'custom_header_bk',
        'settings' => 'welcome_img_url',
        'type' => 'text',
    ));
    /////// 欢迎图片文字设定 ///////
    $wp_customize->add_setting('welcime_header_title',array(
        'default' => get_bloginfo( 'name' ),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'welcime_header_title', array(
        'label' => 'Header标题',
        'section' => 'custom_header_bk',
        'settings' => 'welcime_header_title',
        'type' => 'text',
    ));
    $wp_customize->add_setting('welcime_header_description',array(
        'default' => get_bloginfo( 'description' ),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'welcime_header_description', array(
        'label' => 'Header描述',
        'section' => 'custom_header_bk',
        'settings' => 'welcime_header_description',
        'type' => 'text',
    ));

    $wp_customize->add_setting('img_credit_description',array(
        'default' => null,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'img_credit_description', array(
        'label' => '图片来源版权(*可选)',
        'section' => 'custom_header_bk',
        'settings' => 'img_credit_description',
        'type' => 'text',
    ));

    /////// 如果用户开启了欢迎自定义图片 ///////////
    /*
    if(get_theme_mod( 'welcome_img_enable' )) {
        $wp_customize->add_setting( 'welcome_img_random' , array(
            'default' => false,
            'transport' => 'refresh', 
        ));
        $wp_customize->add_control('welcome_img_random',array(
            'label' => '随机背景图片',
            'section' => 'custom_header_bk',
            'settings' => 'welcome_img_random',
            'type' => 'radio',
            'choices' => array(
                true => '开启',
                false => '关闭'
            ),
        ));
    } 
    */
    
 }
 add_action( 'customize_register', 'sparrow_customize_register' );
 add_filter( 'pre_option_link_manager_enabled', '__return_true' );
/*
    ======================
        Custom 评论显示样式
    ======================
*/
function bootstrap_comment( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment; 
    ?>
    <?php if ( $comment->comment_approved == '1' ): ?>
    <li class="media">
        <div class="media-left">
            <?php echo get_avatar( $comment ); ?>
        </div>
        <div class="media-body">
            <h4 class="media-heading">
                <?php comment_author_link() ?>
            </h4>
            <time>
                <a href="#comment-<?php comment_ID() ?>" pubdate>
                    <?php comment_date() ?> at <?php comment_time() ?>
                </a>
            </time>
            <?php comment_text() ?>
        </div>
    <?php endif;
}