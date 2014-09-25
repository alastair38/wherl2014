<?php
/*
Template Name: Home
*/
?>
        

        <?php get_header(); ?>
			
			<div id="content">
			
				<div id="home-inner-content" class="clearfix">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					  
                    					
<div class='slider'>
     <div class='slide' >
        <div class='slidecontent'>
            <div class="caption"><p><img src="http://localhost/wherl/wp-content/uploads/2014/09/inline-Wherl-Logo.png"></p></div> 
        </div>
    </div>
    <div class='slide'>
        <div class='slidecontent'>
             <div class="caption"><?php the_excerpt(); ?> </div> 
        </div>
    </div>
</div>
					    					
					    <?php endwhile; else : ?>
					

					    <?php endif; ?>
			
    				</div> <!-- end #main -->
    				

<!-- this loop gets the children of the current page, but not grandchildren-->
    				
                   
                	<?php
	$mypages = get_pages( array( 'child_of' => $post->ID, 'exclude' => '24', 'sort_order' => 'desc', 'parent' => $post->ID ) );

	foreach( $mypages as $page ) {		
		$content = $page->post_content;

		$content = apply_filters( 'the_content', $content );
	?>
		<div class="large-3 columns">
		<div class="home-links <?php echo $page->post_name; ?>">
		<h3><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h3>
		<?php echo $content; ?></div>
		</div>
	<?php
	}	
?>    
    
				    
				</div> <!-- end #inner-content -->
				
			
    
			</div> <!-- end #content -->

<?php get_footer(); ?>