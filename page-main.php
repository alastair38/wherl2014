<?php
/*
Template Name: Main Landing Pages
*/
?>
        

        <?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="clearfix">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					    
					    <header class="article-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header> <!-- end article header -->
					
					  
                    					<?php the_excerpt(); ?>
                    					
                    								    								    					
					    <?php endwhile; else : ?>
					

					    <?php endif; ?>
			
    				</div> <!-- end #main -->
    				

<!-- this loop gets the children of the current page, but not grandchildren-->
    				
                   
                	<?php
	$mypages = get_pages( array( 'child_of' => $post->ID, 'exclude' => '24', 'sort_order' => 'desc', 'parent' => $post->ID ) );

	foreach( $mypages as $page ) {		
		$content = $page->post_content;
		$content = apply_filters( 'the_content', $content );
        $post_data = get_post($post->post_parent);
        
	?>
		<div class="large-4 columns">
		<div class="home-links <?php echo $post->post_name; ?>">
		<h3><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h3>
		<?php echo $content; ?></div>
		</div>
	<?php
	}	
?>    
    
				    
				</div> <!-- end #inner-content -->
				
			
    
			</div> <!-- end #content -->

<?php get_footer(); ?>