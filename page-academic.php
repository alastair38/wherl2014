<?php
/*
Template Name: Academic Team
*/
?>

<?php get_header(); ?>
        

			
			<div id="content">
			
				<div id="inner-content" class="clearfix">
			
				    <div id="main" class="large-12 columns clearfix" role="main">
				
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				    
				<h1 class="people-title"><?php the_title(); ?></h1>
				
				<?php the_content();?>
				
				<?php endwhile; else : ?>

                            

                <?php endif; ?>
				
				  <ul>
                            <?php 

                            $projects = get_field('work_project');

                            ?>
                            <?php if( $projects ): ?>

                                <?php foreach( $projects as $project ): ?>

                                        <li>Project: <a href="<?php echo get_permalink( $project->ID ); ?>">
                                            <?php echo get_the_title( $project->ID ); ?>
                                        </a></li>

                                <?php endforeach; ?>

                            <?php endif; ?>
                                </ul>

 
<?php get_template_part( 'partials/loop', 'people' ); ?>



	
                        </div><!-- end #main -->
    
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
