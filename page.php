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
    
			</div> <!-- end #content -->

<?php get_footer(); ?>