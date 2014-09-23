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
					
					    <?php get_template_part( 'partials/loop', 'staff' ); ?>
					    					
					    <?php endwhile; else : ?>

					    <?php endif; ?>

                        </div> <!-- end #body-content -->
                    
    
                        <div id="related-courses" class="large-12 medium-12 columns" role="">

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
                                    'key' => 'staff_member', // name of custom field
                                    'value' => '"' . get_the_ID() . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
                                    'compare' => 'LIKE'
                                )
                            )
                        ));

                        ?>
                        <?php if( $courses ): ?>
                        <div><h4>Courses</h4>
                        <?php foreach( $courses as $course ): ?>
                        <p>
                        <a href="<?php echo get_permalink( $course->ID ); ?>">

                        <?php echo get_the_title( $course->ID ); ?>
                        </a>
                        </p>

                        <?php endforeach; ?>
                        </div>
                        <?php endif; ?>

                        </article>

                        <?php endwhile; // end of the loop. ?>

                        <?php while ( have_posts() ) : the_post(); ?>

                        <article>

                        </div> <!-- end #related-courses -->

                        <div id="related-resources" class="large-12 medium-12 columns" role="">

                        <?php 

                    /*
                    *  Query posts for a relationship value.
                    *  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
                    */


                        $resources = get_posts(array(
                            'post_type' => 'resources',
                            'meta_query' => array(
                                array(
                                    'key' => 'staff_member', // name of custom field
                                    'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
                                    'compare' => 'LIKE'
                                )
                            )
                        ));

                        ?>

                        <?php if( $resources ): ?>
                        <div><h4>Resources</h4>
                        <?php foreach( $resources as $resource ): ?>

                        <p>
                        <a href="<?php echo get_permalink( $resource->ID ); ?>">

                        <?php echo get_the_title( $resource->ID ); ?>
                        </a>
                        </p>

                        <?php endforeach; ?>
                        </div>
                        <?php endif; ?>

                        </article>

                        <?php endwhile; // end of the loop. ?>

                        </div> <!-- end #related-resources -->
                                                 
			        </div> <!-- end #main -->
		
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>