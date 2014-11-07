<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					
	<header class="article-header">	
	<div class="blog-thumbnail columns">
        <?php the_post_thumbnail('full',array( 'class' => 'test' ) ); 
        
if(get_post(get_post_thumbnail_id())->post_excerpt) {
				echo '<div class="blog-thumbnail-caption">Photo copyright: ' . get_post(get_post_thumbnail_id())->post_excerpt . '</div>'; }

        ?>
    </div>			
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
    </header> <!-- end article header -->
	 <?php get_template_part( 'partials/content', 'byline' ); ?>
        
       		
    <section class="entry-content clearfix" itemprop="articleBody">
	
		<?php the_content(); ?>
	
	 
	    
	</section> <!-- end article section -->
    <?php get_template_part( 'partials/content', 'share' ); ?>	
	<footer class="article-footer">
	
	
		<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>	</footer> <!-- end article footer -->
									
<?php
if ( is_user_logged_in() ) {	                                               comments_template(); 
}?>	
													
</article> <!-- end article -->