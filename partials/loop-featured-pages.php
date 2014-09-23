
<?php
 
/*
*  Loop through post objects (assuming this is a multi-select field) ( setup postdata )
*  Using this method, you can use all the normal WP functions as the $post object is temporarily initialized within the loop
*  Read more: http://codex.wordpress.org/Template_Tags/get_posts#Reset_after_Postlists_with_offset
*/
 
$post_objects = get_field('featured_pages');
 
if( $post_objects ): ?>
   <div class="featured-pages">
    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
    
        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <?php $excerpt = strip_tags(get_the_excerpt());
        echo " &#45; " . $excerpt; ?>
        </p>
    <?php endforeach; ?>
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>