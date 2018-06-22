<?php
/*
    Template Name: Links
*/
?>

<?php get_header(); ?>

    <div class="container">
    <div class="row pt-3">
        <div class="col-9">
        <h2>友链</h2>
        <hr/>
        <?php 
            $bookmarks = get_bookmarks();
            if ( !empty($bookmarks) ){
                ?>
                <div class="row">
                <?php
                
                foreach ($bookmarks as $bookmark) {
                    echo '<div class="col-3" id="friend-link">';
                    echo '<a href="' . $bookmark->link_url . '" title="' . $bookmark->link_description . '" target="_blank" >'. get_avatar($bookmark->link_notes,64) .'</a>'.'<h5 class="name">'.'<a href="' . $bookmark->link_url.'">' .$bookmark->link_name .'</a></h5>';
                    echo '</div>';
                }
                ?>
                </div>
                <?php
                
            }
        ?>
        </div>
 
<?php get_sidebar();?>
<?php get_footer(); ?>
    