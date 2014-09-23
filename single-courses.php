<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>
			
			<div id="content">

				<div id="inner-content" class="row clearfix">
			
    				<div id="main" class="large-12 medium-12 columns clearfix" role="main">
    				
    				    <div id="body-content" class="large-12 medium-12 columns clearfix" role="main">

                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <?php get_template_part( 'partials/loop', 'courses' ); ?>
					    					
					    <?php endwhile; else : ?>
				
					    <?php endif; ?>
					    	  
                        </div> <!-- end body content -->
 
                        <div id="related-courses" class="large-12 medium-12 columns" role="">
                            
                            <?php

                            // The Query
                            $ids = get_field('departments', false, false);
                            $query = new WP_Query(array(
                                'post_type'      	=> 'courses',
                                'posts_per_page'	=> 3,
                                'post__not_in' => array($post->ID),
                                'post__in'		=> $ids,
                                'post_status'		=> 'any',
                                'orderby'        	=> 'rand',
                            ));

                            // The Loop
                            if ( $query->have_posts() ) {
                                echo '<div class="large-4 medium-4 columns" ><h4>Related Courses</h4>';
                                while ( $query->have_posts() ) {
                                    $query->the_post();
                                    echo '<p><a href="' . get_the_permalink(). '">' . get_the_title() . '</a></p>';
                                }
                                echo '</div>';
                            } else {
                                // no posts found
                            }
                            /* Restore original Post Data */
                            wp_reset_postdata();

                            ?>
               
                        </div> <!-- end #related-courses -->
                                             
                     </div> <!-- end #main -->			
			
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>