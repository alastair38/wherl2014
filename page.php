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
    				
                   
                	<?php
	$mypages = get_pages( array( 'child_of' => $post->ID, 'exclude' => '20', 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

	foreach( $mypages as $page ) {		
		$content = $page->post_content;

		$content = apply_filters( 'the_content', $content );
	?>
		<div class="large-3 columns">
		<div class="home-links">
		<h3><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h3>
		<?php echo $content; ?></div>
		</div>
	<?php
	}	
?>    
    
				    
				</div> <!-- end #inner-content -->
				
			
    
			</div> <!-- end #content -->

<?php get_footer(); ?>