
<?php get_header(); ?>
<header class="page-header">
	

    <div class="container" id="main-container">
    <div class="row mt-4" id="main-content">
    
        <div class="col-md-9">
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
            <h3 class="alert-heading"><?php printf( esc_html__( '搜索关键字: %s'), '<span>' . get_search_query() . '</span>' ); ?></h3>
            <hr>
            <?php $allsearch = new WP_Query("s=$s&showposts=0"); ?>
            <p>查询到<strong> <?php echo $allsearch ->found_posts;?></strong> 条相关的文章</p>
        </div>
     
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
    