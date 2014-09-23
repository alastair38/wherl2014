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
					
					    <?php get_template_part( 'partials/loop', 'dept' ); ?>
					    					
					    <?php endwhile; else : ?>

					    <?php endif; ?>

                        </div> <!-- end #body-content -->
                    
                        <div id="related-courses" class="large-12 medium-12 columns first clearfix" role="aside">
               
                        <?php while ( have_posts() ) : the_post(); ?>
 
        				<article>
	
						<?php 
 
						/*
						*  Query posts for a relationship value.
						*  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
						*/

						$courses = get_posts(array(
							'post_type' => 'courses',
							'meta_query' => array(
								array(
									'key' => 'department', // name of custom field
									'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
									'compare' => 'LIKE'
								)
							)
						));
 
						?>
						<?php if( $courses ): ?>
				        <h4>Courses</h4>
				        <?php foreach( $courses as $course ): ?>
						<div class="large-4 medium-4 columns">		
				        <p>
				        <a href="<?php echo get_permalink( $course->ID ); ?>">
										
				        <?php echo get_the_title( $course->ID ); ?>
				        </a>
				        </p>
						</div>		
				        <?php endforeach; ?>
				        
						<?php endif; ?>
 
				        </article>
 
			            <?php endwhile; // end of the loop. ?>
                        </div> <!-- end #related-course -->
                        
                        <div id="related-staff" class="large-12 medium-12 columns clearfix" role="aside">
                        
                        <?php while ( have_posts() ) : the_post(); ?>
 
				        <article>
			
						<?php 
 
						/*
						*  Query posts for a relationship value.
						*  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
						*/

						$staff_members = get_posts(array(
							'post_type' => 'staff',
							'meta_query' => array(
								array(
									'key' => 'department', // name of custom field
									'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
									'compare' => 'LIKE'
								)
							)
						));
 
						?>
						<?php if( $staff_members ): ?>
				        <h4>Staff Members</h4>
				        <?php foreach( $staff_members as $staff_member ): ?>
						<div class="large-4 medium-4 columns">		
				        <p>
				        <a href="<?php echo get_permalink( $staff_member->ID ); ?>">
										
				        <?php echo get_the_title( $staff_member->ID ); ?>
				        </a>
				        </p>
						</div>		
				        <?php endforeach; ?>
				        
						<?php endif; ?>

				        </article>
 
	            		<?php endwhile; // end of the loop. ?>
      

                        </div> <!-- end #related-staff -->
                        
                        
                        
                    </div> <!-- end #main -->                                                   

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>