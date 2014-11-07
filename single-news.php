<?php get_header(); ?>
        

			
			<div id="content">
			
				<div id="inner-content" class="clearfix">
			
				    <div id="people" class="large-12 columns" role="main">
				        <div class="large-12 columns">
                          
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				    
				
				<div class="large-9 columns">
				<article>
				    
				<h1 class="event-title"><?php the_title(); ?></h1>
				<?php the_content();?>
				
				<?php endwhile; else : ?>

                <?php endif; ?> 
				    
				<?php get_template_part( 'partials/content', 'share' ); ?>		    
				    
				</article>
				
                </div>
                           
                            <div id="contact" class="large-3 small-12 columns clearfix">
                          <?php if( get_field('contact_name') ): ?>
                                    <div class="phone">Contact Options</div>
                                    <?php endif; ?> 
                            
                            <?php if( get_field('event_email') ): ?>
                                <div class="email"><i class="fi-mail"></i><a href="mailto:<?php the_field('event_email'); ?>">Email</a></div>
                            <?php endif; ?>
                            <?php if( get_field('event_twitter') ): ?>
                                <div class="twitter"><i class="fi-social-twitter"></i><a href="<?php the_field('event_twitter'); ?>">Twitter</a></div>
                            <?php endif; ?>
                            <?php if( get_field('event_phone') ): ?>
                                <div class="phone"><i class="fi-telephone"></i><?php the_field('event_phone'); ?></div>
                            <?php endif; ?>
                            <?php if( get_field('event_website') ): ?>
                                <div class="web"><i class="fi-web"></i><a href="<?php the_field('event_website'); ?>">Website</a></div>
                            <?php endif; ?>
                            
 <div class="single-thumbnail"><?php the_post_thumbnail('full'); ?>          </div>             
                             
                            </div>
                            
                           
             
                          
                          
                            
                        </div>
   
                   
 




	
                        </div><!-- end #main -->
    
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
