
<h2 class="entry-title">
    <?php the_title( '<a class="ml-2" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?>
</h2>
<span class="post-cat text-black-50 font-weight-light font-italic"><?php the_time("F j, Y");?> / <?php the_author() ?></span>
<p><?php the_content(); ?></p>

<span class="post-cat text-black-50 font-weight-light font-italic">归类 <?php the_category(' '); ?></span>
