<?php 
 
$posts = get_field('featured_news');
 
if( $posts ): ?>
<div class="slider">
    <h5>Featured News</h5>
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        <div class="slide">
            <div class="slidecontent">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php the_post_thumbnail(array('50', '50')); ?><?php the_excerpt(); ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>


