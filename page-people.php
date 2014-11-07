<?php
/*
Template Name: Main People Landing Page
*/
?>
        

        <?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="clearfix">
			
				    <div id="main-people" class="large-12 medium-12 columns" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					    
					    <header class="article-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header> <!-- end article header -->
					
					  
                    					<?php the_excerpt(); ?>
                    					
                    								    								    					
					    <?php endwhile; else : ?>
					

					    <?php endif; ?>
			
    				
    				
    				
       <?php

   $args = array('post_type' => 'team', 'orderby'    => 'date',  'order'      => 'ASC');
   $teams = new WP_Query($args);

   if($teams->have_posts()) : 
      while($teams->have_posts()) : 
         $teams->the_post();
?> 
 
           
          <div class="large-4 medium-6 small-12 columns end">
          <a href="<?php the_permalink();?>"><div class="people">
              <h5><?php the_title(); ?></h5>
         <div class="people-excerpt"><?php the_excerpt(); ?></div>
              </div></a>
         </div>      
      
<?php
      endwhile;

   endif;
?>           
  </div> <!-- end #main -->
                      
				</div> <!-- end #inner-content -->
				
			
    
			</div> <!-- end #content -->

<?php get_footer(); ?>