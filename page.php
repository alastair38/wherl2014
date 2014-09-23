<?php
/*
Template Name: Home
*/
?>
        

        <?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="clearfix">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					   <div class="caption">Project details here and link to parent project page</div> 
					    					
					    <?php endwhile; else : ?>
					

					    <?php endif; ?>
			
    				</div> <!-- end #main -->
    				
                    <div id="" class="large-3 medium-4 small-12 columns" role="aside"><img src="http://placehold.it/308x215/8e3c2f/ffffff&text=Partners"></div>
                    <div id="" class="large-3 medium-4 small-12 columns" role="aside"><img src="http://placehold.it/308x215/cdaf6a/ffffff&text=People"></div>
                    <div id="" class="large-3 medium-4 small-12 columns" role="aside"><img src="http://placehold.it/308x215/66ccc5/ffffff&text=Findings"></div>
                    <div id="" class="large-3 medium-4 small-12 columns" role="aside"><img src="http://placehold.it/308x215/4fc451/ffffff&text=News"></div>
                    
    
				    
				</div> <!-- end #inner-content -->
				
				<?php
	$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

	foreach( $mypages as $page ) {		
		$content = $page->post_content;

		$content = apply_filters( 'the_content', $content );
	?>
		<h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>
		<div class="entry"><?php echo $content; ?></div>
	<?php
	}	
?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>