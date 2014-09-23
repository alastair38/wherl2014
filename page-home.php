<?php
/*
Template Name: Home Page (No Sidebar)
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">
				    
				        <div id="wrapper" class="row">
				    
                            <div id="home-body" class="large-7 medium-7 columns" role="">

                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                                <?php get_template_part( 'partials/loop', 'home' ); ?>

                            <?php endwhile; else : ?>

                            <?php wp_reset_postdata(); ?>

                            <?php endif; ?>

                            </div> <!-- end #home-body -->

                            <div id="home-news" class="large-5 medium-5 columns" role="">

                                <?php get_template_part( 'partials/loop', 'featured-news' );?>

                            </div> <!-- end #home-news -->
                            
                            <div id="main-pages" class="large-5 medium-5 columns" role="">

                                <?php get_template_part( 'partials/loop', 'featured-pages' );?>

                            </div> <!-- end #main-pages -->
                        
                        </div> <!-- end .row -->
                        
                        <div id="home-side" class="row" role="">
                        
                            <div id="dept-info" class="large-4 medium-4 columns" role="">
                            
                            <?php 

                            echo "<p>" . the_field("departments_text") . "</p>";
                            the_field("departments_link");
   
                            get_template_part( 'partials/loop', 'featured-depts' );
                            
                            ?> 

                            <p class="view-all"><a href="<?php echo get_post_type_archive_link( 'departments' ); ?>">All Departments</a></p>
                            
                            </div> <!-- end #dept-info -->
                            
                            <div id="courses-info" class="large-4 medium-4 columns" role="">
                            
                            <?php 

                            echo "<p>" . the_field("courses_text") . "</p>";
                            the_field(‘courses_link’);
  
                            get_template_part( 'partials/loop', 'featured-courses' );
                              
                            ?>    

                            <p class="view-all"><a href="<?php echo get_post_type_archive_link( 'courses' ); ?>">All Courses</a></p>
                            
                            </div> <!-- end #courses-info -->
                            
                               <div id="staff-info" class="large-4 medium-4 columns" role="">
                            
                            <?php 

                            echo "<p>" . the_field("staff_text") . "</p>";
                            the_field(‘courses_staff’);
  
                            get_template_part( 'partials/loop', 'featured-staff' );
                              
                            ?>    

                            <p class="view-all"><a href="<?php echo get_post_type_archive_link( 'staff' ); ?>">All Staff</a></p>
                            
                            </div> <!-- end #courses-info -->


                        </div> <!-- end #home-side -->
                        
                        <div id="home-lower" class="large-12 medium-12 columns" role="">


                        </div> <!-- end #home-lower -->
			
    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
