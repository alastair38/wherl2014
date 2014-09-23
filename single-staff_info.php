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
    				
    				    <div id="body-content" class="large-8 medium-8 columns clearfix" role="main">

                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <?php get_template_part( 'partials/loop', 'dept' ); ?>
					    					
					    <?php endwhile; else : ?>

					    <?php endif; ?>
                    
                        <?php if($post->post_parent) {
    
    //  the_field($field_name, $post->post_parent)
    // this will get field values eg contact details from parent page / change $field_name as appropriate
    
                            $args = array(
                            'sort_order' => 'ASC',
                            'sort_column' => 'post_title',
                            'hierarchical' => 1,
                            'exclude' => $post->ID,
                            'child_of' => $post->post_parent,
                            'parent' => -1,
                            'offset' => 0,
                            'post_type' => 'staff_info',
                            'post_status' => 'publish'
                        ); 
                        $pages = get_pages($args); 
                        if ($pages){
                            echo "<h4>Staff Info</h4>";
                        }
                        foreach ($pages as $page){ ///content-partial here for related depts large-6
                            $thumbnail = get_the_post_thumbnail ($page->ID);
                            echo "<p><a href='$page->guid'>" . $page->post_title . "</a></p>";

                        }
                        }
                        else {
                            $args = array(
                            'sort_order' => 'ASC',
                            'sort_column' => 'post_title',
                            'hierarchical' => 1,
                            'child_of' => $post->ID,
                            'parent' => -1,
                            'offset' => 0,
                            'post_type' => 'staff_info',
                            'post_status' => 'publish'
                        ); 
                        $pages = get_pages($args); 
                        if ($pages){
                            echo "<h4>Staff Info</h4>";
                        }
                        foreach ($pages as $page){ ///content-partial here for related depts large-6
                            $thumbnail = get_the_post_thumbnail ($page->ID);
                            echo "<p><a href='$page->guid'>" . $page->post_title . "</a></p>";

                        }
                        }
                        ?>
                    
                        </div> <!-- end #body-content -->
                    
                        <div id="side" class="large-4 medium-4 columns first clearfix" role="aside">
 
                
                        <?php while ( have_posts() ) : the_post(); ?>
 
				        <article>
						
						<?php 
 
						/*
						*  Query posts for a relationship value.
						*  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
						*/

						$items = get_posts(array(
							'post_type' => 'staff',
							'orderby' => 'rand',
                            'posts_per_page' => 1
							)
						));
 
						?>
						<?php if( $items ): ?>
						
				        <div><h4>Featured Staff Member</h4>
				        <?php foreach( $items as $item ): ?>
								
                        <p>
                        <a href="<?php echo get_permalink( $item->ID ); ?>">

                        <?php echo get_the_title( $item->ID ); ?>

                        </a>

                        <?php echo get_the_post_thumbnail( $item->ID ); ?>
                        </p>
								
				        <?php endforeach; ?>
							</div>
						<?php endif; ?>
 
				        </article>
 
			            <?php endwhile; // end of the loop. ?>
 
                
                        <?php while ( have_posts() ) : the_post(); ?>

                        <?php $args = array(
                            'child_of'     => 0,
                            'sort_order'   => 'ASC',
                            'sort_column'  => 'post_title',
                            'hierarchical' => 1,
                            'exclude'      => ,
                            'include'      => ,
                            'meta_key'     => ,
                            'meta_value'   => ,
                            'authors'      => ,
                            'exclude_tree' => ,
                            'post_type' => 'staff'
                        );
                        wp_dropdown_pages( $args );
                        ?>
					
	                    <a href="<?php echo get_post_type_archive_link( 'staff' ); ?>">All Staff</a>			
        

                        </div> <!-- end #side -->
                         
                    </div> <!-- end #main -->                                                   

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>