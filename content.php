
<h2><?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?></h2>
<hr/>
<small>Posted on <?php the_time("F j, Y");?> | by <?php the_author() ?> </small>
<p><?php the_content(); ?></p>
<small>Category <?php the_category();?> </small>