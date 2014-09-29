<?php
/*
Template Name: People
*/
?>

<?php get_header(); ?>
        

			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-8 columns first clearfix" role="main">
				    
				<h1 class="people-title"><?php the_title(); ?></h1>

 
<?php get_template_part( 'partials/loop', 'people' ); ?>



	
                        </div><!-- end #main -->
    
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
